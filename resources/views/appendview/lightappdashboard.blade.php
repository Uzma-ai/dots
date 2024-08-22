
@foreach ($lightApps as $lightApp)
<div class="app maindesktopapp  w-20 h-32 cursor-pointer relative showappoptions" data-option="app">
 <a href="#" class="openiframe showappoptions selectapp" data-appkey="{{ base64UrlEncode($lightApp->id)}}" data-filekey="{{ base64UrlEncode($lightApp->id)}}" data-filetype="lightapp" data-apptype="LightApp" data-isfile=""> 

        <div class="app-tools absolute top-0 left-1 flex items-center justify-between gap-8 py-0.5 px-1 invisible showappoptions">
          <input type="checkbox" name="option" class="appcheckbox" id="checkboxlightapp{{ base64UrlEncode($lightApp->id) }}">
          <!-- <div class="ml-auto -mt-1"> -->
              <i class="ri-arrow-drop-down-fill ri-xl text-black"></i>
          <!-- </div> -->
        </div>
       <div class="text-center flex flex-col items-center px-1 pt-5 showappoptions">
              <img class="showappoptions w-16 icondisplay" src="{{ asset($constants['APPFILEPATH'].$lightApp->icon) }}" alt="{{ $lightApp->name }}"/>
            
            <div class="input-wrapper w-16" id="inputWrapperlightapp{{ base64UrlEncode($lightApp->id) }}">
                <input type="text" class="text-center text-white appinputtext" disabled id="inputFieldlightapp{{ base64UrlEncode($lightApp->id) }}" value="{{ $lightApp->name }}">
            </div>
            
        </div>
        </a>
    </div>
@endforeach

@foreach ($files as $file)
  @if($file->folder==1)
  <div class="app maindesktopapp w-20 h-32 cursor-pointer relative" data-option="file">
      <a href="{{ url('/filemanager',['path'=>base64UrlEncode($file->path)]);}}" data-path =" {{ base64UrlEncode($file->path) }}" class="folders selectapp" data-appkey="{{ base64UrlEncode($file->openwith) }}" data-filekey="{{ base64UrlEncode($file->id) }}" data-filetype="folder" data-apptype="App" data-isfile="1"> 
        <div class="app-tools absolute top-0 left-1 flex items-center justify-between gap-8 py-0.5 px-1 invisible showappoptions">
            <input type="checkbox" name="option" class="appcheckbox" id="checkboxfolder{{ base64UrlEncode($file->id) }}">
          <div class="ml-auto -mt-1">
              <i class="ri-arrow-drop-down-fill ri-xl text-black"></i>
          </div>
        </div>
       <div class="text-center flex flex-col items-center px-1 pt-5">
              <img class="w-16 icondisplay" src="{{ asset($constants['FILEICONPATH'].'folder.png')}}" alt="{{ $file->name }}"/>
            
            <div class="input-wrapper w-16" id="inputWrapperfolder{{ base64UrlEncode($file->id) }}">
                <input type="text" class="text-center text-white appinputtext" disabled id="inputFieldfolder{{ base64UrlEncode($file->id) }}" value="{{ $file->name }}">
            </div>
        </div>
    </a>
    </div>
  @else
    <div class="app maindesktopapp w-20 h-32 cursor-pointer relative" data-option="file">
    <a href="#" class="files openiframe selectapp" data-path =" {{ base64UrlEncode($file->path) }}" data-appkey="{{ base64UrlEncode($file->openwith) }}" data-filekey="{{ base64UrlEncode($file->id) }}" data-filetype="document" data-apptype="LightApp" data-isfile="1"> 
    <div class="app-tools absolute top-0 left-1 flex items-center justify-between gap-8 py-0.5 px-1 invisible showappoptions">
            <input type="checkbox" name="option" class="appcheckbox" id="checkboxdocument{{ base64UrlEncode($file->id) }}">
            <div class="ml-auto -mt-1">
                <i class="ri-arrow-drop-down-fill ri-xl text-black"></i>
            </div>
            </div>
        <div class="text-center flex flex-col items-center px-1 pt-5">
            
            <!--@if($file->filetype=='image')-->
            <!--     <a href="#" class="files openiframe selectapp" data-ext = "{{ $file->extension }}" data-image="{{ $file->path }}" data-title="{{ $file->name }}"  data-url="{{ $file->path }}"> -->
            <!--       <img class="w-16 icondisplay" src="{{ $file->path }}" alt="{{ $file->name }}"/>-->
            <!--     </a>-->
            <!--@elseif($file->filetype=='video')-->
            <!--     <a href="#" class="files openiframe selectapp" data-ext = "{{ $file->extension }}" data-image="{{ $file->path }}" data-title="{{ $file->name }}"  data-url="{{ url($parts[1]) }}"> -->
            <!--       <video class="w-16 icondisplay" alt="{{ $file->name }}"/><source src="{{ $file->path }}" type="video/mp4"></video>-->
            <!--     </a>-->
            <!--@else-->
                    <img class="w-16 icondisplay " src="{{ asset($constants['FILEICONPATH'].($file->extension ?? 'default').$constants['ICONEXTENSION'])}}" alt="{{ $file->name }}"/>
                
                <!--@endif-->
                <div class="input-wrapper w-16" id="inputWrapperdocument{{ base64UrlEncode($file->id) }}">
                    <input type="text" class="text-center text-white appinputtext" disabled id="inputFielddocument{{ base64UrlEncode($file->id) }}" value="{{ $file->name }}">
                </div>
        </div>
        </a>
    </div>
@endif   
@endforeach
  
       

