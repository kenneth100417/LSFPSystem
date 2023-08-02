<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductFormRequest;

class ProductController extends Controller
{
    public function index(){
        return view('pages.admin-product-info-pages.admin_product_info_list');
    }
    public function add(){
        $categories = Category::all();
        return view('admin.products.add', compact('categories'));
    }
    public function store(ProductFormRequest $request){
        
        $validatedData = $request->validated();

        $category = Category::findOrFail($validatedData['category_id']);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/products/',$filename);

            $category->products()->create([
                'category_id' => $validatedData['category_id'],
                'name' => $validatedData['name'],
                'original_price' => $validatedData['original_price'],
                'selling_price' => $validatedData['selling_price'],
                'quantity' => $validatedData['quantity'],
                'description' => $validatedData['description'],
                'image' => $filename,
                'slug' => Str::slug($validatedData['slug']),
                'meta_title' => $validatedData['meta_title'],
                'meta_keyword' => $validatedData['meta_keyword'],
                'meta_description' => $validatedData['meta_description'],
            ]);
        }
        
     

    return redirect('/admin_product_info_list')->with('success', 'Product successfully added.');

    }
}
