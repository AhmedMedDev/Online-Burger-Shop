<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable =  ['product_id','percentage'];
    
    public $timestamps = false;
}
