<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class BillingController extends Controller
{

    public function storeAddress(Request $request)
    {
        $request = $request->only([
            'country',
            'street',
            'city',
            'postcode',
            'phone',
            'order_notes'
        ]);

        $address = Address::create( $request );

        return $address['id'];
    }

    public function storeOrderProduct($order_id)
    {

        $carts = Cart::where('user_id',Auth::user()->id )->get();

        foreach($carts as $cart)
        {
            $orderProduct = OrderProduct::create([
                'product_id'   => $cart['product_id'],
                'quantity'     => $cart['quantity'],
                'order_id'     => $order_id,
            ]);
        }

    }

    public function deleteCart()
    {
        $cart = Cart::where('user_id', Auth::user()->id )->delete();

        return $cart;
    }

    public function storeOrder(Request $request)
    {
        $request = $request->only([
            'order_product_id',
            'payment_method',
            'total_price',
            'address_id'
        ]);

        $request['user_id'] = Auth::user()->id;

        $request['date'] = Carbon::now();

        $order = Order::create( $request );

        return $order;
    }

    public function placeOrder(Request $request)
    {

        $request['address_id']  = $this->storeAddress($request);

        $order = $this->storeOrder($request);

        $this->storeOrderProduct($order['id']);

        $this->deleteCart();
        
        return view('done',['order'=>$order]);

    }


}
