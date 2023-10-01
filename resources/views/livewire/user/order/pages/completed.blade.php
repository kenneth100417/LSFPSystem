<div>
    <section class="mt-5 mx-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 bg-white border-radius-lg">
                    <div class="card-header p-0 mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-success border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                          <div><h6 class="text-white text-capitalize ps-3">Completed Orders</h6></div>
                          <div class="search mb-2 mx-3">
                            <input wire:model="search" class="form-control search-input bg-white" type="search" placeholder="Search" aria-label="Search"  style="display: block !important">
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                          <table class="table align-items-center mb-0 ">
                            <thead>
                              <tr>
                                <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 w-20">Order ID</th>
                                <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ps-2 w-30">Products</th>
                                <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 w-20">Order Date</th>
                                <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 w-10">Amount Payable</th>
                                <th class="text-dark opacity-7 w-10"></th>
                              </tr>
                            </thead>
                            <tbody>
                                @forelse ($orders as $order)
                                <tr>
                                    <td class="w-20">
                                        <p class="text-xs text-dark mb-0 text-center">LSWP_ORDR{{$order->id}}</p>
                                    </td>
                                    <td class="w-30 " >
                                        <div class="overflow-auto" style="max-height: 150px !important;" >
                                            @foreach ($order->orderItems as $item)
                                                <div class="d-flex px-2 py-1" >
                                                    <div>
                                                        <img src="/uploads/products/{{$item->product->image}}" class="avatar avatar-lg  me-3 border-radius-lg" alt="Shopping item" style="object-fit: cover;">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{$item->product->name}}</h6>
                                                        <div class="d-flex justify-content-between" style="width: 200px !important;">
                                                            <div>
                                                                <p class="text-xs text-dark mb-0">&#8369;{{number_format($item->product->selling_price,2)}}</p>
                                                            </div>
                                                            <div>
                                                                <p class="text-xs text-dark mb-0">x{{$item->quantity}}</p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-end mt-1">
                                                            <button class="btn btn-sm btn-warning text-white py-1 px-2" style="font-size: 10px;" wire:click="rate({{$item->product_id}})">Rate this Product</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        
                                    </td>
                                    <td class="w-20 text-center">
                                        <p class="text-xs text-dark mb-0">{{$order->created_at}}</p>
                                    </td>
                                    <td class="w-10 text-center">
                                        <p class="text-xs text-dark mb-0">&#8369;{{number_format($order->amount,2)}}</p>
                                    </td>
                                    <td class="w-10 text-center align-items-middle">
                                        <button class="btn btn-warning btn-sm mt-3" wire:click.prevent = "buyAgain({{$order->id}})"> Buy Again</button>
                                    </td>
                                </tr>
                                @empty
                                    <div class=" text-center">You don't have completed orders.</div>
                                @endforelse
                            </tbody>
                          </table>
                        </div>
                      </div>
                </div>
            </div>
        </div>
         

    </section>
<!-- Modal -->
   
<div class="modal fade" id="ratingModal" tabindex="-1" role="dialog" aria-labelledby="change_passwordTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
            
            <div class="card my-4 modal-card">
            
                <div class="card-body px-0  mx-3 text-sm ">
                                    
                <form action="/rate_product/{{$productToRateActive == true ?$productToRate->id:''}}" id="ratingForm" method="POST">
                    @method('PUT')
                    @csrf
                <div class="container">
                    <div class="d-flex px-2 py-1" >
                        <div>
                            <img src="/uploads/products/{{$productToRateActive == true ?$productToRate->image:''}}" class=" me-3 border-radius-lg" alt="Shopping item" style="object-fit: cover; width:100px;height:100px">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                            <h4 class="mb-0">{{$productToRateActive == true ?$productToRate->name:''}}</h4>
                            <p class="mb-0">{{$productToRateActive == true ?$productToRate->category->name:''}}</p>
                            <div class="d-flex justify-content-between" style="width: 200px !important;">
                                <div>
                                    <h6 class="text-lg text-dark mb-0">&#8369;{{$productToRateActive == true ? number_format($productToRate->selling_price,2):''}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="mt-4">Product Ratings:</h6>
                    <div class="starrating risingstar d-flex justify-content-center flex-row-reverse">
                        <input type="radio" id="star5" name="rating" value="5" />
                        <label for="star5" title="5 star"></label>
                        <input type="radio" id="star4" name="rating" value="4" />
                        <label for="star4" title="4 star"></label>
                        <input type="radio" id="star3" name="rating" value="3" />
                        <label for="star3" title="3 star"></label>
                        <input type="radio" id="star2" name="rating" value="2" />
                        <label for="star2" title="2 star"></label>
                        <input type="radio" id="star1" name="rating" value="1" />
                        <label for="star1" title="1 star"></label>
                    </div>
                    <input type="hidden" name="star_rating" id="starRating">
                    <h6>Comment:</h6>
                    <textarea form="ratingForm" id="comment" class="form-control p-2" name="comment" id="" cols="40" rows="5" style="border: 1px solid #6c6d70"></textarea>
                </div>	

                </div>

                <div class="modal-footer me-3">
                    
                        <button id="submitBtn" type="submit" class="btn btn-success modal-update-btn" disabled>Submit</button>
                        <button  type="button" class="btn btn-danger modal-cancel-btn" data-toggle="modal" data-target="#editProfile" data-dismiss="modal">Cancel</button>
                    
                </div>
            </form>
          
        </div>
        
      </div>
    </div>
    </div>
</div>
    








</div>

