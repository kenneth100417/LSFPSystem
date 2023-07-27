@include('components.user-components.header')

<body class="g-sidenav-show  bg-gray-100">
    
    
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-white" id="sidenav-main">
 <div id="preloader"></div>   
    <div class="sidenav-header d-flex justify-content-start align-items-center mx-3">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>

        <button class="profile-img-container d-flex justify-content-start align-items-center">
            <img src="{{auth()->user()->photo}}" class=" profile-img" alt="profile">
        </button>
        <div class="text-start p-0 profile-name-email align-items-center mx-1">
            <h6 class="ms-1 font-weight-bold text-dark user-name">{{auth()->user()->firstname." ".auth()->user()->lastname;}}</h6>
            <p class="ms-1 text-dark user-email px-0">{{auth()->user()->email;}}</p>
        </div>
    </div>


  <hr class="horizontal mt-0 mb-2 nav-horizontal mx-3">

    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
        
            <li class="nav-item ">
                <a class="nav-link text-white tab active" href="/user_dashboard">
                    
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center icon">
                        <i class="fa-solid fa-house w-100"></i>
                    </div>

                    <span class="nav-link-text ms-1">Home</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white tab " href="/user_orders">
                    
                    <div class="text-success text-center me-2 d-flex align-items-center justify-content-center icon">
                        <i class="fa-solid fa-cart-shopping w-100"></i>
                    </div>
                    
                    <span class="nav-link-text ms-1">Orders</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white tab " href="/user_profile">
                    
                    <div class="text-success text-center me-2 d-flex align-items-center justify-content-center icon">
                        <i class="fa-solid fa-user "></i>
                    </div>
                    
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
        </ul>

            
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <form action="/logout" method="POST">
            @csrf
            <div class="mx-3 text-end">
                <button class="btn text-white bg-danger mt-4 w-50 nav-logout" href="" type="button" onclick="logout();">Log Out</button>
            </div>
        </form>
    </div>
  
</aside>

<main class="main-content border-radius-lg ">

        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
            <div class="container-fluid py-1">
                
                <img src="/img/logo.png" alt="Louella's Sweet Food Products" class="user-dash-logo">
                <x-message />
                
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <form class="form-inline search-container">
                            <input class="form-control search-input" type="search" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        
                        
                        <li class="nav-item d-flex align-items-center">
                            <a href="./pages/sign-in.html" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-cart-shopping me-sm-1 mx-2 nav-cart"></i>
                            </a>
                        </li>
                        
                        <li class="nav-item d-flex align-items-center">
                        <a href="./pages/sign-in.html" class="nav-link text-body font-weight-bold px-0">
                            <i class="fa fa-bell me-sm-1 mx-2 nav-bell"></i>
                        </a>
                        </li>
    
                        <li class="nav-item d-flex align-items-center">
                            <a href="/user_profile" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1 mx-2 nav-user"></i>
                            </a>
                        </li>
    
                        <li class="nav-item d-flex align-items-center">
                            <form action="/logout" method="POST" id="logout">
                                @csrf
                                <button  type="button" class="logout-btn" onclick="logout();">
                                    <i class="fa fa-power-off mx-2 nav-power"></i>
                                </button>
                            </form>
                        </li>
    
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body mx-2 " id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
    
                    </ul>
                </div>
            </div>
        </nav>
    
        <section class="title mx-5">
            <div class="container mb-4">
                <div class="row">
                    <div class="col md-12">
                        <div class="text-center lsfp-container col-md-12 mt-5">
                            <H4 class="lsfp">Louella's</H4>
                            <H1 class="text-bold lsfp">Sweet Food Products</H1>
                            <p class="lsfp-tagline">Every Bite is Delight!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <section class="top-product-container mt-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <a href="">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="text-start mx-3 swiper-title" style="font-family: Arial, Helvetica, sans-serif;">Top Products</h4>
                                </div>
                                <div>
                                    <h4 class="text-start mx-3 browse-all-text" style="font-family: Arial, Helvetica, sans-serif;">Browse all products<span><i class="fa-solid fa-arrow-right mx-2"></i></span></h4>
                                </div>
                            </div>
                        </a>
                        <swiper-container class="mySwiper" space-between="30" slides-per-view="4" style="padding-bottom: 50px;" init="false" id="swiper" centeredSlides="true">
                            
                        <swiper-slide class="slide-container text-center col-sm-12 ">
                            <div class="product-card">
                            <div class="product-img-container">
                                <img class="product-img" src="/img/category/category1.jpg"
                                class="card-img-top"/>
                            </div>
                            <div class="text-center mt-2">
                                <h5 class="product-name mb-0">Original Cacao Powder</h5>
                                <p class="small product-cat-name"><a href="#!" class="text-muted">Cacao Products</a></p>
                            </div>
                            <div class="text-center mx-2 product-price">
                                <p class="small text-danger mb-0 mx-1"><s>P75.00</s></p>
                                <h5 class="text-dark mb-3 mx-1 product-act-price">P60.00</h5>
                            </div>
                            <div class="d-flex justify-content-start align-items-center mb-1 mx-2 rating-container">
                                <p class="text-muted my-0 small">Product Ratings:</p>
                                <div class="ms-auto text-warning ratings-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-1 mx-2">
                                <button class="btn btn-success add-cart-btn">Add to Cart</button>
                                <button class="btn btn-warning buy-btn ">Buy Now</button>
                            </div>
                            </div>
                        </swiper-slide>

                        <swiper-slide class="slide-container text-center col-sm-12 ">
                            <div class="product-card">
                            <div class="product-img-container">
                                <img class="product-img" src="/img/category/category1.jpg"
                                class="card-img-top"/>
                            </div>
                            <div class="text-center mt-2">
                                <h5 class="product-name mb-0">Original Cacao Powder</h5>
                                <p class="small product-cat-name"><a href="#!" class="text-muted">Cacao Products</a></p>
                            </div>
                            <div class="text-center mx-2 product-price">
                                <p class="small text-danger mb-0 mx-1"><s>P75.00</s></p>
                                <h5 class="text-dark mb-3 mx-1 product-act-price">P60.00</h5>
                            </div>
                            <div class="d-flex justify-content-start align-items-center mb-1 mx-2 rating-container">
                                <p class="text-muted my-0 small">Product Ratings:</p>
                                <div class="ms-auto text-warning ratings-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-1 mx-2">
                                <button class="btn btn-success add-cart-btn">Add to Cart</button>
                                <button class="btn btn-warning buy-btn ">Buy Now</button>
                            </div>
                            </div>
                        </swiper-slide>

                        <swiper-slide class="slide-container text-center col-sm-12 ">
                            <div class="product-card">
                            <div class="product-img-container">
                                <img class="product-img" src="/img/category/category1.jpg"
                                class="card-img-top"/>
                            </div>
                            <div class="text-center mt-2">
                                <h5 class="product-name mb-0">Original Cacao Powder</h5>
                                <p class="small product-cat-name"><a href="#!" class="text-muted">Cacao Products</a></p>
                            </div>
                            <div class="text-center mx-2 product-price">
                                <p class="small text-danger mb-0 mx-1"><s>P75.00</s></p>
                                <h5 class="text-dark mb-3 mx-1 product-act-price">P60.00</h5>
                            </div>
                            <div class="d-flex justify-content-start align-items-center mb-1 mx-2 rating-container">
                                <p class="text-muted my-0 small">Product Ratings:</p>
                                <div class="ms-auto text-warning ratings-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-1 mx-2">
                                <button class="btn btn-success add-cart-btn">Add to Cart</button>
                                <button class="btn btn-warning buy-btn ">Buy Now</button>
                            </div>
                            </div>
                        </swiper-slide>

                        <swiper-slide class="slide-container text-center col-sm-12 ">
                            <div class="product-card">
                            <div class="product-img-container">
                                <img class="product-img" src="/img/category/category1.jpg"
                                class="card-img-top"/>
                            </div>
                            <div class="text-center mt-2">
                                <h5 class="product-name mb-0">Original Cacao Powder</h5>
                                <p class="small product-cat-name"><a href="#!" class="text-muted">Cacao Products</a></p>
                            </div>
                            <div class="text-center mx-2 product-price">
                                <p class="small text-danger mb-0 mx-1"><s>P75.00</s></p>
                                <h5 class="text-dark mb-3 mx-1 product-act-price">P60.00</h5>
                            </div>
                            <div class="d-flex justify-content-start align-items-center mb-1 mx-2 rating-container">
                                <p class="text-muted my-0 small">Product Ratings:</p>
                                <div class="ms-auto text-warning ratings-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-1 mx-2">
                                <button class="btn btn-success add-cart-btn">Add to Cart</button>
                                <button class="btn btn-warning buy-btn ">Buy Now</button>
                            </div>
                            </div>
                        </swiper-slide>

                        <swiper-slide class="slide-container text-center col-sm-12 ">
                            <div class="product-card">
                            <div class="product-img-container">
                                <img class="product-img" src="/img/category/category1.jpg"
                                class="card-img-top"/>
                            </div>
                            <div class="text-center mt-2">
                                <h5 class="product-name mb-0">Original Cacao Powder</h5>
                                <p class="small product-cat-name"><a href="#!" class="text-muted">Cacao Products</a></p>
                            </div>
                            <div class="text-center mx-2 product-price">
                                <p class="small text-danger mb-0 mx-1"><s>P75.00</s></p>
                                <h5 class="text-dark mb-3 mx-1 product-act-price">P60.00</h5>
                            </div>
                            <div class="d-flex justify-content-start align-items-center mb-1 mx-2 rating-container">
                                <p class="text-muted my-0 small">Product Ratings:</p>
                                <div class="ms-auto text-warning ratings-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-1 mx-2">
                                <button class="btn btn-success add-cart-btn">Add to Cart</button>
                                <button class="btn btn-warning buy-btn ">Buy Now</button>
                            </div>
                            </div>
                        </swiper-slide>

                        <swiper-slide class="slide-container text-center col-sm-12 ">
                            <div class="product-card">
                            <div class="product-img-container">
                                <img class="product-img" src="/img/category/category1.jpg"
                                class="card-img-top"/>
                            </div>
                            <div class="text-center mt-2">
                                <h5 class="product-name mb-0">Original Cacao Powder</h5>
                                <p class="small product-cat-name"><a href="#!" class="text-muted">Cacao Products</a></p>
                            </div>
                            <div class="text-center mx-2 product-price">
                                <p class="small text-danger mb-0 mx-1"><s>P75.00</s></p>
                                <h5 class="text-dark mb-3 mx-1 product-act-price">P60.00</h5>
                            </div>
                            <div class="d-flex justify-content-start align-items-center mb-1 mx-2 rating-container">
                                <p class="text-muted my-0 small">Product Ratings:</p>
                                <div class="ms-auto text-warning ratings-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-1 mx-2">
                                <button class="btn btn-success add-cart-btn">Add to Cart</button>
                                <button class="btn btn-warning buy-btn ">Buy Now</button>
                            </div>
                            </div>
                        </swiper-slide>

                        <swiper-slide class="slide-container text-center col-sm-12 ">
                            <div class="product-card">
                            <div class="product-img-container">
                                <img class="product-img" src="/img/category/category1.jpg"
                                class="card-img-top"/>
                            </div>
                            <div class="text-center mt-2">
                                <h5 class="product-name mb-0">Original Cacao Powder</h5>
                                <p class="small product-cat-name"><a href="#!" class="text-muted">Cacao Products</a></p>
                            </div>
                            <div class="text-center mx-2 product-price">
                                <p class="small text-danger mb-0 mx-1"><s>P75.00</s></p>
                                <h5 class="text-dark mb-3 mx-1 product-act-price">P60.00</h5>
                            </div>
                            <div class="d-flex justify-content-start align-items-center mb-1 mx-2 rating-container">
                                <p class="text-muted my-0 small">Product Ratings:</p>
                                <div class="ms-auto text-warning ratings-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-1 mx-2">
                                <button class="btn btn-success add-cart-btn">Add to Cart</button>
                                <button class="btn btn-warning buy-btn ">Buy Now</button>
                            </div>
                            </div>
                        </swiper-slide>

                        <swiper-slide class="slide-container text-center col-sm-12 ">
                            <div class="product-card">
                            <div class="product-img-container">
                                <img class="product-img" src="/img/category/category1.jpg"
                                class="card-img-top"/>
                            </div>
                            <div class="text-center mt-2">
                                <h5 class="product-name mb-0">Original Cacao Powder</h5>
                                <p class="small product-cat-name"><a href="#!" class="text-muted">Cacao Products</a></p>
                            </div>
                            <div class="text-center mx-2 product-price">
                                <p class="small text-danger mb-0 mx-1"><s>P75.00</s></p>
                                <h5 class="text-dark mb-3 mx-1 product-act-price">P60.00</h5>
                            </div>
                            <div class="d-flex justify-content-start align-items-center mb-1 mx-2 rating-container">
                                <p class="text-muted my-0 small">Product Ratings:</p>
                                <div class="ms-auto text-warning ratings-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-1 mx-2">
                                <button class="btn btn-success add-cart-btn">Add to Cart</button>
                                <button class="btn btn-warning buy-btn ">Buy Now</button>
                            </div>
                            </div>
                        </swiper-slide>

                        <swiper-slide class="slide-container text-center col-sm-12 ">
                            <div class="product-card">
                            <div class="product-img-container">
                                <img class="product-img" src="/img/category/category1.jpg"
                                class="card-img-top"/>
                            </div>
                            <div class="text-center mt-2">
                                <h5 class="product-name mb-0">Original Cacao Powder</h5>
                                <p class="small product-cat-name"><a href="#!" class="text-muted">Cacao Products</a></p>
                            </div>
                            <div class="text-center mx-2 product-price">
                                <p class="small text-danger mb-0 mx-1"><s>P75.00</s></p>
                                <h5 class="text-dark mb-3 mx-1 product-act-price">P60.00</h5>
                            </div>
                            <div class="d-flex justify-content-start align-items-center mb-1 mx-2 rating-container">
                                <p class="text-muted my-0 small">Product Ratings:</p>
                                <div class="ms-auto text-warning ratings-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-1 mx-2">
                                <button class="btn btn-success add-cart-btn">Add to Cart</button>
                                <button class="btn btn-warning buy-btn ">Buy Now</button>
                            </div>
                            </div>
                        </swiper-slide>

                        <swiper-slide class="slide-container text-center col-sm-12 ">
                            <div class="product-card">
                            <div class="product-img-container">
                                <img class="product-img" src="/img/category/category1.jpg"
                                class="card-img-top"/>
                            </div>
                            <div class="text-center mt-2">
                                <h5 class="product-name mb-0">Original Cacao Powder</h5>
                                <p class="small product-cat-name"><a href="#!" class="text-muted">Cacao Products</a></p>
                            </div>
                            <div class="text-center mx-2 product-price">
                                <p class="small text-danger mb-0 mx-1"><s>P75.00</s></p>
                                <h5 class="text-dark mb-3 mx-1 product-act-price">P60.00</h5>
                            </div>
                            <div class="d-flex justify-content-start align-items-center mb-1 mx-2 rating-container">
                                <p class="text-muted my-0 small">Product Ratings:</p>
                                <div class="ms-auto text-warning ratings-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-1 mx-2">
                                <button class="btn btn-success add-cart-btn">Add to Cart</button>
                                <button class="btn btn-warning buy-btn ">Buy Now</button>
                            </div>
                            </div>
                        </swiper-slide>

                        


    
                        
                        
                        </swiper-container>
                    </div>
                </div>
            </div>
        </section>
    
    </main>
        

<!--   Core JS Files   -->
<script src="./assets/js/core/popper.min.js" ></script>
<script src="./assets/js/core/bootstrap.min.js" ></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js" ></script>
<script src="./assets/js/plugins/smooth-scrollbar.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
<script type="text/javascript">
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

// custom swiper
//custom swiper
    const swiperEl = document.getElementById('swiper');

    const params = {
      injectStyles: [`
      .swiper-pagination-bullet {
        display: none;
      }

      .swiper-pagination{
        display: none;
      }

      `],
      pagination: {
        clickable: true,
      },
    }

    Object.assign(swiperEl, params);

    swiperEl.initialize();



// preloader
var loader = document.getElementById('preloader');

window.addEventListener("load", function(){
    loader.style.display = "none";
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
