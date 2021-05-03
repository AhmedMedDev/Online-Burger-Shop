<section class="trend" >
    <div class="container-fluid">
        <div class="content">
           <div class="treHeader row">
                <h3>Trending Burgers</h3>
            </div>
            <div class="row ">
            {{--  --}}
            @foreach ($products as $product)
                @if ($product->category_id == 1)
                    <div class="col-lg-3 col-sm-6">
                        <div class="proBox">
                            <img src="{{$product->img}}" alt="" class="respon-img wow zoomIn" data-wow-duration="2s">
                            <h5>{{$product->name}}</h5>
                            <p>{{$product->des}}</p>
                            <div class="disF-a" style="justify-content: space-between;">
                                <div class="price">${{$product->price}}</div>
                                <button class="add addToCart" id="" product_id="{{$product->id}}" onclick="AddToCart({{$product->id}},{{Auth::user()->id ?? '' }})">
                                    <i class="fas fa-plus"></i>
                                    <span>Add to cart</span>
                                </button>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
            {{--  --}}
            </div>
        </div>
    </div>
</section>
