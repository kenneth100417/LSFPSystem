<div>
    <section class="mt-5 mx-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 bg-white border-radius-lg">
                    <div class="card-header p-0 mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-success border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                          <div>
                            <h6 class="text-white text-capitalize ps-3">Completed Orders</h6>
                          </div>
                          <div class="d-flex  align-items-center">
                            <div class="d-flex  align-items-center" >

                                <h5 class="text-white text-capitalize pe-3" wire:click.prevent = "desc()" style="cursor: pointer"><i class="fa-solid fa-arrow-up-wide-short" ></i></h5>

                                <h5 class="text-white text-capitalize pe-4" wire:click.prevent = "asc()" style="cursor: pointer"><i class="fa-solid fa-arrow-down-short-wide"></i></h5>

                            </div>

                        <div class="btn-group pe-3">
                            <button type="button" class="btn btn-sm btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Sort by {{$sortby}}
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" wire:click.prevent = "id()">Order ID</a>
                                <a class="dropdown-item" wire:click.prevent = "name()">Customer Name</a>
                                <a class="dropdown-item" wire:click.prevent = "date()">Order Date</a>
                                <a class="dropdown-item" wire:click.prevent = "amount()">Amount Payable</a>
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
                                @forelse ($orders as $order)
                                <tr>
                                    <td class="mw-15 text-center">
                                        <p class="text-xs text-dark mb-0">LSFP_ORDER{{$order->id}}</p>
                                    </td>
                                    <td class="mw-15 text-center">
                                        <p class="text-xs text-dark mb-0">LSFP_USER{{$order->user_id}}</p>
                                    </td>
                                    <td class="mw-15 text-center">
                                        <p class="text-xs text-dark mb-0">{{$order->fName}} {{$order->lName}}</p>
                                    </td>
                                    <td class="mw-10 text-center">
                                        <p class="text-xs text-dark mb-0">{{$order->created_at->format('Y-m-d')}}</p>
                                    </td>
                                    <td class="mw-15 text-center">
                                        <p class="text-xs text-dark mb-0">&#8369;{{number_format($order->amount,2)}}</p>
                                    </td>
                                    <td class="mw-15 text-center">
                                        <p class="text-sm mb-0 text-success">Completed</p>
                                    </td>
                                    
                                </tr>
                                @empty
                                    <div class="text-center mt-5">
                                        You don't have orders to process.
                                    </div>
                                @endforelse

                            </tbody>
                          </table>
                        </div>
                        <div class="d-flex justify-content-center mt-5">
                            {{$orders->links()}}
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
</main>
    
</div>
