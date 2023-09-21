<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public function render()
    {   
        $products = Product::orderBy('id', 'DESC')->where('status','1')->paginate(5);
        return view('livewire.admin.product.index', ['products' => $products]);
    }

    public $delete_id;
    protected $listeners = ['deleteConfirmed' => 'deleteCategory'];

    public function deleteConfirmation($id){
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function deleteCategory(){
        $product = Product::where('id', $this->delete_id)->first();
        if($product){
            $product->status = 0;
            $product->update();
        }
        

        $this->dispatchBrowserEvent('categoryDeleted');

    }
}
