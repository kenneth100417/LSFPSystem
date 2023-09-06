<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rating extends Model
{
    use HasFactory;
    protected $table = 'ratings';
    protected $fillable = [
        'user_id',
        'product_id',
        'star_rating',
        'comment'
    ];

    public function User(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function Product(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
