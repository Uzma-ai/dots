@extends('layouts.filemanagercommon')
@section('title', 'File Manager')
@section('styles')
<!-- <link rel="stylesheet" href="{{ asset($constants['CSSFILEPATH'].'dashbord.css') }}">
<link rel="stylesheet" href="{{ asset($constants['CSSFILEPATH'].'filemanager.css') }}"> -->

@endsection
@section('content')

@php
// Split the path into components
//print_r($path);die;
$pathComponents = explode('/', base64UrlDecode($path));
$pathComponentsNew = $pathComponents;
 
// Remove the last elements
array_pop($pathComponentsNew);

// Reassemble the path
$updatedPath = implode('/', $pathComponentsNew);
if(empty($updatedPath)){
    $updatedPath = '';
}
//$pathnew = base64UrlEncode($path);

@endphp

    <main class="flex w-full h-full flex cm font-size-14">
      <!-- Sidebar -->
      @include('layouts.sidebar')
      <div class="flex-grow h-100 main">
        <div class="flex w-full h-full flex-col content">
          <div class="px-9 md:px-6 py-6 md:pb-6">
            <div class="flex items-center gap-4">
              <span class="text-xl text-c-black">File</span>
            </div>
          </div>
          <!-- topTaskbar in desktops -->
          @include('layouts.filemanager-header')
          
          <!--Main content -->
          <div class="relative loaddetails allapplist h-full overflow-y-auto scroll" >
            <!--grid container -->
            <!-- <div id="gridContainer" class="grid grid-cols-12 gap-4 transition-all duration-300 p-4 overflow-y-auto">              
            </div> --> 
            <!--table container -->            
            @include('layouts.columnview')
            <!--panes-->                      
          </div>         


          <!--upload popup-->
          
          <!--share popup-->
          <div
              id="sharePopup"
              role="dialog"
              class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 hidden"
            >
            <div
              class="bg-c-white rounded-xl shadow-lg w-11/12 md:w-3/4 lg:w-7/12 xl:w-1/2 2xl:w-2/5 max-w-7xl max-h-screen modal-content overflow-y-auto"
            >
              <div
                class="sticky z-10 bg-c-white top-0 flex justify-between items-center gap-2 border-b border-gray-3 p-4 px-6 w-full"
              >
                <div class="flex flex-col md:flex-row md:gap-6">
                  <h2 class="font-weight-500">Link Sharing</h2>
                  <p class="text-xs md:text-sm">
                    <span class="font-weight-500">Location:</span>
                    <span class=" ">/Personal/Documents/document01.docx</span>
                    <span class="font-weight-500">Share time:</span>
                    <span>Yesterday 15:48,</span>
                    <span class="font-weight-500">Downloads:</span>
                    <span> 0, </span>
                    <span class="font-weight-500">Views:</span>
                    <span>0</span>
                  </p>
                </div>
                <button onclick="togglePopup('sharePopup');">
                  <i class="ri-close-circle-fill ri-xl"></i>
                </button>
              </div>
              <form action="#" method="POST" class="p-4 px-6 text-xs md:text-sm space-y-3 overflow-auto-y h-96">
                @csrf
                
                <div class="flex flex-wrap items-center">
                  <label class="block w-full md:w-1/4 font-weight-500"
                    >URL:<span class="text-c-dark-red">*</span></label
                  >
                  <div class="flex w-full md:w-3/4">
                    <input
                      type="text"
                      class="flex-grow border border-gray-3 rounded-l-xl p-2 focus:outline-none focus:ring-0"
                      placeholder="Enter URL"
                      required
                    />
                    <button
                      class="border border-gray-3 bg-c-light-black1 hover-bg-c-yellow p-2 px-4"
                    >
                      <i class="ri-share-box-line"></i>
                    </button>
                    <button
                      class="border border-gray-3 bg-c-light-black1 hover-bg-c-yellow p-2 px-4"
                    >
                      <i class="ri-file-copy-2-line"></i>
                    </button>
                    <button
                      class="border border-gray-3 rounded-r-xl bg-c-light-black1 hover-bg-c-yellow p-2 px-4"
                    >
                      <i class="ri-qr-code-line"></i>
                    </button>
                  </div>
                </div>
                <div class="flex flex-wrap items-center">
                  <label class="block w-full md:w-1/4 font-weight-500"
                    >Password:<span class="text-c-dark-red">*</span></label
                  >
                  <div class="flex w-full md:w-3/4">
                    <input
                      type="password"
                      id="password"
                      class="flex-grow border border-gray-3 rounded-l-xl p-2 focus:outline-none focus:ring-0"
                      placeholder="Enter password"
                      required
                    />
                    <button
                      type="button"
                      class="border border-gray-3 rounded-r-xl bg-c-light-black1 hover-bg-c-yellow p-2"
                    >
                      Random
                    </button>
                  </div>
                </div>
                <p class="mt-2 w-full md:w-3/4 md:ml-auto text-left text-xs">
                  Only extract password to view, no privacy and security
                </p>
                <div class="flex flex-wrap items-center">
                  <label class="block w-full md:w-1/4 font-weight-500"
                    >Share to View:<span class="text-c-dark-red">*</span></label
                  >
                  <div class="flex w-full md:w-3/4">
                    <input
                      type="text"
                      class="flex-grow border border-gray-3 rounded-xl p-2 focus:outline-none focus:ring-0"
                      placeholder="Please enter multiple viewer"
                      required
                    />
                  </div>
                </div>
                <div class="flex flex-wrap items-center">
                  <label class="block w-full md:w-1/4 font-weight-500"
                    >Share to Edit:<span class="text-c-dark-red">*</span></label
                  >
                  <div class="flex w-full md:w-3/4">
                    <input
                      type="text"
                      class="flex-grow border border-gray-3 rounded-xl p-2 focus:outline-none focus:ring-0"
                      placeholder="Please enter multiple editor"
                      required
                    />
                  </div>
                </div>
                <div class="mt-2 w-full md:w-3/4 md:ml-auto text-left">
                  <button
                    type="button"
                    class="bg-c-light-black1 hover-bg-c-yellow p-2 px-4 rounded-lg flex items-center"
                    onclick="toggleDropdown('additionalSettings')"
                  >
                    Advanced
                    <i class="ri-arrow-drop-down-line ri-xl pl-2"></i>
                  </button>
                </div>

                <div id="additionalSettings" class="hidden pt-2 space-y-3">
                  <div class="flex flex-wrap items-center">
                    <label class="block w-full md:w-1/4 font-weight-500"
                      >Share title:</label
                    >
                    <input
                      type="text"
                      id="additionalOption1"
                      class="flex-grow border border-gray-3 rounded-xl p-2 w-full md:w-2/3 focus:outline-none focus:ring-0"
                      placeholder="Share file name by default, can be customized"
                    />
                  </div>
                  <div class="flex flex-wrap items-center">
                    <label class="block w-full md:w-1/4 font-weight-500"
                      >Need login:</label
                    >
                    <label
                      for="toggle"
                      class="toggle-switch flex items-center cursor-pointer w-full md:w-2/3"
                    >
                      <div class="relative">
                        <input type="checkbox" id="toggle" class="sr-only" />
                        <div
                          class="block bg-c-light-black1 w-14 h-7 rounded-full border toggle-bg"
                        ></div>
                        <div
                          class="dot absolute left-0.5 top-0.5 bg-c-white w-6 h-6 rounded-full transition"
                        ></div>
                      </div>
                      <p class="ml-4 text-xs">
                        Only internal member can access
                      </p>
                    </label>
                  </div>
                  <div class="flex flex-wrap items-center">
                    <label class="block w-full md:w-1/4 font-weight-500"
                      >Expiry date:</label
                    >
                    <label
                      for="toggle-2"
                      class="toggle-switch flex items-center cursor-pointer w-full md:w-2/3"
                    >
                      <div class="relative">
                        <input type="checkbox" id="toggle-2" class="sr-only" />
                        <div
                          class="block bg-c-light-black1 w-14 h-7 rounded-full border toggle-bg"
                        ></div>
                        <div
                          class="dot absolute left-0.5 top-0.5 bg-c-white w-6 h-6 rounded-full transition"
                        ></div>
                      </div>
                      <p class="ml-4 text-xs">
                        Automatically expire after the limit
                      </p>
                    </label>
                  </div>
                </div>
                <div class="flex justify-end pb-4">
                  <button
                    type="submit"
                    class="bg-c-light-gray text-c-white px-6 py-2 rounded-full"
                  >
                    Copy & Save
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
          <!--share popup end-->
        </div>
      </div>
      <!--Iframe popup-->
    </main>
<!--poup-->
@endsection
@section('scripts')
<!--<script src="{{ asset($constants['JSFILEPATH'].'filemanager.js') }}"></script>-->
<script src="{{ asset($constants['JSFILEPATH'].'sidebar.js') }}" ></script>
<script src="{{ asset($constants['JSFILEPATH'].'taskbar.js') }}" ></script>
<script src="{{ asset($constants['JSFILEPATH'].'tabs.js') }}" ></script>

<script>
  // const desktopapp = @json(route('desktopapp'));
  // const createFolderRoute = @json(route('createfolder'));
  // const createFileRoute = @json(route('createfile'));
  // const showFileDetail = @json(route('showpathdetail'));
  let path = @json($path);
</script>
    <script>
 
  document.addEventListener("DOMContentLoaded", () => {
    //  document.querySelector('.newfiledropdown').addEventListener('click', function() {
    //   document.querySelector('.newfiledropdownoption').classList.toggle('hidden');
     });           
    const links = {
      'desktop.html': 'link-desktop',
      'Recent.html': 'link-recent',
      'downloads.html': 'link-downloads',
      'filemanager.html': 'link-filemanager',
      'documents.html': 'link-documents',
      'applications.html': 'link-applications'
    };

    const currentPage = window.location.pathname.split('/').pop();

    const activeLinkId = links[currentPage];
    if (activeLinkId) {
      const activeLink = document.getElementById(activeLinkId);
      if (activeLink) {
        activeLink.classList.add('bg-black', 'text-orange-500', 'font-semibold');
      }
    }
      
    // Show path details based on the given path
    showapathdetail(path);
    function showapathdetail(path, list = ''){
        $.ajax({
            url: showFileDetail,
            method: 'GET',
            data: {
              path:path, 
              list:list
            },
            success: function (response) {
                $('.loaddetails').html(response.html);
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            }
        }); 
    } 
    
    //for showing details of files
    //showFiledetails(path, encodedId);
    function showFiledetails(path, encodedId = ''){
        $.ajax({
            url: showFileDetail,
            method: 'GET',
            data: {
              path:path, 
              encodedId:encodedId
            },
            success: function (response) {
                $('#detailContainer').html(response.html);
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            }
        }); 
    }

    // search functionality
    $('#searchFiles').on('keyup', function() {
      var query = $(this).val().trim();
      if (query.length > 0) {
          $.ajax({
              url: searchFileExploreRoute, 
              method: 'GET',
              data: { searchFiles: query, path: path },
              success: function(data) {
                $('.loaddetails').html(data.html);
              },
              error: function (xhr, status, error) {
                  console.error(xhr.responseText);
              }
          });
      } else {
        showapathdetail(path);
      }
    });

    // Toggle a class on an element
  const toggleClass = (element, className) => {
    element.classList.toggle(className);
  };

  // Toggle visibility of a popup
  const togglePopup = (popupId) => {
    const popup = document.getElementById(popupId);
    if (popup) toggleClass(popup, "hidden");
    else console.error(`Popup with id ${popupId} not found.`);
  };
    
  </script>

  
@endsection