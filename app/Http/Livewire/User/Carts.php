<?php

namespace App\Http\Livewire\User;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Livewire\Component;
use App\Models\OrderItem;
use App\Models\Notification;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Carts extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $delete_id,$note;

    
    
    protected $listeners = ['deleteConfirmed' => 'deleteCart'];

    public function render()
    {
        $cartItems = Cart::where('user_id', Auth()->user()->id)->get();
        foreach($cartItems as $cartItem){
            $product = Product::where('id',$cartItem->product_id)->first();
            if($product->quantity - $product->quantity_sold == 0){
                $soldOutExists = true;
            }else{
                $soldOutExists = false;
            }
        }
        
        $products = Product::join('carts','products.id','=','carts.product_id')
                            ->where('carts.user_id','=',Auth()->user()->id)
                            ->select('products.*','carts.quantity as cart_quantity','carts.id as cart_id','carts.product_id as product_id')
                            ->orderBy('carts.id','DESC')
                            ->paginate(6);
        return view('livewire.user.carts',['products' => $products, 'soldOutExists' => $soldOutExists]);
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

    public function checkout($totalAmount){
        if($this->note == null){
            $this->dispatchBrowserEvent('noteIsEmpty');
        }else{
            $cartItems = Cart::where('user_id', Auth()->user()->id)->get();
            $order = Order::create([
                'user_id' => auth()->user()->id,
                'status' => 'pending',
                'note' => $this->note,
                'amount' => $totalAmount,
            ]);
            foreach($cartItems as $cartItem){
                $product = Product::where('id',$cartItem->product_id)->first();
                $orderItem = OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $cartItem->product_id,
                    'price' => $product->selling_price,
                    'quantity' => $cartItem->quantity,
                ]);
            }
            if($order && $orderItem){
                Cart::where('user_id', Auth()->user()->id)->delete();
                Notification::create([
                    'user_id' => auth()->user()->id,
                    'notification' => auth()->user()->firstname.' '.auth()->user()->lastname.' placed an Order.',
                    'access' => '1'
                ]);
                $this->dispatchBrowserEvent('orderSuccess');
            }else if($cartItems->count() == '0'){
                $this->dispatchBrowserEvent('emptyCart');
            }
        }
        

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