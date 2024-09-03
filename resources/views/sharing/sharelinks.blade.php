@extends('layouts.common')
@section('title', 'File Manager')
@section('styles')
<!-- <link rel="stylesheet" href="{{ asset($constants['CSSFILEPATH'].'dashbord.css') }}">
<link rel="stylesheet" href="{{ asset($constants['CSSFILEPATH'].'filemanager.css') }}"> -->

@endsection
@section('content')

@php
// Split the path into components
///print_r($path);die;
$pathComponents = explode('/', base64UrlDecode($path));
$pathComponentsNew = $pathComponents;
 
// Remove the last elements
array_pop($pathComponentsNew);

// Reassemble the path
$updatedPath = implode('/', $pathComponents);
if(empty($updatedPath)){
    $updatedPath = '/';
}
//$pathnew = base64UrlEncode($path);
@endphp
    <main class="flex w-full h-full flex cm font-size-14">
      <!-- Sidebar -->
      @include('layouts.sidebar')
      <div class="flex-grow h-100 main">
        <div class="flex w-full h-full flex-col content">
          <div class="px-4 md:px-6 py-3 py-6 pb-2 md:pb-6">
            <div class="flex items-center gap-4">
              <span class="text-xl text-c-black">File</span>
            </div>
          </div>
          <!-- topTaskbar in desktops -->
          @include('layouts.filemanager-header')
          <!--Main content -->
          <div class="relative loaddetails allapplist h-full overflow-y-auto scroll">
            <!--grid container -->
            <!-- <div id="gridContainer" class="grid grid-cols-12 gap-4 transition-all duration-300 p-4 overflow-y-auto">
              
            </div> -->
            <!--table container -->
            @include('layouts.columnview')
               <!--optionbar -->
                    <div
                        class="transparent pl-5 border-b border-color-gray4 w-full h-16 bg-no-repeat bg-cover border-t border-gray-300">
                        <div class="flex items-center p-4 gap-8 relative">
                            <div class="relative">

                                <button class="flex items-center gap-2 newfiledropdown">
                                    </i>
                                    <h1>Link Sharing</h1>
                                    <i class="ri-arrow-down-s-line text-xs -ml-1 -mt-2"></i>
                                </button>
                                <!--<div class="absolute mt-2 hidden bg-white shadow-lg rounded-md newfiledropdownoption">-->
                                <!--  <ul class="py-1">-->
                                <!--    <li class="px-4 py-2 hover:bg-gray-200 cursor-pointer">-->
                                <!--      <i class="ri-file-text-line"></i>-->
                                <!--      <span class="ml-2">TXT</span>-->
                                <!--    </li>-->
                                <!--    <li class="px-4 py-2 hover:bg-gray-200 cursor-pointer">-->
                                <!--      <i class="ri-file-word-line"></i>-->
                                <!--      <span class="ml-2">Word</span>-->
                                <!--    </li>-->
                                <!--  </ul>-->
                                <!--</div>-->
                            </div>

                            <div class="relative flex items-center hidden" id="cancelshare">
                                <button class="flex gap-x-1">
                                    <i class="ri-close-fill ri-lg mt-1"></i><span>Cancel Link sharing</span>
                                </button>

                            </div>
                        </div>
                    </div>

                    <!--optiobarend -->

                    <div class="relative h-full overflow-y-auto scroll">
                        <div class="w-full mx-auto rounded">
                            <!--personal space-->
                            <div class="transition">
                                <!-- header -->
                                <div
                                    class="accordion-header cursor-pointer mt-3 transition flex justify-between px-6 items-center h-8 hover-bg-c-yellow border-b">
                                    <h6 class="font-weight-500 text-base">Personal Space (You Have Shared Data To Others)</h6>
                                    <i class="ri-arrow-drop-right-line ri-xl"></i>
                                </div>
                                <!-- Content -->
                                <div class="accordion-content pt-0 overflow-hidden max-h-0">
                                    <!--grid container -->
                                    <div id="gridContainer" class="overflow-y-auto personal">
                                    </div>
                                </div>
                            </div>

                            <div class="transition">
                                <!-- header -->
                                <div
                                    class="accordion-header cursor-pointer transition flex justify-between px-6 items-center h-8 hover-bg-c-yellow border-b">
                                    <h6 class="font-weight-500 text-base">Departmental Space (Others Shared With You)</h6>
                                    <i class="ri-arrow-drop-right-line ri-xl"></i>
                                </div>
                                <!-- Content -->
                                <div class="accordion-content pt-0 overflow-hidden max-h-0">
                                    <!--grid container -->
                                    <div id="gridContainer" class="overflow-y-auto document">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <!--panes-->
            <div id="panel" class="resizable-sidebar hidden md:w-4/12 xl:w-1/5">
              <div class="resizer"></div>
              <!--detailpan-->
              @include('layouts.detailpan')
              <!--preview pane-->
              @include('layouts.previewpan')
            
            </div>
          </div>
          <!--upload popup-->
          <!--share popup-->
        </div>
      </div>
      <!--Iframe popup-->
    </main>

@endsection
@section('scripts')

<!--poup-->
<!-- <script src="{{ asset($constants['JSFILEPATH'].'filemanager.js') }}"></script> -->
<script src="{{ asset($constants['JSFILEPATH'].'sidebar.js') }}" ></script>
<script src="{{ asset($constants['JSFILEPATH'].'taskbar.js') }}" ></script>
<script src="{{ asset($constants['JSFILEPATH'].'tabs.js') }}" ></script>




    <!--poup-->
    <script src="{{ asset($constants['JSFILEPATH'] . 'filemanager.js') }}"></script>
    <script src="{{ asset($constants['JSFILEPATH'] . 'qrcode.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/js/multi-select-tag.js"></script>

    <script>
        $(document).ready(function() {
            $('#cancelshare, .cancel-share-btn').click(function() {
                var folderIds = [];
                var fileIds = [];

                // Collect selected folder and file IDs
                $('.appcheckbox:checked').each(function() {
                    var folderId = $(this).data('folder-id');
                    var fileId = $(this).data('file-id');

                    if (folderId) {
                        folderIds.push(folderId);
                    }
                    if (fileId) {
                        fileIds.push(fileId);
                    }
                });

                console.log('Selected folder IDs:', folderIds);
                console.log('Selected file IDs:', fileIds);

                var id = $(this).data('id');
                var row = $(this).closest('tr');
                console.log('>>>>>> ', id);
                
                var confirmMessage = 'Are you sure you want to cancel the share?';
                var useRoute = $(this).hasClass('cancel-share');

                if (!useRoute || confirm(confirmMessage)) {
                    var url = '{{ route('cancel.share2') }}';

                    var type = 'POST';

                    $.ajax({
                        url: url,
                        type: type,
                        data: {
                            _token: '{{ csrf_token() }}',
                            folderIds: folderIds,
                            fileIds: fileIds
                        },
                        success: function(response) {
                            if (useRoute) {
                                location.reload();
                            } else if (response.success) {
                                row.remove();
                            } else {
                                alert('An error occurred while cancelling the share.');
                            }
                        },
                        error: function(xhr) {
                            alert('An error occurred. Please try again later.');
                        }
                    });
                }
            });
        });


        const cancel = document.getElementById("cancelshare");

        function togglebutton() {
            cancel.classList.toggle("hidden");
        }
    </script>
    <script>
        const desktopapp = @json(route('desktopapp'));
        const createFolderRoute = @json(route('createfolder'));
        const createFileRoute = @json(route('createfile'));
        const showFileDetail = @json(route('showsharedetail'));
    </script>
    <script>
        //checkbox enable
        $(document).ready(function() {

            $(document).on('click', '.appcheckbox', function() {
                if ($('.appcheckbox:checked').length > 0) {
                    $('#cancelshare').removeClass('hidden');
                } else {
                    $('#cancelshare').addClass('hidden');
                }
            });

        });
        document.addEventListener("DOMContentLoaded", () => {
            document.querySelector('.newfiledropdown').addEventListener('click', function() {
                document.querySelector('.newfiledropdownoption').classList.toggle('hidden');
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
            showapathdetail();

            function showapathdetail() {
                $.ajax({
                    url: showFileDetail,
                    method: 'GET',

                    success: function(response) {
                        // Update the app list container with the updated list
                        $('.personal').html(response.html);

                        $('.document').html(response.html2);

                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }
        });
    </script>
    <script>
        const accordionHeader = document.querySelectorAll(".accordion-header");
        // on page load the content of accordion is display
        window.addEventListener("load", () => {
            accordionHeader.forEach((header) => {
                const accordionContent =
                    header.parentElement.querySelector(".accordion-content");
                let accordionMaxHeight = accordionContent.style.maxHeight;
                accordionContent.style.maxHeight = `${
        accordionContent.scrollHeight + 32
      }px`;
                header
                    .querySelector("i")
                    .classList.remove("ri-arrow-drop-right-line");
                header.querySelector("i").classList.add("ri-arrow-drop-down-line");
            });
        });
        // on click of accordion header show content
        accordionHeader.forEach((header) => {
            header.addEventListener("click", function() {
                const accordionContent =
                    header.parentElement.querySelector(".accordion-content");
                let accordionMaxHeight = accordionContent.style.maxHeight;

                // Condition handling
                if (accordionMaxHeight == "0px" || accordionMaxHeight.length == 0) {
                    accordionContent.style.maxHeight = `${
          accordionContent.scrollHeight + 32
        }px`;
                    header
                        .querySelector("i")
                        .classList.remove("ri-arrow-drop-right-line");
                    header.querySelector("i").classList.add("ri-arrow-drop-down-line");
                } else {
                    accordionContent.style.maxHeight = `0px`;
                    header.querySelector("i").classList.add("ri-arrow-drop-right-line");
                    header
                        .querySelector("i")
                        .classList.remove("ri-arrow-drop-down-line");
                }
            });
        });
    </script>


    

  
@endsection