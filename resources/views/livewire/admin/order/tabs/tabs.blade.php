<div>
    <section>
        <div class="container mt-2">
            <div class="row ">
                <div class="col-md-3">
                    <a href="/admin_orders_orderrequests" class="card-nav">
                        <div class="card mt-4 {{ 'admin_orders_orderrequests' == request()->path() ? 'active' : ''}}{{ 'admin_orders' == request()->path() ? 'active' : ''}}">
                            <div class="card-header p-3 pt-1 bg-transparent">
                                <div class="icon icon-lg icon-shape bg-gradient-warning shadow-info text-center border-radius-xl mt-n4 position-absolute w-25">
                                    <i class="fa-solid fa-bag-shopping"></i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-md mb-0 text-capitalize ">Order Requests</p>
                                    <h4 class="mb-0 ">{{$orderRequest->count()}}</h4>
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
                        <div class="card mt-4 {{ 'admin_orders_inprocess' == request()->path() ? 'active' : ''}}">
                            <div class="card-header p-3 pt-1 bg-transparent">
                                <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute w-25">
                                    <i class="fa-solid fa-bag-shopping"></i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-md mb-0 text-capitalize ">Orders in Process</p>
                                    <h4 class="mb-0 ">{{$orderInProcess->count()}}</h4>
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
                        <div class="card mt-4 {{ 'admin_orders_completed' == request()->path() ? 'active' : ''}}">
                            <div class="card-header p-3 pt-1 bg-transparent">
                                <div class="icon icon-lg icon-shape bg-gradient-success shadow-info text-center border-radius-xl mt-n4 position-absolute w-25">
                                    <i class="fa-solid fa-bag-shopping"></i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-md mb-0 text-capitalize ">Completed Orders</p>
                                    <h4 class="mb-0 ">{{$orderCompleted->count()}}</h4>
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
                        <div class="card mt-4 {{ 'admin_orders_cancelled' == request()->path() ? 'active' : ''}}">
                            <div class="card-header p-3 pt-1 bg-transparent">
                                <div class="icon icon-lg icon-shape bg-gradient-danger shadow-info text-center border-radius-xl mt-n4 position-absolute w-25">
                                    <i class="fa-solid fa-bag-shopping"></i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-md mb-0 text-capitalize ">Cancelled Orders</p>
                                    <h4 class="mb-0 ">{{$orderCancelled->count()}}</h4>
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
</div>
