<?php

namespace App\Http\Livewire\User\Product;

use App\Models\Cart;
use App\Models\Rating;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class All extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $sort = 'DESC';
    public $sortBy = 'id';
    public $sortby = 'Sort by Category';
    public $category_id;
    public $sortByCat = false;
    public $search = '';

    public function render()
    {
        if($this->sortByCat == false){
            $products = Product::where('status','1')
                            ->orderBy($this->sortBy,$this->sort)
                            ->where('name','like','%'.$this->search.'%')
                            ->paginate(20);
        }else{
            $products = Product::where('status','1')
            ->orderBy($this->sortBy,$this->sort)
            ->where('category_id',$this->category_id)
            ->paginate(20);
        }
        
        $categories = Category::where('status','1')->get();
        return view('livewire.user.product.all', ['products' => $products,'categories' => $categories]);
    }

    public function addToCart($product_id){
        $product = Product::where('id',$product_id)->where('status', '1')->first();
        if(Auth::check()){
            
            if(Cart::where('user_id', auth()->user()->id)->where('product_id', $product_id)->exists()){
                $this->dispatchBrowserEvent('exists');
            }else{
                if(Product::where('id',$product_id)->where('status', '1')->exists()){
                    $inStock = $product->quantity - $product->quantity_sold;
                    if($inStock > 0 ){
                    
                        Cart::create([
                            'user_id' => auth()->user()->id,
                            'product_id' => $product_id,
                            'quantity' => 1
                        ]);
                        
                        $this->dispatchBrowserEvent('success');
                            
                        
                    }else{
                        $this->dispatchBrowserEvent('outOfStock');
                    }
                }else{
                    $this->dispatchBrowserEvent('notFound');
                }
                
            }
        }
    }

    public function asc(){
        $this->sort = 'ASC';
    }
    public function desc(){
        $this->sort = 'DESC';
    }
    public function category($id){
        $this->sortByCat = true;
        $this->category_id = $id;
        $category = Category::where('id',$id)->first();
        $this->sortby = $category->name;
    }
    public function all(){
        $this->sortByCat = false;
        $this->sortby = 'Sort by Category';

    }


}
