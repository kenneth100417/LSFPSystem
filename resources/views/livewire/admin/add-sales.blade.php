<div>
    
    <section class="mx-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 bg-white border-radius-lg mt-5">
                    <div class="card-header p-0 mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-success border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                            <h6 class="text-white text-capitalize ps-3">Add Walk-in Transaction</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class=" m-4" style="min-height: 15rem;">
                                            
                                            <h6 class="">Select Product</h6>
                                           <div wire:ignore>
                                            <select name="selectedProduct" id="select2" class="form-control form-select select2 px-2" style="box-shadow: 0 2px 5px rgba(182, 182, 182, 0.75) !important; font-size: 14px;">
                                                <option></option>
                                                @foreach($products as $product)
                                                        <option value="{{$product->id}}" style="cursor: pointer">
                                                          {{$product->name}}
                                                        </option>
                                                @endforeach
                                            </select>
                                           </div>
                                            

                                            <div class="mt-3">
                                                <h6 class="">Quantity</h6>
                                                <div class="form-outline">
                                                  <input wire:model="quantity" wire:change="updateTotal()" type="number" id="quantity" class="form-control  p-2" placeholder="Quantity" style="box-shadow: 0 2px 5px rgba(182, 182, 182, 0.75); font-size: 14px;" />
                                                </div>
                                                <div class="d-flex justify-content-center align-items-center mt-5">
                                                    <button type="button" class="btn btn-warning btn-sm mx-1" onClick="clear(location.reload())">Refresh</button>
                                                    <button wire:click="addSale()" class="btn btn-info btn-sm mx-1">Confirm Payment</button>
                                                </div>
                                              </div>
                                            </div>
                                    </div>

                                    <div class="col-lg-4 display-card">
                                        <div class="mt-4">
                                            <h6 class="">Product</h6>
                                            <div class="form-outline">
                                              <input value="{{$selected == true ? $selectedProduct->name:''}}" type="text" id="name" class="form-control  p-2" placeholder="" aria-label="Search" style="box-shadow: 0 2px 5px rgba(182, 182, 182, 0.75); font-size: 14px;" readonly/>
                                            </div>
                                        </div>
                                        <div class="mt-2">
                                            <h6 class="">Price/Item</h6>
                                            <div class="form-outline d-flex justify-content-start align-items-center">
                                                    <h5 for="" class="mx-2">&#8369;</h5>
                                              <input value="{{$selected == true ? number_format($selectedProduct->selling_price,2):''}}" type="text" id="price" class="form-control  p-2" placeholder="" aria-label="Search" style="box-shadow: 0 2px 5px rgba(182, 182, 182, 0.75); font-size: 16px; font-weight:bold;" readonly/>
                                            </div>
                                        </div>
                                        <div class="mt-2  ">
                                            <h6 class="">Total Amount Payable</h6>
                                            <div class="form-outline d-flex justify-content-start">
                                                <h5 for="" class="mx-2">&#8369;</h5>
                                              <input wire:model = "total" value="" type="text" id="total" class="form-control  p-2" placeholder="" aria-label="Search" style="box-shadow: 0 2px 5px rgba(182, 182, 182, 0.75); font-size: 16px; font-weight:bold;" readonly/>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                    <hr class="bg-dark">
                                    <div class="col-lg-12">
                                        <div class="table-responsive p-0">
                                            <table class="table align-items-center mb-0" >
                                              <thead>
                                                <tr>
                                                  <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-10">Product ID</th>
                                                  <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-15">Product</th>
                                                  <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-10">Price</th>
                                                  <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-10">Sold</th>
                                                  <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-10">In Stock</th>
                                                  <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-15">Category</th>
                                                  <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-15"></th>
                                     
                                                </tr>
                                              </thead>
                                              <tbody>
                                                  <tr style="{{$selected == false ? 'display:none':''}}">
                                                      <td class="w-10">
                                                          <p class="text-xs text-dark mb-0">LSFP_P{{$selected == true ? $selectedProduct->id:''}}</p>
                                                      </td>
                                                      <td class="mw-15">
                                                          <div class="d-flex px-2 py-1 align-items-center justify-content-center" style="min-width: 15; max-width: 15; white-space:normal;min-height:80px ;max-height: 80px; overflow:scroll; align-items: center;">
                                                              <div>
                                                              <img src="/uploads/products/{{$selected == true ? $selectedProduct->image:''}}" class="avatar avatar-md me-3 border-radius-lg" style="object-fit: cover">
                                                              </div>
                                                              <div class="d-flex flex-column justify-content-center">
                                                              <p class="mb-0 text-sm text-dark">{{$selected == true ? $selectedProduct->name:''}}</p>
                                                              </div>
                                                          </div>
                                                      </td>
                                                      <td class="mw-10 text-center">
                                                          <p class="text-xs text-dark mb-0">&#8369;{{$selected == true ? number_format($selectedProduct->selling_price,2):''}}</p>
                                                      </td>
                                                      <td class="mw-10 text-center">
                                                          <p class="text-xs text-dark mb-0">{{$selected == true ? $selectedProduct->quantity_sold:''}}</p>
                                                      </td>
                                                      <td class="mw-10 text-center">
                                                          <p class="text-xs text-dark mb-0">{{$selected == true ? $selectedProduct->quantity-$selectedProduct->quantity_sold:''}}</p>
                                                          <input type="hidden" id="stock" value="{{$selected == true ? $selectedProduct->quantity - $selectedProduct->quantity_sold:''}}">
                                                      </td>
                                                      <td class="mw-15 text-center">
                                                          <p  class="text-xs text-dark mb-0">{{$selected == true ? $selectedProduct->category->name:''}}</p>
                                                      </td>
                                                      <td class="mw-15 text-center" >
                                                        <a id="invoiceBtn" class="btn btn-success btn-sm mt-3" style="display: none;" href="{{url('admin/walkinPrintInvoice')}}/{{$selected == true ? $selectedProduct->id:''}}">Print Invoice</a>
                                                      </td>
                                                  </tr>
              
                                              </tbody>
                                            </table>
                                          </div>
                                    </div>
                                </div>

                            </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        
           <!-- Invoice Modal -->
{{--    
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
                                        <p class="text-dark" style="font-weight: bold">Date:</p>
                                        <p class="text-dark" style="font-weight: bold">Transaction ID:</p>
                                    </div>
                                    <div>
                                        <p for="">{{date('Y-m-d')}}</p>
                                        <p for="">{{$invoice == null ? '':'LSWP_WIT'.$invoice->id}}</p>
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
                                                        <div class="d-flex py-1">
                                                            <div>
                                                                <img src="/uploads/products/{{$invoiceItem == null ?'':$invoiceItem->image}}" class="avatar avatar-lg  me-3 border-radius-lg" alt="Shopping item" style="object-fit: cover;">
                                                            </div>
                                                            <div class="d-flex flex-column justify-content-center" >
                                                                <h6 class="mb-0 text-sm">{{$invoiceItem == null ?'':$invoiceItem->name}}</h6>
                                                                <div class="d-flex justify-content-between" style="width: 400px">
                                                                    <div>
                                                                        <p class="text-xs text-dark mb-0">&#8369;{{$invoiceItem == null ?'':number_format($invoiceItem->price,2)}}</p>
                                                                    </div>
                                                                    <div>
                                                                        <p class="text-xs text-dark mb-0">x{{$invoiceItem == null ?'':$invoiceItem->quantity}}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex justify-content-end mt-1">
                                                                <p class="text-xs text-dark mb-0">&#8369;{{$invoiceItem == null ? '':number_format($invoiceItem->price * $invoiceItem->quantity,2)}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
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
</div> --}}
    </section>  
    
</div>
<script>
    
    window.addEventListener('transactionAdded', event =>{
        document.getElementById('invoiceBtn').style.display = 'block';

        Swal.fire({
          title: 'Success!',
          text: 'Transaction Added!',
          icon: 'success',
          confirmButtonText: 'Print Invoice',
          showConfirmButton: true,
          showCancelButton: true
      }).then((result) => {
          if (result.isConfirmed) {
            document.getElementById('invoiceBtn').click();
          }
        }) 
    });
</script>


