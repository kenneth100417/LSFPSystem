<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Notification;
use Livewire\WithPagination;

class Notifs extends Component
{
    
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $notifs = Notification::orderBy('created_at','DESC')->where('access','1')->paginate(10);

        return view('livewire.admin.notifs',['notifs' => $notifs]);
    }
}
