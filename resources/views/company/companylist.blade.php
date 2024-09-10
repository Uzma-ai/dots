
@foreach($companies as $company)
<tr class="text-sm border-t h-14">
                      <td class="py-2 pl-3"> <input type="checkbox" class="c-checkbox"></td>
                      <td class="text-c-black pl-3">{{$company->name}}</td>
                      <td class="text-c-black pl-3">
                       <span class="taskbar py-1.5 text-center px-5 font-normal text-dark-black rounded-sm">System</span>
                      </td>
                      <td class="text-c-black pl-3">{{$company->industry}}</td>
                      <td class="text-c-black pl-3">{{$company->created_at}}</td>
                      <td class="text-c-black text-right pl-3">
                        <div
                          class="flex relative text-sm gap-3"
                        >
                          <div class="relative">
                            <button type="button" class="dropdown-btn">
                              Action
                              <i class="ri-arrow-down-s-line"></i>
                            </button>
                            <div
                              class="absolute text-xs dropdown-option z-10 min-w-full bg-gray-100 border rounded-md"
                            >
                            <button class="delete-company block hover:bg-yellow-300 w-full px-2 py-1" data-id="{{ $company->id }}">
                                Delete
                            </button>
                            <button  class="addSuperadmin block hover:bg-yellow-300 w-full px-2 py-1" data-company-id="{{$company->id}}">
                                Add Superadmin
                                        </button>
                            </div>
                          </div>

                          <button class="editCompany text-c-sky openEditModalButton" data-id="{{$company->id}}">
                            Edit
                          </button>
                        </div>
                      </td>
                    </tr>
@endforeach
<script>
     //edit popup

                     $('table td button.editCompany').on('click', function (e) {
                       e.preventDefault();
                       
                    var id = $(this).attr("data-id");
                    $.ajax({
                            url: 'company-edit',
                            method: 'GET',
                            data: {id:id},
                            success: function (response) {
                                // Update the app list container with the updated list
                                $('#company-edit-div').html(response);
                                $('.company-edit-modal').removeClass('hidden');
                            },
                            error: function (xhr, status, error) {
                                console.error(xhr.responseText);
                            }
                        });
                     
                    });

                    $('table td button.delete-company').on('click', function (e) {
                       e.preventDefault();
                      $("#delete-modal").removeClass('hidden');
                      var id = $(this).attr("data-id");
                      var deleteroute = "company-delete/"+ id;
                      $("#deleteRole").attr("href",deleteroute);

                     
                    });

                     $('table td button.addSuperadmin').on('click', function (e) {
                       e.preventDefault();
                      $("#superadmin-modal").removeClass('hidden');
                      var cid = $(this).attr("data-company-id");
                      $("#company-id").val(cid);
                     
                    });
</script>