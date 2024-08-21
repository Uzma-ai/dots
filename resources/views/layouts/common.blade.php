
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link href="https://unpkg.com/tailwindcss@^2.2.19/dist/tailwind.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset($constants['CSSFILEPATH'].'custom.css') }}" />
    <link rel="stylesheet" href="{{ asset($constants['CSSFILEPATH'].'root.css') }}" />
    <link rel="stylesheet" href="{{ asset($constants['CSSFILEPATH'].'common.css') }}" />
    <link rel="stylesheet" href="{{ asset($constants['CSSFILEPATH'].'cs.css') }}" />


    @yield('styles')

  </head>
  <body class="w-full h-screen">
      <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Taskbar -->
        <div class="navbar navbarhead h-16 flex items-center w-full absolute top-0 z-10">
            <div class="flex justify-center ml-10 w-full relative h-full" id="toolbar">
            <div class="bg absolute w-full  bottom-0">
                <img id="shelf" class="w-full" src="{{ asset($constants['IMAGEFILEPATH'].'shelf.png')}}" alt="">
            </div>
            <header id="iframeheaders" class="mt-1">
                <div class="flex space-x-4" id="sortable-apps">
                </div>
            </header>
            </div>
            <div class="flex items-center gap-8 w-48 justify-end pr-5">
                <i id="search-icon" class="ri-search-line icon-color"></i>
                <i id="notification-icon" class="ri-notification-3-line icon-color"></i>
            </div>
        </div>
         <!-- Taskbar End -->

      
         <!-- <header id="iframeheaders" class="transparent p-2 text-white flex justify-center items-center fixed top-0 left-0 right-0 mainiframeiconheader mainscreen"> -->

    
    <!--///// iframe -->
    <div id="alliframelist">
        
    </div>
    <!--//// iframe end-->
<!--iframe icon-->
     <!-- Header -->
    

   
   
    @yield('content')

    
    <!--end here -->
        <!-- Right click Menu -->
        <div id="context-menu" class="context-menu hidden bg-c-white">
            <ul>
            <a href="#"  id="refreshButton">
                <li class="flex items-center justify-between px-4 py-2">
                <p class="text-c-black text-sm">Refresh</p>
                <p class="menu-sidename">F5</p>
                </li>
            </a>
            <a href="#" class="show-upload-popup">
                <li class="border-b-2 px-4 py-2">
                <p class="text-c-black text-sm">Upload file</p>
                </li>
            </a>
            <a href="#" id="createFolderdesktop">
                <li class="px-4 py-2">
                <p class="text-c-black text-sm">New folder</p>
                </li>
            </a>
            <li class="flex items-center justify-between px-4 py-2">
                <p class="text-c-black text-sm">New file</p>
                <i class="ri-arrow-right-s-line"></i>
                <ul class="submenu newfile-submenu absolute shadow-md rounded-md hidden">
                <a href="#" id="createwordfile">
                    <li class="flex items-center px-5 py-2 gap-2">
                    <img  class="w-4" src="{{ asset($constants['FILEICONPATH'].'docx'.$constants['ICONEXTENSION'])}}" alt="word-file" />
                    <p class="text-c-black text-sm">Word docx file</p>
                    </li>
                </a>
                <a href="#" id="createexcelfile">
                    <li class="flex items-center px-5 py-2 gap-2">
                    <img class="w-4" src="{{ asset($constants['FILEICONPATH'].'xlsx'.$constants['ICONEXTENSION'])}}" alt="excel-file" />
                    <p class="text-c-black text-sm">Excel xlsx file</p>
                    </li>
                </a>
                <a href="#" id="createpptfile">
                    <li class="flex items-center px-5 py-2 gap-2">
                    <img class="w-4" src="{{ asset($constants['FILEICONPATH'].'pptx'.$constants['ICONEXTENSION'])}}" alt="powerpoint-file" />
                    <p class="text-c-black text-sm">PowerPoint pptx</p>
                    </li>
                </a>
                </ul>
            </li>
            <a href="#" id="{{ session()->has('copyfilepath') ? '' : 'hidden'}} pastefileButton">
                <li class="px-4 py-2">Paste
                <p class="text-c-black text-sm"></p>
                </li>
            </a>
            <li class="flex items-center justify-between px-4 py-2">
                <p class="text-c-black text-sm">Icon size</p>
                <i class="ri-arrow-right-s-line"></i>
                <ul
                class="submenu iconsize-submenu absolute shadow-md rounded-md hidden"
                >
                <a href="#" class="displaytinyicon">
                <li class="flex items-center px-5 py-2 gap-2">
                    <i class="ri-function-add-line ri-xs"></i>
                    <p class="text-c-black text-sm">Tiny</p>
                </li>
                </a>
                <a href="#" class="displaysmallicon">
                <li class="flex items-center px-5 py-2 gap-2">
                    <i class="ri-function-add-line ri-sm"></i>
                    <p class="text-c-black text-sm">Small icon</p>
                </li>
                </a>
                <a href="#" class="displaymediumicon">
                <li class="flex items-center px-5 py-2 gap-2">
                    <i class="ri-function-add-line ri-1x"></i>
                    <p class="text-c-black text-sm">Medium icon</p>
                </li>
                </a>
                <a href="#" class="displaybigicon">
                <li class="flex items-center px-5 py-2 gap-2">
                    <i class="ri-function-add-line ri-lg"></i>
                    <p class="text-c-black text-sm">Big icon</p>
                </li>
                </a>
                <a href="#" class="displayoversizeicon">
                <li class="flex items-center px-5 py-2 gap-2">
                    <i class="ri-function-add-line ri-xl"></i>
                    <p class="text-c-black text-sm">Oversized icon</p>
                </li>
                </a>
            </ul>
            </li>
            </ul>
        </div>
        <!-- End Right click -->

        <!-- Apps context-menu -->
        <div id="app-contextmenu" class="context-menu hidden bg-c-white">
            <ul>
            <a href="#" class="allappoptions appoptions openrightclick">
                <li class="flex items-center justify-between px-2 py-2">
                <p class="text-c-black text-sm">Open</p>
                <p class="menu-sidename">Enter</p>
                </li>
            </a>
            <a href="#" class="allappoptions hidden downloadButton">
                <li class="flex items-center justify-between px-2 py-2">
                <p class="text-c-black text-sm">Download</p>
                <p class="menu-sidename">Shift+Enter</p>
                </li>
            </a>
            <!-- <a href="#" class="allappoptions hidden openrightclick">
                <li class="flex items-center justify-between px-2 py-2 ">
                <p class="text-c-black text-sm">Link sharing</p>
                </li>
            </a> -->
            <a href="#" class="allappoptions hidden copyfileButton">
                <li class="flex items-center justify-between px-2 py-2">
                <p class="text-c-black text-sm">Copy</p>
                <p class="menu-sidename">Ctrl+C</p>
                </li>
            </a>
            <a href="#" class="allappoptions hidden cutfileButton">
                <li class="flex items-center justify-between px-2 py-2">
                <p class="text-c-black text-sm">Cut</p>
                <p class="menu-sidename">Ctrl+X</p>
                </li>
            </a>
            <a href="#" class="allappoptions hidden renameButton">
                <li class="flex items-center justify-between px-2 py-2">
                <p class="text-c-black text-sm">Rename</p>
                <p class="menu-sidename">F2</p>
                </li>
            </a>
            <a href="#" class="allappoptions hidden deletefileButton">
                <li class="flex items-center justify-between px-2 py-2">
                <p class="text-c-black text-sm">Delete</p>
                <p class="menu-sidename">Del</p>
                </li>
            </a>
            </ul>
        </div>
      <!-- Apps context-menu end -->


    <div id="popupuploadfiles" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
    <div class="popup-content bg-white rounded-lg shadow-lg p-6 w-full max-w-2xl">
        <!-- Header -->
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">Local Upload</h2>
            <button id="close-popup" class="text-2xl">
                <i class="ri-close-line"></i>
            </button>
        </div>
        
        <!-- Button Area -->
        <div class="flex justify-between items-center mb-4">
            <div>
                <input type="file" id="file-input" multiple class="hidden">
                <label for="file-input" class="bg-black text-white px-4 py-2 mr-2 cursor-pointer">Upload File</label>
                <!--<input type="file" id="folder-input" webkitdirectory multiple class="hidden">-->
                <!--<label for="folder-input" class="bg-black text-white px-4 py-2 cursor-pointer">Upload Folder</label>-->
            </div>
            <div>
                <!--<button id="pause-all" class="bg-gray-300 text-black px-4 py-2 mr-2 hover:bg-yellow-300">Pause</button>-->
                <button id="clear-all" class="bg-gray-300 text-black px-4 py-2 mr-2 hover:bg-yellow-300">Clear All</button>
                <!--<button id="clear-out" class="bg-gray-300 text-black px-4 py-2 hover:bg-yellow-300">Clear Out</button>-->
            </div>
        </div>
        
        <!-- Table Area -->
        <div class="dropzone mt-10 mb-4 border border-gray-300 rounded-md overflow-y-auto max-h-68">
            <div id="file-list" class="space-y-2">
                <!-- Files will be listed here -->
            </div>
        </div>
        
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/toastr.min.js"></script>
<script src="{{ asset($constants['JSFILEPATH'].'animation.js') }}" ></script>
<!-- <script src="{{ asset($constants['JSFILEPATH'].'taskbar.js') }}" ></script> -->


    @yield('scripts')
    
    
    <script>
    // sorting
    $("#sortable-apps").sortable({
            placeholder: "ui-state-highlight"
        }).disableSelection();
    
    
    // sorting end

    document.addEventListener('DOMContentLoaded', function() {
        //Administrator Container Functionality
        $(document).on('click', '.fullscreencontent #footerlogodesktop', function (e) {
              const administratorDiv = document.getElementById("administrator");
              administratorDiv.classList.toggle("hidden");
            });
    
          

        
          function createFolderInsideAnother(parentFolder){
            $.ajax({
                url: createFolderRoute,
                method: 'GET',
                data: {parentFolder: parentFolder},
                success: function (response) {
                    if(response.status){
                        toastr.success(response.message);
                        
                    }else{
                        toastr.error(response.message);
                    }
                    desktoplightapp();
                    showapathdetail(path);
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
            
            
        }
        
         function createFile(destination,filetype){
            $.ajax({
                url: createFileRoute,
                method: 'GET',
                data: {destination: destination,filetype:filetype},
                success: function (response) {
                    if(response.status){
                        toastr.success(response.message);
                        
                    }else{
                        toastr.error(response.message);
                    }
                    desktoplightapp();
                    showapathdetail(path);
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
            
            
        }
        
        
        
        
        //// right click functionality 
        
        //// right click functions 
        document.getElementById("refreshButton").addEventListener("click", function(e) {
            e.preventDefault();
            location.reload();
        });
       
        document.getElementById('createFolderdesktop').addEventListener('click', function(event) {
            event.preventDefault();
            const parentFolder = path;
            createFolderInsideAnother(parentFolder);
        });
        
        document.getElementById('createwordfile').addEventListener('click', function(event) {
            event.preventDefault();
            const destination = path;
            createFile(destination,'docx');
        });
        
        document.getElementById('createpptfile').addEventListener('click', function(event) {
            event.preventDefault();
            const destination = path;
            createFile(destination,'pptx');
        });
        
        document.getElementById('createexcelfile').addEventListener('click', function(event) {
            event.preventDefault();
            const destination = path;
            createFile(destination,'xlsx');
        });
        
        
        
        
        ////// end here 
        
        
        /// icon resizing 
            function iconResizing(iconheightsize,iconwidthsize,fontsize,iconsize){
            var heightpattern = /^h-\d+$/;
            var widthpattern = /^w-\d+$/;
            var textpattern = /^text-.+$/;
            $('.maindesktopapp').each(function(){
                var divclasses = $(this).attr('class').split(/\s+/);
                var imgclasses = $(this).find('img.icondisplay').attr('class').split(/\s+/);
                var textclasses = $(this).find('h2').attr('class').split(/\s+/);
                $(this).find('h2').addClass(fontsize);
                for(var i = 0; i < divclasses.length; i++) {
                    if(heightpattern.test(divclasses[i])) {
                        $(this).removeClass(divclasses[i]);
                        $(this).addClass(iconheightsize);
                    }
                    
                     if(widthpattern.test(divclasses[i])) {
                         $(this).removeClass(divclasses[i]);
                         $(this).addClass(iconwidthsize);
                     }
                }
                for(var i = 0; i < imgclasses.length; i++) {
                    
                     if(widthpattern.test(imgclasses[i])) {
                         $(this).find('img.icondisplay').removeClass(imgclasses[i]);
                         $(this).find('img.icondisplay').addClass(iconsize);
                     }
                }
                for(var i = 0; i < textclasses.length; i++) {
                    
                     if(textpattern.test(textclasses[i])) {
                         $(this).find('h2').removeClass(textclasses[i]);
                         $(this).find('h2').addClass(fontsize+' text-center text-white');
                     }
                }
            });
         }
         
          $('.displaytinyicon').on('click',function(){
              iconResizing('h-18','w-16','text-xs','w-6');
          });
          
          $('.displaysmallicon').on('click',function(){
              iconResizing('h-20','w-18','text-sm','w-8');
          });
          
           $('.displaymediumicon').on('click',function(){
              iconResizing('h-26','w-24','text-base','w-14')
          });
          
           $('.displaybigicon').on('click',function(){
              iconResizing('h-32','w-28','text-lg','w-20')
          });
          
          
          $('.displayoversizeicon').on('click',function(){
              iconResizing('h-36','w-32','text-lg','w-26')
          });
        
        /// end icon resizing 
        
        /// right click open 
            $(document).on('click', '.context-menu .openrightclick', function (e) {
            e.preventDefault();
            
            alert('');
                if($('.selectedfile').hasClass('openiframe')){
                    const appkey = $('.selectedfile').attr('data-appkey');
                    const filekey = $('.selectedfile').attr('data-filekey');
                    const filetype = $('.selectedfile').attr('data-filetype');
                    const apptype = $('.selectedfile').attr('data-apptype');
                    const isfile = $('.selectedfile').attr('data-isfile');
                    const iframedata = {appkey:appkey,filekey:filekey,filetype:filetype,apptype:apptype,isfile:isfile};
                    openiframe(iframedata)
                }else{
                    let url = $('.selectedfile').attr('href');
                    window.location.href = url;
                }
                $('.selectapp').removeClass('.selectedfile');

        });
        
        // rename 
        $(document).on('click', '.renameButton', function (e) {
            e.preventDefault();
                    const filekey = $('.selectedfile').attr('data-filekey');
                    const filetype = $('.selectedfile').attr('data-filetype');
                    /// rename
                    const inputWrapper = $('#inputWrapper'+filetype+filekey);
                    const inputField = $('#inputField'+filetype+filekey);
                    $('#inputField'+filetype+filekey).removeClass('text-white');
                    $('#inputField'+filetype+filekey).addClass('text-black');
                    inputField.removeAttr('disabled');
                    inputField.removeClass('appinputtext');
                    
                    inputField.show().focus();
                    
                
                        $(document).one('click', function(event) {
                        if (!inputWrapper.is(event.target) && inputWrapper.has(event.target).length === 0) {
                            inputField.attr('disabled'," ");
                            inputField.addClass('appinputtext');
                            $('.selectapp').removeClass('.selectedfile');
                            renameFile(filekey,filetype,inputField.val()); 
                             
                            // Update text display with input value
                        }
                    });
                   
                    
        });
        
        
        function renameFile(filekey,filetype,name){
                $.ajax({
                url: '{{ route('renamefile') }}',
                method: 'GET',
                data: {filekey:filekey,filetype:filetype,name:name},
                success: function (response) {
                    if(response.status){
                        toastr.success(response.message);
                        
                    }else{
                        toastr.error(response.message);
                    }
                    desktoplightapp();
                    showapathdetail(path);

                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }
        /// delete file
        
         $(document).on('click', '.deletefileButton', function (e) {
            e.preventDefault();
                const filekey = $('.selectedfile').attr('data-filekey');
                const filetype = $('.selectedfile').attr('data-filetype');
                deleteFile(filekey,filetype)
                $('.selectapp').removeClass('.selectedfile');
         });
        
        function deleteFile(filekey,filetype){
                $.ajax({
                url: '{{ route('deletefile') }}',
                method: 'GET',
                data: {filekey:filekey,filetype:filetype},
                success: function (response) {
                    if(response.status){
                        toastr.success(response.message);
                        
                    }else{
                        toastr.error(response.message);
                    }
                    desktoplightapp();
                    showapathdetail(path);

                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }
        
        
        //// cut copy paste 
        
        $(document).on('click', '.copyfileButton', function (e) {
            e.preventDefault();
                const filekey = $('.selectedfile').attr('data-filekey');
                const filepath = $('.selectedfile').attr('data-path');
                const filetype = $('.selectedfile').attr('data-filetype');
                copyFile(filepath,'copy',filetype,filekey);
                $('.selectapp').removeClass('.selectedfile');
         });
         $(document).on('click', '.cutfileButton', function (e) {
            e.preventDefault();
                const filekey = $('.selectedfile').attr('data-filekey');
                const filepath = $('.selectedfile').attr('data-path');
                const filetype = $('.selectedfile').attr('data-filetype');
                copyFile(filepath,'cut',filetype,filekey);
                $('.selectapp').removeClass('.selectedfile');
         });
         $(document).on('click', '.pastefileButton', function (e) {
            e.preventDefault();
               
                pasteFile(path);
         });
        /// copy and cut 
        function copyFile(filepath,type,filetype,filekey){
                $.ajax({
                url: '{{ route('copyfile') }}',
                method: 'GET',
                data: {filepath:filepath,type:type,filekey:filekey,filetype:filetype},
                success: function (response) {
                    if(response.status){
                        toastr.success(response.message);
                        $('.pastefileButton').removeClass('hidden');
                    }else{
                        toastr.error(response.message);
                    }
                    desktoplightapp();
                    showapathdetail(path);

                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }
        /// paste 
        function pasteFile(filepath){
                $.ajax({
                url: '{{ route('pastefile') }}',
                method: 'GET',
                data: {path:filepath},
                success: function (response) {
                    if(response.status){
                        toastr.success(response.message);
                         $('.pastefileButton').addClass('hidden');
                    }else{
                        toastr.error(response.message);
                    }
                    desktoplightapp();
                    showapathdetail(path);

                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }
        
        
        
        
         $(document).on('dblclick', '.selectapp', function (e) {
            e.preventDefault();
            if($(this).hasClass('openiframe')){
                const appkey = this.getAttribute('data-appkey');
                const filekey = this.getAttribute('data-filekey');
                const filetype = this.getAttribute('data-filetype');
                const apptype = this.getAttribute('data-apptype');
                const isfile = this.getAttribute('data-isfile');
                const originalIcon = $(this).find('.icondisplay');
                const imgicon =  $('#iframeheaders #iframeiconimage'+filetype+appkey);
                console.log('#alliframelist #iframepopup'+filetype+filekey);
                animateIcon(imgicon, originalIcon, function() {
                    const iframedata = {appkey:appkey,filekey:filekey,filetype:filetype,apptype:apptype,isfile:isfile};
                    openiframe(iframedata);
                 

                });           
             }else{
                    let url = $(this).attr('href');
                    window.location.href = url;
            }
        });
        
        ////

        function animateIcon(icon, originalIcon, callback) {
            const $originalIcon = $(originalIcon);
            const $toolbar = $('#iframeheaders');
            const rect = $originalIcon[0].getBoundingClientRect();
            const toolbarRect = $toolbar[0].getBoundingClientRect();
            const toolbarCenterX = toolbarRect.left + (toolbarRect.width / 2) - (rect.width / 2);
            const toolbarCenterY = toolbarRect.top + (toolbarRect.height / 2) - (rect.height / 2);

            const moveX = toolbarCenterX - rect.left;
            const moveY = toolbarCenterY - rect.top;

            const $clone = $originalIcon.clone();
            $clone.css({
                position: 'fixed',
                left: `${rect.left}px`,
                top: `${rect.top}px`,
                width: `${rect.width}px`,
                height: `${rect.height}px`,
                'z-index': 9999,
                '--move-x': `${moveX}px`,
                '--move-y': `${moveY}px`
            });
            $clone.addClass('moving-to-top');
            $('body').append($clone);

            $clone.on('animationend', function() {
                $clone.remove();
                // $toolbar.append(icon);
                animateIconToCenter(icon);
                if (callback) callback();
            });
        }

        function animateIconToCenter(icon) {
            const $icon = $(icon);
            $icon.css('opacity', 0);
            setTimeout(() => {
                $icon.css({
                    transition: 'opacity 0.5s, transform 0.5s',
                    opacity: 1,
                    transform: 'translateY(0)'
                });
            }, 10);
        }

        ////

        $(document).on('keydown', '.selectapp', function (e) {
            if (e.key === 'Enter' || e.keyCode === 13) {
                e.preventDefault();
                if($(this).hasClass('openiframe')){
                    const appkey = this.getAttribute('data-appkey');
                    const filekey = this.getAttribute('data-filekey');
                    const filetype = this.getAttribute('data-filetype');
                    const apptype = this.getAttribute('data-apptype');
                    const isfile = this.getAttribute('data-isfile');
                    const iframedata = {appkey:appkey,filekey:filekey,filetype:filetype,apptype:apptype,isfile:isfile};
                    openiframe(iframedata);
                }else{
                    let url = $(this).attr('href');
                    window.location.href = url;
                }
            }
            
        });
        
        
        $(document).on('click', '#iframeheaders .iframefilepopupclosebtn', function (e) {
                e.preventDefault();
                const appkey = this.getAttribute('data-appkey');
                const filekey = this.getAttribute('data-filekey');
                const filetype = this.getAttribute('data-filetype');
                const isfile = this.getAttribute('data-isfile');
                const fileid = this.getAttribute('data-iframefile-id');
                closeiframe(appkey,filekey,fileid,filetype,isfile);
                $('#iframeheaders #iframefilepopupdet'+fileid).removeClass('hidden');


        });
        $(document).on('click', ' .downloadButton', function (e) {
            e.preventDefault();
            alert('hello')
            const filekey = $('.selectedfile').attr('data-filekey');
            var downloadUrl = '/download/' + filekey;
    
            // Trigger the download by navigating to the download URL
            window.location.href = downloadUrl;
            $('.selectapp').removeClass('.selectedfile');
        });
          
        
        
        openiframe();
        function openiframe(data){
                $.ajax({
                url: '{{ route('openiframe') }}',
                method: 'GET',
                data: data,
                success: function (response) {
                    // Update the app list container with the updated list
                    $('#alliframelist').html(response.html);
                    $('#sortable-apps').html(response.html2);
                    if(response.filekey){
                      document.getElementById(response.filekey).classList.remove('hidden');
                      $('#alliframelist #'+response.filekey).addClass('show');
                    }

                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }
        
        function closeiframe(appkey,filekey,fileid,filetype,isfile){
               $('#alliframelist #iframepopup'+fileid).removeClass('hidden');
                $.ajax({
                url: '{{ route('closeiframe') }}',
                method: 'GET',
                data: {appkey:appkey,filekey:filekey,filetype:filetype,isfile:isfile},
                success: function (response) {
                    // Update the app list container with the updated list
                    $('#alliframelist').html(response.html);
                    $('#sortable-apps').html(response.html2);
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }
            
         // Close button functionality
            $(document).on('click', '#alliframelist .closeiframe-btn', function() {
                const appkey = this.getAttribute('data-appkey');
                const filekey = this.getAttribute('data-filekey');
                const filetype = this.getAttribute('data-filetype');
                const isfile = this.getAttribute('data-isfile');
                const fileid = this.getAttribute('data-iframefile-id');
                closeiframe(appkey,filekey,fileid,filetype,isfile);
            });
        
            // Maximize button functionality
            $(document).on('click', '#alliframelist .maximizeiframe-btn', function() {
                var iframeId = $(this).data('iframe-id');
                var iframePopup = $('#alliframelist #iframepopup' + iframeId);
                iframePopup.toggleClass('maximized');
            });
        
            // Minimize button functionality
            $(document).on('click', '#alliframelist .minimizeiframe-btn', function() {
            var iframeId = $(this).data('iframe-id');
            var iframePopup = $('#alliframelist #iframepopup' + iframeId);
            if (!iframePopup.hasClass('minimized')) {
                iframePopup.addClass("minimized");
                iframePopup.removeClass("fall-down");
                setTimeout(() => {
                    iframePopup.addClass("hidden");
                }, 600); 
            }
        });
            
            /// click iframe icon 
             $(document).on('click', '#iframeheaders .iframemainheadericon', function() {
                var iframeId = $(this).data('iframe-id');
                var iframefileId = $(this).data('iframefile-id');
                let img = $(this).find('.app-icon');

                /// animation close
                var popupcount = $(this).data('popup-count');
                if(popupcount >1){
                    $('#iframeheaders #iframetab' + iframeId).removeClass('hidden');
                }else{
                    let iframetabs = $('#alliframelist #iframepopup'+iframefileId);
                    if(iframetabs.hasClass('fall-down')){
                        iframetabs.addClass('minimized');
                        iframetabs.removeClass('fall-down');
                    }else{
                        iframetabs.removeClass('hidden');
                        iframetabs.removeClass('minimized');
                        if(!iframetabs.hasClass('fall-down')){
                           iframetabs.addClass('fall-down');
    
                        }
                    }
                }

            });
            
            let isHoveringPopup = false;
            
            $(document).on('mouseenter', '#iframeheaders .iframemainheadericon', function() {
                var iframeId = $(this).data('iframe-id');
                var iframefileId = $(this).data('iframefile-id');
                var popupcount = $(this).data('popup-count');
                if(popupcount >1){
                    $('#iframeheaders #iframetab' + iframeId).removeClass('hidden');
                }
            });
             $(document).on('mouseleave', '#iframeheaders .iframemainheadericon', function() {
                var iframeId = $(this).data('iframe-id');
                var iframefileId = $(this).data('iframefile-id');
                var popupcount = $(this).data('popup-count');

                if(popupcount >1  && isHoveringPopup!=true){
                    $('#iframeheaders #iframetab' + iframeId).addClass('hidden');
                }
            });
            
            // Handle hover on the popup element
            $(document).on('mouseenter', '#iframeheaders .parentiframe', function() {
                isHoveringPopup = true;
                //console.log(isHoveringPopup);
            });
        
            $(document).on('mouseleave', '#iframeheaders .parentiframe', function() {
                isHoveringPopup = false;
                // Hide the popup if the mouse leaves the popup element and is not hovering the main header icon
                let iframe = $(this).find('.iframemainheadericon');
                let iframetab = $(this).data('iframe-id');
                $('#iframeheaders #iframetab'+iframetab).addClass('hidden');
            });

            /// click iframe icon 
             $(document).on('click', '#iframeheaders .iframemainheaderpopup', function(e) {
                e.preventDefault();
                var iframeId = $(this).data('iframe-id');
                var iframefileId = $(this).data('iframefile-id');
                
                //var popupcount = $(this).data('popup-count');
               
                    $('#alliframelist #iframepopup'+iframefileId).removeClass('hidden');
                    $('#alliframelist #iframepopup'+iframefileId).removeClass('minimized');
                    $('#alliframelist #iframepopup'+iframefileId).addClass('fall-down');
                    $('#iframeheaders #iframetab'+iframeId).addClass('hidden');
                    if(!$('#alliframelist #iframepopup'+iframefileId).hasClass('show')){
                        $('#alliframelist #iframepopup'+iframefileId).addClass('show');

                    }
                    

            });
        
            
            $('.allapplist').on('click', '.selectapp', function(e) {
                e.preventDefault();
               // e.stopPropagation();
                selectfiletype = $(this).attr('data-filetype');
                      let $thisApp = $(this).closest('.maindesktopapp');
                        let $appCheckbox = $(this).find('.appcheckbox');
                        
                        // Check if the current div is already selected
                        if ($thisApp.hasClass('desktopapp-clicked')) {
                            // Uncheck the checkbox and remove classes
                            $thisApp.removeClass('desktopapp-clicked');
                            $(this).find('.app-tools').addClass('invisible');
                            $appCheckbox.prop('checked', false);
                            $(this).removeClass('selectedfile');
                            
                            $('.fimanagertoolpanel').addClass('disabledicon');
                        } else {
                            // Uncheck other checkboxes and remove classes from other divs
                            $('#desktopapps .maindesktopapp .selectapp').removeClass("selectedfile");
                            $('.allapplist .maindesktopapp').removeClass('desktopapp-clicked')
                            $('.allapplist .app-tools').addClass('invisible');
                            $('.allapplist .appcheckbox').prop('checked', false);
                            // Check the current checkbox and add classes
                            $thisApp.addClass('desktopapp-clicked');
                            $(this).find('.app-tools').removeClass('invisible');
                            $appCheckbox.prop('checked', true);
                            $(this).addClass('selectedfile');
                            if(selectfiletype =='folder' || selectfiletype =='document'){
                                $('.fimanagertoolpanel').removeClass('disabledicon');
                            }
                        }
            });
                
                    // Click event on the document to handle clicks outside the div
                    $(document).on('click', function(e) {
                        if (!$(e.target).closest('.maindesktopapp').length) {
                            // Uncheck all checkboxes and remove classes from all divs
                            $('.allapplist .maindesktopapp').removeClass('desktopapp-clicked');
                            $('.allapplist .selectapp').removeClass('selectedfile');
                            $('.allapplist .app-tools').addClass('invisible');
                            $('.allapplist .appcheckbox').prop('checked', false);
                            $('.fimanagertoolpanel').addClass('disabledicon');
                        }
                    });
           
            
            
    
        
        
        //// iframe end 
            
  
            ///upload  popup
    
         let uploads = {};
         $('.show-upload-popup').on('click',function(){
              document.getElementById('popupuploadfiles').style.display = 'flex';
         });

        // document.getElementById('show-upload-popup').addEventListener('click', function() {
        //     document.getElementById('popupuploadfiles').style.display = 'flex';
        // });
    
        document.getElementById('close-popup').addEventListener('click', function() {
            document.getElementById('popupuploadfiles').style.display = 'none';
        });
            const dropzone = document.querySelector('.dropzone');
        
            dropzone.addEventListener('dragover', (e) => {
                e.preventDefault();
                dropzone.classList.add('dragover');
            });
        
            dropzone.addEventListener('dragleave', () => {
                dropzone.classList.remove('dragover');
            });
        
            dropzone.addEventListener('drop', (e) => {
                e.preventDefault();
                dropzone.classList.remove('dragover');
        
                if (e.dataTransfer.items) {
                    // Use DataTransferItemList interface to access the items
                    for (let i = 0; i < e.dataTransfer.items.length; i++) {
                        if (e.dataTransfer.items[i].webkitGetAsEntry) {
                            // Handle folders
                            handleFolder(e.dataTransfer.items[i].webkitGetAsEntry());
                        } else {
                            // Handle files
                            handleFiles([e.dataTransfer.items[i].getAsFile()]);
                        }
                    }
                } else {
                    // Use DataTransfer interface to access the files
                    handleFiles(e.dataTransfer.files);
                }
            });
        
            $('#file-input, #folder-input').on('change', function (e) {
                handleFiles(e.target.files);
            });

        function handleFolder(entry) {
            if (entry.isFile) {
                // If it's a file, handle it
                entry.file((file) => {
                    handleFiles([file]);
                });
            } else if (entry.isDirectory) {
                // If it's a directory, traverse it
                const reader = entry.createReader();
                reader.readEntries((entries) => {
                    entries.forEach((fileEntry) => {
                        handleFiles([fileEntry]);
                    });
                });
            }
        }
        function handleFiles(files) {
            let fileList = $('#file-list');
            let formData = new FormData();
    
            $.each(files, function (index, file) {
                formData.append('files[]', file);
                let fileId = Math.random().toString(36).substring(7);
                uploads[fileId] = { file: file, paused: false };
                fileList.append(
                    `<div id="${fileId}" class="flex justify-between items-center border-b border-gray-300 p-2">
                        <div class="flex items-center">
                            <i class="ri-upload-line text-gray-500 mr-2"></i>
                            <span>Uploading ${file.name}...</span>
                        </div>
                        <div class="flex-grow text-right">
                            <span class="text-blue-500">${file.name}</span> (${(file.size / 1024).toFixed(2)} KB)
                            <!-- <button class="pause-upload text-yellow-500 ml-2"><i class="ri-pause-line"></i></button>
                             <button class="remove-upload text-red-500 ml-2"><i class="ri-close-line"></i></button>-->
                        </div>
                    </div>`
                );
            });
    
            $.ajax({
                url: '/upload',
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'Upload-Directory': path,
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Specify the directory name here
                },
                success: function (response) {
                    
                    fileList.empty();
                    $.each(response.files, function (index, file) {
                        fileList.append(
                            `<div class="flex justify-between items-center border-b border-gray-300 p-2">
                                <div class="flex items-center">
                                    <i class="ri-check-line text-green-500 mr-2"></i>
                                    <span>Upload Successful</span>
                                </div>
                                <div class="flex-grow text-right">
                                    <span class="text-blue-500">${file.name}</span> (${(file.size / 1024).toFixed(2)} KB)
                                </div>
                            </div>`
                        );
                    });
                    
                    desktoplightapp();
                    showapathdetail(path);
                }
            });
        }
    ///// upload end 
    desktoplightapp();

    function desktoplightapp(){
            $.ajax({
                url: desktopapp,
                method: 'GET',
                data: {},
                success: function (response) {
                    // Update the app list container with the updated list
                    $('.desktop-apps').html(response.html);
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
            
            
        }
        
    
     function showapathdetail(path){
            $.ajax({
                url: showFileDetail,
                method: 'GET',
                data: {path:path},
                success: function (response) {
                    // Update the app list container with the updated list
                    $('.loaddetails').html(response.html);
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
            
            
        }
        
        
                   // Function to show and hide popups
        function setupIconPopup(iconId, popupId) {
            const icon = document.getElementById(iconId);
            const popup = document.getElementById(popupId);
            const closeBtn = popup.querySelector('.closeBtn');

            // Show popup on icon hover
            icon.addEventListener('mouseover', () => {
                popup.classList.remove('hidden');
            });

            // Hide popup on mouse leave from the icon
            icon.addEventListener('mouseleave', () => {
                setTimeout(() => {
                    if (!popup.matches(':hover')) {
                        popup.classList.add('hidden');
                    }
                }, 200); // Adjust the delay as needed
            });

            // Prevent popup from closing when hovering over it
            popup.addEventListener('mouseover', () => {
                clearTimeout(popup.timeoutId); // Clear the timeout
            });

            popup.addEventListener('mouseleave', () => {
                popup.timeoutId = setTimeout(() => {
                    popup.classList.add('hidden');
                }, 200); // Adjust the delay as needed
            });

            // Close popup on close button click
            closeBtn.addEventListener('click', (e) => {
                e.stopPropagation(); // Prevent the event from bubbling up
                popup.classList.add('hidden');
            });
        }

        // Setup popups for each icon
        
        /// drageable 
        
        // Get all elements with class 'draggable-handle'
                function makeDraggable(draggableElement) {
                let isMouseDown = false;
                let offset = { x: 0, y: 0 };
        
                const onMouseMove = (event) => {
                    if (!isMouseDown) return;
                    const rect = draggableElement.getBoundingClientRect();
                    draggableElement.style.left = `${event.clientX - offset.x}px`;
                    draggableElement.style.top = `${event.clientY - offset.y}px`;
                };
        
                const onMouseDown = (event) => {
                    if (event.target.closest('.maximizeiframe-btn') || event.target.closest('.minimizeiframe-btn') || event.target.closest('.closeiframe-btn')) {
                        return;
                    }
                    isMouseDown = true;
                    const rect = draggableElement.getBoundingClientRect();
                    offset.x = event.clientX - rect.left;
                    offset.y = event.clientY - rect.top;
                    document.addEventListener('mousemove', onMouseMove);
                };
        
                const onMouseUp = () => {
                    isMouseDown = false;
                    document.removeEventListener('mousemove', onMouseMove);
                };
        
                draggableElement.addEventListener('mousedown', onMouseDown);
                document.addEventListener('mouseup', onMouseUp);
            }
        
            function closePopup(popupId) {
                document.getElementById(popupId).style.display = 'none';
            }
        
            document.addEventListener('DOMContentLoaded', () => {
                document.querySelectorAll('#alliframelist .draggableelement .draggable').forEach(makeDraggable);
            });
            
           
       
   
    });
    </script>
</body>
</html>
