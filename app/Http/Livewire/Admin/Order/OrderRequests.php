<?php

namespace App\Http\Livewire\Admin\Order;

use App\Models\Order;
use App\Models\Product;
use Livewire\Component;
use App\Models\Notification;
use App\Models\OrderItem;
use Livewire\WithPagination;

class OrderRequests extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $sort = 'DESC';
    public $sortBy = 'id';
    public $sortby = 'Order ID';
    public $order_id;

    protected $listeners = ['cancelConfirmed' => 'cancelOrder'];
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
            'user_id' => $order->user_id,
            'notification' => 'Admin cancelled your order. Try placing order again.',
            'access' => '0'
        ]);
        return redirect('/admin_orders_cancelled');
    }

    public function render()
    {
        $orders = Order::with('orderItems.product')
                        ->join('users','orders.user_id','users.id')
                        ->select('orders.*','users.firstname as fName','users.lastname as lName','users.mobile_number as contact')
                        ->where('orders.status','pending')
                        ->orderBy($this->sortBy,$this->sort)
                        ->paginate(5);
        return view('livewire.admin.order.order-requests',['orders' => $orders,'sortby' => $this->sortby]);
    }

    public function approve($id){
        $order = Order::where('id',$id)->first();
        $order->update([
            'status' => 'approved',
        ]);
        Notification::create([
            'user_id' => $order->user_id,
            'notification' => 'Your order has been approved and now in process. Please prepare '.number_format($order->amount,2).' pesos during delivery.',
            'access' => '0'
        ]);
        $this->dispatchBrowserEvent('show-approved-message');
    }

    public function asc(){
        $this->sort = 'ASC';
    }
    public function desc(){
        $this->sort = 'DESC';
    }
    public function id(){
        $this->sortBy = 'id';
        $this->sortby = 'Order ID';
    }
    public function name(){
        $this->sortBy = 'firstname';
        $this->sortby = 'Customer Name';
    }
    public function date(){
        $this->sortBy = 'created_at';
        $this->sortby = 'Order Date';
    }
    public function amount(){
        $this->sortBy = 'amount';
        $this->sortby = 'Amount Payable';
    }
}
