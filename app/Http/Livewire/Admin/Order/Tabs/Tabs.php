<?php

namespace App\Http\Livewire\Admin\Order\Tabs;

use App\Models\Order;
use Livewire\Component;

class Tabs extends Component
{
    public function render()
    {   
        $orderRequest = Order::where('status','pending');
        $orderInProcess = Order::where('status','approved');
        $orderCompleted = Order::where('status','completed');
        $orderCancelled = Order::where('status','cancelled');
        return view('livewire.admin.order.tabs.tabs',['orderRequest' => $orderRequest,'orderInProcess' => $orderInProcess,'orderCompleted' => $orderCompleted,'orderCancelled' => $orderCancelled,]);
    }
}
