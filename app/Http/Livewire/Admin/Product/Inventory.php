<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Inventory extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $products = Product::orderBy('id', 'DESC')->where('status','1')->paginate(5);
        return view('livewire.admin.product.inventory', ['products' => $products]);
    }
}
