<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

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
        $this->sortBy = 'name';
        $this->sortByText = 'Name';
    }

    public function sortAsc(){
        $this->sort = 'ASC';
    }
    public function sortDesc(){
        $this->sort = 'DESC';
    }


    public $delete_id;
    protected $listeners = ['deleteConfirmed' => 'deleteCategory'];

    public function deleteConfirmation($id){
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function deleteCategory(){
        $category = Category::where('id', $this->delete_id)->first();
        $category->delete();

        $this->dispatchBrowserEvent('categoryDeleted');

    }

    public function render()
    {
        $categories = Category::orderBy($this->sortBy, $this->sort)
                                ->where('name','like','%'.$this->search.'%')
                                ->paginate(5);
        return view('livewire.admin.category.index', ['categories' => $categories,'sortByText' => $this->sortByText]);
    }
}
