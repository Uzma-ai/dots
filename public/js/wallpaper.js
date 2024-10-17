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
    return uploadWallpaperUrl;
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
    return deleteWallpaperUrl.replace(':id', id);
}

function deleteWallpaper(wallpaperId) {
    $.ajax({
        url: getWallpaperDeleteRoute(wallpaperId),
        method: 'DELETE',
        data: {
            _token: csrfToken // Laravel CSRF token for secure request
        },
        success: function(response) {
            if (response.success) {
                toastr.success(response.message);
                console.log(defaultDesktopWallpaper);
                const wallpaperElement = document.querySelector(`img[data-id="${wallpaperId}"]`);
                if (wallpaperElement) {
                    wallpaperElement.closest('.wallpaper-div').remove();
                }
                document.documentElement.style.setProperty('--desktop-wallpaper-1', `url(${defaultDesktopWallpaper})`);

                console.log('Desktop wallpaper updated to default.');

            } else {
                toastr.error(response.message || 'Failed to delete wallpaper.');
            }
        },
        error: function(xhr) {
            console.error(xhr.responseText);
            toastr.error('An error occurred while deleting the wallpaper.');
        }
    });
}




function updateUserWallpaper(wallpaperId, type) {
    $.ajax({
        url: updateWallpaperUrl,
        method: 'POST',
        data: {
            wallpaper_id: wallpaperId,
            type: type,
            _token: csrfToken
        },
        success: function(response) {
            if (response.success) {
                toastr.success(response.message);
                
                const wallpaperUrl = response.image;
                const timestamp = new Date().getTime();
                const wallpaperUrlWithCache = `${wallpaperUrl}?${timestamp}`;
                if (type === 0) {
                    document.documentElement.style.setProperty('--desktop-wallpaper-1', `url(${wallpaperUrlWithCache})`);
                } else {
                    document.documentElement.style.setProperty('--login-wallpaper-1', `url(${wallpaperUrlWithCache})`);
                    setCookie('login_wallpaper', wallpaperUrlWithCache, 7); // Store for 7 days
                }
                
                console.log(`Updated ${type === 0 ? 'Desktop' : 'Login'} Wallpaper URL:`, wallpaperUrlWithCache);
                
            } else {
                toastr.error(response.message || 'Failed to update wallpaper selection.');
            }
        },
        error: function(xhr) {
            console.error(xhr.responseText);
            toastr.error('An error occurred while updating the wallpaper selection.');
        }
    });
}

document.querySelectorAll('.c-checkbox').forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
        let wallpaperId = this.getAttribute('data-id');
        // Determine wallpaper type (0 for desktop, 1 for login)
        let wallpaperType = this.closest('.wallpapers').getAttribute('id') === 'desktop-wallpaper-list' ? 0 : 1;

        if (this.checked) {
            // Update the wallpaper via AJAX
            updateUserWallpaper(wallpaperId, wallpaperType);

            // Uncheck other checkboxes of the same wallpaper type
            document.querySelectorAll('.c-checkbox').forEach(function(otherCheckbox) {
                // Only uncheck if it's the same wallpaper type
                let otherWallpaperType = otherCheckbox.closest('.wallpapers').getAttribute('id') === 'desktop-wallpaper-list' ? 0 : 1;
                if (otherWallpaperType === wallpaperType && otherCheckbox.getAttribute('data-id') !== wallpaperId) {
                    otherCheckbox.checked = false;
                }
            });
        }
    });
});






document.addEventListener('DOMContentLoaded', function() {
    document.documentElement.style.setProperty('--desktop-wallpaper-1', `url(${currentDesktopWallpaper})`);
    document.documentElement.style.setProperty('--login-wallpaper-1', `url(${currentLoginWallpaper})`);
});


