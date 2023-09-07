<?php

namespace App\Http\Livewire\User\Product;

use App\Models\Cart;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class View extends Component
{
    public $category, $product, $ratingval, $ratingcount, $reviews, $add_quantity;
    public function mount($category, $product, $ratingval, $ratingcount, $reviews,)
    {
        $this->category = $category;
        $this->product = $product;
        $this->ratingval = $ratingval;
        $this->ratingcount = $ratingcount;
        $this->reviews = $reviews;
    }

    public function render()
    {
        return view('livewire.user.product.view',[
            'category' => $this->category,
            'product' => $this->product,
            'ratingval' => $this->ratingval,
            'ratingcount' => $this->ratingcount,
            'reviews' => $this->reviews,
            'quantity' => $this->add_quantity
        ]);
    }

    public function addToCart($product_id){
        
        if(Auth::check()){
            if(Cart::where('user_id', auth()->user()->id)->where('product_id', $product_id)->exists()){
                // $this->dispatchBrowserEvent('message', [
                //     'text' => $this->product->name.' is already added to cart.',
                //     'type' => 'success',
                //     'status' => 200
                // ]);
                $this->dispatchBrowserEvent('exists');
            }else{
                if($this->product->where('id',$product_id)->where('status', '1')->exists()){
                    $inStock = $this->product->quantity - $this->product->quantity_sold;
                    if($inStock > 0 ){
                        
                            if($this->add_quantity <= 0){
                                $this->dispatchBrowserEvent('lessThanZero');
                            }else if($this->add_quantity > $inStock){
                                $this->dispatchBrowserEvent('greaterThanStock');
                            }else if($this->add_quantity == null){
                                $this->dispatchBrowserEvent('null');
                            }else{
                                Cart::create([
                                    'user_id' => auth()->user()->id,
                                    'product_id' => $this->product->id,
                                    'quantity' => $this->add_quantity
                                ]);
                                
                                $this->dispatchBrowserEvent('success');
                            }
                        
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
