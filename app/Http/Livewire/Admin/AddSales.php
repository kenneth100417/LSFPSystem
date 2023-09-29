<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use App\Models\Product;
use App\Models\walkinTransaction;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class AddSales extends Component
{
    public $search;
    public $selectedProductId;
    public $selected = false;
    public $quantity;
    public $selectedProduct;
    public $total;

    protected $listeners = ['selectedProduct' => 'show'];

    public function show($selected){
        $this->selected = true;
        $this->selectedProductId = $selected;
        $this->selectedProduct = Product::where('id', $this->selectedProductId)->first();
        $stock = $this->selectedProduct->quantity - $this->selectedProduct->quantity_sold;
                if($stock == 0){
                    $this->dispatchBrowserEvent('outOfStock');
                }
    }

    public function updateTotal(){
        $this->total = number_format($this->selectedProduct->selling_price * $this->quantity,2);
    }
    
    public function addSale(){
        //dd($this->selectedProductId." ".$this->quantity." ".$this->total);
        $product = Product::where('id', $this->selectedProductId)->first();
            if(Product::where('id', $this->selectedProductId)->exists()){
                $stock = $product->quantity - $product->quantity_sold;
                if($stock == 0){
                    $this->dispatchBrowserEvent('outOfStock');
                }else{
                    walkinTransaction::create([
                        'product_id' => $this->selectedProductId,
                        'quantity' => $this->quantity,
                        'amount' => $this->total
                    ]);
                    $product->update([
                        'quantity_sold' => $product->quantity_sold + $this->quantity
                    ]);
                    $this->dispatchBrowserEvent('transactionAdded');
                }
                
            }else{
                $this->dispatchBrowserEvent('TransactionError');
            }
    }

    public function render(){
        
        $products = Product::orderBy('name','ASC')
                    ->where('expiry_date','>=',date('Y-m-d'))
                    ->get();

       
        return view('livewire.admin.add-sales',['products' => $products]);
    }
}
