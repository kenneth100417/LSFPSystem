<div>
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
                                    <h4 class="mb-0 ">&#8369;{{number_format($monthlySales,2)}}</h4>
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
                                    <h4 class="mb-0 ">{{$pending->count()}}</h4>
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
                                    <h4 class="mb-0 ">{{$inProcess->count()}}</h4>
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
                                    <h4 class="mb-0 ">{{$userAccounts->count()}}</h4>
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
                        <div class="card-body d-flex justify-content-between">
                            <div>
                                <h6 class="mb-0"> Daily Sales </h6>
                                <p class="mb-0 text-sm"> As of {{Carbon\Carbon::now();}} </p>
                            </div>
                            <div>
                                <div class="btn-group pe-3">
                                    <button type="button" class="btn btn-sm btn-warning dropdown-toggle w-25" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Showing Daily Sales
                                    </button>
                                    <div class="dropdown-menu">
                                      <button class="dropdown-item"  wire:click="showDaily">Daily</button>
                                      <a class="dropdown-item" wire:click="showMonthly">Monthly</a>
                                      <a class="dropdown-item" wire:click="showAnnually">Annually</a>
                                    </div>
                              </div>
                            </div>
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

                            @forelse ($recommendedProducts as $product)
                                <div class="d-flex justify-content-between p-container rounded-3 p-2 my-2">
                                    <div class="d-flex flex-row align-items-center">
                                        <div  class="d-flex align-items-center">
                                            <div >
                                                <img src="/uploads/products/{{$product->image}}"
                                                class="avatar avatar-xl img-fluid rounded-3 p-image" alt="Shopping item" style=" object-fit: cover;">
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="text-sm">{{$product->name}}</h6>
                                                <p class="small mb-0">&#8369;{{number_format($product->selling_price,2)}}</p>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="star-ratings me-0">
                                        <div class="ms-auto ratings-star">
                                            @php
                                                $rating_sum = $product->ratings->sum('star_rating');
                                                if($product->ratings->count() == 0){
                                                    $rating_val = 0;
                                                }else{
                                                    $rating_val = $rating_sum/$product->ratings->count();
                                                }
                                            @endphp

                                            @for($i = 1; $i <= number_format($rating_val); $i++)
                                                <i class="fa fa-star checked"></i>
                                            @endfor
                                            @for($i = number_format($rating_val)+1; $i <= 5; $i++)
                                                <i class="fa fa-star"></i>
                                            @endfor 
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="text-center mt-5">No Products Found.</div>
                            @endforelse
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</main>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript">
    

    var ctx2 = document.getElementById("chart-line").getContext("2d");

    new Chart(ctx2, {
        type: "line",
        data: {
            labels: [
                @if($toShow == 'daily')
                "6 days ago", "5 days ago", "4 days ago", "3 days ago", "2 days ago", "Yesterday", "Today"
                @endif
                @if($toShow == 'monthly')
                "6 months ago", "5 months ago", "4 months ago", "3 months ago", "2 months ago", "Last month", "This month"
                @endif
                @if($toShow == 'annually')
                "6 year ago", "5 year ago", "4 year ago", "3 year ago", "2 year ago", "Last year", "This year"
                @endif

            ],
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
                data:[ {{$data[6]}},{{$data[5]}},{{$data[4]}},{{$data[3]}},{{$data[2]}},{{$data[1]}},{{$data[0]}}],
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

    window.addEventListener('updateChart', data => {
        alert('test');
    });
        
    

    

</script>

@livewireScripts