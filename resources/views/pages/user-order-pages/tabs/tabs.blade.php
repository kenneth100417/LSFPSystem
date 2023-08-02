<section>
    <div class="container">
        <div class="row ">
            <div class="col-md-3">
                <a href="/user_orders">
                    <div class="card mt-4 {{ 'user_orders' == request()->path() ? 'active' : ''}}">
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
                    <div class="card mt-4 {{ 'user_toreceive' == request()->path() ? 'active' : ''}}">
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
                    <div class="card mt-4 {{ 'user_completed' == request()->path() ? 'active' : ''}}">
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
                    <div class="card mt-4 {{ 'user_cancelled' == request()->path() ? 'active' : ''}}">
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