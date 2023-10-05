<?php

namespace App\Http\Livewire\Public\Product;

use App\Models\Cart;
use App\Models\Rating;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TopRecommended extends Component
{
    public function render()
    {
        // $rec_products = Product::with('ratings')
        // ->orderBy(Rating::select('star_rating')->whereColumn('products.id', 'ratings.product_id'), 'DESC')
        // ->where(Rating::select('star_rating')->whereColumn('products.id', 'ratings.product_id'),'!=','0')
        // ->where('products.status','1')
        // ->where('products.expiry_date','>=',date('Y-m-d'))
        // ->get();
        $rec_products = Product::with('ratings')
                                ->select('products.*',DB::raw('AVG(ratings.star_rating) as avg_rating'))
                                ->leftJoin('ratings', 'products.id', '=', 'ratings.product_id')
                                ->groupBy('products.id','products.name')
                                ->orderBy('avg_rating', 'DESC')
                                ->havingRaw('AVG(ratings.star_rating) != 0')
                                ->get();
        return view('livewire.public.product.top-recommended', [ 'recommendedProducts' => $rec_products]);
    }

    
}
