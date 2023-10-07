<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Notification;

class Nav extends Component
{
    public function render()
    {
        $notif_count = Notification::where('access','1')->get();
        return view('livewire.admin.nav',['notifCount' => $notif_count ]);
    }
}
