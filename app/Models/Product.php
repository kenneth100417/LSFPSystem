<?php

namespace App\Models;

use App\Models\Rating;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'category_id',
        'name',
        'image',
        'slug',
        'description',
        'original_price',
        'selling_price',
        'quantity',
        'quantity_sold',
        'trending',
        'status',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'expiry_date'
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function ratings(){
        return $this->hasMany(Rating::class, 'product_id','id');
    }
    
}
