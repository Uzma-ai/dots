<!--detailContent-->
<div id="detailContent" class="absolute bottom-0 top-1 flex h-11/12 w-full flex-col  border-r bg-c-lighten-gray font-size-14">
    @if($path == "/")    
    <div class="sticky top-0 z-10 flex items-start justify-between border-b px-4 pb-2">
        <div class="flex items-end space-x-4">
                <div class="flex-shrink-0">
                    <img class="w-16 h-16" src="{{ asset($constants['IMAGEFILEPATH'] . 'Home.png') }}" alt="folder image" />
                </div>
                <div class="flex flex-col justify-between">
                    <p>Home ({{ $totalFileCount }} items)</p>
                    <p>{{ $totalSize }}</p>
                    <p>Select a single folder to get more information and share your content</p>
                </div>
            </div>
            <div>
                <button class="p-1 hover:text-dark-yellow" onclick="togglePanel('detail');">
                    <i class="ri-close-fill font-size-18"></i>
                </button>
            </div>
        </div>
    @endif

    @if($filepath == "Document")
    Document   
    @endif

    @if($filepath == "Desktop")
    Document 
    @endif

    @if($filepath == "Download")
    Document 
    @endif

    @if($filepath == "Recyclebin")
    Document 
    @endif

    

</div>
