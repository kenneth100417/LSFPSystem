<?php

namespace App\Http\Livewire\User\Order\Pages;

use App\Models\Order;
use App\Models\Product;
use Livewire\Component;
use App\Models\Notification;
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
        Notification::create([
            'user_id' => auth()->user()->id,
            'notification' => 'Order ID: LSWP_ORDR'.$order->id.' is successfully delivered.',
            'access' => '1'
        ]);
        Notification::create([
            'user_id' => $order->user_id,
            'notification' => "Wow! You've just completed an order. Thank you for trusting Louella's Sweet Food Products!",
            'access' => '0'
        ]);
        $this->dispatchBrowserEvent('show-received-message');
    }
}
