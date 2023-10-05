<?php

namespace App\Http\Livewire\User\Product;

use App\Models\Cart;
use App\Models\Rating;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    

    public function render()
    {
        $rec_products = Product::with('ratings')
                                ->select('products.*',DB::raw('AVG(ratings.star_rating) as avg_rating'))
                                ->leftJoin('ratings', 'products.id', '=', 'ratings.product_id')
                                ->groupBy('products.id','products.name')
                                ->orderBy('avg_rating', 'DESC')
                                ->havingRaw('AVG(ratings.star_rating) != 0')
                                ->get();

        $best_products = Product::orderBy('quantity_sold','DESC')
                                ->where('quantity_sold','!=','0')
                                ->where('status','1')
                                ->where('products.expiry_date','>=',date('Y-m-d'))
                                ->get();
        return view('livewire.user.product.index', [ 'recommendedProducts' => $rec_products, 'bestProducts' => $best_products]);
    }

    public function addToCart($product_id){
        $product = Product::where('id',$product_id)->where('status', '1')->first();
        if(Auth::check()){
            
            if(Cart::where('user_id', auth()->user()->id)->where('product_id', $product_id)->exists()){
                $this->dispatchBrowserEvent('exists');
            }else{
                if(Product::where('id',$product_id)->where('status', '1')->exists()){
                    $inStock = $product->quantity - $product->quantity_sold;
                    if($inStock > 0 ){
                    
                        Cart::create([
                            'user_id' => auth()->user()->id,
                            'product_id' => $product_id,
                            'quantity' => 1
                        ]);
                        
                        $this->dispatchBrowserEvent('success');
                            
                        
                    }else{
                        $this->dispatchBrowserEvent('outOfStock');
                    }
                }else{
                    $this->dispatchBrowserEvent('notFound');
                }
                
            }
        }
    }

    
}
