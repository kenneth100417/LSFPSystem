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
                                    <p class="text-md mb-0 text-capitalize ">{{$selectedPeriod}} Sales</p>
                                    <h4 class="mb-0 ">&#8369;{{number_format($latestSales,2)}}</h4>
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
                        <div class="card-header p-0 mt-n4 mx-3  bg-transparent">
                            <div class="bg-gradient-success shadow-success border-radius-lg ">
                                <div class="chart">
                                    <canvas id="chart-line" class="chart-canvas" style="height: 500px !important; max-height: 6000px !important; padding: 0 !important"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="card-body d-flex justify-content-between">
                            <div>
                                <h6 class="mb-0 text-capitalize"> Sales Analytics </h6>
                                <p class="mb-0 text-sm"> As of {{Carbon\Carbon::now()->format('F j, Y');}} </p>
                            </div>
                            <div>
                              <select class="form-select form-select-sm bg-warning text-white px-3 py-1 text-md rounded" aria-label=".form-select-sm example" wire:model="selectedPeriod" id="period" wire:change="updateChart"   style="appearance: none;-webkit-appearance: none; -moz-appearance: none; ">
                                @foreach ($periodOptions as $value => $label)
                                    <option class="bg-white text-dark" value="{{ $value }}">{{ $label }}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12">
                    
                    <div class="card top-p-container ">
                        <div class="d-flex justify-content-between">
                            <div class="bg-transparent top-product-text-con">
                                <h4 class="mt-3 ms-4 top-product-text">{{$selectedProductAnalysis == "top" ? "Top Products":"Best Selling Products"}}</h4>
                            </div>
                            <div class="align-items-center mt-2 me-3">
                                <select class="form-select form-select-sm bg-warning text-white rounded" aria-label="Default select example" wire:model="selectedProductAnalysis">
                                    <option class="bg-white text-dark" value="top">Top Products</option>
                                    <option class="bg-white text-dark" value="best">Best Selling Products</option>
                                </select>
                            </div>
                        </div>
                        <hr class="dark horizontal mb-1 mt-n2">
                    
                        <div class="card-body p-main-container mt-0 py-0 pe-3">

                            @forelse ($productAnalysis as $product)
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

@push('scripts')
   
        
        <script>
    
            var ctx = document.getElementById("chart-line").getContext("2d");
        
            var chart = new Chart(ctx, {
                type: "line",
                data:{
            labels: @json($labels),
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
                data: @json($data),
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
                            beginAtZero: true,
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

            Livewire.on('chartDataUpdated', function (newChartData,newOptions) {
                // Clear existing data
                chart.data.labels = [];
                chart.data.datasets = [];
                chart.options = [];

                // Update with new data
                chart.data.labels = newChartData.labels;
                chart.data.datasets = newChartData.datasets;
                chart.options = newOptions;

                 chart.update();
            });
             
        </script>
        
    @endpush
    
   @livewireScripts 





