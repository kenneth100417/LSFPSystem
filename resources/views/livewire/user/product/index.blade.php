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
                        
                        @forelse ($recommendedProducts as $product)
                        <div class=" swiper-slide d-flex justify-content-center">
                            <div class="product-card">
                                <div class="product-img-container">
                                    <img class="product-img" src="/uploads/products/{{$product->image}}" class="card-img-top"/>
                                </div>
                            <div class="text-start mt-3 mx-2">
                                <div class="text-nowrap  me-3" >
                                    <h5 class="product-name mb-0 " >{{$product->name}}</h5>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-n3">
                                    <div class="align-items-center  d-inline-block text-truncate" style="width: 140px;">
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
                                <p class="text-muted my-0 rating-text">Product Ratings:</p>
                                <div class="ms-auto text-warning ratings-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between m-2">
                                <button class="btn btn-success add-cart-btn">Add to Cart</button>
                                <button class="btn btn-warning buy-btn ">Buy Now</button>
                            </div>
                        </div>
                    </div>

                    @empty
                            <p>No product found</p>
                    @endforelse

                        
                </div>
            </div>
        </div>
    </div>
</section>