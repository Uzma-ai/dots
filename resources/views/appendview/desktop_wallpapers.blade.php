<div class="relative wallpaper-div border border-gray overflow-hidden">
    @php
        $timestamp = time(); // Add a timestamp for cache busting
        $imagePath = asset('public/images/wallpapers/' . ($type == 0 ? 'dashboard' : 'login') . '/' . $wallpaper->image);
        $imagePathWithCacheBusting = $imagePath . '?' . $timestamp;
    @endphp

    <img class="object-cover w-full h-full" src="{{ $imagePathWithCacheBusting }}" data-id="{{ $wallpaper->id }}" />

    <div class="absolute top-2 right-2">
        <input class="c-checkbox" type="checkbox">
    </div>
    <div class="absolute bottom-1 right-2">
        @if($wallpaper->default == 0)
        <form action="javascript:void(0);" class="delete-form" data-id="{{ $wallpaper->id }}" onsubmit="deleteWallpaper('{{ $wallpaper->id }}')">
            @csrf
            @method('DELETE')
            <button type="submit" class="delete-btn">
                <i class="text-c-yellow ri-delete-bin-6-line"></i>
            </button>
        </form>
        @endif
    </div>
</div>
