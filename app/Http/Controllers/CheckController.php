<?php

namespace App\Http\Controllers;

use App\User;
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
        // dd( User::find(1)->GetFullName() ) ;
        
        $carts = DB::table('cart_product')->where('user_id',Auth::user()->id)->get();

        return view('ordering.checkOut',['carts' => $carts]);
    }

}
