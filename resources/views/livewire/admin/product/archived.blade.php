<section class="mt-5 mx-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 bg-white border-radius-lg">
                <div class="card-header p-0 mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-success border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                      <div>
                        <h6 class="text-white text-capitalize ps-3">Archived Products</h6>
                      </div>
                      <div class="d-flex  align-items-center">
                        <div class="search mb-2 mx-3">
                          <input wire:model="search" class="form-control search-input bg-white" type="search" placeholder="Search" aria-label="Search"  style="display: block !important">
                      </div>
                      <div class="d-flex  align-items-center" >

                          <h5 class="text-white text-capitalize pe-3" wire:click.prevent = "sortDesc()"><i class="fa-solid fa-arrow-up-wide-short" style="cursor:pointer"></i></h5>

                          <h5 class="text-white text-capitalize pe-4" wire:click.prevent = "sortAsc()"><i class="fa-solid fa-arrow-down-short-wide" style="cursor:pointer"></i></h5>

                      </div>

                      <div class="btn-group pe-3">
                          <button type="button" class="btn btn-sm btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sort By {{$sortByText}}
                          </button>
                          <div class="dropdown-menu">
                              <a class="dropdown-item" wire:click.prevent = "sortById()" style="cursor:pointer">Product ID</a>
                              <a class="dropdown-item" wire:click.prevent = "sortByProductName()" style="cursor:pointer">Product Name</a>
                              <a class="dropdown-item" wire:click.prevent = "sortBySoldCount()" style="cursor:pointer">Quantity Sold</a>
                          </div>
                    </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                      <table class="table align-items-center mb-0" >
                        <thead>
                          <tr>
                            <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ">Product ID</th>
                            <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ">Products</th>
                            <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ">Price</th>
                            <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ">Category</th>
                            <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ">Description</th>
                            <th class="text-dark opacity-7 w-10"></th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse ($products as $product)
                            <tr>
                                <td class="">
                                    <p class="text-xs text-dark mb-0"><span>LSFP_P</span>{{$product->id}}</p>
                                </td>
                                <td class="">
                                    <div class="d-flex px-2 py-1 align-items-center justify-content-center" style="min-width: 20; max-width: 20; white-space:normal;min-height:80px ;max-height: 80px; overflow:scroll; align-items: center;">
                                        <div>
                                        <img src="/uploads/products/{{$product->image}}" class="avatar avatar-md me-3 border-radius-lg" style="object-fit: cover">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                        <p class="mb-0 text-sm text-dark">{{$product->name}}</p>
                                        <input type="hidden" name="" id="product-name" value="{{$product->name}}">
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <p class="text-xs text-dark mb-0"><span class="text-success">PHP</span>{{$product->selling_price}}</p>
                                </td>
                                <td class=" text-center">
                                    <p class="text-xs text-dark mb-0">{{$product->category->name}}</p>
                                </td>
                                <td class=" text-center" style="min-width: 200px; max-width: 200px;">
                                    <div class="d-flex justify-content-center text-center" style="min-width: 25; max-width: 25; white-space:normal; min-height:80px; max-height: 80px; overflow:scroll; align-items: center;">
                                        <p class="text-xs text-dark mb-0">{{$product->description}}</p>
                                    </div>
                                </td>
                                <td class="">
                                    <a  wire:click.prevent = 'recoverConfirmation({{$product->id}})' class="btn btn-info btn-sm mt-3 me-1 text-white tbl-row-icon" style="cursor: pointer ">Recover<i class="fa-solid fa-arrow-right-arrow-left ms-2" style="font-size: 14px; cursor:pointer;"></i></a>
                                </td>
                            </tr>
                            @empty
                            <td class="mw-100 text-center" >
                              <div class="d-flex justify-content-center text-center" style="min-width: 100; max-width: 100; white-space:normal; min-height:80px; max-height: 80px; overflow:scroll; align-items: center;">
                                  <p class="text-xs text-dark mb-0">No Archived Products Found.</p>
                              </div>
                          </td>
                           
                            @endforelse
                        </tbody>
                      </table>
                    </div>
                    <div class="d-flex justify-content-center mb-0">
                      {{ $products->links() }}
                      </div>
                  </div>
            </div>
        </div>
    </div>
</section>