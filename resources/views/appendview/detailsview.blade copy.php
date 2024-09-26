details
<!--detailContent-->
    <div id="detailContent" class="absolute bottom-0 top-1 flex h-11/12 w-full flex-col  border-r bg-c-lighten-gray  font-size-14">
        <div class="sticky top-0 z-10 flex items-start justify-between border-b px-4 pb-2">
            @php
            //print_r($defaultfolders);
            @endphp
            <div class="flex items-end space-x-4">
                <div class="flex-shrink-0">
                    <img
                    src="images/excel.svg"
                    alt="Document Image"
                    class="w-16 h-16"
                    />
                </div>
                <div class="flex flex-col justify-between">
                    <p>Home ({{ $totalFileCount }} items)</p>
                    <p>{{ $totalSize }}</p>
                    <p>Select a single file to get more information and share your file content</p>
                </div>
                <div class="space-x-4">
                    <button>
                    <i class="ri-star-line font-size-20"></i>
                    </button>
                    <button>
                    <i class="ri-pushpin-2-line font-size-20"></i>
                    </button>
                </div>
            </div>
        <div>
        <button
            class="p-1 hover:text-dark-yellow"
            onclick="togglePanel('detail');"
        >
            <i class="ri-close-fill font-size-18"></i>
        </button>
        </div>
    </div>

    <!--info content-->
    <div class="flex-1 overflow-auto scroll tab-content donut-space active" id="info"  >
        <!-- Content items -->
        <div class="flex justify-start space-x-14 mt-2">
        <p class="pl-5">Path</p>
        <p>
            Personal / Documents
            <button><i class="ri-file-copy-2-line"></i></button>
            <button><i class="ri-link"></i></button>
        </p>
        </div>
        <div class="flex justify-start space-x-7 mt-2">
        <p class="pl-5">Currently</p>
        <p>
            120 files&#40;121File, 1Folder&#41;
            <button><i class="ri-information-2-line"></i></button>
        </p>
        </div>
        <div class="flex justify-start space-x-14 mt-2">
        <p class="pl-5">Size</p>
        <p>797KB&#40;815,628 Byte&#41;</p>
        </div>
        <div class="flex justify-start space-x-7 mt-2">
        <p class="pl-5">Creation</p>
        <p>2024-09-21 13:47</p>
        </div>
        <div class="flex justify-start space-x-1 mt-2 border-b pb-2">
        <p class="pl-5">Modification</p>
        <p>Today 01:10</p>
        </div>
        <div class="flex justify-start space-x-8 mt-2">
        <p class="pl-5">Creator</p>
        <p class="flex items-start justify-center">
            <img
            src="images/me.png"
            alt="Creator Image"
            class="w-5 h-5 rounded-full mr-2"
            />Me
        </p>
        </div>
        <div class="flex justify-start space-x-11 mt-2">
        <p class="pl-5">Editor</p>
        <p class="flex items-start justify-center">
            <img
            src="images/me.png"
            alt="Editor Image"
            class="w-5 h-5 rounded-full mr-2"
            />Me
        </p>
        </div>
        <div class="flex justify-start space-x-3 mt-2 border-b pb-2">
        <p class="pl-5">Description</p>
        <p>
            Add document description
            <button><i class="ri-edit-2-fill"></i></button>
        </p>
        </div>
        <div class="flex justify-between mt-2">
        <p class="pl-5 font-semibold">File tag</p>
        <p>
            <i class="ri-bookmark-3-line pr-3"></i>
        </p>
        </div>
        <div class="flex justify-start space-x-11 mt-2">
        <p class="pl-5">No tags, click settings</p>
        </div>
        <!-- Add more content here to ensure scrolling works -->
        <div class="mt-10">
        <div class="flex justify-between mt-2">
            <p class="pl-5 font-semibold">File tag</p>
            <p>
            <i class="ri-bookmark-3-line pr-3"></i>
            </p>
        </div>
        <div class="flex justify-start space-x-11 mt-2">
            <p class="pl-5">No tags, click settings</p>
        </div>
        </div>
        <div class="mt-10">
        <div class="flex justify-between mt-2">
            <p class="pl-5 font-semibold">File tag</p>
            <p>
            <i class="ri-bookmark-3-line pr-3"></i>
            </p>
        </div>
        <div class="flex justify-start space-x-11 mt-2">
            <p class="pl-5">No tags, click settings</p>
        </div>
        </div>
    </div>

    <!--chat content-->
    <div class="flex-1 overflow-auto scroll tab-content donut-space relative" id="chat" >
        <div
        class="commentssection absolute bottom-0 flex h-full flex-col border-r bg-c-lighten-gray w-full"
        >
        <div
            class="sticky top-0 z-10 flex items-center justify-between border-b px-4 py-2"
        >
            <h3 class="font-medium font-size-16">Comments</h3>
            <div>
            <button
                class="pr-2"
                onclick="togglePane('#addcomment1')"
            >
                <i class="ri-chat-new-line ri-lg"></i>
            </button>
            </div>
        </div>
        <!--chat list-->
        <div class="flex-1 overflow-auto scroll comment-list">
            <div class="space-y-4 p-4">
            <div class="grid gap-2 border-b">
                <div class="flex items-start gap-3">
                <div class="h-8 w-8 rounded-full">
                    <img
                    src="images/profile.png"
                    alt="Avatar"
                    class="h-8 w-8 rounded-full"
                    />
                </div>
                <div class="flex-1 space-y-1">
                    <div class="flex items-center justify-between">
                    <div class="font-medium">John</div>
                    <div class="text-xs">10-07-2024 10:45</div>
                    </div>
                    <p>
                    This is a great document! I have a few
                    suggestions...
                    </p>
                    <div class="flex items-center gap-2">
                    <button class="p-2">
                        <i class="ri-reply-line"></i>
                    </button>
                    <button class="p-2">
                        <i class="ri-delete-bin-line"></i>
                    </button>
                    </div>
                </div>
                </div>
                <div class="ml-11 grid gap-2">
                <div class="flex items-start gap-3">
                    <div class="h-8 w-8 rounded-full">
                    <img
                        src="images/profile.png"
                        alt="Avatar"
                        class="h-8 w-8 rounded-full"
                    />
                    </div>
                    <div class="flex-1 space-y-1">
                    <div class="flex items-center justify-between">
                        <div class="font-medium">Sarah Anderson</div>
                        <div class="text-xs">1 hour ago</div>
                    </div>
                    <p>
                        I agree, those are great suggestions. Let me
                        add a few more...
                    </p>
                    <div class="flex items-center gap-2">
                        <button class="p-2">
                        <i class="ri-reply-line"></i>
                        </button>
                        <button class="p-2">
                        <i class="ri-delete-bin-line"></i>
                        </button>
                    </div>
                    </div>
                </div>
                </div>
                <div class="ml-11 grid gap-2">
                <div class="flex items-start gap-3">
                    <div class="h-8 w-8 rounded-full">
                    <img
                        src="images/profile.png"
                        alt="Avatar"
                        class="h-8 w-8 rounded-full"
                    />
                    </div>
                    <div class="flex-1 space-y-1">
                    <div class="flex items-center justify-between">
                        <div class="font-medium">Sarah Anderson</div>
                        <div class="text-xs">1 hour ago</div>
                    </div>
                    <p>
                        I agree, those are great suggestions. Let me
                        add a few more...
                    </p>
                    <div class="flex items-center gap-2">
                        <button class="p-2">
                        <i class="ri-reply-line"></i>
                        </button>
                        <button class="p-2">
                        <i class="ri-delete-bin-line"></i>
                        </button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="grid gap-2">
                <div class="flex items-start gap-3">
                <div class="h-8 w-8 rounded-full">
                    <img
                    src="images/profile.png"
                    alt="Avatar"
                    class="h-8 w-8 rounded-full"
                    />
                </div>
                <div class="flex-1 space-y-1">
                    <div class="flex items-center justify-between">
                    <div class="font-medium">John Doe</div>
                    <div class="text-xs">10-07-2024 10:45</div>
                    </div>
                    <p>
                    This is a great document! I have a few
                    suggestions...
                    </p>
                    <div class="flex items-center gap-2">
                    <button class="p-2">
                        <i class="ri-reply-line"></i>
                    </button>
                    <button class="p-2">
                        <i class="ri-delete-bin-line"></i>
                    </button>
                    </div>
                </div>
                </div>
                <div class="ml-11 grid gap-2">
                <div class="flex items-start gap-3">
                    <div class="h-8 w-8 rounded-full">
                    <img
                        src="images/profile.png"
                        alt="Avatar"
                        class="h-8 w-8 rounded-full"
                    />
                    </div>
                    <div class="flex-1 space-y-1">
                    <div class="flex items-center justify-between">
                        <div class="font-medium">Sarah Anderson</div>
                        <div class="text-xs">1 hour ago</div>
                    </div>
                    <p>
                        I agree, those are great suggestions. Let me
                        add a few more...
                    </p>
                    <div class="flex items-center gap-2">
                        <button class="p-2">
                        <i class="ri-reply-line"></i>
                        </button>
                        <button class="p-2">
                        <i class="ri-delete-bin-line"></i>
                        </button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!--Add comment-->
        <div
            id="addcomment1"
            class="addcomment flex items-center gap-x-2 sticky bottom-0 z-10 border-t px-4 py-2 hidden bg-c-lighten-gray relative"
        >
            <div class="w-3/4">
            <div
                class="mention-container relative bg-c-white border border-gray-3 p-2 rounded-lg"
            >
                <div
                contenteditable="true"
                class="mention-textbox w-full h-20 overflow-auto focus:outline-none"
                placeholder="Type your message here1..."
                ></div>
                <!-- Mention list -->
                <div
                class="mention-list absolute bottom-full h-28 overflow-y-auto mb-2 left-0 w-full bg-c-white border border-gray-3 rounded-lg shadow-lg mt-1 hidden"
                >
                <ul class="list list-none">
                    <!-- Mention list items will be injected here -->
                </ul>
                </div>
            </div>
            </div>
            <button
            class="border px-3 hover-bg-c-black hover-text-c-yellow text-sm py-1 rounded border-gray-600 bg-c-yellow"
            >
            Post
            </button>
        </div>
        </div>
    </div>

    <!-- tabs -->
    <div class="flex items-center sticky bottom-0 z-10 border-t bg-c-lighten-gray relative" >
        <button
        type="button"
        onclick="showTab(this)"
        class="flex flex-col justify-center items-center space-y-1 tab-control styled text-sm p-2 px-5 active"
        data-tab="donut-space"
        data-control="info"
        >
        <i class="ri-information-line ri-lg"></i>
        <span>Info</span>
        </button>
        <button
        type="button"
        onclick="showTab(this)"
        class="flex flex-col justify-center items-center space-y-1 tab-control styled text-sm p-2 px-5"
        data-tab="donut-space"
        data-control="chat"
        >
        <i class="ri-message-2-line ri-lg"></i>
        <span>Chat</span>
        </button>
    </div>
    </div>

    