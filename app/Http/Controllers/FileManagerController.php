<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Filefunctions;
use App\Models\File as FileModel;
use App\Models\User;
use App\Models\LightApp;
use App\Models\ContextType;
use App\Models\App;
use App\Models\RecycleBin;
use App\Helpers\PermissionHelper;
use Illuminate\Support\Facades\DB;




class FileManagerController extends Controller
{
    protected $filefunctions;
    public function __construct(Filefunctions $filefunctions)
    {
        $this->filefunctions = $filefunctions;
        $this->middleware('auth');
        $user = User::find(auth()->id());
        $this->username = ($user) ? $user->name : '';
    }

    public function index($path = null)
    {
        $filteredPermissions = PermissionHelper::getFilteredPermissions(auth()->id());
        //$path = $path ? base64UrlDecode($path) : '/';

        $contextTypes = ContextType::with(['contextOptions' => function ($query) {
            $query->orderBy('sort_order', 'asc'); // Sort options by sort_order
        }])
            ->where('display_header', 1)
            ->where('function', 'createFileFunction')
            ->orderBy('sort_order', 'asc') // Sort context types by sort_order
            ->get();

        $resizecontextTypes = ContextType::with(['contextOptions' => function ($query) {
            $query->orderBy('sort_order', 'asc'); // Sort options by sort_order
        }])
            ->where('display_header', 1)
            ->where('function', 'resizeFunction')
            ->orderBy('sort_order', 'asc') // Sort context types by sort_order
            ->get();

        $sortcontextTypes = ContextType::with(['contextOptions' => function ($query) {
            $query->orderBy('sort_order', 'asc'); // Sort options by sort_order
        }])
            ->where('display_header', 1)
            ->where('function', 'sortFunction')
            ->orderBy('sort_order', 'asc') // Sort context types by sort_order
            ->get();
        $path = $path ? $path : '/';

        return view('filemanager', compact('path', 'contextTypes', 'resizecontextTypes', 'sortcontextTypes', 'filteredPermissions'));
    }

    public function recyclebin($path = null)
    {
        //$path = $path ? base64UrlDecode($path) : '/';
        $path = $path ? $path : '/';

        return view('filemanager', compact('path'));
    }
    public function editfile($fileid)
    {
        $file = FileModel::find(base64UrlDecode($fileid));
        $options = [];
        if ($file) {
            $fileExt = $file->extension;
            $fileName = $file->name;
            // $callbackUrl = route('savedocument');
            $fileUrl = url(Storage::url('app/root/' . $file->path));
            $token = $file->filehash;
            $user = User::find(auth()->id());
            $userName = "admin";
            if ($user) {
                $userName = $user->name;
            }

            $options = [
                'document' => [
                    'fileType' => $this->filefunctions->fileTypeAlias($fileExt),
                    'key' => $token,
                    'title' => $fileName,
                    'url' => $fileUrl,
                    'permissions' => [
                        'download' => true,
                        'edit' => true,
                        'print' => true,
                    ],
                    'version' => true,
                ],
                'documentType' => $this->filefunctions->getDocumentType($fileExt),
                'type' => 'desktop',
                'editorConfig' => [
                    'callbackUrl' => '',
                    'lang' => "en",
                    'mode' => 'edit',
                    'user' => [
                        'id' => auth()->id(),
                        'name' => $userName,
                    ],
                    'customization' => [
                        'autosave' => true,
                        'chat' =>  true,
                        'commentAuthorOnly' => true,
                        'comments' =>  true,
                        'compactHeader' => false,
                        'compactToolbar' => false,
                        'help' =>  false,
                        'toolbarNoTabs' => true,
                        'hideRightMenu' => true,
                    ],
                ],
                'height' => "100%",
                'width' => "100%"
            ];
        }
        return view('editor', compact('options'));
    }
    public function createFolder(Request $request)
    {
        $filemanager = App::where('name', 'Filmanager')->where('status', 1)->first();;
        $parentFolder = base64UrlDecode($request->input('parentFolder'));
        $childFolder = 'New Folder';
        $parentFolderPath = Storage::disk('root')->path($parentFolder);
        $childFolderPath = $parentFolderPath . '/' . $childFolder;
        $actualpath = $parentFolder . '/' . $childFolder;
        if (!File::exists($parentFolderPath)) {
            return response()->json(['status' => false, 'message' => 'Path does not exist.']);
        }

        $counter = 1;
        $originalChildFolderPath = $childFolderPath;

        // Check if the child folder already exists and append a number if necessary
        while (File::exists($childFolderPath)) {
            $childFolderPath = $originalChildFolderPath . ' (' . $counter . ')';
            $actualpath = $parentFolder . '/' . $childFolder . ' (' . $counter . ')';;
            $counter++;
        }


        $newFolder = new FileModel();
        $newFolder->folder = 1;
        $newFolder->extension = 'Absolute';
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


        return response()->json(['status' => true, 'message' => 'Folder sucessfully created', 'folderName' => basename($childFolderPath)]);
    }

    public function createFile(Request $request)
    {
        $fileatype = $request->input('filetype');
        $destinationParentPath = base64UrlDecode($request->input('destination')); // 
        $resultarr = $this->filefunctions->createNewFile($fileatype, $destinationParentPath);
        if ($resultarr) {
            return response()->json(['status' => true, 'message' => 'File sucessfully created', 'fileName' => $resultarr['filename'], 'filekey' => $resultarr['filekey']]);
        } else {
            return response()->json(['status' => false, 'message' => 'Path does not exist']);
        }
    }

    public function pathfiledetail(Request $request)
    {
        //get user name
        $user = User::find(auth()->id());
        $userName = "";
        if ($user) {
            $userName = $user->name;
        }

        //file path details
        $filepath = base64UrlDecode($request->input('path'));
        $parentPath = empty($filepath) ? '/' : $filepath;
        $defaultfolders = array();
        $files = array();
        $sortby = !empty($request->input('sort_by')) ? $request->input('sort_by') : 'name';
        $sortorder = !empty($request->input('sort_order')) ? $request->input('sort_order') : 'asc';
        $sortsession = ['sortby' => $sortby, 'sortorder' => $sortorder];
        Session::put('sortfiles', $sortsession);
        $sortsessionorder = (Session::has('sortfiles')) ? Session::get('sortfiles') : ['sortby' => 'name', 'sortorder' => 'asc'];
        if ($filepath != 'RecycleBin') {
            $defaultfolders = App::where('parentpath', $parentPath)->where('filemanager_display', 1)->where('status', 1)->orderBy('name')->get();
            $files = FileModel::where('parentpath', $parentPath)->where('status', 1)->where('created_by', auth()->id())->orderBy($sortsessionorder['sortby'], $sortsessionorder['sortorder'])->get();
        } else {
            $files = FileModel::where('status', 0)->where('created_by', auth()->id())->orderBy($sortsessionorder['sortby'], $sortsessionorder['sortorder'])->get();
        }

        // Calculate sizes for files and convert them
        foreach ($files as $file) {
            $file->size = convertSizeToReadableFormat($file->size); //convertSizeToReadableFormat fron config folder -> commonfunction file
        }

        // Grouping parent paths and calculating total size
        $parentPathSize = FileModel::select('parentpath', DB::raw('SUM(size) as total_size'))
            ->groupBy('parentpath')
            ->get();

        //check view list
        if ($request->input('list') == 1) {
            $html = view('appendview.listview')->with('defaultfolders', $defaultfolders)->with('files', $files)->with('userName', $userName)->with('parentPathSize', $parentPathSize)->render();
        } elseif ($request->input('list') == 2) {
            $html = view('appendview.detailsview')->with('defaultfolders', $defaultfolders)->with('files', $files)->with('userName', $userName)->with('parentPathSize', $parentPathSize)->render();
        } else {
            $html = view('appendview.pathview')->with('defaultfolders', $defaultfolders)->with('files', $files)->render();
        }
        return response()->json(['html' => $html, 'parentPath' => $parentPath]);
    }



    public function upload(Request $request)
    {
        $uploadDirectorypath = base64UrlDecode($request->header('Upload-Directory'));

        $uploadedFiles = [];
        $uploadDirectory =  Storage::disk('root')->path($uploadDirectorypath); // Directory to store uploaded files

        if (!file_exists($uploadDirectory)) {
            mkdir($uploadDirectory, 0755, true);
        }

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $originalName = $file->getClientOriginalName();
                $filePath = $uploadDirectory . DIRECTORY_SEPARATOR . $originalName;
                $actualpath = $uploadDirectorypath . DIRECTORY_SEPARATOR . $originalName;
                $fileExtension = pathinfo($originalName, PATHINFO_EXTENSION);
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
                    $checkapp = checkLightApp($fileExtension);
                    $lightapp = LightApp::where('name', $checkapp)->where('status', 1)->first();
                    $lightapp = empty($lightapp) ? App::where('name', $checkapp)->where('status', 1)->first() : $lightapp;
                    $filetype = $this->filefunctions->getFiletype($filePath);
                    $newFile = new FileModel();
                    $newFile->name = $originalName;
                    $newFile->extension = $fileExtension;
                    $newFile->filetype = $filetype;
                    $newFile->parentpath = $uploadDirectorypath;
                    $newFile->path = $actualpath;
                    $newFile->filehash = md5(date('d-M-Y H:i:s'));
                    $newFile->openwith = ($lightapp) ? $lightapp->id : '';
                    $newFile->size = $file->getSize();
                    $newFile->status = 1; // Assuming 1 means active
                    $newFile->created_by = auth()->id();
                    if ($newFile->save()) {

                        $uploadedFiles[] = [
                            'name' => $originalName,
                            'size' => $file->getSize(),
                            'path' => $actualpath
                        ];
                    }
                }
            }
        }

        return response()->json(['files' => $uploadedFiles]);
    }



    public function copyFile(Request $request)
    {
        $file = array('filepath' => $request->filepath, 'type' => $request->type, 'filekey' => $request->filekey, 'filetype' => $request->filetype);
        Session::put('copyfilepath', $file);

        return response()->json(['message' => 'File ' . $request->type . ' successfully!', 'file_path' => $request->filepath, 'status' => true]);
    }

    public function pasteFile(Request $request)
    {
        $destination = base64UrlDecode($request->path);

        if (Session::has('copyfilepath')) {
            $sessionarr = Session::get('copyfilepath');
            $activefiletype = $sessionarr['filetype'];
            $id = base64UrlDecode($sessionarr['filekey']);
            $sourcepath = base64UrlDecode($sessionarr['filepath']);
            $destinationPath = Storage::disk('root')->path($destination);
            $sourcePath = Storage::disk('root')->path($sourcepath);
            $renamesource = storage_path('root/' . $destination);
            $renamedestination = storage_path('root/' . $destination);
            //print_r($sourcepath);exit;
            if (file_exists($sourcePath)) {
                $filename = pathinfo($sourcePath, PATHINFO_BASENAME);
                if ($sessionarr['type'] == 'copy') {
                    $newFileName = File::name($filename) . ' - Copy';
                    $count = 1;
                    $destinationfile = $destination . '/' . $newFileName;
                    $destinationPath = $destinationPath . '/' . $newFileName;
                    while (file_exists($destinationPath)) {

                        $newFileName = File::name($filename) . ' - copy (' . ($count) . ')';
                        $destinationfile = $destination . '/' . $newFileName;
                        $destinationPath = $destinationPath . '/' . $newFileName;
                        $count++;
                    }
                    if ($activefiletype != 'folder') {
                        $newFileName = $newFileName . '.' . File::extension($filename);
                        $copyfiles = Storage::disk('root')->copy($sourcepath, $destinationfile . '.' . pathinfo($sourcepath, PATHINFO_EXTENSION));
                    } else {
                        $newFileName = $newFileName;
                        $copyfiles = File::copyDirectory($sourcePath, $destinationPath);
                    }
                    if ($copyfiles) {
                        //if (copy($sourcePath, $destinationPathname)) {
                        $fileatype = pathinfo($sourcePath, PATHINFO_EXTENSION);
                        if ($activefiletype != 'folder') {
                            if ($fileatype == 'pptx') {
                                $checkapp = 'PPT';
                            } else if ($fileatype == 'xlsx') {
                                $checkapp = 'EXCEL';
                            } else {
                                $checkapp = 'Docx';
                            }
                            $lightapp = LightApp::where('name', $checkapp)->where('status', 1)->first();;
                            $filetype = File::extension($filename);
                            $newFile = new FileModel();
                            $newFile->name = $newFileName;
                            $newFile->extension = $fileatype;
                            $newFile->filetype = $filetype;
                            $newFile->parentpath = $destination;
                            $newFile->path = $destination . '/' . $newFileName;
                            $newFile->openwith = ($lightapp) ? $lightapp->id : '';
                            $newFile->status = 1; // Assuming 1 means active
                            $newFile->created_by = auth()->id();
                            $newFile->save();
                        } else {
                            $filemanager = App::where('name', 'Filmanager')->where('status', 1)->first();
                            $newFolder = new FileModel();
                            $newFolder->folder = 1;
                            $newFolder->extension = 'folder';
                            $newFolder->name = $newFileName;
                            $newFolder->parentpath = $destination;
                            $newFolder->path = $destination . '/' . $newFileName;
                            $newFolder->openwith = ($filemanager) ? $filemanager->id : '';
                            $newFolder->sort_order = 0; // Adjust as needed
                            $newFolder->status = 1; // Assuming 1 means active
                            $newFolder->created_by = auth()->id();
                            $newFolder->save();
                            $folderallfiles = FileModel::where('parentpath', $sourcepath)->get();
                            if ($folderallfiles->isNotEmpty()) {
                                foreach ($folderallfiles as $allfiles) {
                                    $newRow = $allfiles->replicate();
                                    $newRow->parentpath = $destination . '/' . $newFileName;
                                    $newRow->path = $destination . '/' . $newFileName . $allfiles->name;
                                    $newRow->created_at = now();
                                    $newRow->save();
                                }
                            }
                        }

                        return response()->json(['message' => 'Pasted Successfully', 'status' => true]);
                    } else {
                        return response()->json(['message' => 'Failed to paste!', 'status' => false]);
                    }
                } else {

                    if (rename($sourcePath, $destinationPath . '/' . basename($sourcePath))) {
                        FileModel::where('id', $id)->update([
                            'path' => $destination . '/' . basename($sourcePath),
                            'parentpath' => $destination,
                        ]);

                        return response()->json(['message' => 'Pasted Successfully', 'status' => true]);
                    }
                }
            }
        }

        return response()->json(['message' => 'Failed to paste file!', 'status' => false]);
    }


    public function downloadFile($id)
    {
        $id = base64UrlDecode($id);
        $file = FileModel::findOrFail($id);
        $filePath = Storage::disk('root')->path($file->path);
        $fileName = basename($filePath);
        return response()->download($filePath, $fileName, ['Content-Disposition' => 'attachment']);
    }

    public function renameFile(Request $request)
    {
        $type = $request->input('filetype');

        $id = base64UrlDecode($request->input('filekey'));
        $newName = $request->input('name');
        if (empty($newName)) {
            return response()->json(['message' => 'Please enter something to rename.', 'status' => false]);
        } else {

            $exists = FileModel::where('name', $newName)->exists();
            if ($exists) {
                return response()->json(['message' => 'A file with this name already exists.', 'status' => false]);
            }

            $file = FileModel::findOrFail($id);
            if ($file) {
                $destination = $file->path;
                $destinationPath = Storage::disk('root')->path($destination);
                $sourcePath = Storage::disk('root')->path($file->parentpath);
                if ($type != 'folder') {
                    $fileExtension = pathinfo($destinationPath, PATHINFO_EXTENSION);
                    $newfileextension  = pathinfo($newName, PATHINFO_EXTENSION);
                    $finalname = ($newfileextension) ? $newName : $newName . '.' . $fileExtension;
                    if (rename($destinationPath, $sourcePath . '/' . $finalname)) {
                        $file->name = $finalname;
                        $file->path = $file->parentpath . '/' . $finalname;
                        $file->save();
                    }
                } else {
                    if (rename($destinationPath, $sourcePath . '/' . $newName)) {
                        $file->name = $newName;
                        $file->path = $file->parentpath . '/' . $newName;
                        $file->save();
                    }
                }
            }
        }

        return response()->json(['message' => 'Renamed successfully.', 'status' => true]);
    }

    public function deleteFile(Request $request)
    {

        $fileKey = base64UrlDecode($request->input('filekey'));

        $file = FileModel::find($fileKey);
        if (!$file) {
            return response()->json(['message' => 'File not found', 'status' => false]);
        }

        $file->status = 0;
        $file->save();

        $currentPath = 'root/' . $file->path;
        $recycleBinPath = 'root/RecycleBin/';
        $newFileName = $fileKey . '-' . $file->name;

        try {
            if (Storage::exists($currentPath)) {
                Storage::move($currentPath, $recycleBinPath . $newFileName);
            } else {
                return response()->json(['message' => 'File does not exist', 'status' => false]);
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to move the file: ' . $e->getMessage(), 'status' => false]);
        }

        return response()->json(['message' => 'File moved to RecycleBin', 'status' => true]);
    }



    public function contextMenu(Request $request)
    {
        $filteredPermissions = PermissionHelper::getFilteredPermissions(auth()->id());
        $clicktype = $request->input('type');
        if ($clicktype == 'rightclick') {
            $contextTypes = ContextType::with(['contextOptions' => function ($query) {
                $query->orderBy('sort_order', 'asc'); // Sort options by sort_order
            }])
                ->where('show_on', 'rightclick')
                ->orderBy('sort_order', 'asc') // Sort context types by sort_order
                ->get();
        } else {
            $contextTypes = ContextType::with(['contextOptions' => function ($query) {
                $query->orderBy('sort_order', 'asc'); // Sort options by sort_order
            }])
                ->whereIn('show_on', [$clicktype, 'all'])
                ->orderBy('sort_order', 'asc') // Sort context types by sort_order
                ->get();
        }
        $html = view('appendview.clickoption')->with('contextTypes', $contextTypes)->with('type', $clicktype)->with('filteredPermissions', $filteredPermissions)->render();
        return response()->json(['html' => $html]);
    }

    public function fileExpSearch(Request $request)
    {
        $search = $request->input('searchFiles', null);
        $filepath = base64UrlDecode($request->input('path'));
        $parentPath = empty($filepath) ? '/' : $filepath;
        $defaultfolders = [];
        $files = [];
        $sortby = $request->input('sort_by', 'id');
        $sortorder = $request->input('sort_order', 'asc');

        if ($filepath != 'RecycleBin') {
            $query = App::where('parentpath', $parentPath)
                ->where('filemanager_display', 1)
                ->where('status', 1)
                ->orderBy('name');

            if ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%');
            }

            $defaultfolders = $query->get();

            $filesQuery = FileModel::where('parentpath', $parentPath)
                ->where('status', 1)
                ->where('created_by', auth()->id())
                ->orderBy($sortby, $sortorder);

            if ($search) {
                $filesQuery->where('name', 'LIKE', '%' . $search . '%');
            }

            $files = $filesQuery->get();
        } else {
            $files = RecycleBin::where('tablename', 'file')
                ->where('file_created_by', auth()->id())
                ->get();
        }

        $html = view('appendview.pathview')
            ->with('defaultfolders', $defaultfolders)
            ->with('files', $files)
            ->render();

        return response()->json(['html' => $html, 'parentPath' => $parentPath]);
    }

    public function dotsImageViewer($file)
    {
        $file = FileModel::find(base64UrlDecode($file));
        return view('dotsimageviewer', compact('file'));
    }
    public function dotsVideoPlayer($file)
    {
        $file = FileModel::find(base64UrlDecode($file));
        return view('dotsvideoplayer', compact('file'));
    }
    public function dotsDocumentViewer($file)
    {
        $file = FileModel::find(base64UrlDecode($file));
        return view('dotsdocumentviewer', compact('file'));
    }

    public function leftArrowClick(Request $request)
    {
        $filepath = $request->input('path');
        if (!empty($filepath) && $filepath != "/") {
            Session::put('rightarrowpath', $filepath);
        } else {
            Session::forget('rightarrowpath');
        }
    }
    public function rightArrowClick(Request $request)
    {
        Session::forget('rightarrowpath');
    }
    public function moveFiles(Request $request)
    {
        $fileKeys = $request->input('fileKeys', []);
        $folderKeys = $request->input('folderKeys', []);
        $targetFolder = base64UrlDecode($request->input('targetFolder'));

        $targetFolderRecord = FileModel::where('path', $targetFolder)->where('folder', 1)->first();

        if (!$targetFolderRecord) {
            return response()->json(['status' => false, 'message' => 'Target folder not found.']);
        }

        foreach ($fileKeys as $fileKey) {
            $this->moveFile($fileKey, $targetFolderRecord);
        }
        foreach ($folderKeys as $folderKey) {
            $this->moveFolderAndContents($folderKey, $targetFolderRecord->path);
        }

        return response()->json(['status' => true, 'message' => 'Files and folders moved successfully.']);
    }


    protected function moveFile($fileKey, $targetFolder)
    {
        $fileToMove = FileModel::find(base64UrlDecode($fileKey));

        if (!$fileToMove || $fileToMove->folder == 1) {
            return;
        }

        $newPath = $targetFolder->path . '/' . $fileToMove->name;
        $newPath = $this->checkFilePathConflict($newPath);

        try {
            Storage::disk('root')->move($fileToMove->path, $newPath);
            $fileToMove->path = $newPath;
            $fileToMove->parentpath = $targetFolder->path;
            $fileToMove->save();
        } catch (\Exception $e) {
            throw new \Exception('Error moving file: ' . $fileToMove->name);
        }
    }

    protected function checkFilePathConflict($path)
    {
        $counter = 1;
        $originalPath = $path;

        while (File::exists(Storage::disk('root')->path($path))) {
            $path = $originalPath . ' (' . $counter . ')';
            $counter++;
        }

        return $path;
    }

    protected function moveFolderAndContents($folderKey, $newParentPath)
    {
        $folderToMove = FileModel::find(base64UrlDecode($folderKey));
        if (!$folderToMove || $folderToMove->folder != 1) {
            return;
        }
        $newFolderPath = rtrim($newParentPath, '/') . '/' . $folderToMove->name;
        $newFolderPath = $this->checkFilePathConflict($newFolderPath);
        Storage::disk('root')->makeDirectory($newFolderPath);
        $filesInFolder = FileModel::where('parentpath', $folderToMove->path)
            ->where('folder', 0)
            ->get();
        foreach ($filesInFolder as $file) {
            $newFilePath = rtrim($newFolderPath, '/') . '/' . $file->name;
            $newFilePath = $this->checkFilePathConflict($newFilePath);
            Storage::disk('root')->move($file->path, $newFilePath);
            $file->path = $newFilePath;
            $file->parentpath = $newFolderPath;
            $file->save();
        }
        $subfolders = FileModel::where('parentpath', $folderToMove->path)
            ->where('folder', 1)
            ->get();
        foreach ($subfolders as $subfolder) {
            $this->moveFolderAndContents(base64UrlEncode($subfolder->id), $newFolderPath);
        }
        $this->removeOriginalFolder($folderToMove);
        $folderToMove->parentpath = $newParentPath;
        $folderToMove->path = $newFolderPath;
        $folderToMove->save();
    }

    protected function removeOriginalFolder($folder)
    {
        if (Storage::disk('root')->exists($folder->path)) {
            Storage::disk('root')->deleteDirectory($folder->path);
        }
    }
}
