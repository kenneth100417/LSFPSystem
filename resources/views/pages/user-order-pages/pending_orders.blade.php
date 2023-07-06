
@include('/components/user-components/header')

<body class="g-sidenav-show  bg-gray-100">
    
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-white" id="sidenav-main">
    <div id="preloader"></div>  
    <div class="sidenav-header d-flex justify-content-start align-items-center mx-3">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>

        <button class="profile-img-container d-flex justify-content-start align-items-center">
            <img src="/img/Profile_pic/Profile_temp.png" class=" profile-img" alt="profile">
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
                        <a href="./pages/sign-in.html" class="nav-link text-body font-weight-bold px-0">
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

<section>
    <div class="container">
        <div class="row ">
            <div class="col-md-3">
                <a href="/user_orders">
                    <div class="card active mt-4">
                        <div class="card-header p-3 pt-1 bg-transparent">
                            <div class="icon icon-lg icon-shape bg-gradient-warning shadow-info text-center border-radius-xl mt-n4 position-absolute w-25">
                                <i class="fa-solid fa-bag-shopping card-icon"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-md mb-0 text-capitalize ">Order Requests</p>
                                <h4 class="mb-0 ">+91</h4>
                            </div>
                        </div>
                      
                        <hr class="horizontal my-0 dark">
    
                        <div class="card-footer p-3">
                          <p class="mb-0 text-sm">As of {{Carbon\Carbon::now();}}</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="user_toreceive">
                    <div class="card mt-4">
                        <div class="card-header p-3 pt-1 bg-transparent">
                            <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute w-25">
                                <i class="fa-solid fa-bag-shopping card-icon"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-md mb-0 text-capitalize ">To Receive</p>
                                <h4 class="mb-0 ">+91</h4>
                            </div>
                        </div>
                      
                        <hr class="horizontal my-0 dark">
    
                        <div class="card-footer p-3">
                          <p class="mb-0 text-sm">As of {{Carbon\Carbon::now();}}</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="/user_completed">
                    <div class="card mt-4 ">
                        <div class="card-header p-3 pt-1 bg-transparent">
                            <div class="icon icon-lg icon-shape bg-gradient-success shadow-info text-center border-radius-xl mt-n4 position-absolute w-25">
                                <i class="fa-solid fa-bag-shopping card-icon"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-md mb-0 text-capitalize ">Completed</p>
                                <h4 class="mb-0 ">+91</h4>
                            </div>
                        </div>
                      
                        <hr class="horizontal my-0 dark">
    
                        <div class="card-footer p-3">
                          <p class="mb-0 text-sm">As of {{Carbon\Carbon::now();}}</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="user_cancelled">
                    <div class="card mt-4">
                        <div class="card-header p-3 pt-1 bg-transparent">
                            <div class="icon icon-lg icon-shape bg-gradient-danger shadow-info text-center border-radius-xl mt-n4 position-absolute w-25">
                                <i class="fa-solid fa-bag-shopping card-icon"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-md mb-0 text-capitalize ">Cancelled</p>
                                <h4 class="mb-0 ">+91</h4>
                            </div>
                        </div>
                      
                        <hr class="horizontal my-0 dark">
    
                        <div class="card-footer p-3">
                          <p class="mb-0 text-sm">As of {{Carbon\Carbon::now();}}</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="mt-5 mx-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 bg-white border-radius-lg">
                <div class="card-header p-0 mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-success border-radius-lg pt-4 pb-3">
                      <h6 class="text-white text-capitalize ps-3">Pending Order Requests</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                      <table class="table align-items-center mb-0 ">
                        <thead>
                          <tr>
                            <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 w-20">Order ID</th>
                            <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ps-2 w-30">Products</th>
                            <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 w-20">Order Date</th>
                            <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 w-10">Quantity</th>
                            <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 w-10">Amount Payable</th>
                            <th class="text-dark opacity-7 w-10"></th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="w-20">
                                    <p class="text-xs text-dark mb-0">23453452342346</p>
                                </td>
                                <td class="w-30">
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">John Michael</h6>
                                        <p class="text-xs text-dark mb-0">john@creative-tim.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="w-20 text-center">
                                    <p class="text-xs text-dark mb-0">john@creative-tim.com</p>
                                </td>
                                <td class="w-10 text-center">
                                    <p class="text-xs text-dark mb-0">john@creative-tim.com</p>
                                </td>
                                <td class="w-10 text-center">
                                    <p class="text-xs text-dark mb-0">john@creative-tim.com</p>
                                </td>
                                <td class="w-10 text-center align-items-middle">
                                    <button class="btn btn-danger btn-sm mt-3"> Cancel Order</button>
                                </td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
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
    confirmButtonColor: '#3085d6',
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
