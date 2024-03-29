<?php

namespace App\Http\Livewire\User;

use App\Models\Notification;
use Livewire\Component;
use Livewire\WithPagination;

class Notifs extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $notifs = Notification::orderBy('created_at','DESC')->where('user_id',Auth()->user()->id)->where('access','0')->paginate(10);

        return view('livewire.user.notifs',['notifs' => $notifs]);
    }
}
