<section class="mt-5 mx-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 bg-white border-radius-lg">
                <div class="card-header p-0 mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-success border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                      <div>
                        <h6 class="text-white text-capitalize ps-3">Product Inventory</h6>
                      </div>
                      <div class="d-flex  align-items-center">
                        <div class="d-flex  align-items-center" >

                            <h5 class="text-white text-capitalize pe-3"><i class="fa-solid fa-arrow-up-wide-short"></i></h5>

                            <h5 class="text-white text-capitalize pe-4"><i class="fa-solid fa-arrow-down-short-wide"></i></h5>

                        </div>

                        <div class="btn-group pe-3">
                            <button type="button" class="btn btn-sm btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Sort By
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Product Name</a>
                              <a class="dropdown-item" href="#">Sold Count</a>
                              <a class="dropdown-item" href="#">Number of Stocks</a>
                            </div>
                      </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                      <table class="table align-items-center mb-0" >
                        <thead>
                          <tr>
                            <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-10">Product ID</th>
                            <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-15">Products</th>
                            <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-10">Price</th>
                            <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-10">Sold</th>
                            <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-10">In Stock</th>
                            <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-15">Category</th>
                            <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-15">Description</th>
                            <th class="text-dark opacity-7 w-10"></th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                        
                            <tr>
                                <td class="w-10">
                                    <p class="text-xs text-dark mb-0"><span>LSFP_P</span>{{$product->id}}</p>
                                </td>
                                <td class="mw-15">
                                    <div class="d-flex px-2 py-1 align-items-center justify-content-start" style="min-width: 15; max-width: 15; white-space:normal;min-height:80px ;max-height: 80px; overflow:scroll; align-items: center;">
                                        <div>
                                        <img src="/uploads/products/{{$product->image}}" class="avatar avatar-md me-3 border-radius-lg">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                        <p class="mb-0 text-sm text-dark">{{$product->name}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="mw-10 text-center">
                                    <p class="text-xs text-dark mb-0"><span class="text-success text-md">&#8369;</span>{{number_format($product->selling_price, 2)}}</p>
                                </td>
                                <td class="mw-10 text-center">
                                    <p class="text-xs text-dark mb-0">{{$product->quantity_sold}}</p>
                                </td>
                                <td class="mw-10 text-center">
                                    <p class="text-xs text-dark mb-0">{{$product->quantity}}</p>
                                </td>
                                <td class="mw-15 text-center">
                                    <p class="text-xs text-dark mb-0">{{$product->category->name}}</p>
                                </td>
                                <td class="mw-15 text-center" >
                                    <div class="d-flex" style="min-width: 15; max-width: 15; white-space:normal; min-height:80px; max-height: 80px; overflow:scroll; align-items: center;">
                                        <p class="text-xs text-dark mb-0">{{$product->description}}</p>
                                    </div>
                                </td>
                                <td class="mw-10">
                                    <button class="btn btn-success btn-sm mt-3 me-1 text-white tbl-row-icon" style="cursor: pointer ">View details<i class="fa-solid fa-arrow-up-right-from-square ms-2" title="View product details" style="font-size: 14px;"></i></button>
                                    
                                </td>
                            </tr>
        
                            @empty
                            <td class="mw-100 text-center" >
                                <div class="d-flex" style="min-width: 100; max-width: 100; white-space:normal; min-height:80px; max-height: 80px; overflow:scroll; align-items: center;">
                                    <p class="text-xs text-dark mb-0">No Products Found.</p>
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