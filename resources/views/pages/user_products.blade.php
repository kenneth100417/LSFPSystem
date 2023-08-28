@include('components.user.header')

<section>
  <div class="col-lg-12 mt-4 pe-4">
    <div class="d-flex justify-content-between search align-items-center">
      <div>
        <h4 class="text-start mx-3 swiper-title" style="font-family: Arial, Helvetica, sans-serif; font-size: 26px">All Products</h4>
      </div>
      <div>
        <form class="form-inline search-container">
          <input class="form-control search-input" type="search" placeholder="Search" aria-label="Search" style="display: block !important;">
        </form>
      </div>
    </div>
</div>
  <div class="container mt-0">
    <div class="row row-cols-lg-5 row-cols-md-4">

      <div class="col text-center mt-3 d-flex justify-content-center" onclick="window.location.href = '{{url('/product-view')}}' ">
        <div class="product-card" style="width: 250px;">
          <div class="product-img-container">
            <img class="product-img" src="/img/category/category1.jpg"
            class="card-img-top"/>
          </div>
          <div class="text-center mt-3">
            <h5 class="product-name mb-0" >Original Cacao Powder</h5>
            <p class="small"><a href="#!" class="text-muted">Cacao Products</a></p>
          </div>
          <div class="text-center mx-2 product-price d-flex justify-content-between align-items-center mt-n2">
            <div>
              <p class="small text-danger mb-0 mx-1"><s>P75.00</s></p>
            </div>
            <div>
              <h5 class="text-dark mb-2 mx-1 product-selling-price">P60.00</h5>
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
            <button class="btn btn-success add-cart-btn px-3">Add to Cart</button>
            <button class="btn btn-warning buy-btn ">Buy Now</button>
          </div>
        </div>
      </div>

      <div class="col text-center mt-3 d-flex justify-content-center">
        <div class="product-card" style="width: 250px;">
          <div class="product-img-container">
            <img class="product-img" src="/img/category/category1.jpg"
            class="card-img-top"/>
          </div>
          <div class="text-center mt-3">
            <h5 class="product-name mb-0">Original Cacao Powder</h5>
            <p class="small"><a href="#!" class="text-muted">Cacao Products</a></p>
          </div>
          <div class="text-center mx-2 product-price d-flex justify-content-between align-items-center mt-n2">
            <div>
              <p class="small text-danger mb-0 mx-1"><s>P75.00</s></p>
            </div>
            <div>
              <h5 class="text-dark mb-2 mx-1 product-selling-price">P60.00</h5>
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
            <button class="btn btn-success add-cart-btn px-3">Add to Cart</button>
            <button class="btn btn-warning buy-btn ">Buy Now</button>
          </div>
        </div>
      </div>

      <div class="col text-center mt-3 d-flex justify-content-center">
        <div class="product-card" style="width: 250px;">
          <div class="product-img-container">
            <img class="product-img" src="/img/category/category1.jpg"
            class="card-img-top"/>
          </div>
          <div class="text-center mt-3">
            <h5 class="product-name mb-0">Original Cacao Powder</h5>
            <p class="small"><a href="#!" class="text-muted">Cacao Products</a></p>
          </div>
          <div class="text-center mx-2 product-price d-flex justify-content-between align-items-center mt-n2">
            <div>
              <p class="small text-danger mb-0 mx-1"><s>P75.00</s></p>
            </div>
            <div>
              <h5 class="text-dark mb-2 mx-1 product-selling-price">P60.00</h5>
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
            <button class="btn btn-success add-cart-btn px-3">Add to Cart</button>
            <button class="btn btn-warning buy-btn ">Buy Now</button>
          </div>
        </div>
      </div>

      <div class="col text-center mt-3 d-flex justify-content-center">
        <div class="product-card" style="width: 250px;">
          <div class="product-img-container">
            <img class="product-img" src="/img/category/category1.jpg"
            class="card-img-top"/>
          </div>
          <div class="text-center mt-3">
            <h5 class="product-name mb-0">Original Cacao Powder</h5>
            <p class="small"><a href="#!" class="text-muted">Cacao Products</a></p>
          </div>
          <div class="text-center mx-2 product-price d-flex justify-content-between align-items-center mt-n2">
            <div>
              <p class="small text-danger mb-0 mx-1"><s>P75.00</s></p>
            </div>
            <div>
              <h5 class="text-dark mb-2 mx-1 product-selling-price">P60.00</h5>
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
            <button class="btn btn-success add-cart-btn px-3">Add to Cart</button>
            <button class="btn btn-warning buy-btn ">Buy Now</button>
          </div>
        </div>
      </div>

      <div class="col text-center mt-3 d-flex justify-content-center">
        <div class="product-card" style="width: 250px;">
          <div class="product-img-container">
            <img class="product-img" src="/img/category/category1.jpg"
            class="card-img-top"/>
          </div>
          <div class="text-center mt-3">
            <h5 class="product-name mb-0">Original Cacao Powder</h5>
            <p class="small"><a href="#!" class="text-muted">Cacao Products</a></p>
          </div>
          <div class="text-center mx-2 product-price d-flex justify-content-between align-items-center mt-n2">
            <div>
              <p class="small text-danger mb-0 mx-1"><s>P75.00</s></p>
            </div>
            <div>
              <h5 class="text-dark mb-2 mx-1 product-selling-price">P60.00</h5>
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
            <button class="btn btn-success add-cart-btn px-3">Add to Cart</button>
            <button class="btn btn-warning buy-btn ">Buy Now</button>
          </div>
        </div>
      </div>

      <div class="col text-center mt-3 d-flex justify-content-center">
        <div class="product-card" style="width: 250px;">
          <div class="product-img-container">
            <img class="product-img" src="/img/category/category1.jpg"
            class="card-img-top"/>
          </div>
          <div class="text-center mt-3">
            <h5 class="product-name mb-0">Original Cacao Powder</h5>
            <p class="small"><a href="#!" class="text-muted">Cacao Products</a></p>
          </div>
          <div class="text-center mx-2 product-price d-flex justify-content-between align-items-center mt-n2">
            <div>
              <p class="small text-danger mb-0 mx-1"><s>P75.00</s></p>
            </div>
            <div>
              <h5 class="text-dark mb-2 mx-1 product-selling-price">P60.00</h5>
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
            <button class="btn btn-success add-cart-btn px-3">Add to Cart</button>
            <button class="btn btn-warning buy-btn ">Buy Now</button>
          </div>
        </div>
      </div>

      <div class="col text-center mt-3 d-flex justify-content-center">
        <div class="product-card" style="width: 250px;">
          <div class="product-img-container">
            <img class="product-img" src="/img/category/category1.jpg"
            class="card-img-top"/>
          </div>
          <div class="text-center mt-3">
            <h5 class="product-name mb-0">Original Cacao Powder</h5>
            <p class="small"><a href="#!" class="text-muted">Cacao Products</a></p>
          </div>
          <div class="text-center mx-2 product-price d-flex justify-content-between align-items-center mt-n2">
            <div>
              <p class="small text-danger mb-0 mx-1"><s>P75.00</s></p>
            </div>
            <div>
              <h5 class="text-dark mb-2 mx-1 product-selling-price">P60.00</h5>
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
            <button class="btn btn-success add-cart-btn px-3">Add to Cart</button>
            <button class="btn btn-warning buy-btn ">Buy Now</button>
          </div>
        </div>
      </div>

      <div class="col text-center mt-3 d-flex justify-content-center">
        <div class="product-card" style="width: 250px;">
          <div class="product-img-container">
            <img class="product-img" src="/img/category/category1.jpg"
            class="card-img-top"/>
          </div>
          <div class="text-center mt-3">
            <h5 class="product-name mb-0">Original Cacao Powder</h5>
            <p class="small"><a href="#!" class="text-muted">Cacao Products</a></p>
          </div>
          <div class="text-center mx-2 product-price d-flex justify-content-between align-items-center mt-n2">
            <div>
              <p class="small text-danger mb-0 mx-1"><s>P75.00</s></p>
            </div>
            <div>
              <h5 class="text-dark mb-2 mx-1 product-selling-price">P60.00</h5>
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
            <button class="btn btn-success add-cart-btn px-3">Add to Cart</button>
            <button class="btn btn-warning buy-btn ">Buy Now</button>
          </div>
        </div>
      </div>

      <div class="col text-center mt-3 d-flex justify-content-center">
        <div class="product-card" style="width: 250px;">
          <div class="product-img-container">
            <img class="product-img" src="/img/category/category1.jpg"
            class="card-img-top"/>
          </div>
          <div class="text-center mt-3">
            <h5 class="product-name mb-0">Original Cacao Powder</h5>
            <p class="small"><a href="#!" class="text-muted">Cacao Products</a></p>
          </div>
          <div class="text-center mx-2 product-price d-flex justify-content-between align-items-center mt-n2">
            <div>
              <p class="small text-danger mb-0 mx-1"><s>P75.00</s></p>
            </div>
            <div>
              <h5 class="text-dark mb-2 mx-1 product-selling-price">P60.00</h5>
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
            <button class="btn btn-success add-cart-btn px-3">Add to Cart</button>
            <button class="btn btn-warning buy-btn ">Buy Now</button>
          </div>
        </div>
      </div>

      <div class="col text-center mt-3 d-flex justify-content-center">
        <div class="product-card" style="width: 250px;">
          <div class="product-img-container">
            <img class="product-img" src="/img/category/category1.jpg"
            class="card-img-top"/>
          </div>
          <div class="text-center mt-3">
            <h5 class="product-name mb-0">Original Cacao Powder</h5>
            <p class="small"><a href="#!" class="text-muted">Cacao Products</a></p>
          </div>
          <div class="text-center mx-2 product-price d-flex justify-content-between align-items-center mt-n2">
            <div>
              <p class="small text-danger mb-0 mx-1"><s>P75.00</s></p>
            </div>
            <div>
              <h5 class="text-dark mb-2 mx-1 product-selling-price">P60.00</h5>
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
            <button class="btn btn-success add-cart-btn px-3">Add to Cart</button>
            <button class="btn btn-warning buy-btn ">Buy Now</button>
          </div>
        </div>
      </div>

      <div class="col text-center mt-3 d-flex justify-content-center">
        <div class="product-card" style="width: 250px;">
          <div class="product-img-container">
            <img class="product-img" src="/img/category/category1.jpg"
            class="card-img-top"/>
          </div>
          <div class="text-center mt-3">
            <h5 class="product-name mb-0">Original Cacao Powder</h5>
            <p class="small"><a href="#!" class="text-muted">Cacao Products</a></p>
          </div>
          <div class="text-center mx-2 product-price d-flex justify-content-between align-items-center mt-n2">
            <div>
              <p class="small text-danger mb-0 mx-1"><s>P75.00</s></p>
            </div>
            <div>
              <h5 class="text-dark mb-2 mx-1 product-selling-price">P60.00</h5>
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
            <button class="btn btn-success add-cart-btn px-3">Add to Cart</button>
            <button class="btn btn-warning buy-btn ">Buy Now</button>
          </div>
        </div>
      </div>

      <div class="col text-center mt-3 d-flex justify-content-center">
        <div class="product-card" style="width: 250px;">
          <div class="product-img-container">
            <img class="product-img" src="/img/category/category1.jpg"
            class="card-img-top"/>
          </div>
          <div class="text-center mt-3">
            <h5 class="product-name mb-0">Original Cacao Powder</h5>
            <p class="small"><a href="#!" class="text-muted">Cacao Products</a></p>
          </div>
          <div class="text-center mx-2 product-price d-flex justify-content-between align-items-center mt-n2">
            <div>
              <p class="small text-danger mb-0 mx-1"><s>P75.00</s></p>
            </div>
            <div>
              <h5 class="text-dark mb-2 mx-1 product-selling-price">P60.00</h5>
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
            <button class="btn btn-success add-cart-btn px-3">Add to Cart</button>
            <button class="btn btn-warning buy-btn ">Buy Now</button>
          </div>
        </div>
      </div>

      <div class="col text-center mt-3 d-flex justify-content-center">
        <div class="product-card" style="width: 250px;">
          <div class="product-img-container">
            <img class="product-img" src="/img/category/category1.jpg"
            class="card-img-top"/>
          </div>
          <div class="text-center mt-3">
            <h5 class="product-name mb-0">Original Cacao Powder</h5>
            <p class="small"><a href="#!" class="text-muted">Cacao Products</a></p>
          </div>
          <div class="text-center mx-2 product-price d-flex justify-content-between align-items-center mt-n2">
            <div>
              <p class="small text-danger mb-0 mx-1"><s>P75.00</s></p>
            </div>
            <div>
              <h5 class="text-dark mb-2 mx-1 product-selling-price">P60.00</h5>
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
            <button class="btn btn-success add-cart-btn px-3">Add to Cart</button>
            <button class="btn btn-warning buy-btn ">Buy Now</button>
          </div>
        </div>
      </div>

      
      
    </div>
  </div>  
</section>

@include('components.user.footer')
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->

{{-- <script>
  var swiper = new Swiper(".mySwiper", {
    //slidesPerView: 5,
    // spaceBetween: 10,,
    direction: "horizontal",
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    freeMode:{
      enabled : true,
      sticky: true,
    },
    grid: {
      rows: 2,
    },
    breakpoints: {
      480: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 10,
      },
      1024: {
        slidesPerView: 5,
        spaceBetween: 10,
      },
    },
  });
</script> --}}
