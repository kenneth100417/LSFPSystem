<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@livewireStyles

</head>


<body class="g-sidenav-show  bg-gray-100 admin-page">
    
    
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-white" id="sidenav-main">
     <div id="preloader"></div>   
        <div class="sidenav-header d-flex justify-content-start align-items-center mx-3">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    
            <button class="profile-img-container d-flex justify-content-start align-items-center">
                <img src="{{auth()->user()->photo}}" class=" profile-img" alt="profile">
            </button>
            <div class="text-start p-0 profile-name-email align-items-center mx-1">
                <h6 class="ms-1 font-weight-bold text-dark user-name">{{auth()->user()->firstname." ".auth()->user()->lastname;}}</h6>
                <p class="ms-1 text-dark user-email px-0 mt-1">{{auth()->user()->email;}}</p>
            </div>
        </div>
    
    
      <hr class="horizontal mt-0 mb-2 nav-horizontal mx-3">
    
        <div class="collapse navbar-collapse  w-auto h-75" id="sidenav-collapse-main">
            <ul class="navbar-nav ">
            
                <li class="nav-item ">
                    <a class="nav-link tab {{ 'admin_dashboard' == request()->path() ? 'active' : ''}}" href="/admin_dashboard">
                        
                        <div class="text-success text-center me-2 d-flex align-items-center justify-content-center icon">
                            <i class="fa-solid fa-table-cells-large fa-lg"></i>
                        </div>
    
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
    
                <li class="nav-item">
                    <a class="nav-link text-white tab
                        {{ 'admin_product_info' == request()->path()  ? 'active' : ''}}
                        {{ 'admin_product_info_inventory' == request()->path()   ? 'active' : ''}}
                        {{ 'admin_product_info_list' == request()->path()   ? 'active' : ''}}
                        {{ 'admin_product_info_reviews' == request()->path()  ? 'active' : ''}}
                        {{ 'admin_product_info_archived' == request()->path()  ? 'active' : ''}}
                        {{ 'admin/products' == request()->path()  ? 'active' : ''}}
                        {{ 'admin/products/add' == request()->path()  ? 'active' : ''}} " href="/admin_product_info">
                        
                        <div class="text-success text-center me-2 d-flex align-items-center justify-content-center icon">
                            <i class="fa-solid fa-file-invoice fa-lg"></i>
                        </div>
                        
                        <span class="nav-link-text ms-1">Product Informaton</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white tab
                        {{ 'admin/category' == request()->path() ? 'active' : ''}}
                        {{ 'admin/category/add' == request()->path() ? 'active' : ''}}
                        {{ 'admin/category/edit' == request()->path() ? 'active' : ''}}" href="{{url('admin/category')}}">
                        
                        <div class="text-success text-center me-2 d-flex align-items-center justify-content-center icon">
                            <i class="fa-solid fa-folder-tree fa-lg"></i>
                        </div>
                        
                        <span class="nav-link-text ms-1">
                            Product Categories
                        </span>
                    </a>
                </li>
    
                <li class="nav-item">
                    <a class="nav-link text-white tab 
                    {{ 'admin_orders' == request()->path() ? 'active' : ''}}
                    {{ 'admin_orders_orderrequests' == request()->path()   ? 'active' : ''}}
                    {{ 'admin_orders_inprocess' == request()->path()   ? 'active' : ''}}
                    {{ 'admin_orders_completed' == request()->path()  ? 'active' : ''}}
                    {{ 'admin_orders_cancelled' == request()->path()  ? 'active' : ''}} "href="/admin_orders">
                        
                        <div class="text-success text-center me-2 d-flex align-items-center justify-content-center icon">
                            <i class="fa-solid fa-cubes fa-lg"></i>
                        </div>
                        
                        <span class="nav-link-text ms-1">Orders</span>
                    </a>
                </li>
    
                <li class="nav-item">
                    <a class="nav-link text-white tab {{ 'admin_manage_account' == request()->path() ? 'active' : ''}}" href="/admin_manage_account">
                        
                        <div class="text-success text-center me-2 d-flex align-items-center justify-content-center icon">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        
                        <span class="nav-link-text ms-1">Manage Account</span>
                    </a>
                </li>
    
                <li class="nav-item">
                    <a class="nav-link text-white tab {{ 'admin_users' == request()->path() ? 'active' : ''}}" href="/admin_users">
                        
                        <div class="text-success text-center me-2 d-flex align-items-center justify-content-center icon">
                            <i class="fa-solid fa-users fa-lg"></i>
                        </div>
                        
                        <span class="nav-link-text ms-1">Users</span>
                    </a>
                </li>
    
                <li class="nav-item">
                    <h6 class="text-dark mx-3 mt-3"> Admin Tools</h6>
                </li>
    
                <li class="nav-item">
                    <a class="nav-link text-white tab {{ 'admin_add_sales' == request()->path() ? 'active' : ''}}" href="/admin_add_sales">
                        
                        <div class="text-success text-center me-2 d-flex align-items-center justify-content-center icon">
                            <i class="fa-solid fa-layer-group fa-lg"></i>
                        </div>
                        
                        <span class="nav-link-text ms-1">Walk-in Transaction</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white tab {{ 'admin_generate_report' == request()->path() ? 'active' : ''}}" href="/admin_generate_report">
                        
                        <div class="text-success text-center me-2 d-flex align-items-center justify-content-center icon">
                            <i class="fa-solid fa-file fa-lg"></i></i>
                        </div>
                        
                        <span class="nav-link-text ms-1">
                            Generate Reports
                        </span>
                    </a>
                </li>

                
             
    
            </ul>
    

      
    </aside>
    
    <main class="main-content border-radius-lg ">
        
    
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
            <div class="container-fluid py-1 d-flex justify-content-between align-items-center ">
                    
                <div>
                    <img src="/img/logo.png" alt="Louella's Sweet Food Products" class="user-dash-logo">
                    <x-message />
                </div>
                    
                <div class="d-flex justify-content-end align-items-center">

                    <ul class="navbar-nav">
                    
                        <livewire:admin.nav/>
    
                        {{-- <li class="nav-item d-flex align-items-center">
                            <a href="/admin_manage_account" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1 mx-2 nav-user"></i>
                            </a>
                        </li> --}}
    
                        <li class="nav-item d-flex align-items-center">
                            <form action="/logout" method="GET" id="logout">
                                @csrf
                                <button  type="button" class=" btn btn-danger btn-sm py-2 px-3 ms-4 mt-2" onclick="logout();">
                                    Log Out 
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
        </div>
    </div>
</nav>

