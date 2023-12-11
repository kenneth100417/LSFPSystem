<?php

namespace App\Http\Livewire\Admin\Order;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class OrderCompleted extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $sort = 'DESC';
    public $sortBy = 'id';
    public $sortby = 'Order ID';
    public $invoice = null;
    public $invoiceItem = [];
    public $invoiceUser = [];

    public function render()
    {
        
        $orders = Order::with('orderItems.product')
            ->join('users','orders.user_id','users.id')
            ->select('orders.*','users.firstname as fName','users.lastname as lName',)
            ->where('orders.status','completed')
            ->orderBy($this->sortBy,$this->sort)
            ->paginate(10);
        return view('livewire.admin.order.order-completed',['orders' => $orders, 'invoice' => $this->invoice, 'invoiceItem' => $this->invoiceItem, 'invoiceUser' => $this->invoiceUser]);
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
    public function viewInvoice($order_id){
        $this->invoice = Order::where('id', $order_id)->first();
        $this->invoiceItem = OrderItem::where('order_id',$this->invoice->id)->get();
        $this->invoiceUser = User::where('id',$this->invoice->user_id)->first();
        $this->dispatchBrowserEvent('open-invoice-modal');
    }
}
