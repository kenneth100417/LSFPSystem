<?php

namespace App\Http\Livewire\Admin\Order;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class OrderInProcess extends Component
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
            ->select('orders.*','users.firstname as fName','users.lastname as lName','users.mobile_number as contact')
            ->where('orders.status','approved')
            ->orderBy($this->sortBy,$this->sort)
            ->paginate(10);
        return view('livewire.admin.order.order-in-process',['orders' => $orders]);
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
