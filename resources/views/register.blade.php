<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/img/logo.png">
  <title>
    Louella's Sweet Food Products
  </title>

  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="/assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
  <link rel="stylesheet" href="/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  

  

</head>

<body>
  <x-message />
  <div class="leaves">
    <img src="/img/leaves.png">
    
  </div>
<header>
  <nav class="navbar navbar-expand-md fixed-top mt-2">
    <img src="/img/logo.png" alt="Louella's Sweet Food Products" class="logo">
    <i class="navbar-toggler fa-solid fa-bars" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"></i>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav text-center justify-content-end">
        <li class="nav-item mx-3">
          <a class="nav-link nav-btn" href="#home">Home</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link nav-btn" href="#product">Products</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link nav-btn" href="#about">About</a>
        </li>
        <li class="nav-item mx-3 ">
          <button class="btn nav-btn-contact px-3">
            <a class="nav-link nav-btn-con mt-0" href="#contact">Contact Us</a>
          </button>
        </li>
      </ul>
    </div>
  </nav>
</header>
<div class="page-container">
  <Section id="home">
    <div class="container search-container pt-4" >
      <div class="row justify-content-end">
        <div class="col-sm-3">
          <form class="form-inline search-container">
            <input class="form-control search-input" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-outline-success search-btn" type="button">
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="container mt-4 text-center d-flex align-items-center justify-content-center">
      <div class="row justify-content-center">
        <div class="col-md-3 card-container ">

          @if (session('success'))
          <div class="alert alert-success" role="alert"> {{session('success')}} 
          </div>
          @endif

          @if (session('error'))
          <div class="alert alert-danger" role="alert"> {{session('error')}} 
          </div>
          @endif

          {{-- Setup Personal Info --}}
          <form action="/add_user" method="POST" role="form" class="text-start" id="reg_form">
            @csrf {{--  Cross-site Request Forgery --}}
            <div class="card z-index-0 fadeIn3 fadeInBottom" id="signup-form">    
              <h4 class="font-weight-bolder text-center mt-3">Sign Up</h4>
              <h6 class="font-weight-bolder text-start mx-4">Personal Information</h6>
              <div class="card-body reg-card">
                <div class="input-group input-group-outline mb-2">
                  <input placeholder="Firstname" name="firstname" id="firstname" type="text" class="form-control" value={{old('firstname')}}>
                </div>
                @error('firstname')
                  <p class="text-danger">
                    <small> {{$message}} </small>
                  </p>
                @enderror

                <div class="input-group input-group-outline mb-2">
                  <input placeholder="Middlename (Optional)" name="middlename" id="middlename" type="text" class="form-control" value={{old('middlename')}}>
                </div>
                @error('middlename')
                  <p class="text-danger">
                    <small> {{$message}} </small>
                  </p>
                @enderror

                <div class="input-group input-group-outline mb-2" >
                  <input placeholder="Lastname" name="lastname" id="lastname" type="text" class="form-control" value={{old('lastname')}}>
                </div>
                @error('lastname')
                  <p class="text-danger">
                    <small> {{$message}} </small>
                  </p>
                @enderror

                <div class="input-group input-group-outline mb-2 date" id="datepicker">
                  <input placeholder="Birthdate" name="birthdate" id="birthdate" type="text" class="form-control" value={{old('birthdate')}}>
                  <span class="input-group-append">
                    <span class="input-group-text mx-2">
                      <i class="fa fa-calendar"></i>
                    </span>
                  </span>
                </div>
                @error('Birthdate')
                  <p class="text-danger">
                    <small> {{$message}} </small>
                  </p>
                @enderror

                <div class="input-group input-group-outline mb-2">
                  <input placeholder="Mobile Number" name="mobile_number" id="mobile_number" type="text" class="form-control" value={{old('mobile_number')}}>
                </div>
                @error('mobile_number')
                  <p class="text-danger">
                    <small> {{$message}} </small>
                  </p>
                @enderror

                <div class="form-btn text-center">
                  <button type="button" class="btn signup-btn w-100 my-2 mb-1" onclick="showSetupAddForm();">Next</button>
                </div>
                <p class="mt-3 text-sm text-center mb-0">
                  Already have an account?
                  <a href="/" class="login-link register-link text-bold mb-0"><br />Log in</a>
                </p>
                </div>
              </div>

              {{-- Setup Address --}}
              <div class="card z-index-0 fadeIn3 fadeInBottom " id="setupadd-form" hidden>    
                <h4 class="font-weight-bolder text-center mt-3">Sign Up</h4>
                <h6 class="font-weight-bolder text-start mx-4">Setup Address</h6>
                <div class="card-body reg-card">
                  <div class="input-group input-group-outline mb-2">
                    <input  placeholder="Street/Purok" type="text" class="form-control" name="street" id="street-text">
                  </div>
                  <div class="input-group input-group-outline mb-2">
                    <input  placeholder="Barangay" type="text" class="form-control" name="barangay_text" id="barangay-text">
                  </div>
                  <div class="input-group input-group-outline mb-2">
                    <input placeholder="City/Municipality" type="text" class="form-control" name="city_text" id="city-text">
                  </div>
                  <div class="input-group input-group-outline mb-2">
                    <input placeholder="Province" type="text" class="form-control" name="province_text" id="province-text">
                  </div>
                  <div class="input-group input-group-outline mb-2">
                    <input placeholder="Country" type="text" class="form-control" name="country_text" id="country-text">
                  </div>
                  <div class="input-group input-group-outline mb-2">
                    <input  placeholder="Zip Code" type="text" class="form-control" name="zip_code" id="zip_code-text">
                  </div>
                  <input type="hidden" id="address" name="address">
                  <input type="hidden" id="access" name="access" value="0">
                  <div class="text-center">
                    <button type="button" class="btn setupadd-btn w-100 my-2 mb-1" onclick="showSetupAccForm();">Next</button>
                    <button type="button" class="btn cancel-btn w-100 my-1 mb-1" onclick="showRegForm();">Back</button>
                  </div>
                </div>
              </div>

              {{-- Setup Account Info --}}
              <div class="card z-index-0 fadeIn3 fadeInBottom" id="account-form" hidden>    
                <h4 class="font-weight-bolder text-center mt-3">Sign Up</h4>
                <h6 class="font-weight-bolder text-start mx-4">Account Information</h6>
                <div class="card-body reg-card">
                  <div class="input-group input-group-outline mb-2">
                    <input  placeholder="Email" name="email" id="email1" type="email" class="form-control" value={{old('email')}}>
                  </div>
                  @error('email')
                    <p class="text-danger">
                      <small> {{$message}} </small>
                    </p>
                  @enderror

                  <div class="input-group input-group-outline mb-2">
                    <input  placeholder="Password" name="password" id="password1" type="Password" class="form-control" >
                  </div>
                  @error('password')
                    <p class="text-danger">
                      <small> {{$message}} </small>
                    </p>
                  @enderror
                  
                  <div class="input-group input-group-outline mb-2">
                    <input  placeholder="Confirm Password" name="password_confirmation" id="password_confirmation" type="Password" class="form-control">
                  </div>
                  @error('password_confirmation')
                    <p class="text-danger">
                      <small> {{$message}} </small>
                    </p>
                  @enderror

                  <div class="text-center">
                    <button type="submit" class="btn signup-btn w-100 my-2 mb-1">Next</button>
                    <button type="button" class="btn cancel-btn w-100 my-1 mb-1" onclick="showSetupAddForm();">Back</button>
                  </div>
                </div>
              </div>
          </form>
        </div>
        <div class="col-md-9 text-center mt-1 title-container">
          <div class="container">
            <div class="row">
              <div class="text-center lsfp-container col-md-12">
                <H4 class="lsfp">Louella's</H4>
                <H1 class="text-bold lsfp">Sweet Food Products</H1>
                <p class="lsfp-tagline">Every Bite is Delight!</p>
                <p class="lsfp-desc">At Louella's Sweet Food Products, we take pride in sourcing only the highest quality ingredients for our chocolate, ensuring that every piece is a true indulgence for your taste buds.</p>
                
                <div class="explore-btn-container mt-3 col-md-9">
                  <a href="#product"><button class="btn explore-btn mt-4"> Explore Now <span><i class="fa-solid fa-arrow-right"></i></span></button></a>
                </div>
              </div>
            </div>
            <div class="row justify-content-end">
              <div class="cacao col-md-12">
                <img src="/img/cacao.png">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </Section>

  {{-- Product Section --}}

  <section id="product">
    <div class="container pt-5">
      <div class="row pt-5">
        <div class="col-sm-12 ">
            <h4 class="text-start mx-3 swiper-title" style="font-family: Arial, Helvetica, sans-serif;">Product Categories</h4>
          <swiper-container class="mySwiper" init="false" space-between="30" slides-per-view="5" style="padding-bottom: 80px;" id="swiper1">
            
            <swiper-slide class="slide-container text-center col-sm-12 ">
              <div class="cat-card">          
                <img src="/img/category/category.jpg" class="card-title" alt="...">
              </div>
              <div class="product-cat w-100">
                <h5 class="text-center mx-0 px-0">Product Category</h5>
              </div>
            </swiper-slide>
            <swiper-slide class="slide-container text-center col-sm-12 ">
              <div class="cat-card">          
                <img src="/img/category/category.jpg" class="card-title" alt="...">
              </div>
              <div class="product-cat w-100">
                <h5 class="text-center mx-0 px-0">Product Category</h5>
              </div>
            </swiper-slide>
            <swiper-slide class="slide-container text-center col-sm-12 ">
              <div class="cat-card">          
                <img src="/img/category/category.jpg" class="card-title" alt="...">
              </div>
              <div class="product-cat w-100">
                <h5 class="text-center mx-0 px-0">Product Category</h5>
              </div>
            </swiper-slide>
            <swiper-slide class="slide-container text-center col-sm-12 ">
              <div class="cat-card">          
                <img src="/img/category/category.jpg" class="card-title" alt="...">
              </div>
              <div class="product-cat w-100">
                <h5 class="text-center mx-0 px-0">Product Category</h5>
              </div>
            </swiper-slide>
            <swiper-slide class="slide-container text-center col-sm-12 ">
              <div class="cat-card">          
                <img src="/img/category/category.jpg" class="card-title" alt="...">
              </div>
              <div class="product-cat w-100">
                <h5 class="text-center mx-0 px-0">Product Category</h5>
              </div>
            </swiper-slide>
            <swiper-slide class="slide-container text-center col-sm-12 ">
              <div class="cat-card">          
                <img src="/img/category/category.jpg" class="card-title" alt="...">
              </div>
              <div class="product-cat w-100">
                <h5 class="text-center mx-0 px-0">Product Category</h5>
              </div>
            </swiper-slide>
            <swiper-slide class="slide-container text-center col-sm-12 ">
              <div class="cat-card">          
                <img src="/img/category/category.jpg" class="card-title" alt="...">
              </div>
              <div class="product-cat w-100">
                <h5 class="text-center mx-0 px-0">Product Category</h5>
              </div>
            </swiper-slide>
            <swiper-slide class="slide-container text-center col-sm-12 ">
              <div class="cat-card">          
                <img src="/img/category/category.jpg" class="card-title" alt="...">
              </div>
              <div class="product-cat w-100">
                <h5 class="text-center mx-0 px-0">Product Category</h5>
              </div>
            </swiper-slide>
            <swiper-slide class="slide-container text-center col-sm-12 ">
              <div class="cat-card">          
                <img src="/img/category/category.jpg" class="card-title" alt="...">
              </div>
              <div class="product-cat w-100">
                <h5 class="text-center mx-0 px-0">Product Category</h5>
              </div>
            </swiper-slide>
            <swiper-slide class="slide-container text-center col-sm-12 ">
              <div class="cat-card">          
                <img src="/img/category/category.jpg" class="card-title" alt="...">
              </div>
              <div class="product-cat w-100">
                <h5 class="text-center mx-0 px-0">Product Category</h5>
              </div>
            </swiper-slide>

        </swiper-container>
      </div>
    </div>
    </div>
  </section>

  {{-- product section --}}
  <section>
    <div class="container pt-5">
      <div class="row pt-5">
        <div class="col-sm-12 ">
            <h4 class="text-start mx-3 swiper-title" style="font-family: Arial, Helvetica, sans-serif;">Top Products</h4>
          <swiper-container class="mySwiper" space-between="30" slides-per-view="5" style="padding-bottom: 80px;" init="false" id="swiper2">
            
          <swiper-slide class="slide-container text-center col-sm-12 ">
            <div class="product-card">
              <div class="product-img-container">
                <img class="product-img" src="/img/category/category1.jpg"
                class="card-img-top"/>
              </div>
              <div class="text-center mt-3">
                <h5 class="product-name mb-0">Original Cacao Powder</h5>
                <p class="small"><a href="#!" class="text-muted">Cacao Products</a></p>
              </div>
              <div class="text-center mx-2 product-price">
                <p class="small text-danger mb-0 mx-1"><s>P75.00</s></p>
                <h5 class="text-dark mb-2 mx-1">P60.00</h5>
              </div>
              <div class="d-flex justify-content-start align-items-center mb-2 mx-2 rating-container">
                <p class="text-muted my-0 small">Product Ratings:</p>
                <div class="ms-auto text-warning ratings-star">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
              <div class="d-flex justify-content-between mt-2 mx-2">
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
              <div class="text-center mt-3">
                <h5 class="product-name mb-0">Original Cacao Powder</h5>
                <p class="small"><a href="#!" class="text-muted">Cacao Products</a></p>
              </div>
              <div class="text-center mx-2 product-price">
                <p class="small text-danger mb-0 mx-1"><s>P75.00</s></p>
                <h5 class="text-dark mb-2 mx-1">P60.00</h5>
              </div>
              <div class="d-flex justify-content-start align-items-center mb-2 mx-2 rating-container">
                <p class="text-muted my-0 small">Product Ratings:</p>
                <div class="ms-auto text-warning ratings-star">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
              <div class="d-flex justify-content-between mt-2 mx-2">
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
              <div class="text-center mt-3">
                <h5 class="product-name mb-0">Original Cacao Powder</h5>
                <p class="small"><a href="#!" class="text-muted">Cacao Products</a></p>
              </div>
              <div class="text-center mx-2 product-price">
                <p class="small text-danger mb-0 mx-1"><s>P75.00</s></p>
                <h5 class="text-dark mb-2 mx-1">P60.00</h5>
              </div>
              <div class="d-flex justify-content-start align-items-center mb-2 mx-2 rating-container">
                <p class="text-muted my-0 small">Product Ratings:</p>
                <div class="ms-auto text-warning ratings-star">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
              <div class="d-flex justify-content-between mt-2 mx-2">
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
              <div class="text-center mt-3">
                <h5 class="product-name mb-0">Original Cacao Powder</h5>
                <p class="small"><a href="#!" class="text-muted">Cacao Products</a></p>
              </div>
              <div class="text-center mx-2 product-price">
                <p class="small text-danger mb-0 mx-1"><s>P75.00</s></p>
                <h5 class="text-dark mb-2 mx-1">P60.00</h5>
              </div>
              <div class="d-flex justify-content-start align-items-center mb-2 mx-2 rating-container">
                <p class="text-muted my-0 small">Product Ratings:</p>
                <div class="ms-auto text-warning ratings-star">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
              <div class="d-flex justify-content-between mt-2 mx-2">
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
              <div class="text-center mt-3">
                <h5 class="product-name mb-0">Original Cacao Powder</h5>
                <p class="small"><a href="#!" class="text-muted">Cacao Products</a></p>
              </div>
              <div class="text-center mx-2 product-price">
                <p class="small text-danger mb-0 mx-1"><s>P75.00</s></p>
                <h5 class="text-dark mb-2 mx-1">P60.00</h5>
              </div>
              <div class="d-flex justify-content-start align-items-center mb-2 mx-2 rating-container">
                <p class="text-muted my-0 small">Product Ratings:</p>
                <div class="ms-auto text-warning ratings-star">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
              <div class="d-flex justify-content-between mt-2 mx-2">
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
              <div class="text-center mt-3">
                <h5 class="product-name mb-0">Original Cacao Powder</h5>
                <p class="small"><a href="#!" class="text-muted">Cacao Products</a></p>
              </div>
              <div class="text-center mx-2 product-price">
                <p class="small text-danger mb-0 mx-1"><s>P75.00</s></p>
                <h5 class="text-dark mb-2 mx-1">P60.00</h5>
              </div>
              <div class="d-flex justify-content-start align-items-center mb-2 mx-2 rating-container">
                <p class="text-muted my-0 small">Product Ratings:</p>
                <div class="ms-auto text-warning ratings-star">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
              <div class="d-flex justify-content-between mt-2 mx-2">
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
              <div class="text-center mt-3">
                <h5 class="product-name mb-0">Original Cacao Powder</h5>
                <p class="small"><a href="#!" class="text-muted">Cacao Products</a></p>
              </div>
              <div class="text-center mx-2 product-price">
                <p class="small text-danger mb-0 mx-1"><s>P75.00</s></p>
                <h5 class="text-dark mb-2 mx-1">P60.00</h5>
              </div>
              <div class="d-flex justify-content-start align-items-center mb-2 mx-2 rating-container">
                <p class="text-muted my-0 small">Product Ratings:</p>
                <div class="ms-auto text-warning ratings-star">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
              <div class="d-flex justify-content-between mt-2 mx-2">
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

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <fieldset class="about-container">
            <legend class="mx-3">
              <div type="" class="bg-warning about-title">
                About
              </div>
            </legend>
            <div class="about-content">
              <p class="about-text">
                Welcome to Louella's Sweet Food Products, where we bring you the finest and most delectable chocolate made from original cacao beans, along with a variety of other products that celebrate the rich heritage of our local communities.
              </p>
              <p class="about-text">
                At Louella's, we take pride in sourcing only the highest quality ingredients for our chocolate, ensuring that every piece is a true indulgence for your taste buds. From the rich and creamy milk chocolate to the deep and complex flavors of our dark chocolate, every bite is a journey to the heart of the cacao plantations. But chocolate is just the beginning of what we offer. We also showcase the unique beauty of our local culture with our collection of native bags, wallets, and pouches made from traditional materials. Our shirts, keychains, and souvenirs are also designed to capture the essence of our heritage, making them perfect mementos for your travels or gifts for your loved ones.
              </p>
              <p class="about-text"> 
                And, if you're looking for something healthy, we also offer turmeric powders and tea that harness the power of this wonder spice, known for its anti-inflammatory and antioxidant properties.
              </p>
              <p class="about-text">
                Our mission at Louella's Sweet Food Products is to not only bring you the finest treats and products but also to support our local communities by sourcing our ingredients and materials locally. We are committed to promoting sustainability and ethical practices in our business, while also providing you with the best possible customer service.
              </p>
              <p class="about-text">
                Thank you for choosing Louella's Sweet Food Products. We hope you enjoy our products as much as we enjoy creating them.
              </p>
            </div>
            <div>
              <h3>History</h3>
              <p class="about-text">"Louella's tablea started in May 2019 when my wife tried to make tablea as a "Pasalubong" to her former co-employee in Manila. Inspired by the good feedback, she tried to make some and sold it to her co-teachers and friends with an initial capital of 500 pesos. As it was good, we expanded marketing to other people.
              </p>
              <p class="about-text">
                In 2020, we decided to register the business with DTI (Department of trade and Industry) and aimed to further increase our sales and improve our production.
              </p>
              <p class="about-text">
                Today, we take pride in producing tablea out of fermented cacao beans".
              </p>
              <div class="owner-container my-5">
                <h6 class="owner-name">Louie G. Grantos</h6>
                <p class="position">Louella's Sweet Food Product Owner</p>
              </div>
            </div>
          </fieldset>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <fieldset class="contact-container">
            <legend>
              <div class="bg-warning contact-title">
                Contact Us
              </div>
            </legend>
           <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="text-center mb-5">
                  <h3 class="contact-sub-title">Louela's Sweet Food Products</h3>
                  <h5>Contact Information</h5>
                </div>
                <div class="contact d-flex justify-content-start align-items-center mb-4">
                  <i class="fa-brands fa-facebook"></i><a href="#" class="mx-4 contact">www.facebook.com/Louella'sSweetFoodProducts</a>
                </div>
                <div class="contact d-flex justify-content-start align-items-center mb-4 ">
                  <i class="fa-solid fa-envelope"></i><a href="#" class="mx-4 contact">LouellasSweetFoodProducts@gmail.com</a>
                </div>
                <div class="contact d-flex justify-content-start align-items-center mb-4">
                  <i class="fa-solid fa-location-dot"></i><a href="#" class="mx-4 contact"> Zone 1 Bulan, Sorsogon, Philippines, 4706</a>
                </div>
                <div class="contact d-flex justify-content-start align-items-center ">
                  <i class="fa-solid fa-phone"></i><a href="#" class="mx-4 contact">+639103157621</a>
                </div>
    
              </div>
  
              <div class="col-md-6">
                <form action="">
                  @csrf
                  <div class="input-container mx-5 text-center mt-3">
                    <div class="input-group input-group-outline mb-2 mt-5">
                      <input placeholder="Name" name="name" id="name" type="text" class="form-control email-input-form" value={{old('name')}}>
                    </div>
                    <div class="input-group input-group-outline mb-2">
                      <input placeholder="Email" name="email" id="email" type="Email" class="form-control email-input-form" value={{old('email')}}>
                    </div>
                    <div class="input-group input-group-outline mb-2">
                      <input placeholder="Subject" name="subject" id="subject" type="text" class="form-control email-input-form" value={{old('subject')}}>
                    </div>
                    <div class="input-group input-group-outline mb-2">
                      <textarea placeholder="Your message here" name="message" id="message" type="text" class="form-control email-input-form email-textarea" value={{old('message')}}></textarea>
                    </div>
                    <div class="d-flex justify-content-end mt-2">
                      <button class="btn btn-success">Send Message</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
           </div>
          </fieldset>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="d-flex justify-content-between align-content-middle col-md-12 mt-4">
          <div class="copyright align-content-center">
            <a class="footer-text"><span class="copy mx-1">&copy;</span><span id="spanYear"> </span><span class="bar" style="color:black"> | </span>Louella's Sweet Food Products </a>
          </div>
          <div class="terms">
            <a href="">Terms & Conditions</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
  
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
  <script type="text/javascript">
    
  </script>
  <script type="text/javascript">
    $('#spanYear').html(new Date().getFullYear());
    $('#reg_form').change(function(){
        let add = document.getElementById('address');
        let street = document.getElementById('street-text').value;
        let barangay = document.getElementById('barangay-text').value;
        let city = document.getElementById('city-text').value;
        let province = document.getElementById('province-text').value;
        let country = document.getElementById('country-text').value;
        let zip = document.getElementById('zip_code-text').value;
        

        let address = street.concat(', ', barangay, ', ', city, ', ' ,province, ', ', country, ', ', zip);

        add.value = address;
        console.log(add.value);
    });
    
    function showRegForm(){
        document.getElementById('signup-form').removeAttribute('hidden');
        document.getElementById('setupadd-form').hidden = true;
        document.getElementById('account-form').hidden = true;
    }   
    function showSetupAddForm(){
        document.getElementById('signup-form').hidden = true;
        document.getElementById('setupadd-form').removeAttribute('hidden');
        document.getElementById('account-form').hidden = true;
    }
    function showSetupAccForm(){
        document.getElementById('signup-form').hidden = true;
        document.getElementById('setupadd-form').hidden = true;
        document.getElementById('account-form').removeAttribute('hidden');
    }
    
    // datepicker
    $('#birthdate').datepicker({
       endDate: '-16y'
      });


      // custom swiper

      const swiperEl1 = document.getElementById('swiper1');
      const swiperEl2 = document.getElementById('swiper2');

    const params = {
      injectStyles: [`
      .swiper-pagination-bullet {
        width: 10px;
        height: 10px;
        text-align: center;
        line-height: 20px;
        font-size: 12px;
        color: #000;
        opacity: 1;
        background: rgba(0, 0, 0, 0.2);
      }

      .swiper-pagination-bullet-active {
        color: #fff;
        background: #178c3a;
        width: 12px;
        height: 12px;
      }

      .swiper-pagination{
        margin-top: 100px;
      }
      `],
      pagination: {
        clickable: true,
      },
    }

    Object.assign(swiperEl1, params);
    Object.assign(swiperEl2, params);

    swiperEl1.initialize();
    swiperEl2.initialize();

  </script>
  
  
  <!--   Core JS Files   -->
  <script src="/assets/js/core/popper.min.js"></script>
  <script src="/assets/js/core/bootstrap.min.js"></script>
  <script src="/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  
  <!-- bootstrap -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.5"></script>
  <script src="https://kit.fontawesome.com/71aac4163c.js" crossorigin="anonymous"></script>
  
</body>

</html>