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
            <a class="btn btn-info me-2 py-2" href="{{url('/all_report_pdf')}}">Generate All Report</a>
            <a class="btn btn-warning me-2 py-2" data-bs-toggle="modal" data-bs-target="#custom_report">Generate Custom Report</a>
        </div>
    </div>
    </section>

    <!--Custom Report Modal -->
    <div class="modal fade" id="custom_report" tabindex="-1" role="dialog" aria-labelledby="change_passwordTitle" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-body">
    
                <div class="card my-4 mt-5 modal-card">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 h-25">
                      <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-2 profile-card-header">
                            <div class="profile-text-container-lg ps-3">
                                <h4 class="text-name text-white">Generate Custom Report</h4>
                            </div>
                      </div>
                    </div>
                    
                    <form action="{{url('/print_custom_report')}}" method="POST" id="custom-report-form">
                        @csrf
                    <div class="card-body px-0 pb-2 mt-0 mx-5 text-sm profile">
                        <div class="container mb-2">
                        
                            <div class="row">
                                <div class="col-md-12 mt-2">
                                    <h5 class="mb-2">Report</h5>
                                </div>
                                <div class="col-md-12">
                                    <select name="report" class="form-select profile-input-form" aria-label="Default select example" id="report" required>
                                        <option value="" selected>Select Report</option>
                                        <option value="1">Inventory</option>
                                        <option value="2">Best Selling Products</option>
                                        <option value="3">Top Products</option>
                                        <option value="4">Expired Products</option>
                                        <option value="5">Daily Sales</option>
                                        <option value="6">Monthly Sales</option>
                                        <option value="7">Annual Sales</option>
                                        <option value="8">All Sales</option>
                                        <option value="9">All Reports</option>
                                      </select>
                                      
                                </div>

                                <div class="col-md-12 mt-4">
                                    <h5 class="mb-2">Date Range</h5>
                                </div>
                                <div class="col-md-6">
                                    <input name="start" class="start form-control profile-input-form" type="text" placeholder="Start Date" id="start" value="" required>
                                </div>
                                <div  class="col-md-6">
                                    <input name="end" class="end form-control profile-input-form" type="text" placeholder="End Date" id="end" value="" required>
                                </div>

                               
                            </div>
                        </div>
                    </div>
    
                    <div class="modal-footer me-3">
                        <button id="submitBtn" type="submit" class="btn btn-success modal-update-btn" disabled data-bs-dismiss="modal" aria-label="Close">Generate</button>
                        <button type="button" class="btn btn-danger modal-cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                    </div>
                </form>
            </div>
            
          </div>
        </div>
        </div>
    </div>
    <script>
        var form = document.getElementById('custom-report-form');
        form.addEventListener('change', function() {
 
            if(document.getElementById('report').value == ''){
                document.getElementById('submitBtn').disabled = true;
            }else{
                document.getElementById('submitBtn').disabled = false;
            }
            
        });
        

        $('.start').datepicker({
         minViewMode: "months",
         startView: "months",
         format: 'yyyy-mm',
         startDate: "-10y",
         endDate: "+0m"
        });

        $('.end').datepicker({
            minViewMode: "months",
            startView: "months",
            format: 'yyyy-mm',
            endDate: "+0m"
        });

        // $('.start').on('changeDate', function(){
        //     const date = $('.start').datepicker('getDate');
        //     alert(date);
        //     $('.end').datepicker('setStartDate', '2023-09');
        // });
     
    </script>

    
</div>


{{-- to be continue // validate na dapat an  start date diri mag baba mas mataas sa end date /// start na sa function sa inentory, wara data na nakukuha --}} 