<section class="top-product-container mt-3">
    <div class="container mt-sm-5 mt-lg-0 swiper-header">
        <div class="row">
            <div class="col-sm-12">
                
              <div class="d-flex justify-content-between align-items-center ">
                  <div>
                      <h4 class="text-start mx-3 swiper-title" style="font-family: Arial, Helvetica, sans-serif;">Top Recommended Products</h4>
                  </div>

                  <div>
                    <a href="/user_products">
                        <h4 class="text-start mx-3 browse-all-text" style="font-family: Arial, Helvetica, sans-serif;">Browse all products<span><i class="fa-solid fa-arrow-right mx-2"></i></span></h4>
                    </a>
                </div>
              </div>
                
              <div class="top-products-swiper swiper mySwiper mt-lg-0">
                <div class="swiper-wrapper" init="true"   style="padding-bottom: 80px;" >
                    
                    @forelse ($recommendedProducts as $product)

                    <div class=" swiper-slide d-flex justify-content-center" onclick="window.location.href = '{{url('/product-view/'.$product->id)}}' ">
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
                                    <p><small>{{$product->quantity_sold}} Sold </small></p>
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
                            <button class="btn btn-success add-cart-btn">Add to Cart</button>
                            <button class="btn btn-warning buy-btn ">Buy Now</button>
                        </div>
                    </div>
                </div>

                @empty
                        <div class="text-center">
                            No Products Found
                        </div>
                @endforelse
                    

                    
            </div>

            </div>
        </div>
        
        
    </div>
</section>

<section class="top-product-container mt-3">
    <div class="container mt-sm-5 mt-lg-0 swiper-header">
        <div class="row">
            <div class="col-sm-12">
                
                <div class="d-flex justify-content-between align-items-center ">
                    <div>
                        <h4 class="text-start mx-3 swiper-title" style="font-family: Arial, Helvetica, sans-serif;">Best Selling Products</h4>
                    </div>
                    
                </div>
                
                <div class="top-products-swiper swiper mySwiper mt-lg-0">
                    <div class="swiper-wrapper" init="true"   style="padding-bottom: 80px;" >
                        
                       
                    @forelse ($bestProducts as $best_product)

                    <div class=" swiper-slide d-flex justify-content-center" onclick="window.location.href = '{{url('/product-view/'.$best_product->id)}}' ">
                        <div class="product-card">
                            <div class="product-img-container">
                                <img class="product-img" src="/uploads/products/{{$best_product->image}}" class="card-img-top"/>
                            </div>
                        <div class="text-start mt-3 mx-2">
                            <div class="text-nowrap  me-3" >
                                <h5 class="product-name mb-0 " >{{$best_product->name}}</h5>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-n3">
                                <div class="align-items-center  d-inline-block text-truncate" style="width: 140px;">
                                    <p class="small"><a href="#!" class="text-muted">{{$best_product->category->name}}</a></p>
                                </div>
                                <div class="align-items-center">
                                    <p><small>{{$best_product->quantity_sold}} Sold </small></p>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mx-2 product-price d-flex justify-content-between align-items-center mt-n1">
                            <div>
                                <p class="small text-danger mb-0 mx-1"><s>&#8369;{{$best_product->original_price}}</s></p>
                            </div>
                            <div>
                                <h5 class="text-dark mb-2 mx-1 product-selling-price">&#8369;{{$best_product->selling_price}}</h5>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start align-items-center mb-2 mx-2 rating-container">
                            <p class="text-muted my-0 rating-text">{{$best_product->ratings->count()}} Rating{{$best_product->ratings->count() > 1 ? 's':''}}:</p>
                                <div class="ms-auto ratings-star">
                                @php
                                    $ratingsum = $best_product->ratings->sum('star_rating');
                                    if($best_product->ratings->count() == 0){
                                        $ratingval = 0;
                                    }else{
                                        $ratingval = $ratingsum/$best_product->ratings->count();
                                    }
                                    
                                @endphp
                                @for($i = 1; $i <= number_format($ratingval); $i++)
                                    <i class="fa fa-star checked"></i>
                                @endfor
                                @for($i = number_format($ratingval)+1; $i <= 5; $i++)
                                    <i class="fa fa-star"></i>
                                @endfor
                                </div>
                        </div>
                        <div class="d-flex justify-content-between m-2">
                            <button class="btn btn-success add-cart-btn">Add to Cart</button>
                            <button class="btn btn-warning buy-btn ">Buy Now</button>
                        </div>
                    </div>
                </div>

                @empty
                <div class=" d-flex justify-content-center" style="min-width: 100% !important">
                    <h6>This Feature is under development.</h6>
                </div>
                @endforelse

                        
                </div>
            </div>
        </div>
    </div>
</section>