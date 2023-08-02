
@include('components.user.header')
@include('pages.user-order-pages.tabs.tabs')

<section class="mt-5 mx-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 bg-white border-radius-lg">
                <div class="card-header p-0 mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-success border-radius-lg pt-4 pb-3">
                      <h6 class="text-white text-capitalize ps-3">Pending Order Requests</h6>
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
                                    <p class="text-xs text-dark mb-0">LSWP_ORDR23453452342346</p>
                                </td>
                                <td class="w-30" style="min-width: 30; max-width: 30;">
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                        <img src="/img/category/category.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Tablea chocolate</h6>
                                        <p class="text-xs text-dark mb-0">Cacao Products</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="w-20 text-center">
                                    <p class="text-xs text-dark mb-0">25/06/23</p>
                                </td>
                                <td class="w-10 text-center">
                                    <p class="text-xs text-dark mb-0">5</p>
                                </td>
                                <td class="w-10 text-center">
                                    <p class="text-xs text-dark mb-0"><span class="text-success">PHP</span>300.00</p>
                                </td>
                                <td class="w-10 text-center align-items-middle">
                                    <button class="btn btn-danger btn-sm mt-3"> Cancel Order</button>
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
    
@include('components.user.footer')