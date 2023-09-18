<div>
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
                                <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 w-10">Amount Payable</th>
                                <th class="text-dark opacity-7 w-10"></th>
                              </tr>
                            </thead>
                            <tbody>
                                @forelse ($orders as $order)
                                <tr>
                                    <td class="w-20">
                                        <p class="text-xs text-dark mb-0 text-center">LSWP_ORDR{{$order->id}}</p>
                                    </td>
                                    <td class="w-30 " >
                                        <div class="overflow-auto" style="max-height: 150px !important;" >
                                            @foreach ($order->orderItems as $item)
                                                <div class="d-flex px-2 py-1" >
                                                    <div>
                                                        <img src="/uploads/products/{{$item->product->image}}" class="avatar avatar-lg  me-3 border-radius-lg" alt="Shopping item" style="object-fit: cover;">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{$item->product->name}}</h6>
                                                    <div class="d-flex justify-content-between" style="width: 200px !important;">
                                                        <div>
                                                            <p class="text-xs text-dark mb-0">&#8369;{{number_format($item->product->selling_price,2)}}</p>
                                                        </div>
                                                        <div>
                                                            <p class="text-xs text-dark mb-0">x{{$item->quantity}}</p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        
                                    </td>
                                    <td class="w-20 text-center">
                                        <p class="text-xs text-dark mb-0">{{$order->created_at}}</p>
                                    </td>
                                    <td class="w-10 text-center">
                                        <p class="text-xs text-dark mb-0">PHP&#8369;{{number_format($order->amount,2)}}</p>
                                    </td>
                                    <td class="w-10 text-center align-items-middle">
                                        <button class="btn btn-danger btn-sm mt-3" wire:click.prevent = "buyAgain({{$order->id}})"> Reorder</button>
                                    </td>
                                </tr>
                                @empty
                                    <div class=" text-center">You don't have order yet.</div>
                                @endforelse
                            </tbody>
                          </table>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
    
</div>

