<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';

    protected $fillable = ['name','country','street','city','postcode','phone','order_notes','user_id'];
    
    public $timestamps = false;
}
