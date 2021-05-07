<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class CartController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('CartNotEmpty')->except('store');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = DB::table('cart_product')->where('user_id',Auth::user()->id)->get();

        return view('cart',['carts' => $carts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request = $request->only(['product_id','user_id']);

        $cart = Cart::create( $request ); 

        return response()->json([
            'message' => 'success' ,
            'data' => $cart 
        ]);
    }

    public function cartCounter()
    {
        $cartCount = DB::table('cart_product')->where('user_id',Auth::user()->id)->count();

        return view('cart',['cartCount' => $cartCount ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {

         $request = $request->only(['quantity']);

         $cart = Cart::where('id', $cart->id)->update(['quantity' => $request['quantity']]);

         return response()->json([
             'message' => 'success' ,
             'data' => $cart ,
         ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        return $cart->delete();
    }

}
