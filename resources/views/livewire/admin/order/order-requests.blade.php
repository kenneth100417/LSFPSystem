<div>
  
    <section class="mt-5 mx-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 bg-white border-radius-lg">
                    <div class="card-header p-0 mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-success border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-white text-capitalize ps-3">Pending Order Requests</h6>
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
                                <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-10">Order ID</th>
                                <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-10">Customer Name</th>
                                <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-15">Contact Number</th>
                                <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-10">Order Date</th>
                                <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-20">Items</th>
                                <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-15">Amount Payable</th>
                                <th class="text-dark w-10">
                                   
                                </th>
                              </tr>
                            </thead>
                            <tbody>
                                @forelse ($orders as $order)
                                <tr>
                                    <td class="mw-10 text-center">
                                        <p class="text-xs text-dark mb-0">LSFP_ORDER{{$order->id}}</p>
                                    </td>
                                    <td class="mw-10 text-center">
                                        <p class="text-xs text-dark mb-0">{{$order->fName}} {{$order->lName}}</p>
                                    </td>
                                    <td class="mw-15 text-center">
                                        <p class="text-xs text-dark mb-0">{{$order->contact}}</p>
                                    </td>
                                    <td class="mw-10 text-center">
                                        <p class="text-xs text-dark mb-0">{{$order->created_at->format('Y-m-d')}}</p>
                                    </td>
                                    <td class="w-20 ">
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
                                                            <p class="text-xs text-dark mb-0">&#8369;{{number_format($order->amount/$item->quantity,2)}}</p>
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
                                    <td class="mw-15 text-center">
                                        <p class="text-sm text-dark mb-0">&#8369;{{number_format($order->amount,2)}}</p>
                                    </td>
                                    <td class="mw-10 text-center">
                                        <button class="btn btn-info btn-sm mt-3 me-1 text-white tbl-row-icon" style="cursor: pointer " wire:click.prevent = "approve({{$order->id}})">Approve<i class="fa-solid fa-check ms-2" title="View product details" style="font-size: 14px;"></i></button>
                                        <button class="btn btn-danger btn-sm mt-3 me-1 text-white tbl-row-icon" style="cursor: pointer " wire:click.prevent = "cancelConfirmation({{$order->id}})">Cancel</button>
                                       
                                    </td>
                                </tr>
                                @empty
                                    <div class=" text-center">No pending Orders.</div>.prevent
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
<script>
    window.addEventListener('show-cancel-confirmation', event =>{
    Swal.fire({
    title: 'Are you sure you want to cancel the order?',
    text: "You cannot revert this action.",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, Cancel',
    cancelButtonText:'Abort',
  }).then((result) => {
    if (result.isConfirmed) {
      Livewire.emit('cancelConfirmed')
    }
  })
});
</script>
