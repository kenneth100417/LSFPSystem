@include('components.user.header')


    
        <section class="title mx-5">
            <div class="container mb-2">
                <div class="row">
                    <div class="col md-12">
                        <div class="text-center lsfp-container col-md-12 mt-3">
                          <H4 class="lsfp">Louella's</H4>
                          <H1 class="text-bold lsfp">Sweet Food Products</H1>
                          <p class="lsfp-tagline">Every Bite is Delight!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        
        
        {{-- /////////////////////////////////// --}}

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
                              
                              <a href="#" style="cursor: pointer;">
                              <div class=" swiper-slide d-flex justify-content-center">
                                <div class="product-card">
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
                                    <button class="btn btn-success add-cart-btn">Add to Cart</button>
                                    <button class="btn btn-warning buy-btn ">Buy Now</button>
                                  </div>
                                </div>
                              </div>
                            </a>


                              <div class=" swiper-slide d-flex justify-content-center">
                                <div class="product-card">
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
                                    <button class="btn btn-success add-cart-btn">Add to Cart</button>
                                    <button class="btn btn-warning buy-btn ">Buy Now</button>
                                  </div>
                                </div>
                              </div>


                              <div class=" swiper-slide d-flex justify-content-center">
                                <div class="product-card">
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
                                    <button class="btn btn-success add-cart-btn">Add to Cart</button>
                                    <button class="btn btn-warning buy-btn ">Buy Now</button>
                                  </div>
                                </div>
                              </div>


                              <div class=" swiper-slide d-flex justify-content-center">
                                <div class="product-card">
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
                                    <button class="btn btn-success add-cart-btn">Add to Cart</button>
                                    <button class="btn btn-warning buy-btn ">Buy Now</button>
                                  </div>
                                </div>
                              </div>


                              <div class=" swiper-slide d-flex justify-content-center">
                                <div class="product-card">
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
                                    <button class="btn btn-success add-cart-btn">Add to Cart</button>
                                    <button class="btn btn-warning buy-btn ">Buy Now</button>
                                  </div>
                                </div>
                              </div>


                              <div class=" swiper-slide d-flex justify-content-center">
                                <div class="product-card">
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
                                    <button class="btn btn-success add-cart-btn">Add to Cart</button>
                                    <button class="btn btn-warning buy-btn ">Buy Now</button>
                                  </div>
                                </div>
                              </div>


                              <div class=" swiper-slide d-flex justify-content-center">
                                <div class="product-card">
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
                                    <button class="btn btn-success add-cart-btn">Add to Cart</button>
                                    <button class="btn btn-warning buy-btn ">Buy Now</button>
                                  </div>
                                </div>
                              </div>


                              
                              
                            </div>
    
                  </div>
              </div>
              
              
          </div>
      </section>

      <livewire:user.product.index/>
{{-- 
      <section id="product">
        <div class="container  " id="category">
        <div class="row pt-3 px-n5">
          <div class="col-sm-12 ">
              <h4 class="text-start mx-3 swiper-title" style="font-family: Arial, Helvetica, sans-serif;">Product Categories</h4>
            <div class="swiper mySwiper">
              <div class="swiper-wrapper" init="false"   style="padding-bottom: 80px;" >
              
                {{-- @foreach ($categories as $category) --}}
                    {{-- <div class="swiper-slide d-flex justify-content-center ">
                        <div class="cat-card">          
                        <img src="/uploads/category/" class="card-title" alt="...">
                        </div>
                        <div class="product-cat" style="" >
                        <h5 class=" mx-0 px-0 category-name" style="color:rgb(124, 62, 18) !important; z-index: 10;background-color:aliceblue;">Category name</h5>
                        </div>
                    </div>
                     --}}
                {{-- @endforeach --}}
            {{-- </div>
            <div class="swiper-pagination"></div>
        </div>
        </div>
        </div>
      </section>  --}}

    </main>
        

<!--   Core JS Files   -->

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="./assets/js/core/popper.min.js" ></script>
<script src="./assets/js/core/bootstrap.min.js" ></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js" ></script>
<script src="./assets/js/plugins/smooth-scrollbar.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
<script type="text/javascript">

// hides alert message
$('#alert').delay(5000).hide(0); 
  


  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }

//   alerts

function logout(){
    Swal.fire({
    title: 'Are you sure you want to Log out?',
    text: "",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#DC3545',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Log Out'
    }).then((result) => {
    if (result.isConfirmed) {
       document.getElementById('logout').submit();
    }
    })
}



// preloader
var loader = document.getElementById('preloader');

window.addEventListener("load", function(){
    loader.style.display = "none";
});




</script>
<script>
    var swiper = new Swiper(".mySwiper", {
      // slidesPerView: 5,
      // spaceBetween: 10,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      freeMode:{
        enabled : true,
        sticky: true,
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
  </script>
  

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<!-- bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc --><script src="./assets/js/material-dashboard.min.js?v=3.0.5"></script>
  </body>

</html>
