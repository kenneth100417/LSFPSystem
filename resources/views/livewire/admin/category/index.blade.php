<section class="mx-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 bg-white border-radius-lg mt-5">
                <div class="card-header p-0 mt-n4 mx-3 z-index-2 mb-n2">
                    <div class="bg-gradient-success border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-white text-capitalize ps-3">Product Category</h6>
                        </div>
                        <div class="me-3">
                            <a class="btn btn-info btn-sm" href="{{url('admin/category/add')}}">Add New <i class="fa-regular fa-square-plus ms-2" style="font-size: 14px"></i></a>
                        </div>
                    </div>
                    
                </div>
                <div class="card-body px-0">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0" >
                          <thead>
                            <tr>
                              <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-20">Category ID</th>
                              <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-15">Category Image</th>
                              <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-20">Category</th>
                              <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-20">Description</th>
                              <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-5">Status</th>
                              <th class="text-dark opacity-7 w-20"></th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($categories as $category)
                                
                              <tr>
                                  <td class="w-20 text-center">
                                      <p class="text-xs text-dark mb-0">LSFP_CAT{{$category->id}} </p>
                                  </td>
                                  
                                  <td class="mw-15">
                                    <div class="d-flex px-2 py-1 d-flex justify-content-center align-items-center" style="min-width: 15; max-width: 15; white-space:normal;min-height:80px ;max-height: 80px;">
                                        <img src="/uploads/category/{{$category->image}}" class="avatar avatar-lg  me-3 border-radius-lg">
                                    </div>
                                </td>
                                <td class="mw-20 text-center" >
                                    <div class="d-flex justify-content-center align-items-center" style="min-width: 20; max-width: 20; white-space:normal; min-height:80px; max-height: 80px; overflow:scroll;">
                                        <p class="text-xs text-dark mb-0">{{$category->name}}</p>
                                    </div>
                                </td>
                                  <td class="w-20 text-center" >
                                      <div class="d-flex justify-content-center align-items-center" style="min-width: 20; max-width: 20; white-space:normal; min-height:80px; max-height: 80px; overflow:scroll; align-items: center;">
                                          <p class="text-xs text-dark mb-0">{{$category->description}}
                                          </p>
                                      </div>
                                  </td>
                                  <td class="w-5 text-center">
                                    <div class="d-flex justify-content-center align-items-center" style="min-width: 5; max-width: 5; white-space:normal; min-height:80px; max-height: 80px; overflow:scroll;">
                                        <p class="text-xs text-dark mb-0">{{$category->status == 1 ? 'Visible':'Hidden'}}</p>
                                    </div>
                                </td>
                                  <td class="mw-20">
                                      <div class="d-flex justify-content-center align-items-center">
                                        <a href="{{url('admin/category/'.$category->id.'/edit')}}" class="btn btn-success btn-sm mt-3 me-1 text-white tbl-row-icon" style="cursor: pointer ">Edit <i class="fa-regular fa-pen-to-square ms-2" title="View product details" style="font-size: 14px;"></i></a>
                                        <a href="#"  wire:click.prevent = 'deleteConfirmation({{$category->id}})'  class="btn btn-danger btn-sm mt-3 me-1 text-white tbl-row-icon" style="cursor: pointer ">Delete <i class="fa-solid fa-trash ms-2" title="View product details" style="font-size: 12px;"></i></a>
                                      </div>
                                      
                                  </td>
                              </tr>
                              @endforeach
                              
                             
                          </tbody>
                        </table>
                        
                      </div>
                      <div class="d-flex justify-content-center">
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
