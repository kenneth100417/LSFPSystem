<?php

namespace App\Http\Livewire\User\Order\Pages;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Livewire\Component;
use App\Models\OrderItem;
use Livewire\WithPagination;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class Completed extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $order_id;
    public $productToRate;
    public $productToRateActive = false;
    public $invoice = null;
    public $invoiceItem = [];

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
                    ->orderBy('updated_at', 'DESC')
                    ->paginate(5);

        return view('livewire.user.order.pages.completed',['orders' => $orders, 'invoice' => $this->invoice,'invoiceItem' => $this->invoiceItem]);
    }

    public function buyAgain($id){
        $this-> order_id = $id;
        $this->dispatchBrowserEvent('buy-again');
    }

    public function placeOrder(){
        // $order = Order::where('id',$this->order_id)->first();
        // $order->update([
        //     'status' => 'pending',
        //     'created at' => Carbon::now()
        // ]);
        // $this->dispatchBrowserEvent('goto-order-requests');

        $orderItems = OrderItem::where('order_id',$this->order_id)->get();
        if(Auth::check()){
                foreach($orderItems as $item){
                    if(Product::where('id',$item->product_id)->where('status', '1')->exists()){
                        $inStock = $item->quantity - $item->quantity_sold;
                        if($inStock > 0 ){
                            Cart::create([
                                'user_id' => auth()->user()->id,
                                'product_id' => $item->product_id,
                                'quantity' => 1
                            ]);
                            
                            return redirect('/cart');
                                 
                        }else{
                            $this->dispatchBrowserEvent('outOfStock');
                        }
                    }else{
                        $this->dispatchBrowserEvent('notFound');
                    }
                }
        }
    }
    public function rate($product_id){
        $this->productToRate = Product::where('id',$product_id)->first();
        $this->productToRateActive = true;
        $this->dispatchBrowserEvent('open-rating-modal');
    }

    public function viewInvoice($order_id){
        $this->invoice = Order::where('id', $order_id)->first();
        $this->invoiceItem = OrderItem::where('order_id',$this->invoice->id)->get();
        $this->dispatchBrowserEvent('open-invoice-modal');
    }
}

