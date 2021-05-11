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

    /**
     * Store Address Of Order
     * 
     * @param Request $request
     * @return $address
     */

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

        return response([
            'address' => $address
        ]);
    }

    /**
     * Store Order Product By 
     * get them from cart and store it in order_product
     * 
     * @param order_id $order_id
     * @return respones $orderProduct
     */

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

        return response([
            'orderProduct' => $orderProduct
        ]);
    }

    /**
     * Delete All Product In Cart  
     * 
     * @param 
     * @return void
     */
    public function deleteCart()
    {
        $cart = Cart::where('user_id', Auth::user()->id )->delete();

        return response([
            'cart' => $cart
        ]);
    }

    /**
     * Make a new order 
     * 
     * @param Request $request
     * @return respones $orderProduct
     */
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

        return response([
            'order' => $order
        ]);
    }

    /**
     * Make a new order 
     * 
     * @param Request $request
     * @return respones $order
     */
    public function placeOrder(Request $request)
    {
        $request['address_id']  = $this->storeAddress($request)->original['address']['id'];

        $order = $this->storeOrder($request)->original['order'];

        $this->storeOrderProduct($order['id']);

        $this->deleteCart();
        
        return view('ordering.done',[
            'order'=>$order
        ]);
    }


}
