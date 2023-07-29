@include('components.admin.header')


    
      
        <section>
            <div class="container mt-2">
                <div class="row ">
                    <div class="col-md-3">
                        <a href="/admin_orders_orderrequests" class="card-nav">
                            <div class="card mt-4">
                                <div class="card-header p-3 pt-1 bg-transparent">
                                    <div class="icon icon-lg icon-shape bg-gradient-warning shadow-info text-center border-radius-xl mt-n4 position-absolute w-25">
                                        <i class="fa-solid fa-bag-shopping"></i>
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
                        <a href="/admin_orders_inprocess" class="card-nav">
                            <div class="card mt-4 active">
                                <div class="card-header p-3 pt-1 bg-transparent">
                                    <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute w-25">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </div>
                                    <div class="text-end pt-1">
                                        <p class="text-md mb-0 text-capitalize ">Orders in Process</p>
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
                        <a href="/admin_orders_completed" class="card-nav">
                            <div class="card mt-4 ">
                                <div class="card-header p-3 pt-1 bg-transparent">
                                    <div class="icon icon-lg icon-shape bg-gradient-success shadow-info text-center border-radius-xl mt-n4 position-absolute w-25">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </div>
                                    <div class="text-end pt-1">
                                        <p class="text-md mb-0 text-capitalize ">Completed Orders</p>
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
                        <a href="/admin_orders_cancelled" class="card-nav">
                            <div class="card mt-4">
                                <div class="card-header p-3 pt-1 bg-transparent">
                                    <div class="icon icon-lg icon-shape bg-gradient-danger shadow-info text-center border-radius-xl mt-n4 position-absolute w-25">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </div>
                                    <div class="text-end pt-1">
                                        <p class="text-md mb-0 text-capitalize ">Cancelled Orders</p>
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
                            <div class="bg-gradient-success border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                              <div>
                                <h6 class="text-white text-capitalize ps-3">Orders in Process</h6>
                              </div>
                              <div class="d-flex  align-items-center">
                                <div class="d-flex  align-items-center" >

                                    <h5 class="text-white text-capitalize pe-3"><i class="fa-solid fa-arrow-up-wide-short"></i></h5>

                                    <h5 class="text-white text-capitalize pe-4"><i class="fa-solid fa-arrow-down-short-wide"></i></h5>

                                </div>

                                <div class="btn-group pe-3">
                                    <button type="button" class="btn btn-sm btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Sort By
                                    </button>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item" href="#">Customer Name</a>
                                      <a class="dropdown-item" href="#">Order Date</a>
                                      <a class="dropdown-item" href="#">Amount Payable</a>
                                    </div>
                              </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                              <table class="table align-items-center mb-0" >
                                <thead>
                                  <tr>
                                    <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-15">Order ID</th>
                                    <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-15">Customer ID</th>
                                    <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-15">Customer Name</th>
                                    <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-10">Order Date</th>
                                    <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-15">Amount Payable</th>
                                    <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-15">Status</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="mw-15 text-center">
                                            <p class="text-xs text-dark mb-0">LSFP23453452342346</p>
                                        </td>
                                        <td class="mw-15 text-center">
                                            <p class="text-xs text-dark mb-0">LSFP_USER23453452342346</p>
                                        </td>
                                        <td class="mw-15 text-center">
                                            <p class="text-xs text-dark mb-0">Lorem Ipsum</p>
                                        </td>
                                        <td class="mw-10 text-center">
                                            <p class="text-xs text-dark mb-0">10/04/2017</p>
                                        </td>
                                        <td class="mw-15 text-center">
                                            <p class="text-xs text-dark mb-0">PHP250.00</p>
                                        </td>
                                        <td class="mw-15 text-center">
                                            <p class="text-xs mb-0 text-success">Order in process</p>
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
