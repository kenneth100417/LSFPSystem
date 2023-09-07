<?php

namespace App\Http\Livewire\User;

use App\Models\Cart;
use Livewire\Component;

class Nav extends Component
{
    public function render()
    {
        $cart_count = Cart::where('user_id',Auth()->user()->id)->get();
        return view('livewire.user.nav',['cartCount' => $cart_count]);
    }
}
