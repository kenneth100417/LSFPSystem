<div>
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
                                                <input type="number" min="1" max="" id="quantity" class="form-control px-2 py-1 m-0 cart-quantity"  style="max-width: 100px !important; border: 1px solid gray; " value="" wire:change = "updateQuantity({{$product->cart_id}},{{$product->product_id}},$event.target.value)" placeholder="{{$product->cart_quantity}}">
                                                <label for="" class="
                                                {{$product->quantity - $product->quantity_sold == "0" ?  'text-danger':'text-info'}}">{{$product->quantity - $product->quantity_sold == "0" ?  'Sold Out':$product->quantity - $product->quantity_sold.' in Stock'}}</label>
                                            </div>
                                        </td>
                                      
                                        <td class="w-10 text-center">
                                            <div class="text-center mx-2 mt-2 product-price d-flex align-items-center">
                                                <div class="d-flex align-items-end">
                                                <p class="small text-danger mb-0 mx-1"><s>&#8369;{{$product->original_price}}</s></p>
                                                </div>
                                                <div class="d-flex align-items-end">
                                                <h5 class="text-dark mb-2 mx-1">&#8369;{{$product->selling_price}}</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="w-10 text-center align-items-end position-relative">
                                            <div class="position-absolute" style="top: 10px; right: 15px;">
                                                <a href="" class="nav-link text-body font-weight-bold px-0 " wire:click.prevent = 'deleteConfirmation({{$product->cart_id}})'>
                                                    <i class="fa-solid fa-xmark text-danger" title="Remove to cart"></i>
                                                </a>
                                            </div>
                                           
                                        </td>
                                    </tr>
    
                                </tbody>
                                
                                @empty
                                <div class="d-flex justify-content-center mb-0 mt-5">
                                   No product added to cart.
                                </div>
                                @endforelse
                            
                            </table>
                            
                            
                            <div class="d-flex justify-content-center">
                                {{ $products->links() }}
                            </div>
                            <div>
                                
                                @php
                                    $totalAmount = 0;
                                    foreach ($products as $product) {
                                        $totalAmount += $product->selling_price * $product->cart_quantity;
                                    }
                                @endphp
                                <div class="d-flex justify-content-end align-items-end">
                                    <label class="text-dark mx-1">Total Amount: </label>
                                    <h5 class="text-dark mb-2 mx-1"> &#8369;{{ number_format($totalAmount,2) }}</h5>
                                </div>
                                <div class="d-flex justify-content-end" style="right: 10px;">
                                    <button  type="button" data-bs-toggle="modal" data-bs-target="#checkout" class="btn btn-warning buy-btn " {{$products->count() == 0 ? 'disabled':''}}>Check Out</button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Modal -->
    <!-- Modal -->
    <div data-bs-backdrop="static" data-bs-keyboard="false" class="modal fade modal-profile" id="checkout" tabindex="-1" role="dialog" aria-labelledby="editProfileTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body">
                <form action="/user_update"  method="POST" id="profile-update-form" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                <div class="card my-4 mt-5 modal-card">
                    <div class="card-header p-0 mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-success border-radius-lg pt-4 pb-3">
                            <h5 class="text-white text-capitalize ps-3">Checkout Details</h5>
                        </div>
                    </div>
                
                    <div class="card-body px-0 pb-2  mx-5 text-sm profile">
                        <div class="container">
                            
                            <div class="row ">
                                <div class="col-md-12 ">
                                    <h5 class="mb-0">Contact Information</h5>
                                </div>
                                <hr class="bg-dark mt-3 mb-0"/>
                                <div class="d-flex justify-content-between p-container rounded-3 p-2 my-2 m-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h5 for="" class="text-sm my-0">Name: <span><label>{{Auth()->user()->firstname}} {{Auth()->user()->lastname}}</label></span></h5>
                                            <h5 for="" class="text-sm my-0">Email: <span><label>{{Auth()->user()->email}}</label></span></h5>
                                            <h5 for="" class="text-sm my-0">Contact Number: <span><label>{{Auth()->user()->mobile_number}}</label></span></h5>
                                            <h5 for="" class="text-sm my-0">Complete address: <span><label>{{Auth()->user()->address}} </label></span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mt-3">
                                <div class="col-md-12 ">
                                    <h5 class="mb-0">Product</h5>
                                </div>
                                <hr class="bg-dark mt-3 mb-0"/>
                                @forelse ($products as $product)
                                <div class="d-flex justify-content-between p-container rounded-3 p-2 my-2 m-2">
                                    <div class="d-flex flex-row align-items-center">
                                        <div  class="d-flex align-items-center">
                                            <div>
                                                <img src="/uploads/products/{{$product->image}}" class="avatar avatar-lg  me-3 border-radius-lg" alt="Shopping item" style="object-fit: cover;">
                                            </div>
                                            
                                            <div class="ms-3">
                                                <h6 class="text-sm">{{$product->name}}</h6>
                                                <p class="small mb-0">&#8369;{{(number_format($product->selling_price,2))}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-end">
                                        <div class="d-flex justify-content-end align-items-end">
                                            <label class="text-dark mx-1">x {{$product->cart_quantity}}</label>
                                        </div>
                                    </div>
                                </div>
                                @empty
                            
                            @endforelse
                            </div>
    
                            
    
                    <div class="d-flex justify-content-end align-items-end">
                            <label class="text-dark mx-1">Total Amount: </label>
                            <h5 class="text-dark mb-2 mx-1"> &#8369;{{number_format($totalAmount,2)}}</h5>
                    </div>        
                            
                    <div class="modal-footer m-0">
                        
                        <button type="button" wire:click = "checkout({{$totalAmount}})" class="btn btn-warning modal-update-btn" id="updateBtn" >Place Order</button>
                        <button type="button" class="btn btn-danger modal-cancel-btn" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
            
          </div>
        </div>
        </div>
    </div>
    </section>
    
    
</div>