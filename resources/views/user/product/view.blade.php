@include('components.user.header')

<section>
  @forelse($product as $product)
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card mt-3">
          <div class="card-body">
            <div class="container">
              <div class="row">
                <div class="col-lg-4 d-flex justify-content-center">
                  <div class="" style="border-radius: 15px; width: 80%; height: 45vh; overflow:hidden;box-shadow: 1px 2px 5px #491815;">          
                    <img type="image" src="/uploads/products/{{$product->image}}" class="card-title" alt="Product image preview" style="width: 100%;height: 100%;object-fit: cover;margin: 0;">
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="text-start mt-3 mx-2">
                    <div class="text-nowrap me-3" >
                      <h5 class="product-name mb-0" style="font-size: 30px !important;">{{$product->name}}</h5>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-n3">
                      <div class="align-items-center d-inline-block text-truncate" style="max-width:500px;">
                        <p class=""><a href="#!" class="text-muted">{{$product->category->name}}</a></p>
                      </div>
                      
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                      <div class="d-flex">
                        <label for="rating" class="text-md text-dark">{{$ratings->count()}} Ratings: </label>
                        <div class=" px-2 text-md">
                          @for($i = 1; $i <= $rating_val; $i++)
                            <i class="fa fa-star checked"></i>
                          @endfor
                          @for($i = $rating_val+1; $i <= 5; $i++)
                            <i class="fa fa-star"></i>
                          @endfor
                        </div>
                      </div>
                      <div class="align-items-center">
                        <p class="text-success" style="font-weight: 550">{{$product->quantity_sold}} Sold <span class="text-dark">|</span>  <span class="text-info" id = "stock"></span></p>
                      </div>
                    </div>
                    <div>
                      <label for="description" class="text-md text-dark">Description:</label>
                      <p class="mt-n2 mx-1" style="text-align: justify; ">{{$product->description}}</p>
                    </div>
                    <div class="mt-2 d-flex ">
                      <label for="quantity" class="text-md text-dark">Quantity:</label>
                      <div>
                        <input type="number" min="1" name="" id="" class="form-control px-2 py-1 mx-3" placeholder="Quantity" style="max-width: 100px !important; border: 1px solid gray">
                      </div>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                      <button class="btn btn-success add-cart-btn me-2" style="font-size: 12px !important">Add to Cart</button>
                      <button class="btn btn-warning buy-btn mx-2" style="font-size: 12px !important">Buy Now</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card mt-3">
          <div class="card-body">
            <div>
              <h5 class="mt-2">Product Reviews</h5>
            </div>
            <div class="container" style="max-height: 90vh; overflow-y: scroll; overflow-x: hidden;">
              <div class="row">
                <div class="col-lg-12">
                  
                  <div>
                    <div class="col-lg-12">
                      <div class="card ">
                          @forelse($reviews as $review)
                          <div class="card-body">
                            <div class="d-flex justify-content-between p-container rounded-3 p-3 my-2 ">
                              <div class="d-flex flex-row align-items-center" >
                                <div  class="d-flex align-items-start">
                                  <div>
                                      <img src="{{$review->user->photo}}"
                                      class="img-fluid rounded-3 p-image" alt="User" style="border-radius: 50% !important; min-width: 60px !important; min-height: 60px !important; object-fit: cover;">
                                  </div>
                                  <div class="ms-3">
                                    <div class="d-flex  align-items-center ">
                                      <h5 class="">{{$review->user->firstname}} {{$review->user->lastname}}</h5>
                                      
                                      <div class="ms-auto px-2">
                                        @for($i = 1; $i <= $review->star_rating; $i++)
                                          <i class="fa fa-star checked"></i>
                                        @endfor
                                        @for($i = $review->star_rating+1; $i <= 5; $i++)
                                          <i class="fa fa-star"></i>
                                        @endfor
                                      </div>
                                    </div>
                                    <p class="text-sm mt-n3">{{$review->user->email}}</p>
                                    <div style="width: 900px !important">
                                      <h6 class="text-md">Comment:</h6>
                                      <p class="mt-n2" style="text-align: justify; font-size: 16px !important; ">{{$review->comment}}</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          @empty
                          <div class="text-center mt-5" >No Ratings yet.</div>
                          @endforelse
                            

                            
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  

  @empty
  <div class="text-center mt-5">
    <p class="mt-5">Product is unavailable at this time.</p>
  </div>
    
  @endforelse
    
</section>

@include('components.user.footer')
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>

    var stock = document.getElementById('stock');
    let stockVal = {{$product->quantity - $product->quantity_sold}};
    
    if(stockVal > 0){
      stock.innerHTML = stockVal + ' In Stock';
    }else if(stockVal == '0') {
      stock.innerHTML = 'Sold Out';
      stock.classList.remove('text-info');
      stock.classList.add('text-danger');
    }

    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      direction: "vertical",
      grid: {
        rows: 2,
      },
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
</script>