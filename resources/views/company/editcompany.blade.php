<div
          id="edit-modal"
          role="dialog"
          class="company-edit-modal fixed hidden inset-0 flex items-center justify-center bg-black bg-opacity-50 z-10"
        >
          <div
            class="bg-white rounded-2xl overflow-hidden shadow-lg max-w-2xl w-full bg-c-lighten-gray modal-content"
          >
            <!-- Sticky header -->
            <div
              class="sticky top-0 flex py-2 px-5 justify-between items-center border-b border-gray-3 bg-white z-10 text-c-black"
            >
              <div class="text-lg font-normal">Edit Company</div>
              <i class="company-edit-close ri-close-circle-fill ri-lg cursor-pointer"></i>
            </div>
            <!-- Scrollable content -->
            <div class="p-5 overflow-y-auto max-h-[calc(100vh-6rem)] scroll">
              <form class="space-y-4 text-sm" action="{{ route('company-update',['id' => $company->id]) }}" method="POST">
                 @csrf
                <div class="grid grid-cols-1 md:grid-cols-12 gap-4">
                  <div class="md:col-span-2 flex items-center">
                    <label for="name" class="block font-bold text-c-black">
                      Name:<span class="text-red-500">*</span>
                    </label>
                  </div>
                  <div class="md:col-span-8">
                    <input
                      id="name"
                      class="w-full p-2 bg-c-lighten-gray border border-gray-3 rounded-xl outline-none pl-5"
                      type="text"
                      placeholder="Please enter company name"
                      autocomplete="name"
                      name="name" value="{{ $company->name }}" required
                    />
                  </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-12 gap-4">
                  <div class="md:col-span-2 flex items-center">
                    <label for="nickname" class="block font-bold text-c-black">
                      Website:<span class="text-red-500">*</span>
                    </label>
                  </div>
                  <div class="md:col-span-8">
                    <input
                      id="website"
                      class="w-full p-2 bg-c-lighten-gray border border-gray-3 rounded-xl outline-none pl-5"
                      type="text"
                      placeholder="www.example.com"
                      name="website" value="{{ $company->website }}"
                    />
                  </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-12 gap-4">
                  <div class="md:col-span-2 flex items-center">
                    <label for="nickname" class="block font-bold text-c-black">
                      Email:<span class="text-red-500">*</span>
                    </label>
                  </div>
                  <div class="md:col-span-8">
                    <input
                      id="nickname"
                      class="w-full p-2 bg-c-lighten-gray border border-gray-3 rounded-xl outline-none pl-5"
                      type="email"
                      placeholder="Please enter email"
                      autocomplete="email"
                      name="email" required 
                      value="{{ $company->email }}"
                    />
                  </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-12 gap-4 mt-4">
                  <div class="md:col-span-2 flex items-center">
                    <label for="space-size" class="block font-bold text-c-black">
                      Contact:<span class="text-red-500">*</span>
                    </label>
                  </div>
                  <div class="md:col-span-8 flex items-center gap-2">
                    <div class="relative w-full">
                      <input
                        id="space-size"
                        class="w-full p-2 bg-c-lighten-gray border border-gray-3 rounded-xl outline-none pl-5"
                        type="number"
                        placeholder="Please contact number"
                        name="contact" required
                        value="{{ $company->contact }}"
                      />
                    </div>
                  </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-12 gap-4">
                  <div class="md:col-span-2 flex items-center">
                    <label for="nickname" class="block font-bold text-c-black">
                      Industry:
                    </label>
                  </div>
                  <div class="md:col-span-8">
                    <input
                      id="industry"
                      class="w-full p-2 bg-c-lighten-gray border border-gray-3 rounded-xl outline-none pl-5"
                      type="text"
                      placeholder="Please enter industry"
                      name="industry" 
                      value="{{ $company->industry }}"
                    />
                  </div>
                </div>
                
                
                 
                </div>
                <div class="flex justify-end mt-3">
                  <button
                    type="submit"
                    class="bg-c-black hover:bg-c-black text-white rounded-full w-32 py-2 text-sm"
                  >
                    Update
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>

<script>
  
  $('.company-edit-close').on('click', function (e) {
          $('.company-edit-modal').hide();
    });
</script>
