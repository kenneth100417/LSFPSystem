<?php

namespace App\Http\Livewire\Public\Category;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $categories = Category::orderBy('id', 'Asc')->paginate(10);
        return view('livewire.public.category.index', ['categories' => $categories]);
    }
}
