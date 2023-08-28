<?php

namespace App\Http\Livewire\User\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $rec_products = Product::orderBy('quantity_sold','DESC')->where('quantity_sold','!=','0')->paginate(10);
        //$best_products = Product::where('rating','DESC')->paginate(10);
        return view('livewire.user.product.index', [ 'recommendedProducts' => $rec_products]);
    }
}
