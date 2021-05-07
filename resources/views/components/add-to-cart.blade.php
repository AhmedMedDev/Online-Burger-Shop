@if (Auth::check())
    <button class="add addToCart" id="" product_id="{{$product->id}}" onclick="AddToCart({{$product->id}},{{Auth::user()->id ?? '' }})">
        <i class="fas fa-plus"></i>
        <span>Add to cart</span>
    </button>
@else
    <a href="{{url('login')}}">
        <button class="add addToCart" id=""  >
            <i class="fas fa-plus"></i>
            <span>Add to cart</span>
        </button>
    </a>
@endif