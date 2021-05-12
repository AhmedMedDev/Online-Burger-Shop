@if (Auth::check())
    <button class="add addToCart text-success" id="" product_id="{{$product->id}}" onclick="AddToCart({{$product->id}},{{Auth::user()->id ?? '' }})" 
        data-toggle="tooltip" data-placement="top" title="Add To Cart">
        <i class="fas fa-cart-plus "></i>
    </button>
    <button class="add addToFav text-danger" id="" product_id="{{$product->id}}" onclick="AddToFavorite({{$product->id}},{{Auth::user()->id ?? '' }})" 
        data-toggle="tooltip" data-placement="top" title="Add To Favorite">
        <i class="fas fa-heart "></i>
    </button>
    <button class="add showChart text-primary" id="" product_id="{{$product->id}}" onclick="AddToCart({{$product->id}},{{Auth::user()->id ?? '' }})"
        data-toggle="tooltip" data-placement="top" title="Show Reviews">
        <i class="fas fa-chart-bar "></i>
    </button>
@else
    <a href="{{url('login')}}">
        <button class="add addToCart" id=""  >
            <i class="fas fa-plus"></i>
            <span>Add to cart</span>
        </button>
    </a>
@endif