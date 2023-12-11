<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <style>
        #customers {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
</style>
</head>
<body>
  <div class="text-center position-relative mt-1 mx-2" style="border-bottom: 2px solid #000000">
    <img src="{{public_path('img/logo.png')}}" alt="Louella's Sweet Food Products" class="logo" style=" height:50px; right: 10px; top: 0">
    <h4 class="text-center" style="font-size: 24px; font-weight: bold; color: #642b2b">Louella's Sweet Food Products</h4>
    <h6 class="text-center" style="margin-top: -10px;">Bulan, Sorsogon</h6>
    <p class="text-center" style="margin-top: -8px;">{{date('F j, Y')}}</p>
  </div>


    <div class="mt-4 mb-2" >
        <h5 class="text-center mt-1 mx-2">INVOICE</h5>
        <hr class="bg-dark my-0 mx-0">
        <div class="row mt-2" >
            <div style="border-bottom: 1px solid #000000">
                <div class="mx-2">
                    <p class="text-dark" style="font-weight: bold; margin-top: -10px;">Date: <span style="font-weight: 0">{{$invoice == null ? '':date('Y-m-d',strtotime($invoice->updated_at))}}</span></p>
                    <p class="text-dark" style="font-weight: bold; margin-top: -10px;">Transaction ID: <span style="font-weight: 0">{{$invoice == null ? '':"LSWP_WIT".$invoice->id}}</span></p>
                </div>
            </div>
        <div>
    </div>

    <div>
        <table id="customers">
                <tr>
                    <td style="width: 75px;">
                        <div>
                            <div class="d-flex py-1">
                                <img src="{{public_path('/uploads/products/'.$invoiceItem->image)}}" class="avatar avatar-lg  me-3 border-radius-lg" alt="Shopping item" style="object-fit: cover; width:70px; height:70px; border-radius: 10px">
                            </div>
                        </div>
                    </td>
                    <td style="">
                        <div class="d-flex flex-column justify-content-center" >
                            <h6 class="mb-0 text-sm mt-2">{{$invoiceItem->name}}</h6>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="text-xs text-dark mb-0">P {{number_format($invoiceItem->selling_price,2)}}</p>
                                </div>
                            </div>
                            <div class="text-end mt-1">
                                <p class="text-xs text-dark mb-0">x{{$invoice->quantity}}</p>
                                <p class="text-xs text-dark mb-0">P {{number_format($invoiceItem->selling_price * $invoice->quantity,2)}}</p>
                            </div>
                        </div>
                    </td>
                </tr>
        </table>
        <div class="text-end mt-2" style="border-top: 2px solid #000000">
                <h6 class="text-sm text-dark mx-2">Total Amount: <span style="font-size: 20px">P {{$invoice == null ? '':$invoice->amount}}</span></h6>
          </div>
    </div>
        
        
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>

