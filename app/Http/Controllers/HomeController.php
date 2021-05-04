<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return view index with products's data
     */
    public function index()
    {
        $products = DB::table('products')->get();

        return view('index',['products' => $products]);
    }

}