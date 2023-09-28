<?php

namespace App\Http\Livewire\Admin\Product;


use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Reviews extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'products.id';
    public $sortByText = 'id';
    public $sort =  'DESC';
    public $search = '';

    public function sortById(){
        $this->sortBy = 'products.id';
        $this->sortByText = 'id';

    }
    public function sortByProductName(){
        $this->sortBy = 'products.name';
        $this->sortByText = 'Product Name';
    }
    public function sortByRating(){
        $this->sortBy = 'avg_rating';
        $this->sortByText = 'Ratings';
    }

    public function sortAsc(){
        $this->sort = 'ASC';
    }
    public function sortDesc(){
        $this->sort = 'DESC';
    }

    public function render()
    {
        $products = Product::with('ratings') 
                    ->select('products.*', DB::raw('AVG(ratings.star_rating) as avg_rating'),'ratings.comment as comment')
                    ->leftJoin('ratings', 'products.id', '=', 'ratings.product_id')
                    ->groupBy('products.id')
                    ->where('products.status','1')
                    ->where('products.name','like','%'.$this->search.'%')
                    ->havingRaw('avg_rating > 0')
                    ->orderBy($this->sortBy,$this->sort)
                    ->addSelect(['latest_comment' => function ($query) {
                        $query->select('comment')
                            ->from('ratings as r2')
                            ->whereColumn('r2.product_id', 'products.id')
                            ->orderByDesc('created_at')
                            ->limit(1);
                    }])
                    ->paginate(5);
        return view('livewire.admin.product.reviews',['products' => $products,'sortByText' => $this->sortByText]);
    }
}
