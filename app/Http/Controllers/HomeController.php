<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $products = DB::table('products')->get();

        $cartCount = DB::table('cart_product')->where('user_id',Auth::user()->id ?? '')->count();

        return view('index',
        [
            'products' => $products,
            'cartCount' => $cartCount,
        ]);
    }

}