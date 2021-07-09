<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class CheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return view checkOut with cart's data 
     */
    public function index()//Secured
    {
        if (!Cache::has('cart_product'))
        {
            Cache::remember('cart_product', now()->addMinute(5), function () {
                return DB::table('cart_product')->where('user_id',Auth::user()->id)->get();
            });
        }

        return view('ordering.checkOut')
        ->with('carts' , Cache::get('cart_product'));
    }

}
