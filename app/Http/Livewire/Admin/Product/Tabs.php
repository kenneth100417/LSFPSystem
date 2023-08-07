<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;

class Tabs extends Component
{
    public function render()
    {
        $product_count = count(Product::where('status','1')->get());
        $archived_count = count(Product::where('status','0')->get());
        return view('livewire.admin.product.tabs',['product_count' => $product_count],['archived_count' => $archived_count]);
    }
}
