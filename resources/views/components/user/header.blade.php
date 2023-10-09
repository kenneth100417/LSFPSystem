

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
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
<script src="https://kit.fontawesome.com/71aac4163c.js" crossorigin="anonymous"></script>

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
 <!-- Font Awesome Icons -->

<!-- CSS Files -->
<link rel="stylesheet" href="/css/page-style.css">
<link id="pagestyle" href="/assets/css/material-dashboard.css?v=3.0.5" rel="stylesheet" />

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

<!-- Nepcha Analytics (nepcha.com) -->
<!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
<script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<style>
    .starrating > input {display: none;}  /* Remove radio buttons */

.starrating > label:before { 
  content: "\f005"; /* Star */
  margin: 2px;
  font-size: 30px;
  font-family: FontAwesome;
  display: inline-block; 
}

.starrating > label
{
  color: #222222; /* Start color when not clicked */
}

.starrating > input:checked ~ label
{ color: #ffca08 ; } /* Set yellow color when star checked */

.starrating > input:hover ~ label
{ color: #ffca08 ;  } /* Set yellow color when star hover */

</style>

@livewireStyles
</head>

<body class="g-sidenav-show  bg-gray-100">
    
    
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-white" id="sidenav-main">
   <div id="preloader"></div>   
      <div class="sidenav-header d-flex justify-content-start align-items-center mx-3">
          <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
  
          <button class="profile-img-container d-flex justify-content-start align-items-center" style="min-width: 50px;height:50px">
              <img src="{{auth()->user()->photo}}" class=" profile-img" alt="profile" >
          </button>
          <div class="text-start p-0 profile-name-email align-items-center mx-1">
              <h6 class="ms-1 font-weight-bold text-dark user-name text-truncate">{{auth()->user()->firstname." ".auth()->user()->lastname;}}</h6>
              <p class="ms-1 text-dark user-email px-0 mt-1 text-truncate">{{auth()->user()->email;}}</p>
          </div>
      </div>
  
  
    <hr class="horizontal mt-0 mb-2 nav-horizontal mx-3">
  
      <div class="position-relative collapse navbar-collapse  w-auto " id="sidenav-collapse-main" style="height: 80vh !important">
          <ul class="navbar-nav">
          
              <li class="nav-item ">
                  <a class="nav-link text-white tab {{ 'user_dashboard' == request()->path() ? 'active' : ''}}" href="/user_dashboard">
                      
                      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center icon">
                          <i class="fa-solid fa-house w-100"></i>
                      </div>
  
                      <span class="nav-link-text ms-1">Home</span>
                  </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link text-white tab {{ 'user_products' == request()->path() ? 'active' : ''}}" href="/user_products">
                    
                    <div class="text-success text-center me-2 d-flex align-items-center justify-content-center icon">
                        <i class="fa-solid fa-bag-shopping fa-xl"></i>
                    </div>
                    
                    <span class="nav-link-text ms-1">Products</span>
                </a>
            </li>
  
              <li class="nav-item">
                  <a class="nav-link text-white tab 
                  {{ 'user_orders' == request()->path() ? 'active' : ''}}
                  {{ 'user_toreceive' == request()->path() ? 'active' : ''}}
                  {{ 'user_completed' == request()->path() ? 'active' : ''}}
                  {{ 'user_cancelled' == request()->path() ? 'active' : ''}}" href="/user_orders">
                      
                      <div class="text-success text-center me-2 d-flex align-items-center justify-content-center icon">
                          <i class="fa-solid fa-cart-shopping "></i>
                      </div>
                      
                      <span class="nav-link-text ms-1">Orders</span>
                  </a>
              </li>
  
              <li class="nav-item">
                  <a class="nav-link text-white tab {{ 'user_profile' == request()->path() ? 'active' : ''}}" href="/user_profile">
                      
                      <div class="text-success text-center me-2 d-flex align-items-center justify-content-center icon">
                          <i class="fa-solid fa-user "></i>
                      </div>
                      
                      <span class="nav-link-text ms-1">Profile</span>
                  </a>
              </li>
              
          </ul>

          <div class="d-flex justify-content-end position-absolute bottom-0 end-0" style="margin-top: 230px">
            <form action="/logout" method="POST" id="logout">
                @csrf
                <a href="javascript:;" type="button" class=" mx-2 user-logout-side btn btn-danger btn-sm py-2 px-3 ms-4 mt-2" onclick="logout();">
                    Log Out 
                </a>
            </form>
          </div>
    
  </aside>
  
  <main class="main-content border-radius-lg ">
  
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 d-flex justify-content-between">
            
            <div>
                <img src="/img/logo.png" alt="Louella's Sweet Food Products" class="user-dash-logo">
                <x-message />
            </div>
            
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-0 d-flex justify-content-end" id="navbar">
                {{-- <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <form class="form-inline search-container">
                        <input class="form-control search-input" type="search" placeholder="Search" aria-label="Search">
                    </form>
                </div> --}}
                <div>
                    <ul class="navbar-nav d-flex justify-content-end">
                    
                        <livewire:user.nav>
    
                        <li class="nav-item d-flex align-items-center">
                            <a href="/user_profile" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1 mx-2 nav-user"></i>
                                
                            </a>
                        </li>
    
                        <li class="nav-item d-flex align-items-center">
                            <form action="/logout" method="POST" id="logout">
                                @csrf
                                <button  type="button" class="user-logout-top btn btn-danger btn-sm py-2 px-3 ms-4 mt-2" onclick="logout();">
                                    Log Out 
                                </button>
                            </form>
                        </li>
    
                        <li class="nav-item d-xl-none ps-0 d-flex align-items-center justify-content-end pe-0">
                            <a href="javascript:;" class="nav-link text-body menu" id="iconNavbarSidenav">
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
        </div>
    </nav>

