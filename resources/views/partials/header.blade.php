
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
  <script src="https://kit.fontawesome.com/71aac4163c.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="/assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
  <link rel="stylesheet" href="/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

  {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script> --}}
  {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/> --}}
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  @livewireStyles
</head>

<body>
  <x-message />
   <div class="leaves">
    <img src="/img/leaves.png">
  </div> 
  
<header>
  <div class="navbar-container">
    <nav class="navbar navbar-expand-md fixed-top mt-2">
      <img src="/img/logo.png" alt="Louella's Sweet Food Products" class="logo">
      <i class="navbar-toggler fa-solid fa-bars" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" id="navbar-toggler"></i>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav text-center justify-content-end">
          <li class="nav-item mx-3">
            <a class="nav-link nav-btn" href="{{'register' == request()->path() ? '/':'#home'}}">Home</a>
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
  </div>
</header>
<div id="preloader"></div> 
<div class="page-container">
  <section id="home">
    <div class="container search-container pt-4" id="search">
      <div class="row d-flex justify-content-end">
        <div class=" col-lg-3 col-sm-3 col-md-3 col-xl-3">
          <div class="d-flex justify-content-end search">
            <form class="form-inline search-container">
              <input class="form-control search-input" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-outline-success search-btn d-flex justify-content-center align-items-center" type="button">
                  <i class="fa-solid fa-magnifying-glass"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-4 text-center">
      <div class="row align-middle">
        <div class="col-md-3 col-sm-12 card-container login-container">