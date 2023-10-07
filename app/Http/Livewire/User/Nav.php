<?php

namespace App\Http\Livewire\User;

use App\Models\Cart;
use Livewire\Component;
use App\Models\Notification;

class Nav extends Component
{
    public function render()
    {
        $cart_count = Cart::where('user_id',Auth()->user()->id)->get();
        $notif_count = Notification::where('user_id',Auth()->user()->id)->where('access','0')->get();
        return view('livewire.user.nav',['cartCount' => $cart_count,'notifCount' => $notif_count ]);
    }
}
