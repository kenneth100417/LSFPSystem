@include('components.admin.header')
  
        <section>
            <div class="container mt-2">
                <div class="row ">
                    <div class="col-md-3">
                        <div class="card-nav">
                            <div class="card mt-4">
                                <div class="card-header p-3 pt-1 bg-transparent">
                                    <div class="icon icon-lg icon-shape bg-gradient-warning shadow-info text-center border-radius-xl mt-n4 position-absolute w-25">
                                        <i class="fa-solid fa-peso-sign"></i>
                                    </div>
                                    <div class="text-end pt-1">
                                        <p class="text-md mb-0 text-capitalize ">Monthly Sales</p>
                                        <h4 class="mb-0 ">0</h4>
                                    </div>
                                </div>
                              
                                <hr class="horizontal my-0 dark">
            
                                <div class="card-footer p-3">
                                  <p class="mb-0 text-sm">As of {{Carbon\Carbon::now();}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-md-3">
                        <a href="/admin_orders" class="card-nav">
                            <div class="card mt-4">
                                <div class="card-header p-3 pt-1 bg-transparent">
                                    <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute w-25">
                                        <i class="fa-solid fa-cubes"></i>
                                    </div>
                                    <div class="text-end pt-1">
                                        <p class="text-md mb-0 text-capitalize ">Pending Orders</p>
                                        <h4 class="mb-0 ">0</h4>
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
                        <a href="/admin_orders_inprocess" class="card-nav">
                            <div class="card mt-4 ">
                                <div class="card-header p-3 pt-1 bg-transparent">
                                    <div class="icon icon-lg icon-shape bg-gradient-success shadow-info text-center border-radius-xl mt-n4 position-absolute w-25">
                                        <i class="fa-solid fa-cubes-stacked"></i>
                                    </div>
                                    <div class="text-end pt-1">
                                        <p class="text-md mb-0 text-capitalize ">Orders in Process</p>
                                        <h4 class="mb-0 ">0</h4>
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
                        <a href="/admin_users" class="card-nav">
                            <div class="card mt-4">
                                <div class="card-header p-3 pt-1 bg-transparent">
                                    <div class="icon icon-lg icon-shape bg-gradient-danger shadow-info text-center border-radius-xl mt-n4 position-absolute w-25">
                                        <i class="fa-solid fa-users"></i>
                                    </div>
                                    <div class="text-end pt-1">
                                        <p class="text-md mb-0 text-capitalize ">User Accounts</p>
                                        <h4 class="mb-0 ">0</h4>
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

        <section>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-lg-7 col-md-12 mt-4">
                        <div class="card z-index-2 graph-card">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                                <div class="bg-gradient-success shadow-success border-radius-lg py-0 pe-1">
                                    <div class="chart">
                                        <canvas id="chart-line" class="chart-canvas" ></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="mb-0"> Daily Sales </h6>
                                <p class="mb-0 text-sm"> As of {{Carbon\Carbon::now();}} </p>
                                <hr class="dark horizontal">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12">
                        <div class="card top-p-container ">
                            <div class="bg-transparent top-product-text-con">
                               <h4 class="mt-3 ms-4 top-product-text">Top Products</h4>
                               <hr class="dark horizontal mb-1 mt-n2">
                            </div>
                        
                            <div class="card-body p-main-container mt-0 py-0 pe-3">
                                <div class="d-flex justify-content-between p-container rounded-3 p-2 my-2">
                                    <div class="d-flex flex-row align-items-center">
                                    <div  class="d-flex align-items-center">
                                        <div>
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img2.webp"
                                            class="img-fluid rounded-3 p-image" alt="Shopping item">
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="text-sm">Samsung galaxy Note 10 </h6>
                                            <p class="small mb-0">PHP65.00
                                            </p>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="star-ratings">
                                        <div class="ms-auto text-warning ratings-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between p-container rounded-3 p-2 my-2">
                                    <div class="d-flex flex-row align-items-center">
                                    <div  class="d-flex align-items-center">
                                        <div>
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img2.webp"
                                            class="img-fluid rounded-3 p-image" alt="Shopping item">
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="text-sm">Samsung galaxy Note 10 </h6>
                                            <p class="small mb-0">PHP65.00
                                            </p>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="star-ratings">
                                        <div class="ms-auto text-warning ratings-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between p-container rounded-3 p-2 my-2">
                                    <div class="d-flex flex-row align-items-center">
                                    <div  class="d-flex align-items-center">
                                        <div>
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img2.webp"
                                            class="img-fluid rounded-3 p-image" alt="Shopping item">
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="text-sm">Samsung galaxy Note 10 </h6>
                                            <p class="small mb-0">PHP65.00
                                            </p>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="star-ratings">
                                        <div class="ms-auto text-warning ratings-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between p-container rounded-3 p-2 my-2">
                                    <div class="d-flex flex-row align-items-center">
                                    <div  class="d-flex align-items-center">
                                        <div>
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img2.webp"
                                            class="img-fluid rounded-3 p-image" alt="Shopping item">
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="text-sm">Samsung galaxy Note 10 </h6>
                                            <p class="small mb-0">PHP65.00
                                            </p>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="star-ratings">
                                        <div class="ms-auto text-warning ratings-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between p-container rounded-3 p-2 my-2">
                                    <div class="d-flex flex-row align-items-center">
                                    <div  class="d-flex align-items-center">
                                        <div>
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img2.webp"
                                            class="img-fluid rounded-3 p-image" alt="Shopping item">
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="text-sm">Samsung galaxy Note 10 </h6>
                                            <p class="small mb-0">PHP65.00
                                            </p>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="star-ratings">
                                        <div class="ms-auto text-warning ratings-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between p-container rounded-3 p-2 my-2">
                                    <div class="d-flex flex-row align-items-center">
                                    <div  class="d-flex align-items-center">
                                        <div>
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img2.webp"
                                            class="img-fluid rounded-3 p-image" alt="Shopping item">
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="text-sm">Samsung galaxy Note 10 </h6>
                                            <p class="small mb-0">PHP65.00
                                            </p>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="star-ratings">
                                        <div class="ms-auto text-warning ratings-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>

                                
                            

                            
                            

                            
                                
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
            labels: ["6 days ago", "5 days ago", "4 days ago", "3 days ago", "2 days ago", "Yesterday", "Today"],
            datasets: [{
                label: "Total Sales",
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
                data: [50, 40, 300, 320, 1000, 350, 500],
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
