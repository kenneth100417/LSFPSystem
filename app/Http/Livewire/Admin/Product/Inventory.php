<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Inventory extends Component
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
                            ->where('status','1')
                            ->where('name','like','%'.$this->search.'%')
                            ->paginate(5);
        return view('livewire.admin.product.inventory', ['products' => $products,'sortBy' => $this->sortByText]);
    }
}
