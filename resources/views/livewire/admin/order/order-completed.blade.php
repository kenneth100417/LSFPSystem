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
                                <a class="dropdown-item" style="cursor: pointer" wire:click.prevent = "id()">Order ID</a>
                                <a class="dropdown-item" style="cursor: pointer" wire:click.prevent = "name()">Customer Name</a>
                                <a class="dropdown-item" style="cursor: pointer" wire:click.prevent = "date()">Order Date</a>
                                <a class="dropdown-item" style="cursor: pointer" wire:click.prevent = "amount()">Amount Payable</a>
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
                                <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-15">
                                    
                                </th>
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
                                    <td class="mw-15 text-center">
                                        <button class="btn btn-success btn-sm mt-3" wire:click.prevent = "viewInvoice({{$order->id}})">E-Invoice</button>
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

        <!-- Invoice Modal -->
   
<div class="modal fade" id="invoiceModal" tabindex="-1" role="dialog" aria-labelledby="invoiceModal" aria-bs-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false" >
    <div class="modal-dialog modal-dialog-scrollable" role="document" style="width: auto; max-width: 550px">
        <div class="modal-content">
            <div class="modal-body">
                <div class="card my-4 modal-card">
                    <div class="card-body px-0  mx-2 text-sm ">
                        <div class="container">
                            <div class="row d-flex">
                                <div class="text-center">
                                    <img src="/img/logo.png" alt="Louella's Sweet Food Products" class="logo" style="width: 150px">
                                </div>
                                <div class="text-center">
                                    <h5>Louella's Sweet Food Products</h5>
                                    <p>Bulan, Sorsogon</p>
                                    <p>{{date('F j, Y')}}</p>
                                </div>
                            </div>

                            <h5 class="text-center mt-1">INVOICE</h5>
                            <hr class="bg-dark my-0 mx-0">
                            <div class="row mt-2">
                                <div class="d-flex">
                                    <div class="mx-2">
                                        <p class="text-dark" style="font-weight: bold">Sold to:</p>
                                        <p class="text-dark" style="font-weight: bold">Date:</p>
                                        <p class="text-dark" style="font-weight: bold">Order ID:</p>
                                    </div>
                                    <div>
                                        <p for="">{{$invoice == null ? '':$invoiceUser->firstname." ".$invoiceUser->lastname}}</p>
                                        <p for="">{{$invoice == null ? '':date('Y-m-d',strtotime($invoice->updated_at))}}</p>
                                        <p for="">{{$invoice == null ? '':"LSWP_ORDR".$invoice->id}}</p>
                                    </div>
                                </div>
                            </div>
                            <hr class="bg-dark my-0 mx-0">
                            <div class="row">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0 ">
                                        <tbody>
                                            <tr >
                                                <td>
                                                    <div class="">
                                                        @foreach ($invoiceItem as $item)
                                                            <div class="d-flex py-1">
                                                                <div>
                                                                  <img src="/uploads/products/{{$item->product->image}}" class="avatar avatar-lg  me-3 border-radius-lg" alt="Shopping item" style="object-fit: cover;">
                                                              </div>
                                                              <div class="d-flex flex-column justify-content-center" >
                                                                  <h6 class="mb-0 text-sm">{{$item->product->name}}</h6>
                                                                  <div class="d-flex justify-content-between" style="width: 400px">
                                                                      <div>
                                                                          <p class="text-xs text-dark mb-0">&#8369;{{number_format($item->price,2)}}</p>
                                                                      </div>
                                                                      <div>
                                                                          <p class="text-xs text-dark mb-0">x{{$item->quantity}}</p>
                                                                      </div>
                                                                  </div>
                                                                  <div class="d-flex justify-content-end mt-1">
                                                                    <p class="text-xs text-dark mb-0">&#8369;{{number_format($item->price * $item->quantity,2)}}</p>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      @endforeach
                                                  </div>
                                                  
                                              </td>
                                              
                                          </tr>
                                         
                                      </tbody>
                                    </table>
                                    <hr class="bg-dark">
                                  <div class="d-flex justify-content-end">
                                    <td class="w-10 text-center">
                                        <h5 class="text-sm text-dark mx-2">Total Amount: <span style="font-size: 22px">&#8369;{{$invoice == null ? '':$invoice->amount}}</span></h5>
                                    </td>
                                  </div>
                                  </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a  type="button" class="btn btn-sm btn-info modal-cancel-btn" href="{{url('admin/printInvoice/')}}{{$invoice == null ? '':"/".$invoice->id}}">Print</a>
                            <button  type="button" class="btn btn-sm btn-danger modal-cancel-btn" data-bs-toggle="modal" data-bs-target="#invoiceModal" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </section>
</main>
    
</div>
