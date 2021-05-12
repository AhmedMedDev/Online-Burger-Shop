@extends('layouts.dashboard.userDashboard')

@section('title','Favorite')

@section('css')

    {{-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> --}}
    
@endsection
    
@section('mainContent')
        {{--  --}}
        <section class="trend" >
            <div class="container-fluid">
                <div class="content">
                    @if (!count($favorites))
                    <div class="treHeader row">
                        <h3>Favorite Empty</h3>
                    </div>
                    @endif
                    <div class="row ">
                    {{--  --}}
                    @foreach ($favorites as $favorite)
                        <div class="col-lg-3 col-sm-6 favorite" id="favorite{{$favorite->id}}">
                            <div class="proBox">
                                <img src="{{$favorite->img}}" alt="" class="respon-img wow zoomIn" data-wow-duration="2s">
                                <h5>{{$favorite->name}}</h5>
                                <p>{{$favorite->des}}</p>
                                <div class="disF-a" style="justify-content: space-between;">
                                    <div class="price">${{$favorite->price}}</div>
                                    <div class="cartAction">
                                        <button class="add addToCart text-danger"  onclick="DeleteFavorite({{$favorite->id}})" 
                                            data-toggle="tooltip" data-placement="top" title="Add To Cart">
                                            <i class="fas fa-close "></i>
                                        </button>
                                        <button class="add addToCart text-success" onclick="AddToCart({{$favorite->product_id}},{{Auth::user()->id ?? '' }})" 
                                            data-toggle="tooltip" data-placement="top" title="Add To Cart">
                                            <i class="fas fa-cart-plus "></i>
                                        </button>
                                        <button class="add showChart text-primary" onclick="AddToCart({{$favorite->product_id}},{{Auth::user()->id ?? '' }})"
                                            data-toggle="tooltip" data-placement="top" title="Show Reviews">
                                            <i class="fas fa-chart-bar "></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{--  --}}
                    </div>
                </div>
            </div>
        </section>
        {{--  --}}
@endsection