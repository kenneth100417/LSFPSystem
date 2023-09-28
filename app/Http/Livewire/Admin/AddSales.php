<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;


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
    }
    


    public function render(){
        
        $products = Product::orderBy('name','ASC')
                    ->where('name','like','%'.$this->search.'%')
                    ->get();

       
        return view('livewire.admin.add-sales',['products' => $products]);
    }
}
