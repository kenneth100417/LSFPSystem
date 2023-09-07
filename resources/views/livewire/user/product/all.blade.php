<section>
    <div class="col-lg-12 mt-4 pe-4">
      <div class="d-flex justify-content-between search align-items-center">
        <div class="align-items-center"> 
          <h4 class="text-start mx-3 swiper-title" style="font-family: Arial, Helvetica, sans-serif; font-size: 26px">All Products</h4>
        </div>
        <div class="align-items-center">
          <form class="form-inline search-container ">
            <input class="form-control search-input" type="search" placeholder="Search" aria-label="Search" style="display: block !important;">
          </form>
        </div>
      </div>
      <hr class="bg-dark mx-5"/>
  </div>
    <div class="container mt-0">
      <div class="row row-cols-lg-5 row-cols-md-4">
  
        @forelse ($products as $product)
        <div class="col text-center mt-3 d-flex justify-content-center" onclick="window.location.href = '{{url('/product-view/'.$product->category->slug.'/'.$product->slug)}}'">
            <div class="product-card">
                <div class="product-img-container">
                    <img class="product-img" src="/uploads/products/{{$product->image}}" class="card-img-top"/>
                </div>
            <div class="text-start mt-3 mx-2">
                <div class="text-nowrap  me-3" >
                    <h5 class="product-name mb-0 " >{{$product->name}}</h5>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-n3">
                    <div class="align-items-center  d-inline-block text-truncate" style="width: 120px;">
                        <p class="small"><a href="#!" class="text-muted">{{$product->category->name}}</a></p>
                    </div>
                    <div class="align-items-center">
                        <p><small>{{$product->quantity_sold}} Sold</small></p>
                    </div>
                </div>
            </div>
            <div class="text-center mx-2 product-price d-flex justify-content-between align-items-center mt-n1">
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
            <div class="d-flex justify-content-between m-2">
                <button type="button" onclick="window.location.href = '{{url('/product-view/'.$product->category->slug.'/'.$product->slug)}}'" class="btn btn-success add-cart-btn px-3">Add to Cart</button>
                <button type="button" class="btn btn-warning buy-btn ">Buy Now</button>
            </div>
        </div>
          </div>
        @empty
            <div class="text-center">
                <p>No products found at the moment.</p>
            </div>
        @endforelse
        
        
      </div>
    </div>  
  </section>