<?php

namespace App\Http\Livewire\Admin\UserList;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $users = User::orderBy('id', 'DESC')->where('access', '0')->paginate(3);
        return view('livewire.admin.user-list.index',['users' => $users]);
    }
}
