@include('/components/user-components/header')

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
                <a class="nav-link text-white tab " href="/user_dashboard">
                    
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center icon">
                        <i class="fa-solid fa-house w-100"></i>
                    </div>

                    <span class="nav-link-text ms-1">Home</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white tab active" href="/user_orders">
                    
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
        <!-- Navbar -->

    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1">
            
            <img src="/img/logo.png" alt="Louella's Sweet Food Products" class="user-dash-logo">
            <x-message />
            
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    
                    <div class="search">
                        <input placeholder="Type to search here..." type="text" class="form-control search-input">
                    </div>
                    
                </div>
                <ul class="navbar-nav  justify-content-end">
                    
                    
                    <li class="nav-item d-flex align-items-center">
                        <a href="" class="nav-link text-body font-weight-bold px-0">
                            <i class="fa fa-cart-shopping me-sm-1 mx-2 nav-cart"></i>
                        </a>
                    </li>
                    
                    <li class="nav-item d-flex align-items-center">
                    <a href="" class="nav-link text-body font-weight-bold px-0">
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
