
<script src="{{ asset($constants['JSFILEPATH'].'common.js') }}" ></script>
<style>
#sharePopup {
    position: fixed;
    inset: 0;
    background: rgba(31, 41, 55, 0.8); 
    justify-content: center;
    align-items: center;
    z-index: 50;
}

#sharePopup .modal-content {
    background: white;
    border-radius: 0.75rem;
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
    width: 90%;
    max-width: 40rem;
    max-height: 90vh;
    overflow-y: auto;
}


    </style>
<div id="sharePopup" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50">
    <div
        class="bg-c-white rounded-xl shadow-lg w-11/12 md:w-3/4 lg:w-7/12 xl:w-1/2 2xl:w-2/5 max-w-7xl max-h-screen overflow-y-auto">
        <div class="flex justify-between items-center gap-2 border-b border-gray-3 p-4 px-6 w-full">
            <div class="flex flex-col md:flex-row md:gap-6">
                <h2 class="font-size-20 md:text-xl font-weight-500">
                    Link Sharing
                </h2>
                <p class="text-xs md:text-sm lg:text-base">
                    <span class="font-weight-500">Location:</span>
                    
                    <span class="font-weight-500">Share time:</span> dummyy<span
                        class="font-weight-500">Downloads:</span> 0,
                    <span class="font-weight-500">Views:</span> 0
                </p>
            </div>
            <button id="ClosePopup">
            <i class="ri-close-circle-fill text-black ri-lg"></i>
                <!-- <img src="{{ asset($constants['IMAGEFILEPATH'] . 'cancel-fill.svg') }}" alt="Cancel"
                    class="max-w-none" /> -->
            </button>
        </div>
        <form class="p-4 px-6 text-xs md:text-sm lg:text-base space-y-3 overflow-auto-y h-96" method="POST"
            action="">
            @csrf
            <input type="hidden" name="filetype" value="">
            <input type="hidden" name="id" value="">
            <input type="hidden" name="oldId" value="">
            <div class="flex flex-wrap items-center">
                <label class="block w-full md:w-1/4 font-weight-500">URL:<span class="text-c-dark-red">*</span></label>
                <div class="flex w-full md:w-3/4">
                    <input type="text" name="url"
                        class="flex-grow border border-gray-3 rounded-l-xl p-2 focus:outline-none focus:ring-0"
                        value="" readonly />
                    <a href="" target="_blank"
                        class="border border-gray-3 bg-c-light-black1 hover-bg-c-yellow p-2 px-4">
                        <i class="ri-share-box-line"></i>
                    </a>
                    <button type="button"
                        class="border border-gray-3 bg-c-light-black1 hover-bg-c-yellow p-2 px-4 ClicktoCopy">
                        <i class="ri-file-copy-2-line"></i>
                    </button>
                    <button type="button"
                        class="border border-gray-3 rounded-r-xl bg-c-light-black1 hover-bg-c-yellow p-2 px-4 showqrcode">
                        <i class="ri-qr-code-line"></i>
                    </button>
                </div>
            </div>

            <div class="flex flex-wrap items-center">
                <label class="block w-full md:w-1/4 font-weight-500">Password:</label>
                <div class="flex w-full md:w-3/4">
                    <input type="text" id="Password"
                        class="flex-grow border border-gray-3 rounded-l-xl p-2 focus:outline-none focus:ring-0"
                        placeholder="Enter password" name="password" value="" />
                    <button type="button" id="RandomPassword"
                        class="border border-gray-3 rounded-r-xl bg-c-light-black1 hover-bg-c-yellow p-2">
                        Random
                    </button>
                </div>
            </div>
            <p class="mt-2 w-full md:w-3/4 md:ml-auto text-left">
                Only extract password to view, no privacy and security
            </p>
            <div class="flex flex-wrap gap-y-2 items-center">
                <div class="w-1/4 font-medium text-c-black text-base">
                    Share to view:<span class="text-red-500">*</span>
                </div>
                <div class="flex gap-2 ml-auto w-3/4 flex-wrap sm:flex-nowrap">
                    <label for="Users" class="cursor-pointer radio-button other-labels">
                        <input type="checkbox" name="share_to[]" id="Users" value="users"
                             />
                        <span
                            class="flex items-center justify-center gap-1 px-2 py-1.5 w-24 rounded text-c-black bg-c-light-black1"><i
                                class="ri-user-add-line text-c-black"></i>Users</span>
                    </label>
                    <label for="Groups" class="cursor-pointer radio-button other-labels">
                        <input type="checkbox" name="share_to[]" id="Groups" value="groups"
                            />
                        <span
                            class="flex items-center justify-center gap-1 px-2 py-1.5 w-24 rounded text-c-black bg-c-light-black1"><i
                                class="ri-group-line text-c-black"></i>Groups</span>
                    </label>
                    <label for="Roles" class="cursor-pointer radio-button other-labels">
                        <input type="checkbox" name="share_to[]" id="Roles" value="role"
                             />
                        <span
                            class="flex items-center justify-center gap-1 px-2 py-1.5 w-24 rounded text-c-black bg-c-light-black1"><i
                                class="ri-suitcase-line text-c-black"></i>Role</span>
                    </label>
                </div>
                <div id="DivUsers" class="w-3/4 ml-auto"
                    style="">
                    <div class="flex flex-wrap gap-2 items-center flex-grow">
                        <select data-placeholder="Select content" multiple
                            class="label ui selection fluid dropdown w-full rounded-xl" name="users[]">
                            <option value="">Please choose the user</option>
                           
                                <option value=""
                                    >
                                </option>
                            
                        </select>
                    </div>
                </div>
                <div id="DivGroups" class="w-3/4 ml-auto"
                    style="">
                    <div class="flex flex-wrap gap-2 items-center flex-grow">
                        <select data-placeholder="Select content" multiple
                            class="label ui selection fluid dropdown w-full rounded-xl" name="groups[]">
                            <option value="">Please choose the group</option>
                           
                                <option value=""
                                    >
                                </option>
                           
                        </select>
                    </div>
                </div>
                <div id="DivRoles" class="w-3/4 ml-auto"
                    style="">
                    <div class="flex flex-wrap gap-2 items-center flex-grow">
                        <select data-placeholder="Select content" multiple
                            class="label ui selection fluid dropdown w-full rounded-xl" name="roles[]">
                            <option value="">Please choose the role</option>
                           
                                <option value=""
                                   >
                                </option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap gap-y-2 items-center">
                <div class="w-1/4 font-medium text-c-black text-base">
                    Share to Edit:<span class="text-red-500">*</span>
                </div>
                <div class="flex gap-2 ml-auto w-3/4 flex-wrap sm:flex-nowrap">
                    <label for="EditUsers" class="cursor-pointer radio-button other-labels">
                        <input type="checkbox" name="edit_share_to[]" id="EditUsers" value="users"
                             />
                        <span
                            class="flex items-center justify-center gap-1 px-2 py-1.5 w-24 rounded text-c-black bg-c-light-black1"><i
                                class="ri-user-add-line text-c-black"></i>Users</span>
                    </label>
                    <label for="EditGroups" class="cursor-pointer radio-button other-labels">
                        <input type="checkbox" name="edit_share_to[]" id="EditGroups" value="groups"
                             />
                        <span
                            class="flex items-center justify-center gap-1 px-2 py-1.5 w-24 rounded text-c-black bg-c-light-black1"><i
                                class="ri-group-line text-c-black"></i>Groups</span>
                    </label>
                    <label for="EditRoles" class="cursor-pointer radio-button other-labels">
                        <input type="checkbox" name="edit_share_to[]" id="EditRoles" value="role"
                            />
                        <span
                            class="flex items-center justify-center gap-1 px-2 py-1.5 w-24 rounded text-c-black bg-c-light-black1"><i
                                class="ri-suitcase-line text-c-black"></i>Role</span>
                    </label>
                </div>
                <div id="DivEditUsers" class="w-3/4 ml-auto"
                    style="">
                    <div class="flex flex-wrap gap-2 items-center flex-grow">
                        <select data-placeholder="Select content" multiple
                            class="label ui selection fluid dropdown w-full rounded-xl" name="edit_users[]">
                            <option value="">Please choose the user</option>
                                <option value=""
                                    >
                                </option>
                        </select>
                    </div>
                </div>
                <div id="DivEditGroups" class="w-3/4 ml-auto"
                    style="">
                    <div class="flex flex-wrap gap-2 items-center flex-grow">
                        <select data-placeholder="Select content" multiple
                            class="label ui selection fluid dropdown w-full rounded-xl" name="edit_groups[]">
                            <option value="">Please choose the group</option>
                            
                                <option value=""
                                    >
                                   </option>
                          
                        </select>
                    </div>
                </div>
                <div id="DivEditRoles" class="w-3/4 ml-auto"
                    style="">
                    <div class="flex flex-wrap gap-2 items-center flex-grow">
                        <select data-placeholder="Select content" multiple
                            class="label ui selection fluid dropdown w-full rounded-xl" name="edit_roles[]">
                            <option value="">Please choose the role</option>
                           
                        </select>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap items-center">
                <label class="block w-full md:w-1/4 font-weight-500">Expiry date:</label>
                <input type="datetime-local" name="expirydate" class="text-sm" value="">
            </div>
            <div class="flex justify-end pb-4">
                <button type="submit" class="bg-c-light-gray text-c-white px-6 py-2 rounded-full">
                    Copy & Save
                </button>
            </div>
        </form>
    </div>
</div>

<div id="QrCodeModal" class="fixed inset-0 flex items-center justify-center hidden bg-gray-800 bg-opacity-50">
    <div class="bg-c-white rounded-xl p-10 shadow-lg max-w-7xl max-h-screen overflow-y-auto">
        <div id="qrcode" style="width: 100px; height: 100px; margin-bottom: 15px"></div>
        <div class="flex items-center justify-center">
            <button class="bg-c-light-gray text-c-white px-6 py-2 rounded-full hideqrmodal">Close</button>
        </div>
    </div>
</div>