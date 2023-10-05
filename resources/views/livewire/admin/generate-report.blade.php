<div>
    <section>
        <div class="container mt-5">
            <div class="row ">
                <div class="col-md-3">
                    <a href="{{url('/inventory_pdf')}}" class="card-nav ">
                        <div class="card mt-4 card-pdf">
                            <div class="card-header p-3 pt-1 bg-transparent">
                                <div class="icon icon-lg icon-shape bg-gradient-warning shadow-info text-center border-radius-xl mt-n5 position-absolute w-25">
                                    <i class="fa-solid fa-print"></i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-md mb-0 text-capitalize "><i class="fa fa-file-pdf-o" arian-hidden='true' style="font-size: 22px !important"></i></p>
                                    <h4 class="mt-2">Inventory</h4>
                                </div>
                            </div>
                          
                            <hr class="horizontal my-0 dark">
        
                            <div class="card-footer p-3">
                              <p class="mb-0 text-sm">As of {{date('F, j Y')}}</p>
                            </div>
                        </div>
                    </a>
                </div>
      
                <div class="col-md-3">
                    <a href="{{url('/best_selling_products_pdf')}}" class="card-nav ">
                        <div class="card mt-4  card-pdf">
                            <div class="card-header p-3 pt-1 bg-transparent">
                                <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n5 position-absolute w-25">
                                    <i class="fa-solid fa-print"></i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-md mb-0 text-capitalize "><i class="fa fa-file-pdf-o" arian-hidden='true' style="font-size: 22px !important"></i></p>
                                    <h4 class="mt-2">Best Selling Products</h4>
                                </div>
                            </div>
                          
                            <hr class="horizontal my-0 dark">
        
                            <div class="card-footer p-3">
                              <p class="mb-0 text-sm">As of {{date('F, j Y')}}</p>
                            </div>
                        </div>
                    </a>
                </div>
      
                <div class="col-md-3">
                    <a href="{{url('/top_products_pdf')}}" class="card-nav ">
                        <div class="card mt-4  card-pdf">
                            <div class="card-header p-3 pt-1 bg-transparent">
                                <div class="icon icon-lg icon-shape bg-gradient-success shadow-info text-center border-radius-xl mt-n5 position-absolute w-25">
                                    <i class="fa-solid fa-print"></i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-md mb-0 text-capitalize "><i class="fa fa-file-pdf-o" arian-hidden='true' style="font-size: 22px !important"></i></p>
                                    <h4 class="mt-2">Top Products</h4>
                                </div>
                            </div>
                          
                            <hr class="horizontal my-0 dark">
        
                            <div class="card-footer p-3">
                              <p class="mb-0 text-sm">As of {{date('F, j Y')}}</p>
                            </div>
                        </div>
                    </a>
                </div>
      
                <div class="col-md-3">
                    <a href="{{url('/expired_products_pdf')}}" class="card-nav ">
                        <div class="card mt-4  card-pdf">
                            <div class="card-header p-3 pt-1 bg-transparent">
                                <div class="icon icon-lg icon-shape bg-gradient-danger shadow-info text-center border-radius-xl mt-n5 position-absolute w-25">
                                    <i class="fa-solid fa-print"></i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-md mb-0 text-capitalize "><i class="fa fa-file-pdf-o" arian-hidden='true' style="font-size: 22px !important"></i></p>
                                    <h4 class="mt-2">Expired Products</h4>
                                </div>
                            </div>
                          
                            <hr class="horizontal my-0 dark">
        
                            <div class="card-footer p-3">
                              <p class="mb-0 text-sm">As of {{date('F, j Y')}}</p>
                            </div>
                        </div>
                    </a>
                </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-3">
                <a href="{{url('/daily_sales_pdf')}}" class="card-nav ">
                    <div class="card mt-4  card-pdf">
                        <div class="card-header p-3 pt-1 bg-transparent">
                            <div class="icon icon-lg icon-shape bg-gradient-success shadow-info text-center border-radius-xl mt-n5 position-absolute w-25">
                                <i class="fa-solid fa-print"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-md mb-0 text-capitalize "><i class="fa fa-file-pdf-o" arian-hidden='true' style="font-size: 22px !important"></i></p>
                                <h4 class="mt-2">Daily Sales</h4>
                            </div>
                        </div>
                      
                        <hr class="horizontal my-0 dark">
    
                        <div class="card-footer p-3">
                          <p class="mb-0 text-sm">For the month of {{date('F')}}</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="{{url('/monthly_sales_pdf')}}" class="card-nav ">
                    <div class="card mt-4  card-pdf">
                        <div class="card-header p-3 pt-1 bg-transparent">
                            <div class="icon icon-lg icon-shape bg-gradient-danger shadow-info text-center border-radius-xl mt-n5 position-absolute w-25">
                                <i class="fa-solid fa-print"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-md mb-0 text-capitalize "><i class="fa fa-file-pdf-o" arian-hidden='true' style="font-size: 22px !important"></i></p>
                                <h4 class="mt-2">Monthly Sales</h4>
                            </div>
                        </div>
                      
                        <hr class="horizontal my-0 dark">
    
                        <div class="card-footer p-3">
                          <p class="mb-0 text-sm">For this year {{date('Y')}}</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="{{url('/annual_sales_pdf')}}" class="card-nav ">
                    <div class="card mt-4 card-pdf">
                        <div class="card-header p-3 pt-1 bg-transparent">
                            <div class="icon icon-lg icon-shape bg-gradient-warning shadow-info text-center border-radius-xl mt-n5 position-absolute w-25">
                                <i class="fa-solid fa-print"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-md mb-0 text-capitalize "><i class="fa fa-file-pdf-o" arian-hidden='true' style="font-size: 22px !important"></i></p>
                                <h4 class="mt-2">Annual Sales</h4>
                            </div>
                        </div>
                      
                        <hr class="horizontal my-0 dark">
    
                        <div class="card-footer p-3">
                          <p class="mb-0 text-sm">For the past 10 years</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="{{url('/all_sales_pdf')}}" class="card-nav ">
                    <div class="card mt-4 card-pdf">
                        <div class="card-header p-3 pt-1 bg-transparent">
                            <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n5 position-absolute w-25">
                                <i class="fa-solid fa-print"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-md mb-0 text-capitalize "><i class="fa fa-file-pdf-o" arian-hidden='true' style="font-size: 22px !important"></i></p>
                                <h4 class="mt-2">All Sales Report</h4>
                            </div>
                        </div>
                      
                        <hr class="horizontal my-0 dark">
    
                        <div class="card-footer p-3">
                          <p class="mb-0 text-sm">For this year {{date('Y')}}</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>
    <div class="mt-5 d-flex justify-content-center">
        <div>
            <a class="btn btn-info me-2 py-2" href="{{url('/all_report_pdf')}}">Print All Report</a>
        </div>
    </div>
      </section>
</div>
