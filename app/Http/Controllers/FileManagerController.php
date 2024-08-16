<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use App\Http\Controllers\Auth;
use App\Models\File as FileModel ;
use App\Models\Folder;
use App\Models\User;
use App\Models\LightApp;
use App\Models\App;
use App\Models\RecycleBin;
use Illuminate\Support\Facades\DB;
use Firebase\JWT\JWT;


class FileManagerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
         $user = User::find(auth()->id());
        $this->username = ($user) ? $user->name : '';
    }

    public function index($path=null)
    {
        //$path = $path ? base64UrlDecode($path) : '/';
        $path = $path ? $path : '/';
        return view('filemanager',compact('path'));
    }
    
    public function recyclebin($path=null)
    {
        //$path = $path ? base64UrlDecode($path) : '/';
        $path = $path ? $path : '/';

        return view('filemanager',compact('path'));
    }
    public function editfile($fileid){
        $file = FileModel::find(base64UrlDecode($fileid));
        $secretKey = env('SECRETKEYJWT'); // Replace with your secret key
        $options = [];
        if($file){
        $fileExt = $file->extension;
        $fileName = $file->name;
        $fileUrl = URL::to('/files/' . base64UrlEncode($file->path));
        $token = $fileid;
        $user = User::find(auth()->id()); 
        $userName = "admin";
        if ($user) {
            $userName = $user->name; 
        }
        
            $payload = [
                'document' => [
                    'fileType' => $this->fileTypeAlias($fileExt),
                    'key' => $token,
                    'title' => $fileName,
                    // 'url' => $fileUrl,
                    'url'=>'https://desktop2.sizaf.com/stroage/app/root/Desktop/New File(1).docx',

                    'permissions' => [
                        'download' => true,
                        'edit' => true,
                        'print' => true,
                    ],
                    'version' => true,
                ],
                'documentType' => $this->getDocumentType($fileExt),
                'type' => 'desktop',
                'editorConfig' => [
                    'callbackUrl' => "",
                    'lang' => "en",
                    'mode' => 'edit',
                    'user' => [
                        'id' => auth()->id(),
                        'name' => $userName,
                    ],
                    'customization' => [
                        'autosave' => true,
                        'chat' => true,
                        'commentAuthorOnly' => true,
                        'comments' => true,
                        'compactHeader' => false,
                        'compactToolbar' => false,
                        'help' => false,
                        'toolbarNoTabs' => true,
                        'hideRightMenu' => true,
                    ],
                ],
                'height' => "100%",
                'width' => "100%",
                'iat' => time(), // Issued at time
                'exp' => time() + 3600 // Expiration time
            ];
            
            $jwt = JWT::encode($payload, $secretKey,'HS256');
            
            $options = [
                'document' => [
                    'fileType' => $this->fileTypeAlias($fileExt),
                    'key' => $token,
                    'title' => $fileName,
                    // 'url' => $fileUrl,
                    'url'=>'https://desktop2.sizaf.com/stroage/app/root/Desktop/New File(1).docx',
                    'permissions' => [
                        'download' => true,
                        'edit' => true,
                        'print' => true,
                    ],
                    'version' => true,
                ],
                'documentType' => $this->getDocumentType($fileExt),
                'type' => 'desktop',
                'editorConfig' => [
                    'callbackUrl' => "",
                    'lang' => "en",
                    'mode' => 'edit',
                    'user' => [
                        'id' => auth()->id(),
                        'name' => $userName,
                    ],
                    'customization' => [
                        'autosave' => true,
                        'chat' => true,
                        'commentAuthorOnly' => true,
                        'comments' => true,
                        'compactHeader' => false,
                        'compactToolbar' => false,
                        'help' => false,
                        'toolbarNoTabs' => true,
                        'hideRightMenu' => true,
                    ],
                ],
                'height' => "100%",
                'width' => "100%",
                'token' => $jwt // Include the generated JWT token here
            ];
        
        }
        return view('editor',compact('options'));
    }
    public function createFolder(Request $request){
        $filemanager = App::where('name','Filmanager')->where('status',1)->first();;
        $parentFolder = base64UrlDecode($request->input('parentFolder'));
        $childFolder = 'New Folder';
        $parentFolderPath = Storage::disk('root')->path($parentFolder);    
        $childFolderPath = $parentFolderPath . '/' . $childFolder;
        $actualpath = $parentFolder.'/'.$childFolder;
        if (!File::exists($parentFolderPath)) {
            return response()->json(['status' => false, 'message' => 'Path does not exist.']);
        }
    
        $counter = 1;
        $originalChildFolderPath = $childFolderPath;
    
        // Check if the child folder already exists and append a number if necessary
        while (File::exists($childFolderPath)) {
            $childFolderPath = $originalChildFolderPath . ' (' . $counter . ')';
            $actualpath = $parentFolder.'/'.$childFolder. ' (' . $counter . ')';;
            $counter++;
        }
    
        
        $newFolder = new Folder();
        $newFolder->name = basename($childFolderPath);
        $newFolder->parentpath = $parentFolder;
        $newFolder->path = $actualpath;
        $newFolder->openwith = ($filemanager) ? $filemanager->id : '';
        $newFolder->sort_order = 0; // Adjust as needed
        $newFolder->status = 1; // Assuming 1 means active
        $newFolder->created_by = auth()->id(); // Assuming you want to save the ID of the authenticated user
        if ($newFolder->save()) {
            File::makeDirectory($childFolderPath, 0755, true);
        }
       
    
        return response()->json(['status' => true,'message' => 'Folder sucessfully created', 'folderName' => basename($childFolderPath)]);

    }
    
    
    public function createFile(Request $request)
    {
        $fileatype = $request->input('filetype');
        $destinationParentPath = base64UrlDecode($request->input('destination')); // 
        $destinationPath = Storage::disk('root')->path($destinationParentPath);
        $sourcePath = Storage::disk('public')->path('newfile.'.$fileatype);
        $newFileName = 'New File.'.$fileatype;
        $actualpath = $destinationParentPath.'/'.$newFileName;
        $count = 1;
        $destinationfPath = $destinationPath.'/'.$newFileName;
        while (file_exists($destinationfPath)) {
            $newFileName = 'New File('.($count).').'.$fileatype;
            $destinationfPath = $destinationPath.'/'.$newFileName;
            $actualpath = $destinationParentPath.'/'.$newFileName;
            $count++;
        }
        
        if($fileatype=='pptx'){
            $checkapp = 'PPT';
        }else if( $fileatype=='xlsx'){
            $checkapp = 'EXCEL';
        }else{
            $checkapp = 'Docx';
        }
        $lightapp = LightApp::where('name',$checkapp)->where('status',1)->first();
        if (copy($sourcePath, $destinationfPath)) {
            $filetype = $this->getFiletype($destinationfPath);
            $newFile = new FileModel();
            //$newFile->folder = $destinationParentPath;
            $newFile->name = $newFileName;
            $newFile->extension = $fileatype;
            $newFile->filetype = $filetype;
            $newFile->parentpath = $destinationParentPath;
            $newFile->path = $actualpath;
            $newFile->openwith = ($lightapp) ? $lightapp->id : '';
            $newFile->status = 1; // Assuming 1 means active
            $newFile->created_by = auth()->id(); // Assuming you want to save the ID of the authenticated user
            // if(copy($sourcePath, $destinationfPath)){
                $newFile->save();
            //} 
            return response()->json(['status' => true, 'message' => 'File sucessfully created','fileName' => basename($destinationfPath)]);

        }
        return response()->json(['status' => false, 'message' => 'Path does not exist']);

    }
    
     public function pathfiledetail(Request $request){
         // Get the updated app list HTML
            $filepath = base64UrlDecode($request->input('path'));
            $parentPath = empty($filepath) ? '/' : $filepath ; // Adjust this path as needed
            $defaultfolders = array();
            $folders = array();
            $files = array();
            if($filepath != 'RecycleBin'){
                $defaultfolders = App::where('parentpath',$parentPath)->where('filemanager_display', 1)->where('status', 1)->orderBy('name')->get();
                $folders = Folder::where('parentpath', $parentPath)->where('status', 1)->where('created_by', auth()->id())->get();
                $files = FileModel::where('parentpath', $parentPath)->where('status', 1)->where('created_by', auth()->id())->get();
            }else{
                $folders = RecycleBin::where('tablename', 'folder')->where('file_created_by', auth()->id())->get();
                $files = RecycleBin::where('tablename', 'file')->where('file_created_by', auth()->id())->get();
            }
            $html = view('appendview.pathview')->with('folders', $folders)->with('defaultfolders', $defaultfolders)->with('files', $files)->render();
        return response()->json(['html' => $html]);

    }
    
   public function upload(Request $request)
    {
        $uploadDirectorypath = $request->header('Upload-Directory');

        $uploadedFiles = [];
        $uploadDirectory =  Storage::disk('root')->path($uploadDirectorypath); // Directory to store uploaded files
    
        // Create the directory if it doesn't exist
        if (!file_exists($uploadDirectory)) {
            mkdir($uploadDirectory, 0755, true);
        }
    
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $originalName = $file->getClientOriginalName();
                $filePath = $uploadDirectory . DIRECTORY_SEPARATOR . $originalName;
                $actualpath = $uploadDirectorypath . DIRECTORY_SEPARATOR . $originalName;
                $fileExtension = pathinfo($originalName, PATHINFO_EXTENSION);
                // Check if file with same name already exists
                $count = 1;
                while (file_exists($filePath)) {
                    $fileName = pathinfo($originalName, PATHINFO_FILENAME);
                    $fileExtension = pathinfo($originalName, PATHINFO_EXTENSION);
                    $originalName = $fileName . " ($count)." . $fileExtension;
                    $filePath = $uploadDirectory . DIRECTORY_SEPARATOR . $originalName;
                    $actualpath = $uploadDirectorypath . DIRECTORY_SEPARATOR . $originalName;
                    $count++;
                }
    
                // Move the file to the upload directory
                if (move_uploaded_file($file->getPathname(), $filePath)) {
                    $filetype = $this->getFiletype($filePath);
                    $newFile = new FileModel();
                    $newFile->folder = $uploadDirectorypath;
                    $newFile->name = $originalName;
                    $newFile->extension = $fileExtension;
                    $newFile->filetype = $filetype;
                    $newFile->parentpath = $uploadDirectorypath;
                    $newFile->path = $actualpath;
                    $newFile->status = 1; // Assuming 1 means active
                    $newFile->created_by = auth()->id(); // Assuming you want to save the ID of the authenticated user
                    if ($newFile->save()) {
                    
                        $uploadedFiles[] = [
                            'name' => $originalName,
                            'size' => $file->getSize()
                        ];
                    }
                }
            }
        }
    
        return response()->json(['files' => $uploadedFiles]);
    }

    
    
    public function copyFile(Request $request)
    {
        $file = array('filepath'=>$request->filepath,'type'=>$request->type,'filekey'=>$request->filekey,'filetype'=>$request->filetype);
         Session::put('copyfilepath', $file);

        return response()->json(['message' => 'File '.$request->type.' successfully!', 'file_path' => $request->filepath,'status'=>true]);
    }

    public function pasteFile(Request $request)
    { 
        $destination = base64UrlDecode($request->path);
        
        if(Session::has('copyfilepath')){
              $sessionarr = Session::get('copyfilepath');
              $activefiletype = $sessionarr['filetype'];
              $id = base64UrlDecode($sessionarr['filekey']);
              $sourcepath = base64UrlDecode($sessionarr['filepath']);
              $destinationPath = Storage::disk('root')->path($destination);
              $sourcePath = Storage::disk('root')->path($sourcepath);
              //print_r($sourcepath);exit;
              if (file_exists($sourcePath)) {
                  $filename = pathinfo($sourcePath, PATHINFO_BASENAME);
                          if($sessionarr['type'] == 'copy'){
                            $newFileName = File::name($filename).' - Copy';
                            $count = 1;
                            $destinationfile = $destination.'/'.$newFileName;
                            $destinationPath = $destinationPath.'/'.$newFileName;
                            while (file_exists($destinationPath)) {
                               
                                $newFileName = File::name($filename).' - copy ('.($count).')';
                                $destinationfile = $destination.'/'.$newFileName;
                                $destinationPath = $destinationPath.'/'.$newFileName;
                                $count++;
                            }
                            if($activefiletype !='folder'){
                                $newFileName = '.'.File::extension($filename);
                                $copyfiles = Storage::disk('root')->copy($sourcepath, $destinationfile);
                            }else{
                                $newFileName = $newFileName;
                                $copyfiles = File::copyDirectory($sourcePath, $destinationPath);

                            }
                            if($copyfiles){
                            //if (copy($sourcePath, $destinationPathname)) {
                                $fileatype = pathinfo($sourcePath, PATHINFO_EXTENSION);
                                 if($activefiletype !='folder'){
                                        if($fileatype=='pptx'){
                                            $checkapp = 'PPT';
                                        }else if( $fileatype=='xlsx'){
                                            $checkapp = 'EXCEL';
                                        }else{
                                            $checkapp = 'Docx';
                                        }
                                    $lightapp = LightApp::where('name',$checkapp)->where('status',1)->first();;
                                    $filetype = File::extension($filename);
                                    $newFile = new FileModel();
                                    $newFile->name = $newFileName;
                                    $newFile->extension = $fileatype;
                                    $newFile->filetype = $filetype;
                                    $newFile->parentpath = $destination;
                                    $newFile->path = $destination.'/'.$newFileName;
                                    $newFile->openwith = ($lightapp) ? $lightapp->id : '';
                                    $newFile->status = 1; // Assuming 1 means active
                                    $newFile->created_by = auth()->id(); 
                                    $newFile->save();
                                 }else{
                                        $filemanager = App::where('name','Filmanager')->where('status',1)->first();
                                        $newFolder = new Folder();
                                        $newFolder->name = $newFileName;
                                        $newFolder->parentpath = $destination;
                                        $newFolder->path = $destination.'/'.$newFileName;
                                        $newFolder->openwith = ($filemanager) ? $filemanager->id : '';
                                        $newFolder->sort_order = 0; // Adjust as needed
                                        $newFolder->status = 1; // Assuming 1 means active
                                        $newFolder->created_by = auth()->id(); 
                                        $newFolder->save();
                                        $folderallfiles = FileModel::where('parentpath', $sourcepath)->get();
                                        if ($folderallfiles->isNotEmpty()) {
                                            foreach ($folderallfiles as $allfiles) {
                                                $newRow = $allfiles->replicate(); 
                                                $newRow->parentpath = $destination.'/'.$newFileName;
                                                $newRow->path = $destination.'/'.$newFileName.$allfiles->name;
                                                $newRow->created_at = now();
                                                $newRow->save();
                                            }
                                        
                                        }
                                 }
                                
                                return response()->json(['message'=>'Pasted Successfully','status' => true]);
                    
                            }else{
                                return response()->json(['message' => 'Failed to paste!','status'=>false]);

                            }
                        }else{
                            
                            if(rename($sourcePath, $destinationPath)) {
                                if($activefiletype !='folder'){
                                    FileModel::where('id', $id)->update([
                                        'path' => $destination.'/'.basename($sourcePath),
                                        'parentpath' => $destination,
                                    ]);
                                }else{
                                    Folder::where('id', $id)->update([
                                        'path' => $destination.'/'.basename($sourcePath),
                                        'parentpath' => $destination,
                                    ]);
                                }
                                return response()->json(['message'=>'Pasted Successfully','status' => true]);
                            }
                        }
                  
              }
              
        }

        return response()->json(['message' => 'Failed to paste file!','status'=>false]);
    }
    
    
    public function downloadFile($id)
    {
        $id = base64UrlDecode($id);
        $file = FileModel::findOrFail($id);
        $filePath = Storage::disk('root')->path($file->path);
        $fileName = basename($filePath);
        return response()->download($filePath, $fileName,['Content-Disposition' => 'attachment']);
    }
    
    public function renameFile(Request $request){
         

        $type = $request->input('filetype');
       
        $id = base64UrlDecode($request->input('filekey'));
        $newName = $request->input('name');
        if(empty($newName)){
             return response()->json(['message' => 'Please enter something to rename.','status'=>false]);
        }else{

        if ($type != 'folder') {
            $exists = FileModel::where('name', $newName)->exists();
            if ($exists) {
                return response()->json(['message' => 'A file with this name already exists.','status'=>false]);
            }
            
            $file = FileModel::findOrFail($id);
            if($file){
                $destination = $file->path;
                $destinationPath = Storage::disk('root')->path($destination);
                $sourcePath = Storage::disk('root')->path($file->parentpath);
                $fileExtension = pathinfo($destinationPath, PATHINFO_EXTENSION);
                if(rename($destinationPath, $sourcePath.'/'.$newName.'.'.$fileExtension)) {
                    $file->name = $newName.'.'.$fileExtension;
                    $file->path = $file->parentpath.'/'.$newName.'.'.$fileExtension;
                    $file->save();
                }
            }
        } else{
            $exists = Folder::where('name', $newName)->exists();
            if ($exists) {
                return response()->json(['message' => 'A folder with this name already exists.','status'=>false]);
            }

             $folder = Folder::findOrFail($id);
             $destination = $folder->path;
             $destinationPath = Storage::disk('root')->path($destination);
             $sourcePath = Storage::disk('root')->path($folder->parentpath);
             if(rename($destinationPath, $sourcePath.'/'.$newName)) {
                $folder->name = $newName;
                $folder->path = $folder->parentpath.'/'.$newName;
                $folder->save();
             }
        }
    }

        return response()->json(['message' => 'Renamed successfully.','status'=>true]);

        
    }
    
     public function deleteFile(Request $request){
         
         // Assume the condition value is passed as a request parameter
        $type = $request->input('filetype');
        $id = base64UrlDecode($request->input('filekey')); 
        if ($type != 'folder') {
            $file = FileModel::where('id', $id)->get();
            if($file){
                $transformedData = $file->map(function ($item) {
                    return [
                        'folder' => $item->folder,
                        'name' => $item->name,
                        'extension' => $item->extension,
                        'filetype' => $item->filetype,
                        'parentpath' => $item->parentpath,
                        'path' => $item->path,
                        'openwith' => $item->openwith,
                        'tablename' => 'file',
                        'file_created_by' => $item->created_by,
                        'created_by' => auth()->id(),
                        'file_created_at' => $item->created_at,
                        'file_updated_at' => $item->updated_at,
                    ];
                });
            }
        }else{
            
             $file = Folder::where('id', $id)->get();
            if($file){
                $transformedData = $file->map(function ($item) {
                    return [
                        'name' => $item->name,
                        'parentpath' => $item->parentpath,
                        'path' => $item->path,
                        'openwith' => $item->openwith,
                        'tablename' => 'folder',
                        'file_created_by' => $item->created_by,
                        'created_by' => auth()->id(),
                        'file_created_at' => $item->created_at,
                        'file_updated_at' => $item->updated_at,
                    ];
                });
              }
            }

        $deleteddata = RecycleBin::insert($transformedData->toArray());
        if($deleteddata){
            if($type!="folder"){
                FileModel::where('id', $id)->delete();
            }else{
                Folder::where('id', $id)->delete();
            }
            return response()->json(['message' => 'File deleted Successfully','status'=>true]);

        }else{
            return response()->json(['message' => 'Something went wrong try again','status'=>false]);

        }

     }
    
    private function getDocumentType($ext) {
        $ExtsDoc = array("doc", "docm", "docx", "dot", "dotm", "dotx", "epub", "fodt", "ott", "htm", "html", "mht", "odt", "pdf", "rtf", "txt", "djvu", "xps");
        $ExtsPre = array("fodp", "odp", "pot", "potm", "potx", "pps", "ppsm", "ppsx", "ppt", "pptm", "pptx", "otp");
        $ExtsSheet = array("xls", "xlsx", "xltx", "ods", "ots", "csv", "xlt", "xltm", "fods");
        if (in_array($ext,$ExtsDoc)) {
            return "word";
        } elseif (in_array($ext,$ExtsPre)) {
            return "presentation";
        } elseif (in_array($ext,$ExtsSheet)) {
            return "spreadsheet";
        } else {
            return "undefined";
        }
    }
    
    private function fileTypeAlias($ext) {
        if (strpos(".docm.dotm.dot.wps.wpt",'.'.$ext) !== false) {
            $ext = 'doc';
        } else if (strpos(".xlt.xltx.xlsm.dotx.et.ett",'.'.$ext) !== false) {
            $ext = 'xls';
        } else if (strpos(".pot.potx.pptm.ppsm.potm.dps.dpt",'.'.$ext) !== false) {
            $ext = 'ppt';
        }
        return $ext;
    }
    
    private function getFiletype($file){
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $file);
        finfo_close($finfo);
        
        // Get the first word of the MIME type
        $mimeParts = explode('/', $mime);
        return $mimeParts[0];
    }
    
    public function moveFolder()
    {
        $sourcePath = storage_path('app/source_folder'); // Adjust the source path as needed
        $destinationPath = storage_path('app/destination_folder'); // Adjust the destination path as needed

        // Check if the source folder exists
        if (File::exists($sourcePath)) {
            // Move the folder
            File::moveDirectory($sourcePath, $destinationPath);
            return response()->json(['message' => 'Folder moved successfully']);
        } else {
            return response()->json(['message' => 'Source folder does not exist'], 404);
        }
    }
    
    public function getFileSize($filePath)
    {
        if (File::exists($filePath)) {
            $size = File::size($filePath);
            return response()->json(['size' => $size]);
        } else {
            return response()->json(['message' => 'File does not exist'], 404);
        }
    }
    
    
    public function getDirectorySize($directoryPath)
    {
        if (File::exists($directoryPath)) {
            $size = $this->folderSize($directoryPath);
            return response()->json(['size' => $size]);
        } else {
            return response()->json(['message' => 'Directory does not exist'], 404);
        }
    }

    private function folderSize($directory)
    {
        $size = 0;
        foreach (File::allFiles($directory) as $file) {
            $size += $file->getSize();
        }
        return $size;
    }
    
}
