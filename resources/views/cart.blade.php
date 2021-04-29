@extends('layouts.index')

@section('css')

        <link rel="stylesheet" href="{{asset('css/cart.css')}}">
    
@endsection

@section('content')

    <!-- Rout-->
    <div class="rout ">
        <div class="container ">
            <div class="content">
                <div class="row">
                    <div class="col-sm-6">
                        <a href="index.html" class="title">Jevelin</a>
                    </div>
                    <div class="col-sm-6">
                        <div class="url">
                            <span> <a href="index.html">Home</a> </span>
                            <span class="ml-2">></span>
                            <span class="ml-2">Done</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END Rout-->
    <!-- progress bar-->
    <div class="prog">
        <div class="container">
            <div class="content">
                <ul class="probar">
                    <li class="cart activeCart">View Cart</li>
                    <li class="cart">Checkout</li>
                    <li class="cart">Done</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Show Cart-->
    <div class="showCart ">
        <div class="container">
            <div class="content">
                <div class="row tableHeader  ">
                    <div class="col-md-2"></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2"><h4>Product</h4></div>
                    <div class="col-md-2"><h4>Price</h4></div>
                    <div class="col-md-2"><h4>Quantity</h4></div>
                    <div class="col-md-2"><h4>Subtotal</h4></div>
                </div>
                {{--  --}}
                @foreach ($carts as $cart)
                <div class="row disF-a tableBody " id="cart{{$cart->id}}">
                    <div class="col-md-2 close " onclick="ConfirmDelete({{$cart->id}})">×</div>
                    <div class="col-md-2 avatar">
                        <img src="{{$cart->img}}" alt="" class="respon-img">
                    </div>
                    <div class="col-md-2 proname">
                        <h4>{{$cart->name}}</h4>
                    </div>
                    <div class="col-md-2 price">
                        <h4 id="cart_price_{{$cart->id}}">{{$cart->price}}</h4>
                    </div>
                    <div class="col-md-2 quantity">
                        <div class="quantity-button quantity-down quantity-common"><i class="fas fa-arrow-down"></i></div>
                        <input type="number" min="1" max="9" step="1" value="{{$cart->quantity}}">
                        <div class="quantity-button quantity-up quantity-common"><i class="fas fa-arrow-up"></i></div>
                    </div>
                    <div class="col-md-2 subtotal">
                        <h4 class="productPrice" price="{{$cart->price}}">{{$cart->price}}</h4>
                    </div>
                </div>
                @endforeach
                {{--  --}}
            </div>
        </div>
    </div>
    <!-- END Show Cart-->
    <!--END progress bar-->
    <!-- Apply coupon-->
    <div class="apply">
        <div class="container">
            <div class="content ">
                <div class="coupon">
                    <input type="text" name="" id="" placeholder="Coupon Code" class="input">
                    <button class="applyCoup">Apply Coupon</button>
                </div>
                <button class="updatecart">Update Cart</button>
            </div>
        </div>
    </div>
    <!--END Apply coupon-->
    <!-- Cart totals-->
    <div class="cartTotal">
        <div class="container">
            <div class="content">
                <div class="box">
                    <h3>Cart Total</h3>
                    <div class="disF">
                        <h5 class="title">Subtotal</h5>
                        <h5 class="litprice">$8.00</h5>
                    </div>
                    <div class="disF">
                        <h5 class="title">Total</h5>
                        <h5 class="price" id="totalPrice"> </h5>
                    </div>
                    <a href="CheckOut.html">
                        <button class="proceed"> Proceed To Checkout</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--END Cart totals-->
    
@endsection