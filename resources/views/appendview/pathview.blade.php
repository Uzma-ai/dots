<div class="flex flex-wrap gap-4 p-6 ">

@foreach ($defaultfolders as $dfolder)

    <div class="app maindesktopapp w-21 h-28 cursor-pointer relative" data-option="all">
      <a href="{{ url('/filemanager/'.base64UrlEncode($dfolder->path))}}" class="systemapp selectapp showappoptions" data-appkey="{{ base64UrlEncode($dfolder->id) }}" data-filekey="{{ base64UrlEncode($dfolder->id) }}" data-filetype="systemapp" data-apptype="App" data-isfile="1"> 

        <div class="fixed w-full app-tools absolute flex item-center gap-8 px-2 invisible showappoptions">
          <input type="checkbox" class="appcheckbox" id="checkboxsystemapp{{ base64UrlEncode($dfolder->id) }}">
          <div class="ml-auto -mt-1">
              <i class="ri-arrow-drop-down-fill ri-xl text-black"></i>
          </div>
        </div>
       <div class="flex flex-col items-center imagewraper">
              <img class="w-16 icondisplay" src="{{ checkIconExist($dfolder->icon,'app') }}" alt="{{ $dfolder->name }}"/>
            
           <div class="input-wrapper" id="inputWrappersystemapp{{ base64UrlEncode($dfolder->id) }}">
                <input type="text" class="text-center text-black appinputtext" disabled id="inputFieldsystemapp{{ base64UrlEncode($dfolder->id) }}" value="{{ $dfolder->name }}">
            </div>
        </div>
     </a>
</div>
@endforeach

@foreach ($files as $file)
@if($file->folder==1)
<div class="app maindesktopapp w-21 h-28 cursor-pointer relative" data-option="file">
    <a href="{{url('/filemanager/'.base64UrlEncode($file->path))}}" class="folders openiframe selectapp" data-path =" {{ base64UrlEncode($file->path) }}" data-appkey="{{ base64UrlEncode($file->openwith) }}" data-filekey="{{ base64UrlEncode($file->id) }}" data-filetype="folder" data-apptype="App" data-isfile="1"> 

   <div class="fixed w-full app-tools absolute flex item-center gap-8 px-2 invisible showappoptions">
          <input type="checkbox" class="appcheckbox" id="checkboxfolder{{ base64UrlEncode($file->id) }}">
          <div class="ml-auto -mt-1">
              <i class="ri-arrow-drop-down-fill ri-xl text-black"></i>
          </div>
        </div>
       <div class="flex flex-col items-center imagewraper">
              <img class="w-16 icondisplay" src="{{ checkIconExist('folder','folder')}}" alt="{{ $file->name }}"/>
            
            <div class="input-wrapper" id="inputWrapperfolder{{ base64UrlEncode($file->id) }}">
                <input type="text" class="text-center text-black appinputtext" disabled id="inputFieldfolder{{ base64UrlEncode($file->id) }}" value="{{ $file->name }}">
            </div>
        </div>
     </a>
</div>
@else
<div class="app maindesktopapp w-21 h-28 cursor-pointer relative" data-option="file">
  <a href="#" class="files openiframe selectapp" data-path =" {{ base64UrlEncode($file->path) }}" data-appkey="{{ base64UrlEncode($file->openwith) }}" data-filekey="{{ base64UrlEncode($file->id) }}" data-filetype="document" data-apptype="LightApp" data-isfile="1"> 

   <div class="fixed w-full app-tools absolute flex item-center gap-8 px-2 invisible showappoptions">
          <input type="checkbox" class="appcheckbox" id="checkboxdocument{{ base64UrlEncode($file->id) }}">
          <div class="ml-auto -mt-1">
              <i class="ri-arrow-drop-down-fill ri-xl text-black"></i>
          </div>
        </div>
       <div class="flex flex-col items-center imagewraper">
          
           <!-- @if($file->filetype=='image')
               <a href="#" class="files openiframe selectapp" data-ext = "{{ $file->extension }}" data-image="{{ $file->path }}" data-title="{{ $file->name }}"  data-url="{{ $file->path }}">
                 <img class="w-16 icondisplay" src="{{ $file->path }}" alt="{{ $file->name }}"/>
               </a> -->
           <!--@elseif($file->filetype=='video')-->
           <!--     <a href="#" class="files openiframe selectapp" data-ext = "{{ $file->extension }}" data-image="{{ $file->path }}" data-title="{{ $file->name }}"  data-url="{{ url($parts[1]) }}"> -->
           <!--       <video class="w-16 icondisplay" alt="{{ $file->name }}"/><source src="{{ $file->path }}" type="video/mp4"></video>-->
           <!--     </a>-->
           <!--@else -->
                  <img class="w-16 icondisplay " src="{{ checkIconExist($file->extension,'file')}}" alt="{{ $file->name }}"/>
                
            <!-- @endif -->
            <div class="input-wrapper" id="inputWrapperdocument{{ base64UrlEncode($file->id) }}">
                <input type="text" class="text-center text-black appinputtext" disabled id="inputFielddocument{{ base64UrlEncode($file->id) }}" value="{{ $file->name }}">
            </div>

            <!--<h2 class="text-center text-black"></h2>-->
    </div>
    </a>
</div>   
@endif 
@endforeach

</div>
        
       

