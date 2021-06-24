<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'des','img','price','category_id'];
    
    public $timestamps = false;
}
