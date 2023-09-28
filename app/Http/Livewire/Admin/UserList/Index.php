<?php

namespace App\Http\Livewire\Admin\UserList;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'id';
    public $sortByText = 'id';
    public $sort =  'DESC';
    public $search = '';

    public function sortById(){
        $this->sortBy = 'id';
        $this->sortByText = 'id';

    }
    public function sortByName(){
        $this->sortBy = 'firstname';
        $this->sortByText = 'Name';
    }

    public function sortAsc(){
        $this->sort = 'ASC';
    }
    public function sortDesc(){
        $this->sort = 'DESC';
    }

    public function render()
    {
        $users = User::orderBy($this->sortBy, $this->sort)
                    ->where('access', '0')
                    ->where(DB::raw('concat(firstname," ",lastname)'),'like','%'.$this->search.'%')
                    ->paginate(10);
        return view('livewire.admin.user-list.index',['users' => $users,'sortByText' => $this->sortByText]);
    }

    public function block($id){
        $user = User::where('id',$id)->first();
        //dd($user);
        if($user){
            $user->status = 0;  //status 0 means blocked
            $user->update();
        }
    }
    public function unblock($id){
        $user = User::where('id',$id)->first();
        if($user){
            $user->status = 1; //status 1 means unblocked
            $user->update();
        }
    }
}
