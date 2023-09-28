<div>
    <section class="mt-5 mx-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 bg-white border-radius-lg">
                    <div class="card-header p-0 mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-success border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                          <div>
                            <h6 class="text-white text-capitalize ps-3">Product Reviews</h6>
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
                                    <a class="dropdown-item" wire:click.prevent = "sortByRating()" style="cursor:pointer">Rating</a>
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
                                <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-15">Category</th>
                                <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-20">Average Ratings</th>
                                <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-20">Latest Comment</th>
                                <th class="text-dark opacity-7 w-10"></th>
                              </tr>
                            </thead>
                            <tbody>
                                @forelse ($products as $product)
                                <tr>
                                    <td class="w-10">
                                        <p class="text-xs text-dark mb-0"><span>LSFP_P</span>{{$product->id}}</p></p>
                                    </td>
                                    <td class="mw-15">
                                        <div class="d-flex px-2 py-1 align-items-center justify-content-start" style="min-width: 15; max-width: 15; white-space:normal;min-height:80px ;max-height: 80px; overflow:scroll; align-items: center;">
                                            <div>
                                            <img src="/uploads/products/{{$product->image}}" class="avatar avatar-md me-3 border-radius-lg" style="object-fit: cover">
                                            </div>
                                            <div class="d-flex flex-column justify-content-start">
                                            <p class="mb-0 text-sm text-dark">{{$product->name}}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="mw-10 text-center">
                                        <p class="text-xs text-dark mb-0">&#8369;</span>{{number_format($product->selling_price, 2)}}</p>
                                    </td>
                                    <td class="mw-15 text-center">
                                        <p class="text-xs text-dark mb-0">{{$product->category->name}}</p>
                                    </td>
                                    <td class="mw-20 text-center">
                                        <div class="ms-auto ratings-star text-sm text-center">
                                            @php
                                                $rating_sum = $product->ratings->sum('star_rating');
                                                if($product->ratings->count() == 0){
                                                $rating_val = 0;
                                                }else{
                                                $rating_val = $rating_sum/$product->ratings->count();
                                                }
                                                
                                            @endphp
                                            @for($i = 1; $i <= number_format($rating_val); $i++)
                                                <i class="fa fa-star checked"></i>
                                            @endfor
                                            @for($i = number_format($rating_val)+1; $i <= 5; $i++)
                                                <i class="fa fa-star"></i>
                                            @endfor
                                        </div>
                                    </td>
                                    <td class="mw-20" >
                                        <div class="d-flex" style="min-width: 20; max-width: 20; white-space:normal; min-height:80px; max-height: 80px; overflow:scroll; align-items: center;">
                                            <p class="text-xs text-dark mb-0">{{$product->latest_comment}}</p>
                                        </div>
                                    </td>
                                    <td class="mw-10">
                                        <form action="{{url('/product_reviews/'.$product->category->slug.'/'.$product->slug)}}" method="get">
                                            @csrf
                                            <button class="btn btn-success btn-sm mt-3 me-1 text-white tbl-row-icon" style="cursor: pointer ">View all details<i class="fa-solid fa-arrow-up-right-from-square ms-2" title="View product details" style="font-size: 14px;"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                    
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
</main>
</div>
