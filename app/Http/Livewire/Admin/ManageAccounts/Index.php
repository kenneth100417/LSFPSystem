<?php

namespace App\Http\Livewire\Admin\ManageAccounts;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {   
        $accounts = User::where('access','1')->get();

        return view('livewire.admin.manage-accounts.index',['admins' => $accounts]);
    }
}
