<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class PageModels extends Model
{
    protected $table = 'page';
    protected $fillable = ['name', 'status'];
}