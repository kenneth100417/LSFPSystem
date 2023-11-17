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
        
        #customers td, #customers th {
          border: 1px solid #ddd;
          padding: 8px;
          font-size: 10px;
        }
        
        #customers tr:nth-child(even){background-color: #f2f2f2;}
        
        #customers th {
          padding-top: 8px;
          padding-bottom: 8px;
          text-align: left;
          background-color: #04AA6D;
          color: white;
        }
</style>
</head>
<body>
  <div class="text-center position-relative mt-1 mx-2" style="border-bottom: 2px solid #000000">
    <img src="{{public_path('img/logo.png')}}" alt="Louella's Sweet Food Products" class="logo" style="position: absolute;  height:50px; right: 10px; top: 0">
    <h4 class="text-center" style="font-size: 24px; font-weight: bold; color: #642b2b">Louella's Sweet Food Products</h4>
    <h6 class="text-center" style="margin-top: -10px;">Bulan, Sorsogon</h6>
    <p class="text-center" style="margin-top: -8px;">{{date('F j, Y')}}</p>
  </div>

  <div class="text-center mt-4 mb-2">
    <h3 class="text-center"  style="font-size: 20px; font-weight: bold;">Best Selling Products Report</h3>
    <p class="text-center" style="margin-top: -8px;">as of {{$reportDate}}</p>
  </div>

  <div>
    <table id="customers">
      <tr>
        <th class="text-center">Product Name</th>
        <th class="text-center">Category</th>
        <th class="text-center">Quantity Sold</th>
        <th class="text-center">Status</th>
        
      </tr>
      @forelse ($products as $product)
        <tr>
          <td>{{$product->name}}</td>
          <td>{{$product->category->name}}</td>
          <td class="text-center">{{$product->quantity_sold}}</td>
          <td class="text-center">
            {{$product->status == '1' ? 'In Stock':''}}
            {{$product->status == '0' ? 'Out of Stock':''}}
            {{$product->expiry_date <= date('Y-m-d') ? 'Expired':''}}
          </td>
        </tr>
      @empty
          
      @endforelse
      
     
    </table>
  </div>
        
        
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>