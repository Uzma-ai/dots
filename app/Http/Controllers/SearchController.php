<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\File as FileModel;
use App\Models\Folder;
use App\Models\LightApp;
use App\Models\App;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    public function search(Request $request)
    {


         $apps = App::all();
         
        $query = $request->input('query');
        $createdBy = auth()->id();
        $files = FileModel::select('extension', 'name', 'parentpath','path','filetype') // Select specific columns
                ->where('name', 'like', "%$query%")
                ->where('created_by', $createdBy)
                ->where('status', 1)
                ->orderBy('extension')
                ->orderBy('name') // Add secondary sorting by name
                ->get();

        $filesByExtension = [];
        
        foreach ($files as $file) {
            $filesByExtension[$file->extension][] = [
                'name' => $file->name,
                'extension' => $file->extension,
                'parentpath' => $file->parentpath,
                'path' => $file->path,
                'filetype' => $file->filetype,
            ];
        }

        
        $folders = Folder::where('name', 'like', "%$query%")
            ->where('created_by', $createdBy)
            ->where('status', 1)
            ->orderBy('name')
            ->get();
  
        
        $results = [
            'files' => $filesByExtension,
            'folders' => $folders
        ];


  

     $html = view('appendview.search')->with('results', $results)->render();
        return response()->json(['html' => $html]);
        
    }
    
    
    public function listalliframe(Request $request)
    {
        $isfile=0;
      if($request->input('appkey')){
        $filekey = $request->input('filekey');
        $appkey = $request->input('appkey');
        $apptype = $request->input('apptype');
        $filetype = $request->input('filetype');
        $isfile = $request->input('isfile');
        
        // Retrieve file and app details from their respective tables
        
         $testing =  0;   
        $appdet = ($apptype=="App") ? App::find(base64UrlDecode($appkey)) : LightApp::find(base64UrlDecode($appkey));
        $applinktype = ($apptype=="App") ? $appdet->type :'';
        $filename = $appdet->name;
        $path = '';
        $parentpath = '';
        if($isfile==1){
            if($filetype=="folder"){
                $file = Folder::find(base64UrlDecode($filekey));
                $filename = $file->name;
                $path = $file->path;
                $parentpath = $file->parentpath;
            }else if($filetype=="document"){
                $file = FileModel::find(base64UrlDecode($filekey));
                $filename = $file->name;
                $path = $file->path;
                $parentpath = $file->parentpath;
            }
        }
        // Check if the session array exists
        if (Session::has('iframeapp')) {
            $testing =  'n';  
            // Retrieve the existing array from the session
            $arrayValues = Session::get('iframeapp');
    
            // Check if the appname exists in the array
           $appExists = false;
        $fileExists = false;
        
        foreach ($arrayValues as &$app) {
            $testing = 2;
            if(($filetype ==$app['filetype']) ||( $filetype !=$app['filetype'] && $filetype=='document' && $app['filetype']=="lightapp") ){
                if (base64UrlDecode($app['appkey']) == base64UrlDecode($appkey)) {
                    $appExists = true;
                    // If appkey exists, check for filekey
                  $testing = 3;
                    foreach ($app['files'] as $filedet) {
                         $testing = 4;
                        if (base64UrlDecode($filedet['filekey']) == base64UrlDecode($filekey)) {
                            $fileExists = true;
                            $testing = 1;
                            break;
                        }
                    }
    
                    // If appkey exists but filekey does not, add the new file details
                    if (!$fileExists) {
                        $testing = base64UrlDecode($filekey);
                        $app['files'][] = [
                            'filekey' => $filekey,
                            'name' => $filename,
                            'path' => $path,
                            'parentpath' => $parentpath
                        ];
                    }
                    break;
                }
            }
             
            
        }
    
            // If the appname does not exist, create a new array for the app
            if (!$appExists) {
                $arrayValues[] = [
                    'apptype' => $apptype,
                    'applink' => $appdet->link,
                    'applinktype' => $applinktype,
                    'filetype' => $filetype,
                    'appkey' => $appkey,
                    'appname' => $appdet->name,
                    'appicon' => $appdet->icon,
                    'isfile' => $isfile,
                    'files' => [
                        [
                            'filekey' => $filekey,
                            'name' => $filename,
                            'path' => $path,
                            'parentpath' => $parentpath
                        ]
                    ]
                ];
            }
    
            // Update the session with the modified array
            Session::put('iframeapp', $arrayValues);
        } else {
            // Create a new session array with the provided value
            $arrayValues = [
               [
                    'apptype' => $apptype,
                    'applink' => $appdet->link,
                    'applinktype' => $applinktype,
                    'filetype' => $filetype,
                    'appkey' => $appkey,
                    'appname' => $appdet->name,
                    'appicon' => $appdet->icon,
                    'isfile'=>$isfile,
                    'files' => [
                        [
                            'filekey' => $filekey,
                            'name' => $filename,
                            'path' => $path,
                            'parentpath' => $parentpath
                        ]
                    ]
                ]
            ];
            Session::put('iframeapp', $arrayValues);
        }
        
    }
        $finalarray = (Session::has('iframeapp')) ? Session::get('iframeapp') : array() ;
        $html = view('appendview.iframe')->with('iframeapp',$finalarray)->render();
        $html2 = view('appendview.iframetab')->with('iframeapp',$finalarray)->render();
        $iframekey = '';
    if($request->input('appkey')){
            $iframekey = 'iframepopup'.$filetype.$filekey;
        }
        return response()->json(['html' => $html,'html2'=>$html2,'filekey'=>$iframekey,'isfile'=>$isfile]);
    }
    
    
    public function closeiframe(Request $request)
{
    if ($request->input('appkey')) {
        $filekey = $request->input('filekey');
        $appkey = $request->input('appkey');
        $filetype = $request->input('filetype');
        $isfile = $request->input('isfile');
        
        // Check if the session array exists
        if (Session::has('iframeapp')) {
            // Retrieve the existing array from the session
            $arrayValues = Session::get('iframeapp');

            foreach ($arrayValues as $appIndex => &$app) {
                if ($filetype == $app['filetype'] && base64UrlDecode($app['appkey']) == base64UrlDecode($appkey)) {
                    if ($isfile != 1) {
                        // Remove the entire app entry if not a file
                        unset($arrayValues[$appIndex]);
                    } else {
                        // Remove the specific file within the app
                        foreach ($app['files'] as $fileIndex => $filedet) {
                            if (base64UrlDecode($filedet['filekey']) == base64UrlDecode($filekey)) {
                                unset($app['files'][$fileIndex]);
                                // Reindex the array to remove gaps
                                $app['files'] = array_values($app['files']);
                                // If the files array is empty, remove the entire app entry
                                if (empty($app['files'])) {
                                    unset($arrayValues[$appIndex]);
                                }
                                break;
                            }
                        }
                    }
                    // Reindex the main array to remove gaps
                    $arrayValues = array_values($arrayValues);
                    break;
                }
            }
        }
    }

    // Update the session with the modified array
    Session::put('iframeapp', $arrayValues);

    $finalarray = (Session::has('iframeapp')) ? Session::get('iframeapp') : array();
    $html = view('appendview.iframe')->with('iframeapp', $finalarray)->render();
    $html2 = view('appendview.iframetab')->with('iframeapp', $finalarray)->render();

    return response()->json(['html' => $html, 'html2' => $html2]);
}


    
}

