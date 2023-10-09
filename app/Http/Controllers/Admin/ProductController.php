<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ProductFormRequest;
use App\Http\Requests\UpdateProductFormRequest;

class ProductController extends Controller
{
    public function index(){
        $products = Product::where('status','1')->get();
        $categories = Category::all();
        return view('pages.admin-product-info-pages.admin_product_info_list', compact('products', 'categories'));
    }

    public function add(){
        $categories = Category::all();
        return view('admin.products.add', compact('categories'));
    }

    public function store(ProductFormRequest $request){
        
        $validatedData = $request->validated();

        $category = Category::findOrFail($validatedData['category_id']);
        $filename='';
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/products/',$filename);
        }else{
            return redirect()->back()->with('error','Please upload a product image.');
        }

        $date =  $validatedData['expiry_date'];
        $expiryDate = Carbon::createFromFormat('m/d/Y', $date)->format('Y-m-d');
        $category->products()->create([
            'category_id' => $validatedData['category_id'],
            'name' => $validatedData['name'],
            'original_price' => $validatedData['original_price'],
            'selling_price' => $validatedData['selling_price'],
            'quantity' => $validatedData['quantity'],
            'description' => $validatedData['description'],
            'expiry_date' => $expiryDate,
            'image' => $filename,
            'slug' => Str::slug($validatedData['slug']),
            'meta_title' => $validatedData['meta_title'],
            'meta_keyword' => $validatedData['meta_keyword'],
            'meta_description' => $validatedData['meta_description'],
        ]);
        
     

    return redirect('admin/products')->with('success', 'Product successfully added.');

    }

    public function edit(int $product_id){
        $categories = Category::all();
        $product =  Product::findorFail($product_id);
        return view('admin.products.edit', compact('product','categories'));
    }

    public function update(UpdateProductFormRequest $request,int $product_id){
        $validatedData = $request->validated();

        $category = Product::where('id',$product_id)->first(['category_id'])->category_id;

        $product = Category::findOrFail($category)->products()->where('id',$product_id)->first();
        
        if($product){
            
            if($request->hasFile('image')){
                $path = 'uploads/products/'.$product->image;
                if(File::exists($path)){
                    File::delete($path);
                }
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;

                $file->move('uploads/products/',$filename);
                $validatedData['image'] = $filename;
            }else{
                $validatedData['image'] = $product->image;
            }
        
        
            $product->update([
                'category_id' => $validatedData['category_id'],
                'name' => $validatedData['name'],
                'original_price' => $validatedData['original_price'],
                'selling_price' => $validatedData['selling_price'],
                'quantity' => $validatedData['quantity'],
                'description' => $validatedData['description'],
                'slug' => Str::slug($validatedData['slug']),
                'meta_title' => $validatedData['meta_title'],
                'meta_keyword' => $validatedData['meta_keyword'],
                'meta_description' => $validatedData['meta_description'],
                'image' => $validatedData['image']
            ]);
        
            return redirect('admin/products')->with('success', 'Product successfully updated.');

       }else{
        
            return redirect('admin/products')->with('error', 'Product not found.');
           

       }
        
    }
}
