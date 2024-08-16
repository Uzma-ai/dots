    @foreach($iframeapp as $iframe)
        <div class="relative parentiframe draggable-element">
                <div id="iframeicon{{ $iframe['filetype'].$iframe['appkey'] }}" data-popup-count="{{ count($iframe['files']) }}" data-iframefile-id = "{{ $iframe['filetype'].$iframe['files'][0]['filekey'] }}" data-iframe-id = "{{ $iframe['filetype'].$iframe['appkey'] }}" class="iframemainheadericon flex items-center justify-center text-white cursor-pointer">
                    <img class="app-icon" id ="iframeiconimage{{ $iframe['filetype'].$iframe['appkey'] }}" data-app-id ="iframeiconimage{{ $iframe['filetype'].$iframe['appkey'] }}" src="{{ asset($constants['APPFILEPATH'].$iframe['appicon']) }}" >
                </div>
            @if(count($iframe['files'])>1)
                <div class="hidden iframetabselement fixed top-12 left-1/2 transform -translate-x-1/2" id="iframetab{{ $iframe['filetype'].$iframe['appkey'] }}">
                    <div class="flex flex-row-reverse space-x-2 space-x-reverse">
                    
                    
                    @foreach($iframe['files'] as $iframefile)
                        @php 
                            $iframeicon = asset($constants['APPFILEPATH'].$iframe['appicon']);
                           
                           if($iframe['filetype'] =='document'){
                                $url = url('editfile/'.$iframefile['filekey']);
                            }else if($iframe['filetype'] =='folder'){
                                $url = url('filemanager/'.$iframefile['path']);
                            }else if($iframe['filetype'] =='setting'){
                                $url = url('useradmin');
                            }else if($iframe['filetype'] =='systemapp'){
                                if($iframe['applinktype']=="folder"){
                                    $url = url('filemanager/'.$iframe['applink']);
                                }else{
                                    $url = url($iframe['applink']);
                                }
                            }else if($iframe['filetype'] =='lightapp'){
                                $url = url($iframe['applink']);
                            }else{
                                
                            }
                        @endphp     
        
                            <div class="popup bg-white p-2 rounded shadow-md iframemainheaderpopup" id="iframefilepopupdet{{ $iframe['filetype'].$iframefile['filekey'] }}"  data-popup-count="{{ count($iframe['files']) }}" data-iframefile-id = "{{ $iframe['filetype'].$iframefile['filekey'] }}" data-iframe-id = "{{ $iframe['filetype'].$iframe['appkey'] }}" >
                                <div class="flex justify-between items-center -mt-2 mb-2">
                                    <div class="overflow-hidden scrollbar-hidden scroll-container max-w-full">
                                        <div class="whitespace-no-wrap mt-2 flex text-black scroll-content">
                                            <img class="mr-2" src="{{ $iframeicon }}"><span>{{ $iframefile['name'] }}</span>
                                        </div>
                                    </div>
                                    <button class="iframefilepopupclosebtn -mr-2 -mt-2 text-gray-500 hover:text-gray-700" data-filekey="{{ $iframefile['filekey'] }}" data-iframefile-id = "{{ $iframe['filetype'].$iframefile['filekey'] }}" data-appkey="{{ $iframe['appkey'] }}" data-filetype="{{ $iframe['filetype'] }}" data-isfile="{{ $iframe['isfile'] }}">
                                        <i class="ri-close-line"></i>
                                    </button>
                                </div>
                            </div>
        @endforeach
       
                    </div>
                </div>
    @endif
            </div>
     @endforeach
