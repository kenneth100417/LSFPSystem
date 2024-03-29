<section>
    <div class="col-lg-12 mt-4 pe-4 all-products-menu">
      <div class="d-flex justify-content-between search align-items-center">
        <div class="align-items-center"> 
          <h4 class="text-start mx-3 swiper-title" style="font-family: Arial, Helvetica, sans-serif; font-size: 26px">All Products</h4>
        </div>
        
        <div class="d-flex align-items-center">
          <div class="align-items-center mx-3 pb-2">
            <input wire:model.lazy="search" class="form-control search-input" type="search" placeholder="Search" aria-label="Search" style="display: block !important;">
          </div>
          
          <div class="d-flex  align-items-center col-sm-12">
            <div class="d-flex  align-items-center" >
              <h5 class="text-success text-capitalize pe-3" wire:click.prevent = "desc()" style="cursor: pointer"><i class="fa-solid fa-arrow-up-wide-short" ></i></h5>
  
              <h5 class="text-success text-capitalize pe-4" wire:click.prevent = "asc()" style="cursor: pointer"><i class="fa-solid fa-arrow-down-short-wide"></i></h5>
            </div>
  
            <div class="btn-group pe-3">
                <button type="button" class="btn btn-sm btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{$sortby}}
                </button>
                <div class="dropdown-menu">
                  @foreach($categories as $category)
                    <a class="dropdown-item" wire:click.prevent = "category({{$category->id}})" style="cursor:pointer">{{$category->name}}</a>
                  @endforeach
                    <a class="dropdown-item text-center" wire:click.prevent = "all()" style="cursor: pointer">Show All</a>
                </div> 
            </div>
          </div>
        </div>
    </div>
  </div>
  <hr class="bg-dark mx-5 mt-lg-1 mt-sm-n1"/>
    <div class="container mt-0 all-product-container">
      <div class="row row-cols-lg-5 row-cols-md-4">
  
        @forelse ($products as $product)
        <div class="col text-center mt-3 d-flex justify-content-center" >
          <a onclick="window.location.href = '{{url('/product-view/'.$product->category->slug.'/'.$product->slug)}}' ">
            <div class="product-card">
                <div class="product-img-container">
                    <img class="product-img" src="/uploads/products/{{$product->image}}" class="card-img-top"/>
                </div>
                <div class="text-start mt-sm-0 mt-lg-3 mx-2">
                    <div class="text-nowrap  me-3" >
                        <h5 class="product-name mb-0 " >{{$product->name}}</h5>
                    </div>
                    <div class="container mb-n3 mx-0 category-sold-container">
                        <div class="row">
                            <div class="col-lg-7 col-xs-6 text-truncate cat-container">
                                <small class="small category-name">{{$product->category->name}}</small>
                            </div>
                            <div class="col-lg-5 col-xs-6 sold-container">
                                <small class="product-sold">{{$product->quantity_sold}} Sold </small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mx-2 product-price d-flex justify-content-between align-items-center mt-3">
                    <div>
                        <p class="small text-danger mb-0 mx-1"><s>&#8369;{{$product->original_price}}</s></p>
                    </div>
                    <div>
                        <h5 class="text-dark mb-2 mx-1 product-selling-price">&#8369;{{$product->selling_price}}</h5>
                    </div>
                </div>
                <div class="d-flex justify-content-start align-items-center mb-2 mx-2 rating-container">
                    <p class="text-muted my-0 rating-text">{{$product->ratings->count()}} Rating{{$product->ratings->count() > 1 ? 's':''}}:</p>
                    <div class="ms-auto ratings-star">
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
                </div>
            </a>
            <div class="container-fluid ">
              <form role="form" action='/buy/{{$product->id}}' method="POST">
                  @csrf
                  <div class="row m-0 product-btn-container">
                      <div class="col-lg-6 col-sm-12 p-0 text-center btn-div">
                          <button type="button" wire:click="addToCart({{$product->id}})" class="btn btn-success add-cart-btn" style="width: 100%;padding: 10px 15px">Add to Cart</button>
                      </div>
                      <div class="col-lg-6 col-sm-12 p-0 text-center">
                          <button type="submit" class="btn btn-warning buy-btn " style="width: 100%;padding: 10px 12px">Buy Now</button>
                      </div>
                  </div>
              </form>
          </div>
        </div>
      </div>
        @empty
            <div class="text-center mt-2">
               <p>No Products Found.</p>
            </div>
        @endforelse
        
      </div>
    </div>  
  </section>