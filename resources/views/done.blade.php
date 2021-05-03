@extends('layouts.index')

@section('css')

        <link rel="stylesheet" href="{{asset('css/cart.css')}}">
        <link rel="stylesheet" href="{{asset('css/check.css')}}">
        <link rel="stylesheet" href="{{asset('css/done.css')}}">

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
                        <li class="cart activeCart">Checkout</li>
                        <li class="cart activeCart">Done</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Final-Bill -->
        <div class="finalBill">
            <div class="container">
                <div class="content">
                    <h6>Thank you. Your order has been received.</h6>
                    <div class="row billHeader">
                        <div class="col-lg-3">
                            <h4>Order number:</h4>
                        </div>
                        <div class="col-lg-3">
                            <h4>Date:</h4>
                        </div>
                        <div class="col-lg-3">
                            <h4>Total:</h4>
                        </div>
                        <div class="col-lg-3">
                            <h4>Payment method:</h4>
                        </div>
                    </div>
                    <div class="row billBody">
                        <div class="col-lg-3">
                            <h5>{{$order->id}}</h5>
                        </div>
                        <div class="col-lg-3">
                            <h5>{{$order->date}}</h5>
                        </div>
                        <div class="col-lg-3">
                            <h5>£{{$order->total_price}} </h5>
                        </div>
                        <div class="col-lg-3">
                            <h5>{{$order->payment_method}}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Final-Bill-->

@endsection
