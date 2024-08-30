@extends('layouts.backendsettings')
@section('title', 'Companies')
@section('content')
           <!-- Main content -->
        <div class="flex-grow border h-100 main">
          <div class="flex w-full h-full flex-col content">
            <div class=" px-2 lg:px-5 py-6">
               <div class="flex items-center gap-4">
                <i class="ri-settings-3-fill ri-xl"></i>
                <span class="text-lg text-c-black">System settings</span>
              </div>
            </div>

             <!-- top taskbar -->
            <div class=" taskbar bg-no-repeat bg-cover bg-center flex items-center justify-between px-3 sm:px-6 py-3">
               <div class="flex items-center gap-4 w-full md:w-1/2">
                        <div class="flex gap-1 sm:gap-2 items-center">
                            <span class="text-c-light-black">Admin & User</span> <i class="ri-arrow-right-line ri-lg" style="color: #4D4D4D;"></i><span
                                class="font-semibold text-c-black">Companies</span>
                        </div>
               </div>

               <div class="flex-grow md:w-1/2">
                  <div class="flex items-center justify-end gap-2 md:gap-6">
                    <div>
                        <button type="button" class=" flex items-center justify-center gap-2 bg-c-black text-c-yellow px-4 py-1.5 rounded-md openAddModalButton">
                          <i class="ri-add-circle-fill"></i><span class="text-sm">Add</span>
                        </button>
                    </div>
                  </div>
               </div>
               
            </div>
             <div class="mt-3 flex items-center justify-end px-4 gap-2">
            <div
                class="flex items-center rounded overflow-hidden bg-c-white h-8"
              >
                <input id="searchterm"
                  type="text"
                  class="pl-4 pt-2.5 pb-2.5 flex-shrink flex-grow border-none text-c-black outline-none"
                  placeholder="Search Companies"
                />
                <div class="pt-3 pb-3 pr-4 flex items-center justify-center">
                 <i class="ri-search-line"></i>
                </div>
              </div>
              <button
                  class="text-c-light-black bg-c-gray-3 rounded px-6 py-1 mr-1" id='search'
                >
                  Search
                </button>
          </div>

            <!-- info table -->
             <div class="p-4 relative h-full flex flex-col scroll overflow-y-scroll">
            <div class="bg-white cs-table-container border border-c-gray rounded-md">
              <table class="table-auto w-full">
               <thead class="h-14">
                    <tr class="bg-c-dark-gray">
                      <th class="text-c-white font-medium text-left pl-3 text-base rounded-tl-md"></th>
                      <th class="text-c-white font-medium text-left pl-3">
                        Name
                      </th>
                      <th class="text-c-white text-left font-medium pl-3">
                        Information
                      </th>
                      <th class="text-c-white text-left font-medium pl-3">
                        Description
                      </th>
                      <th class="text-c-white text-left font-medium pl-3">
                        Modification
                      </th>
                      <th class="rounded-tr-md text-c-white font-medium text-left pl-3">
                        Action
                      </th>
                    </tr>
                  </thead>
                 <tbody id="searchableTableBody">
                    
                  </tbody>
              </table>
            </div>
            <div class="mt-auto flex justify-end">
              <!-- Total 1 page &nbsp; <span class="text-c-yellow">(5 records)</span> -->
              {{ $companies->links() }}
            </div>
          </div>
          </div>
        </div>

         <!--Add Modal -->
     <div
          id="add-modal"
          role="dialog"
          class="fixed hidden inset-0 flex items-center justify-center bg-black bg-opacity-50 z-10"
        >
          <div
            class="bg-white rounded-2xl overflow-hidden shadow-lg max-w-2xl w-full bg-c-lighten-gray modal-content"
          >
            <!-- Sticky header -->
            <div
              class="sticky top-0 flex py-2 px-5 justify-between items-center border-b border-gray-3 bg-white z-10 text-c-black"
            >
              <div class="text-lg font-normal">Add New Company</div>
              <i
              class="ri-close-circle-fill ri-lg cursor-pointer"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></i>
            </div>
            <!-- Scrollable content -->
            <div class="p-5 overflow-y-auto max-h-[calc(100vh-6rem)] scroll">
              <form class="space-y-4 text-sm" action="{{ route('company-create') }}" method="POST">
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
                      name="name" required
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
                      name="website" 
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
                        type="text"
                        placeholder="Please contact number"
                        name="contact" required
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
                    />
                  </div>
                </div>
                
                
                 
                </div>
                <div class="flex justify-end mt-3">
                  <button
                    type="submit"
                    class="bg-c-black hover:bg-c-black text-white rounded-full w-32 py-2 text-sm"
                  >
                    Create
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>

<!-- Add Modal End -->
     

<!-- Edit modal -->
        <div id="company-edit-div">
            
        </div>
<!-- End Edit modal -->

<!-- Delete Button Modal -->
    <div
      id="delete-modal"
      tabindex="-1"
      class="fixed hidden inset-0 flex items-center justify-center bg-black bg-opacity-50"
    >
      <div class="delete-modal relative">
        <div class="relative">
          <div class="p-4 md:p-5 text-center">
            <div class="delete-header flex items-center gap-4 mb-1 py-1">
              <i class="ri-delete-bin-6-line ri-xl text-c-yellow"></i>
              <h1 class="text-lg font-medium">Delete Company</h1>
            </div>
            <hr text-md>
            <div class="mt-6 flex items-center justify-center">
              <h1 class="text-md font-medium text-c-black">
                Are you sure you want to delete the Company?
              </h1>
            </div>
            <div class="flex items-center justify-center gap-3 mt-9">
              <a href="#" id="deleteRole">
              <button id="okdelete"
              class="bg-c-black text-white rounded-full px-12 sm:px-14 py-2"
                type="submit"
              >
                OK
              </button>
            </a>
              <input type="hidden" name="id" id="delete-id" value="">
              <button
                class="bg-white text-c-yellow px-9 sm:px-12 py-2 rounded-full border border-c-yellow"
                onclick="hidedeleteModal()"
              >
                Cancel
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- Add superadmin Button Modal -->

<div
          id="superadmin-modal"
          role="dialog"
          class="fixed hidden inset-0 flex items-center justify-center bg-black bg-opacity-50 z-10"
        >
          <div
            class="bg-white rounded-2xl overflow-hidden shadow-lg max-w-2xl w-full bg-c-lighten-gray modal-content"
          >
            <!-- Sticky header -->
            <div
              class="sticky top-0 flex py-2 px-5 justify-between items-center border-b border-gray-3 bg-white z-10 text-c-black"
            >
              <div class="text-lg font-normal">Add Superadmin</div>
              <i
              class="ri-close-circle-fill ri-lg cursor-pointer"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></i>
            </div>
            <!-- Scrollable content -->
            <div class="p-5 overflow-y-auto max-h-[calc(100vh-6rem)] scroll">
              <form class="space-y-4 text-sm" action="{{ route('superadmin-create') }}" method="POST">
                 @csrf
                <div class="grid grid-cols-1 md:grid-cols-12 gap-4">
                  <div class="md:col-span-2 flex items-center">
                    <label for="name" class="block font-bold text-c-black">
                      UserName:<span class="text-red-500">*</span>
                    </label>
                  </div>
                  <div class="md:col-span-8">
                    <input
                      id="name"
                      class="w-full p-2 bg-c-lighten-gray border border-gray-3 rounded-xl outline-none pl-5"
                      type="text"
                      placeholder="Please enter company name"
                      name="name" required
                    />
                  </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-12 gap-4">
                  <div class="md:col-span-2 flex items-center">
                    <label for="password" class="block font-bold text-c-black">
                      Password:<span class="text-red-500">*</span>
                    </label>
                  </div>
                  <div class="md:col-span-8">
                    <input
                      id="password"
                      class="w-full p-2 bg-c-lighten-gray border border-gray-3 rounded-xl outline-none pl-5"
                      type="password"
                      placeholder="password"
                      name="password" 
                    />
                  </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-12 gap-4">
                  <div class="md:col-span-2 flex items-center">
                    <label for="email" class="block font-bold text-c-black">
                      Email:<span class="text-red-500">*</span>
                    </label>
                  </div>
                  <div class="md:col-span-8">
                    <input
                      id="email"
                      class="w-full p-2 bg-c-lighten-gray border border-gray-3 rounded-xl outline-none pl-5"
                      type="email"
                      placeholder="Please enter email"
                      name="email" required
                    />
                  </div>
                </div>
                <input type="hidden" name="cID" id="company-id" value="">
                </div>
                <div class="flex justify-end mt-3">
                  <button
                    type="submit"
                    class="bg-c-black hover:bg-c-black text-white rounded-full w-32 py-2 text-sm"
                  >
                    Add
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
   

@endsection

@section('scripts')
<script>

     //AddModal Open Functionality
      const openAddModalButton = document.querySelectorAll(".openAddModalButton");
      const addModal = document.getElementById("add-modal");

      openAddModalButton.forEach((e) => {
        e.addEventListener("click", () => {
          addModal.classList.remove("hidden");
        });
      });

      window.addEventListener("click", (event) => {
        if (event.target == addModal) {
          addModal.classList.add("hidden");
        }
      });

        // Script to toggle modal visibility
      document
        .querySelectorAll('[data-bs-toggle="modal"]')
        .forEach((button) => {
          button.addEventListener("click", () => {
            document
              .querySelector(button.getAttribute("data-bs-target"))
              .classList.remove("hidden");
          });
        });

      document
        .querySelectorAll('[data-bs-dismiss="modal"]')
        .forEach((button) => {
          button.addEventListener("click", () => {
            button.closest(".fixed").classList.add("hidden");
          });
        });

       //EditModal Open Functionality
      const openEditModalButton = document.querySelectorAll(".openEditModalButton");
      const editModal = document.getElementById("edit-modal");

      openEditModalButton.forEach((e) => {
        e.addEventListener("click", () => {
          editModal.classList.remove("hidden");
        });
      });

      window.addEventListener("click", (event) => {
        if (event.target == editModal) {
          editModal.classList.add("hidden");
        }
      });


      // Script to toggle modal visibility
      document
        .querySelectorAll('[data-bs-toggle="modal"]')
        .forEach((button) => {
          button.addEventListener("click", () => {
            document
              .querySelector(button.getAttribute("data-bs-target"))
              .classList.remove("hidden");
          });
        });

      document
        .querySelectorAll('[data-bs-dismiss="modal"]')
        .forEach((button) => {
          button.addEventListener("click", () => {
            button.closest(".fixed").classList.add("hidden");
          });
        });
 // DeletetModal Open Functionality
      const deleteModal = document.getElementById('delete-modal');

        function showdeleteModal(){
            deleteModal.classList.remove('hidden');
        }
        function hidedeleteModal(){
            deleteModal.classList.add('hidden');
        }

 $(document).ready(function(){     
 // Initial population of the table
    populateTable();
function populateTable(term='') {
                const searchTerm = term;
                const attr = '{{ request()->get('page') }}';
                const listroute = @json(route('company-list'));
                $.ajax({
                            url: listroute,
                            method: 'GET',
                            data: { page:attr,searchTerm:searchTerm },
                            success: function (response) {
                                // Update the app list container with the updated list
                                $('#searchableTableBody').html(response);
                            },
                            error: function (xhr, status, error) {
                                console.error(xhr.responseText);
                            }
                        });

 }


  $('.btn-close').on('click', function (e) {
    $('.alert').hide();                          
    });

  $('#searchterm').keyup(function (e) {
    var term = $('#searchterm').val();
     populateTable(term);
    });
  $('#okdelete').on('click', function (e) {
     toastr.success("Company Deleted");                          
    });
  @if (Session::has('success-company'))
     toastr.success("Company Added successfully");
  @endif
  @if (Session::has('company-update'))
    toastr.success("Company Updated successfully");
 @endif

});
</script>

@endsection