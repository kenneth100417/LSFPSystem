<?php

namespace App\Http\Livewire\User\Order\Pages;

use App\Models\Order;
use App\Models\Product;
use Livewire\Component;
use App\Models\OrderItem;
use App\Models\Notification;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class OrderRequests extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $order_id;

    protected $listeners = ['cancelConfirmed' => 'cancelOrder'];

    public function render()
    {   
        
        $orders = Order::with('orderItems.product')->where('orders.user_id',auth()->user()->id)->where('status','pending')->paginate(5);
        
        return view('livewire.user.order.pages.order-requests',['orders' => $orders]);
    }

    public function cancelConfirmation($id){
        $this->order_id = $id;
        $this->dispatchBrowserEvent('show-cancel-confirmation');
    }

    public function cancelOrder(){
        $order = Order::where('id',$this->order_id)->first();
        $order->update([
            'status' => 'cancelled',
        ]);
        Notification::create([
            'user_id' => auth()->user()->id,
            'notification' => auth()->user()->firstname.' '.auth()->user()->lastname.' cancelled an Order.',
            'access' => '1'
        ]);
        return redirect('/user_cancelled');
    }
}
