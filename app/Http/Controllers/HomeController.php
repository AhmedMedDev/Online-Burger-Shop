<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return view index with products's data
     */
    public function index()//Secured
    {
        if (!Cache::has('products')) 
        {
            Cache::remember('products',3600, function () {
                return DB::table('products')->get();
            });
        }

        $cartCount = DB::table('cart_product')
        ->where('user_id',Auth::user()->id ?? '')
        ->count();

        return view('index',
        [
            'products' => Cache::get('products', 'default'),
            'cartCount' => $cartCount,
        ]);
    }

}