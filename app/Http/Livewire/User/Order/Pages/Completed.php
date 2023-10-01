<?php

namespace App\Http\Livewire\User\Order\Pages;

use App\Models\Order;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Carbon;

class Completed extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $order_id;
    public $productToRate;
    public $productToRateActive = false;

    public $search = '';

    protected $listeners = ['buyAgain' => 'placeOrder'];

    public function render()
    {
        // $orders = Order::with('orderItems.product')
        //                 ->where('orders.user_id',auth()->user()->id)
        //                 ->where('status','completed')
        //                 ->paginate(5);
        $searchTerm = $this->search;
        $orders = Order::whereHas('orderItems.product', function ($query) use ($searchTerm) {
                        $query->where('name', 'like', '%' . $searchTerm . '%');
                    })
                    ->where('orders.user_id',auth()->user()->id)
                    ->where('status','completed')
                    ->paginate(5);
        return view('livewire.user.order.pages.completed',['orders' => $orders]);
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

    public function rate($product_id){
        $this->productToRate = Product::where('id',$product_id)->first();
        $this->productToRateActive = true;

        $this->dispatchBrowserEvent('open-rating-modal');
    }

}
