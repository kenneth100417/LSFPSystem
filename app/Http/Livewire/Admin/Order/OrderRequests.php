<?php

namespace App\Http\Livewire\Admin\Order;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class OrderRequests extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $sort = 'DESC';
    public $sortBy = 'id';
    public $sortby = 'Order ID';

    public function render()
    {
        $orders = Order::with('orderItems.product')
                        ->join('users','orders.user_id','users.id')
                        ->select('orders.*','users.firstname as fName','users.lastname as lName',)
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
