<section>
    <div class="container mt-2">
        <div class="row ">
            <div class="col-md-3">
                <a href="/admin_product_info_inventory" class="card-nav">
                    <div class="card mt-4 
                    {{ 'admin_product_info_inventory' == request()->path()  ? 'active' : ''}}
                    {{ 'admin_product_info' == request()->path()  ? 'active' : ''}}">
                        <div class="card-header p-3 pt-1 bg-transparent">
                            <div class="icon icon-lg icon-shape bg-gradient-warning shadow-info text-center border-radius-xl mt-n4 position-absolute w-25">
                                <i class="fa-solid fa-warehouse"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-md mb-0 text-capitalize ">Product Inventory</p>
                                <h4 class="mb-0 ">{{$product_count}}</h4>
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
                <a href="/admin_product_info_list" class="card-nav">
                    <div class="card mt-4 {{ 'admin_product_info_list' == request()->path()  ? 'active' : ''}}">
                        <div class="card-header p-3 pt-1 bg-transparent">
                            <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute w-25">
                                <i class="fa-solid fa-list"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-md mb-0 text-capitalize ">Product List</p>
                                <h4 class="mb-0 ">{{$product_count}}</h4>
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
                <a href="/admin_product_info_reviews" class="card-nav">
                    <div class="card mt-4 {{ 'admin_product_info_reviews' == request()->path()  ? 'active' : ''}}">
                        <div class="card-header p-3 pt-1 bg-transparent">
                            <div class="icon icon-lg icon-shape bg-gradient-success shadow-info text-center border-radius-xl mt-n4 position-absolute w-25">
                                <i class="fa-solid fa-comments"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-md mb-0 text-capitalize ">Product Reviews</p>
                                <h4 class="mb-0 ">{{$ratingsCount}}</h4>
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
                <a href="/admin_product_info_archived" class="card-nav">
                    <div class="card mt-4 {{ 'admin_product_info_archived' == request()->path()  ? 'active' : ''}}">
                        <div class="card-header p-3 pt-1 bg-transparent">
                            <div class="icon icon-lg icon-shape bg-gradient-danger shadow-info text-center border-radius-xl mt-n4 position-absolute w-25">
                                <i class="fa-solid fa-box-archive"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-md mb-0 text-capitalize ">Archived Products</p>
                                <h4 class="mb-0 ">{{$archived_count}}</h4>
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