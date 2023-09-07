<?php

namespace App\Http\Livewire\User;

use App\Models\Cart;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Carts extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $delete_id ;
    protected $listeners = ['deleteConfirmed' => 'deleteCart'];

    public function render()
    {
        $products = Product::join('carts','products.id','=','carts.product_id')
                            ->where('carts.user_id','=',Auth()->user()->id)
                            ->select('products.*','carts.quantity as cart_quantity','carts.id as cart_id')
                            ->paginate(6);
        return view('livewire.user.carts',['products' => $products]);
    }

    public function deleteConfirmation($id){
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function deleteCart(){
        $carts = Cart::where('id', $this->delete_id)->first();
        $carts->delete();

        $this->dispatchBrowserEvent('cartDeleted');

    }
}