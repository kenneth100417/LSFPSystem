
@include('pages.user-order-pages.partials.header')
<section>
    <div class="container">
        <div class="row ">
            <div class="col-md-3">
                <a href="/user_orders">
                    <div class="card mt-4">
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
                    <div class="card mt-4">
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
                <a href="user/cancelled">
                    <div class="card mt-4 active">
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
                      <h6 class="text-white text-capitalize ps-3">Cancelled Orders</h6>
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
                                    <button class="btn btn-info btn-sm mt-3">Reorder</button>
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
    


@include('pages.user-order-pages.partials.footer')