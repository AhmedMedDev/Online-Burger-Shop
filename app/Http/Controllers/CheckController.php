<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return view checkOut with cart's data 
     */
    public function index()
    {
        $carts = DB::table('cart_product')->where('user_id',Auth::user()->id)->get();

        return view('checkOut',['carts' => $carts]);
    }

}
