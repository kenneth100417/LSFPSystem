<?php

namespace App\Http\Livewire\User\Order\Pages;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Carbon;

class Cancelled extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $order_id;
    public $search = '';

    protected $listeners = ['buyAgain' => 'placeOrder'];

    public function render()
    {
        $searchTerm = $this->search;
        $orders = Order::whereHas('orderItems.product', function ($query) use ($searchTerm) {
                        $query->where('name', 'like', '%' . $searchTerm . '%');
                    })
                    ->where('orders.user_id',auth()->user()->id)
                    ->where('status','cancelled')
                    ->paginate(5);
        return view('livewire.user.order.pages.cancelled',['orders' => $orders]);
    }

    public function buyAgain($id){
        $this-> order_id = $id;
        $this->dispatchBrowserEvent('buy-again');
    }

    public function placeOrder(){
        $order = Order::where('id',$this->order_id)->first();
        $order->update([
            'status' => 'pending',
            'created at' => Carbon::now()
        ]);
        $this->dispatchBrowserEvent('goto-order-requests');
    }
}
