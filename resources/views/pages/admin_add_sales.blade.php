@include('components.user-components.header')

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
            <p class="ms-1 text-dark user-email px-0">{{auth()->user()->email;}}</p>
        </div>
    </div>


  <hr class="horizontal mt-0 mb-2 nav-horizontal mx-3">

    <div class="collapse navbar-collapse  w-auto h-75" id="sidenav-collapse-main">
        <ul class="navbar-nav ">
        
            <li class="nav-item ">
                <a class="nav-link tab" href="/admin_dashboard">
                    
                    <div class="text-success text-center me-2 d-flex align-items-center justify-content-center icon">
                        <i class="fa-solid fa-table-cells-large fa-lg"></i>
                    </div>

                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white tab " href="/admin_product_info">
                    
                    <div class="text-success text-center me-2 d-flex align-items-center justify-content-center icon">
                        <i class="fa-solid fa-file-invoice fa-lg"></i>
                    </div>
                    
                    <span class="nav-link-text ms-1">Product Informaton</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white tab " href="/admin_orders">
                    
                    <div class="text-success text-center me-2 d-flex align-items-center justify-content-center icon">
                        <i class="fa-solid fa-cubes fa-lg"></i>
                    </div>
                    
                    <span class="nav-link-text ms-1">Orders</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white tab " href="/admin_manage_account">
                    
                    <div class="text-success text-center me-2 d-flex align-items-center justify-content-center icon">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    
                    <span class="nav-link-text ms-1">Manage Account</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white tab " href="/admin_users">
                    
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
                <a class="nav-link text-white tab active" href="/admin_add_sales">
                    
                    <div class="text-success text-center me-2 d-flex align-items-center justify-content-center icon">
                        <i class="fa-solid fa-layer-group fa-lg"></i>
                    </div>
                    
                    <span class="nav-link-text ms-1">Add Sales</span>
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
            <div class="container-fluid py-1 ">
                
                <img src="/img/logo.png" alt="Louella's Sweet Food Products" class="user-dash-logo">
                <x-message />
                
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 d-flex justify-content-end" id="navbar">
                   
                    <ul class="navbar-nav">
                        
                        <li class="nav-item d-flex align-items-center mx-1">
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
    
      
        <section class="mx-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 bg-white border-radius-lg mt-5">
                        <div class="card-header p-0 mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-success border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                                <h6 class="text-white text-capitalize ps-3">Add Sales</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <form action="">
                                @csrf
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class=" m-4" style="min-height: 15rem;">
                                                <div class="">
                                                  <h6 class="">Select Product</h6>
                                                  <div class="form-outline">
                                                    <input type="search" id="form1" class="form-control  p-2" placeholder="Search Product" aria-label="Search" style="box-shadow: 0 2px 5px rgba(182, 182, 182, 0.75); font-size: 14px;"/>
                                                  </div>
                                                </div>

                                                <div class="mt-2">
                                                    <h6 class="">Quantity</h6>
                                                    <div class="form-outline">
                                                      <input type="text" id="form1" class="form-control  p-2" placeholder="Quantity" style="box-shadow: 0 2px 5px rgba(182, 182, 182, 0.75); font-size: 14px;"/>
                                                    </div>
                                                    <div class="d-flex justify-content-center align-items-center mt-5">
                                                        <button class="btn btn-success btn-sm mx-1">Submit</button>
                                                        <button class="btn btn-warning btn-sm mx-1">Clear</button>
                                                    </div>
                                                  </div>
                                                </div>
                                                
                                                
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="mt-3" style="min-height: 15rem;">
                                                <div class="">
                                                  <h5 class="">Card title</h5>
                                                  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                  <a href="#" class="card-link">Card link</a>
                                                  <a href="#" class="card-link">Another link</a>
                                                </div>
                                              </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="table-responsive p-0">
                                                <table class="table align-items-center mb-0" >
                                                  <thead>
                                                    <tr>
                                                      <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-10">Product ID</th>
                                                      <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-15">Products</th>
                                                      <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-10">Price</th>
                                                      <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-10">Sold</th>
                                                      <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-10">In Stock</th>
                                                      <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-15">Category</th>
                                                      <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-15">Description</th>
                                        
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                      <tr>
                                                          <td class="w-10">
                                                              <p class="text-xs text-dark mb-0">23453452342346</p>
                                                          </td>
                                                          <td class="mw-15">
                                                              <div class="d-flex px-2 py-1 align-items-center justify-content-center" style="min-width: 15; max-width: 15; white-space:normal;min-height:80px ;max-height: 80px; overflow:scroll; align-items: center;">
                                                                  <div>
                                                                  <img src="../assets/img/team-2.jpg" class="avatar avatar-md me-3 border-radius-lg">
                                                                  </div>
                                                                  <div class="d-flex flex-column justify-content-center">
                                                                  <p class="mb-0 text-sm text-dark">Lorem ipsum dolor sit amet.</p>
                                                                  </div>
                                                              </div>
                                                          </td>
                                                          <td class="mw-10 text-center">
                                                              <p class="text-xs text-dark mb-0">PHP65.00</p>
                                                          </td>
                                                          <td class="mw-10 text-center">
                                                              <p class="text-xs text-dark mb-0">50</p>
                                                          </td>
                                                          <td class="mw-10 text-center">
                                                              <p class="text-xs text-dark mb-0">100</p>
                                                          </td>
                                                          <td class="mw-15 text-center">
                                                              <p class="text-xs text-dark mb-0">Powdered Products</p>
                                                          </td>
                                                          <td class="mw-15 text-center" >
                                                              <div class="d-flex" style="min-width: 15; max-width: 15; white-space:normal; min-height:80px; max-height: 80px; overflow:scroll; align-items: center;">
                                                                  <p class="text-xs text-dark mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                                              </div>
                                                          </td>
                                                        
                                                      </tr>
                  
                                                      
                                                     
                                                  </tbody>
                                                </table>
                                              </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
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
    // const swiperEl = document.getElementById('swiper');

    // const params = {
    //   injectStyles: [`
    //   .swiper-pagination-bullet {
    //     display: none;
    //   }

    //   .swiper-pagination{
    //     display: none;
    //   }

    //   `],
    //   pagination: {
    //     clickable: true,
    //   },
    // }

    // Object.assign(swiperEl, params);

    // swiperEl.initialize();



// preloader
var loader = document.getElementById('preloader');

window.addEventListener("load", function(){
    loader.style.display = "none";
});


</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript">
    

    var ctx2 = document.getElementById("chart-line").getContext("2d");

    new Chart(ctx2, {
        type: "line",
        data: {
            labels: ["S", "M", "T", "W", "T", "F", "S"],
            datasets: [{
                label: "Mobile apps",
                tension: 0,
                borderWidth: 0,
                pointRadius: 5,
                pointBackgroundColor: "rgba(255, 255, 255, .8)",
                pointBorderColor: "transparent",
                borderColor: "rgba(255, 255, 255, .8)",
                borderColor: "rgba(255, 255, 255, .8)",
                borderWidth: 4,
                backgroundColor: "transparent",
                fill: true,
                data: [50, 40, 300, 320, 500, 350, 40],
                maxBarThickness: 6

            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5],
                        color: 'rgba(255, 255, 255, .2)'
                    },
                    ticks: {
                        display: true,
                        color: '#f8f9fa',
                        padding: 10,
                        font: {
                            size: 14,
                            weight: 300,
                            family: "Roboto",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        color: '#f8f9fa',
                        padding: 10,
                        font: {
                            size: 14,
                            weight: 300,
                            family: "Roboto",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
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
