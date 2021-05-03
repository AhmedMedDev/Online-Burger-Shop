<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';
    protected $fillable = ['country','street','city','postcode','phone','order_notes'];
    public $timestamps = false;
}
