<?php

namespace App\Http\Livewire\User\Order\Pages;

use App\Models\Order;
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
        $order->update([
            'status' => 'completed',
        ]);
        $this->dispatchBrowserEvent('show-received-message');
    }
}
