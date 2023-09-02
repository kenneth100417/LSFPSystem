<?php

namespace App\Http\Livewire\User\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class All extends Component
{
    // use WithPagination;
    // protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $products = Product::where('status','1')->get();
        return view('livewire.user.product.all', ['products' => $products]);
    }
}
