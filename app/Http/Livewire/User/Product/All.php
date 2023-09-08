<?php

namespace App\Http\Livewire\User\Product;

use App\Models\Cart;
use App\Models\Rating;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class All extends Component
{
    // use WithPagination;
    // protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $products = Product::where('status','1')->get();
        return view('livewire.user.product.all', ['products' => $products]);
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
