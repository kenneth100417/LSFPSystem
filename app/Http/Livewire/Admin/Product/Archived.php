<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Archived extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $products = Product::orderBy('id', 'DESC')->where('status','0')->paginate(5);
        return view('livewire.admin.product.archived', ['products' => $products]);
    }

    public $recover_id;
    protected $listeners = ['recoverConfirmed' => 'recoverProduct'];

    public function recoverConfirmation($id){
        $this->recover_id = $id;
        $this->dispatchBrowserEvent('show-recover-confirmation');
    }

    public function recoverProduct(){
        $product = Product::where('id', $this->recover_id)->first();
        if($product){
            $product->status = 1;
            $product->update();
        }
        

        $this->dispatchBrowserEvent('productrecovered');

    }
}
