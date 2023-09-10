<?php

namespace App\Http\Livewire\User;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Carts extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $delete_id;

    
    
    protected $listeners = ['deleteConfirmed' => 'deleteCart'];

    public function render()
    {
        $products = Product::join('carts','products.id','=','carts.product_id')
                            ->where('carts.user_id','=',Auth()->user()->id)
                            ->select('products.*','carts.quantity as cart_quantity','carts.id as cart_id','carts.product_id as product_id')
                            ->orderBy('carts.id','DESC')
                            ->paginate(6);
        
        return view('livewire.user.carts',['products' => $products]);
    }

    public function deleteConfirmation($id){
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function deleteCart(){
        $carts = Cart::where('id', $this->delete_id)->first();
        $carts->delete();

        $this->dispatchBrowserEvent('cartDeleted');

    }

    public function checkout($user_id){
        dd('insert sa order table + insert sa order items table');
    }

   public function updateQuantity($cart_id,$product_id,$quantity){
        $cartItem = Cart::where('user_id', Auth()->user()->id)->where('id',$cart_id)->where('product_id',$product_id)->first();
        $product = Product::where('id',$product_id)->first();
        $inStock = $product->quantity - $product->quantity_sold;
        
        if($cartItem){
            
            if($quantity > $inStock){
                $this->dispatchBrowserEvent('greaterThanStock');
            }else if($quantity == '0'){
                $this->dispatchBrowserEvent('zero');
            }else if($quantity <= $inStock){
                $cartItem->update([
                    "quantity" => $quantity,
                ]);
            }
            
        }
        
   }
}