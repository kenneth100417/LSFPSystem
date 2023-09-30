<?php

namespace App\Http\Livewire\User\Order\Pages;

use App\Models\Order;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ToReceive extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public function render()
    {
         
        $orders = Order::with('orderItems.product')->where('orders.user_id',auth()->user()->id)->where('status','approved')->paginate(5);
        
        return view('livewire.user.order.pages.to-receive',['orders' => $orders]);
    }

    public function received($order_id){
        $order = Order::where('id',$order_id)->first();

        foreach($order->orderItems as $item){
            $product = Product::where('id', $item->product_id)->first();
            $newQuantity = $product->quantity_sold + $item->quantity;

            $product->update([
                'quantity_sold' => $newQuantity
            ]);
        }
        
        $order->update([
            'status' => 'completed',
        ]);
        $this->dispatchBrowserEvent('show-received-message');
    }
}
