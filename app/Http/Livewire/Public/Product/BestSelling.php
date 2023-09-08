<?php

namespace App\Http\Livewire\Public\Product;

use App\Models\Cart;
use App\Models\Rating;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class BestSelling extends Component
{
    public function render()
    {
        $best_products = Product::orderBy('quantity_sold','DESC')->where('quantity_sold','!=','0')->where('status','1')->get();

        return view('livewire.public.product.best-selling', ['bestProducts' => $best_products]);
    }

   
}
