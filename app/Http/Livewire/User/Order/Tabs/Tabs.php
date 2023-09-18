<?php

namespace App\Http\Livewire\User\Order\Tabs;

use App\Models\Order;
use Livewire\Component;

class Tabs extends Component
{
    public function render()
    {
        $order_requests = Order::where('user_id',Auth()->user()->id)->where('status','pending')->get();
        $to_receive = Order::where('user_id',Auth()->user()->id)->where('status','approved')->get();
        $completed = Order::where('user_id',Auth()->user()->id)->where('status','completed')->get();
        $cancelled = Order::where('user_id',Auth()->user()->id)->where('status','cancelled')->get();

        
        return view('livewire.user.order.tabs.tabs',['orderRequest' => $order_requests, 'toReceive' => $to_receive, 'completed' => $completed, 'cancelled' => $cancelled]);
    }
}
