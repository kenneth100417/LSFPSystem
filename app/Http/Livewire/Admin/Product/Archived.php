<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Archived extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    
    public $sortBy = 'id';
    public $sortByText = 'id';
    public $sort =  'DESC';
    public $search = '';

    public function sortById(){
        $this->sortBy = 'id';
        $this->sortByText = 'id';

    }
    public function sortByProductName(){
        $this->sortBy = 'name';
        $this->sortByText = 'Product Name';
    }
    public function sortBySoldCount(){
        $this->sortBy = 'quantity_sold';
        $this->sortByText = 'Quantity Sold';
    }

    public function sortAsc(){
        $this->sort = 'ASC';
    }
    public function sortDesc(){
        $this->sort = 'DESC';
    }

    public function render()
    {
        $products = Product::orderBy($this->sortBy, $this->sort)
                                ->where('status','0')
                                ->where('name','like','%'.$this->search.'%')
                                ->paginate(5);
        return view('livewire.admin.product.archived', ['products' => $products, 'sortByText' => $this->sortByText]);
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
