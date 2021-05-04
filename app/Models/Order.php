<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id','date','payment_method','total_price','address_id'];
    
    public $timestamps = false;
    
}
