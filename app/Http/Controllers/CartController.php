<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCartRequest;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
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
    public function index()//Secured
    {
        if (!Cache::has('cart_product'))
        {
            Cache::remember('cart_product', now()->addMinute(5), function () {
                return DB::table('cart_product')->where('user_id',Auth::user()->id)->get();
            });
        }

        return view('ordering.cart')->with('carts',Cache::get('cart_product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCartRequest $request)//Secured
    {
        //if ($request['user_id'] != Auth::user()->id) abort(403);

        $request = $request->validated();

        $cart = Cart::create( $request ); 

        return response()->json([
            'status' => true ,
            'data' => $cart 
        ]);
    }

    public function cartCounter()//Secured
    {
        $cartCount = DB::table('cart_product')->where('user_id',Auth::user()->id)->count();

        return view('ordering.cart',['cartCount' => $cartCount ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)//Secured so No input from user the request make from Back-End
    {
        $request = $request->only(['quantity']);

        $cart = Cart::where('id', $cart->id)->update(['quantity' => $request['quantity']]);

        //$cart = $cart->update($request);

        if($cart) return response([
            'status' => true ,
       ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)//Secured
    {
        if ($cart->user_id != Auth::user()->id) abort(403);

        return $cart->delete();
    }

}
