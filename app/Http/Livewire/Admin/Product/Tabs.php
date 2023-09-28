<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Tabs extends Component
{
    public function render()
    {
        $product_count = count(Product::where('status','1')->get());
        $archived_count = count(Product::where('status','0')->get());
        $ratings_count = count(Product::with('ratings') 
        ->select('products.*', DB::raw('AVG(ratings.star_rating) as avg_rating'),'ratings.comment as comment')
        ->leftJoin('ratings', 'products.id', '=', 'ratings.product_id')
        ->groupBy('products.id')
        ->where('products.status','1')
        ->havingRaw('avg_rating > 0')
        ->addSelect(['latest_comment' => function ($query) {
            $query->select('comment')
                ->from('ratings as r2')
                ->whereColumn('r2.product_id', 'products.id')
                ->orderByDesc('created_at')
                ->limit(1);
        }])
        ->get());
        return view('livewire.admin.product.tabs',['product_count' => $product_count, 'archived_count' => $archived_count,'ratingsCount' =>  $ratings_count]);
    }
}
 