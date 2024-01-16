<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='products';
    protected $fillable = [
        'cate_id',
        'name',
        'gia',
        'amount',
        'des',
        'img',
        'publish',
        'sort',
    ];
}
