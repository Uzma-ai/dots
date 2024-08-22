@foreach ($results['files'] as $filekey => $file)
    <div class="image-file border-t border-c-dark-gray mt-1 p-3">
        <h1 class="text-xl font-medium mb-2">{{ $filekey }}</h1>
        <ul>
            @foreach ($file as $filedet)
                <a href="{{ url('/filemanager/' . base64UrlEncode($filedet['parentpath'])) }}">
                    <li class="flex items-center gap-4">
                        <img class="w-8 h-8"
                            src="{{ asset($constants['FILEICONPATH'] . $filedet['extension'] . '.png') }}" alt="">
                        <p>{{ $filedet['name'] }}</p>
                    </li>
                </a>
            @endforeach
        </ul>
    </div>
@endforeach
<div class="image-file border-t border-c-dark-gray mt-1 p-3">
    <h1 class="text-xl font-medium mb-2">Folder</h1>
    <ul>
        @foreach ($results['folders'] as $folder)
            @php
                $folderpath = explode('/home/sizafcom/desktop2.sizaf.com/public/rootdir', $folder->path);
            @endphp
            <a href="{{ url('/filemanager/' . base64UrlEncode($folder->path)) }}">
                <li class="flex items-center gap-4">
                    <img class="w-8 h-8" src="{{ asset($constants['FILEICONPATH'] . 'folder.png') }}" alt="">
                    <p>{{ $folder->name }}</p>
                </li>
            </a>
        @endforeach
    </ul>
</div>
