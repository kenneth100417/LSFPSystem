<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class walkinTransaction extends Model
{
    use HasFactory;
    protected $table = 'walkin_transactions';
    protected $fillable = [
        'product_id',
        'quantity',
        'amount'
    ];
}
