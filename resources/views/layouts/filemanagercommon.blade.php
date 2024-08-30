
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
    <!-- <link rel="stylesheet" href="{{ asset($constants['CSSFILEPATH'].'cs.css') }}" /> -->


    @yield('styles')

  </head>
  <body class="w-full h-screen">
      <meta name="csrf-token" content="{{ csrf_token() }}">


      
         <!-- <header id="iframeheaders" class="transparent p-2 text-white flex justify-center items-center fixed top-0 left-0 right-0 mainiframeiconheader mainscreen"> -->

    
    <!--///// iframe -->
    <div id="alliframelist">
        
    </div>

    <!--///// Context Menu -->
    <div id="context-menu" class="context-menu context-menulist hidden bg-c-white">
        
    </div>
    <div id="app-contextmenu" class="context-menu context-menulist hidden bg-c-white">
    </div>
    <!--//// Context Menu End-->
    
<!-- Upload popup -->
<div id="popupuploadfiles" class="fixed inset-0 flex z-20 items-center justify-center bg-gray-800 bg-opacity-50 hidden">
    <div class="popup-content bg-white rounded-lg shadow-lg p-6 w-full max-w-2xl">
        <!-- Header -->
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">Local Upload</h2>
            <button id="close-popup" class="text-2xl">
                <i class="ri-close-line"></i>
            </button>
        </div>
        
        <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-4">File Upload</h2>
            <div id="dropzone" class="border-2 border-dashed border-gray-300 p-6 rounded-lg text-center">
                Drag and drop files here or click to upload
            </div>
            <input type="file" id="file-input" class="hidden" multiple>
            <div id="file-list-container" class="mt-4 space-y-2 hidden">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr >
                            <th class="py-2 px-4 text-left">Name</th>
                            <th class="py-2 px-4 text-left">Size</th>
                            <th class="py-2 px-4 text-left">Progress</th>
                        </tr>
                    </thead>
                    <tbody id="file-list"></tbody>
                </table>
            </div>
        </div>
    </div>
</div>

   
   
    @yield('content')

    
    <!--end here -->



<script>
      const desktopapp = @json(route('desktopapp'));
      const contextmenu = @json(route('contextmenu'));
      const createFolderRoute = @json(route('createfolder'));
      const createFileRoute = @json(route('createfile'));
      const showFileDetail = @json(route('showpathdetail'));
      const  renameroute= @json(route('renamefile'));
      const deleteRoute = @json(route('deletefile'));
      const copyRoute =@json(route('copyfile'));
      const pasteRoute =@json(route('pastefile'));
      const closeIframeRoute =@json(route('closeiframe'));
      const openIframeRoute =@json(route('openiframe'));
      const uploadRoute =@json(route('upload'));
      const leftArrowClick =@json(route('leftarrowclick'));
      const rightArrowClick =@json(route('rightarrowclick'));


</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/toastr.min.js"></script>

<script src="{{ asset($constants['JSFILEPATH'].'animation.js') }}" ></script>

<script src="{{ asset($constants['JSFILEPATH'].'common.js') }}" ></script>
<script src="{{ asset($constants['JSFILEPATH'].'taskbar.js') }}" ></script>

@yield('scripts')

<!-- <script src="{{ asset($constants['JSFILEPATH'].'taskbar.js') }}" ></script> -->


 
 
</body>
</html>