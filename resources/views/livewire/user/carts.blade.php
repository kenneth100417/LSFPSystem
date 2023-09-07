<section class="mt-5 mx-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 bg-white border-radius-lg">
                <div class="card-header p-0 mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-success border-radius-lg pt-4 pb-3">
                        <h5 class="text-white text-capitalize ps-3">Cart</h5>
                    </div>
                </div>
                <div class="card-body px-4 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0 ">
                           @forelse ($products as $product)
                            <tbody>
                                <tr>
                                    <td class="w-20">
                                        <div class="d-flex flex-row align-items-start" >
                                            <div  class="d-flex align-items-center" style="min-width: 200px !important;">
                                                <div class="d-flex px-2 py-1 d-flex justify-content-center align-items-center" style="min-width: 15; max-width: 15; white-space:normal;min-height:80px ;max-height: 80px;">
                                                    <img src="/uploads/products/{{$product->image}}" class="avatar avatar-lg  me-3 border-radius-lg" style="object-fit: cover">
                                                </div>
                                                <div class="text-start mx-2">
                                                    <div class="text-nowrap me-3" >
                                                        <h5 class="product-name mb-0 " >{{$product->name}}</h5>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center mb-n3">
                                                        <div class="align-items-center  d-inline-block text-truncate" style="width: 120px;">
                                                            <p class="small"><a href="#!" class="text-muted">{{$product->category->name}}</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                  </td>
                                  
                                  <td class="w-20 text-center">
                                    <div class="text-center mx-2 mt-2 p-0 d-flex flex-column align-items-center">
                                        <input type="number" min="1" max="" name="" id="quantity" class="form-control px-2 py-1 m-0" placeholder="Quantity" style="max-width: 100px !important; border: 1px solid gray" value="{{$product->cart_quantity}}">
                                        <label for="" class="
                                        {{$product->quantity - $product->quantity_sold == "0" ?  'text-danger':'text-info'}}">{{$product->quantity - $product->quantity_sold == "0" ?  'Sold Out':$product->quantity - $product->quantity_sold.' in Stock'}}</label>
                                    </div>
                                  </td>
                                  <td class="w-10 text-center">
                                    <div class="text-center mx-2 mt-2 product-price d-flex align-items-center">
                                        <div class="d-flex align-items-end">
                                          <p class="small text-danger mb-0 mx-1"><s>&#8369;50.00</s></p>
                                        </div>
                                        <div class="d-flex align-items-end">
                                          <h5 class="text-dark mb-2 mx-1">&#8369;45.00</h5>
                                        </div>
                                    </div>
                                  </td>
                                  <td class="w-10 text-center align-items-end position-relative">
                                    <div class="position-absolute" style="top: 10px; right: 15px;">
                                        <a href="" class="nav-link text-body font-weight-bold px-0 " wire:click.prevent = 'deleteConfirmation({{$product->cart_id}})'>
                                            <i class="fa-solid fa-xmark text-danger" title="Remove to cart"></i>
                                        </a>
                                    </div>
                                    <div class="position-absolute" style="right: 10px;">
                                        <button type="button" onclick="" class="btn btn-warning buy-btn ">Check Out</button>
                                    </div>
                                  </td>
                                
                              </tr>
                              
                            
                          </tbody>
                            @empty
                            <div class="d-flex justify-content-center mb-0">
                               No product added to cart.
                            </div>
                            @endforelse
                        
                        </table>
                        <div class="d-flex justify-content-center">
                            {{ $products->links() }}
                        </div>
                        
                    </div>
                      
                </div>
            </div>
        </div>
    </div>
</section>
