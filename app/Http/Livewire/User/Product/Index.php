<?php

namespace App\Http\Livewire\User\Product;

use App\Models\Rating;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    

    public function render()
    {
        $rec_products = Product::with('ratings')
                                ->orderBy(Rating::select('star_rating')->whereColumn('products.id', 'ratings.product_id'), 'DESC')
                                ->where(Rating::select('star_rating')->whereColumn('products.id', 'ratings.product_id'),'!=','0')
                                ->where('products.status','1')
                                ->get();

        $best_products = Product::orderBy('quantity_sold','DESC')->where('quantity_sold','!=','0')->where('status','1')->get();
        return view('livewire.user.product.index', [ 'recommendedProducts' => $rec_products, 'bestProducts' => $best_products]);
    }
}
