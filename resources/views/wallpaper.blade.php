@extends('layouts.settings')
@section('title', 'Wallpaper')
@section('content')

@include('layouts.alert')

<div class="flex-grow h-100 main">
    <div class="flex w-full h-full flex-col content">
        <div class="px-9 lg:px-5 py-4">
            <div class="flex items-center gap-4">
                <img class="w-16" src="{{ asset($constants['IMAGEFILEPATH'] . 'profile.png') }}" alt="user image" />
                <span class="text-lg font-normal text-c-black">Administrator</span>
            </div>
        </div>

        <div class="taskbar bg-no-repeat bg-cover bg-center flex items-center justify-between px-5 py-4">
            <div class="flex items-center gap-4 w-full">
                <span class="text-c-black font-medium">Wallpaper</span>
            </div>
        </div>

        <div class="w-full h-full px-5">
            <div class="py-5 flex items-center gap-4 border-b border-gray tabs">
                <label for="desktop-wallpaper" class="cursor-pointer radio-border">
                    <input type="radio" name="type" id="desktop-wallpaper" value="0" checked />
                    <span class="text-c-black font-normal">Desktop wallpaper</span>
                    <div></div>
                </label>
                <label for="login-wallpaper" class="cursor-pointer radio-border">
                    <input type="radio" name="type" id="login-wallpaper" value="1" />
                    <span class="text-c-black font-normal">Login wallpaper</span>
                    <div></div>
                </label>
            </div>
            <!-- dektop wallpaper display -->
            <div class="wallpapers w-full py-4" id="desktop-wallpapers" style="display: block;">
                <span class="text-c-black font-medium">Choose your favourite desktop wallpaper</span>
                <div class="wallpapers w-full pt-4" id="desktop-wallpaper-list">
                    <div id="add-desktop" class="border border-c-yellow bg-c-lighten-gray flex flex-col gap-3 items-center justify-center">
                        <div class="w-10 h-10 bg-c-yellow rounded-full flex items-center justify-center">
                            <i class="ri-add-large-fill ri-lg"></i>
                        </div>
                        <span class="text-c-black font-medium text-sm sm:text-base">Add new wallpaper</span>
                    </div>

                    @foreach($desktopWallpapers as $wallpaper)
                    @include('appendview.desktop_wallpapers', ['wallpaper' => $wallpaper, 'type' => 0])
                    @endforeach
                </div>
                <div class="pt-6 flex items-center justify-end">
                    <button
                        class="bg-c-black hover-bg-c-black text-white rounded-full w-32 py-1.5 text-lg save">
                        Save
                    </button>
                </div>
            </div>
            <!-- login wallpaper display -->
            <div class="py-4" id="login-wallpapers" style="display: none;">
                <span class="text-c-black font-medium">Choose your favourite login wallpaper</span>
                <div class="wallpapers w-full pt-4" id="login-wallpaper-list">
                    <div id="add-login" class="border border-c-yellow bg-c-lighten-gray flex flex-col gap-3 items-center justify-center">
                        <div class="w-10 h-10 bg-c-yellow rounded-full flex items-center justify-center">
                            <i class="ri-add-large-fill"></i>
                        </div>
                        <span class="text-c-black font-medium">Add new wallpaper</span>
                    </div>

                    @foreach($loginWallpapers as $wallpaper)
                    @include('appendview.desktop_wallpapers', ['wallpaper' => $wallpaper, 'type' => 1])
                    @endforeach
                </div>
                <div class="pt-6 flex items-center justify-end">
                    <button
                        class="bg-c-black hover-bg-c-black text-white rounded-full w-32 py-1.5 text-lg save">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Upload New Wallpaper -->
<div id="uploadModal" class="modal hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-white p-6 rounded-lg w-96">
        <h2 class="text-lg font-bold mb-4">Upload New Wallpaper</h2>
        <form id="uploadForm" onsubmit="uploadWallpaper(); return false;" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <input type="file" name="image" id="image" required>
            </div>
            <input type="hidden" name="type" id="wallpaperType" value="0">
            <div class="flex justify-end gap-4">
                <button type="button" id="closeModal" class="bg-gray-500 text-white py-2 px-4 rounded">Cancel</button>
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Upload</button>
            </div>
        </form>
    </div>
</div>

<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<script>
    document.getElementById('add-login').addEventListener('click', function() {
        document.getElementById('wallpaperType').value = '1';
        document.getElementById('uploadModal').classList.remove('hidden');
    });

    document.getElementById('add-desktop').addEventListener('click', function() {
        document.getElementById('wallpaperType').value = '0';
        document.getElementById('uploadModal').classList.remove('hidden');
    });

    document.getElementById('closeModal').addEventListener('click', function() {
        document.getElementById('uploadModal').classList.add('hidden');
    });

    document.querySelectorAll('input[name="type"]').forEach(function(radio) {
        radio.addEventListener('change', function() {
            let selectedType = this.value;
            document.getElementById('desktop-wallpapers').style.display = (selectedType == "0") ? 'block' : 'none';
            document.getElementById('login-wallpapers').style.display = (selectedType == "1") ? 'block' : 'none';
        });
    });

    function getWallpaperUploadRoute() {
        return "{{ url('/wallpaper/store') }}";
    }

    function uploadWallpaper() {
        const formData = new FormData(document.getElementById('uploadForm'));

        $.ajax({
            url: getWallpaperUploadRoute(),
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
            success: function(response) {
                if (response.success) {
                    let wallpaperList = document.getElementById(response.type == 0 ? 'desktop-wallpaper-list' : 'login-wallpaper-list');
                    let wallpaperDiv = document.createElement('div');
                    wallpaperDiv.className = 'relative wallpaper-div border border-gray overflow-hidden';
                    const timestamp = new Date().getTime();
                    const imagePathWithCacheBusting = response.image + '?' + timestamp;
                    let wallpaperImage = `
                    <img class="object-cover w-full h-full" src="${imagePathWithCacheBusting}" data-id="${response.wallpaper_id}" alt="Wallpaper" onload="console.log('Image loaded successfully')" onerror="console.error('Failed to load image')">
                    <div class="absolute top-2 right-2">
                        <input class="c-checkbox" type="checkbox">
                    </div>
                    <div class="absolute bottom-1 right-2">
                        <form action="javascript:void(0);" class="delete-form" data-id="${response.wallpaper_id}" onsubmit="deleteWallpaper('${response.wallpaper_id}')">
                            <button type="submit" class="delete-btn">
                                <i class="text-c-yellow ri-delete-bin-6-line"></i>
                            </button>
                        </form>
                    </div>
                `;
                    wallpaperDiv.innerHTML = wallpaperImage;
                    let addNewWallpaperDiv = wallpaperList.querySelector('#add-desktop, #add-login');
                    if (addNewWallpaperDiv) {
                        wallpaperList.insertBefore(wallpaperDiv, addNewWallpaperDiv.nextSibling);
                    } else {
                        wallpaperList.appendChild(wallpaperDiv);
                    }
                    wallpaperList.offsetHeight;
                    document.getElementById('uploadModal').classList.add('hidden');
                    toastr.success(response.message);
                } else {
                    toastr.error(response.message || 'Failed to upload wallpaper.');
                }
            },
            error: function(xhr) {
                console.error(xhr.responseText);
                toastr.error('An error occurred while uploading the wallpaper.');
            }
        });
    }
















    function getWallpaperDeleteRoute(id) {
        return "{{ url('/wallpaper/delete/') }}" + "/" + id;
    }

    function deleteWallpaper(wallpaperId) {
        $.ajax({
            url: getWallpaperDeleteRoute(wallpaperId), // Use the dynamically generated route
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}', // Ensure CSRF token is included
            },
            success: function(response) {
                if (response.success) {
                    document.querySelector(`img[data-id="${wallpaperId}"]`).closest('.wallpaper-div').remove();
                    toastr.success(response.message); // Show success notification
                } else {
                    toastr.error(response.message || 'Failed to delete wallpaper.'); // Show error notification
                }
            },
            error: function(xhr) {
                console.error(xhr.responseText);
                toastr.error('An error occurred while deleting the wallpaper.'); // Show error notification for AJAX failure
            }
        });
    }
</script>

@endsection