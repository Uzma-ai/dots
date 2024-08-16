     @foreach($iframeapp as $iframe)
        @foreach($iframe['files'] as $iframefile)

            @php 
             
               if($iframe['filetype'] =='document'){
                    $url = url('editfile/'.$iframefile['filekey']);
                }else if($iframe['filetype'] =='folder'){
                    $url = url('dashboard/#filemanager');
                    //$url = url('dashboard/#filemanager?path='.$iframefile['path']);
                }else if($iframe['filetype'] =='setting'){
                    $url = url('useradmin');
                }else if($iframe['filetype'] =='systemapp'){
                    if($iframe['applinktype']=="folder"){
                        $url = url('filemanager/'.$iframe['path']);
                    }else{
                        $url = url($iframe['applink']);
                    }
                }else if($iframe['filetype'] =='lightapp'){
                    $url = url($iframe['applink']);
                }else{
                    
                }
            @endphp 
               <!--Iframe popup-->
                <div id="iframepopup{{ $iframe['filetype'].$iframefile['filekey'] }}" data-app-id="iframepopup{{ $iframe['filetype'].$iframefile['filekey'] }}" class="draggableelement box popupiframe fixed inset-0 bg-black-900 bg-opacity-50 flex items-center justify-center rounded-lg hidden">
                        <div class="draggable bg-opacity-70  shadow-lg w-full h-full relative">
                        <div class="flex justify-between items-center p-1 pr-2 border-b bg-c-gray-gradient">
                            <span class="text-lg flex font-semibold">
                            <img class="w-5 h-5 mt-1" src="{{ asset($constants['APPFILEPATH'] . $iframe['appicon']) }}"/>
                            <h2 class="text-white ml-2 font-thin">
                                {{ $iframe['appname'] }}
                            </h2>
                            </span>
                            <div class="flex space-x-1">
                            <a href="#"  class="minimizeiframe-btn" data-iframe-id="{{ $iframe['filetype'].$iframefile['filekey'] }}"><img src="{{ asset($constants['IMAGEFILEPATH'].'minimize'.$constants['ICONEXTENSION'])}}"/></a>
                            <a href="#" class="maximizeiframe-btn" data-iframe-id="{{ $iframe['filetype'].$iframefile['filekey'] }}"><img src="{{ asset($constants['IMAGEFILEPATH'].'maximize'.$constants['ICONEXTENSION'])}}"/></a>
                            <a href="#" class="closeiframe-btn" data-filekey="{{ $iframefile['filekey'] }}" data-iframefile-id = "{{ $iframe['filetype'].$iframefile['filekey'] }}" data-appkey="{{ $iframe['appkey'] }}" data-filetype="{{ $iframe['filetype'] }}" data-isfile="{{ $iframe['isfile'] }}"><img src="{{ asset($constants['IMAGEFILEPATH'].'close'.$constants['ICONEXTENSION'])}}"/></a>
                            </div>
                        </div>
                        <!--comment section-->
                        
                            <!--chat list-->
                            
                            <!--Add comment-->
                            
                        <!--Iframe-->
                        <iframe id="iframe{{ $iframe['filetype'].$iframefile['filekey'] }}" src="{{ $url }}" class="w-full h-full frame"></iframe>
                        <!--chat button-->
                        <!-- <div class="absolute bottom-5 left-5 bg-gray-300 rounded-full px-2 py-1 commentbutton">
                            <button class="comment" data-filekey="{{ $iframe['filetype'] . $iframefile['filekey'] }}" onclick="togglePane('.commentssection')">
                            <i class="ri-chat-4-line ri-lg"></i>
                            </button>
                        </div> -->
                        </div>
                    </div>
                <!-- iframe close -->
        @endforeach
     @endforeach