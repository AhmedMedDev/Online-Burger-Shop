<section class="special overflow" id="OFFERS">
    <div class="container">
        <div class="content">
            <div class="speHeader row">
                <h3>Special offers</h3>
            </div>
            <div class="row">
                <div class="col-lg-6 disF-a disF-j">
                <div class="speLeft">
                    <button>NEW IN TOWN</button>
                    <div class="speImg wow zoomIn" >
                        <img src="https://cdn.jevelin.shufflehound.com/wp-content/uploads/sites/44/2020/09/Hue_Saturation-679.jpg" alt="" class="respon-img">
                    </div>
                    <h5>Ham Sandwich</h5>
                    <div class="disF mb-2">
                        <div class="feature"> fat 26g</div>
                        <div class="feature"> sugars 34g</div>
                        <div class="feature"> carbs 26g</div>
                    </div>
                    <p class="align">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Quis ipsum suspendisse ultrices gravida.
                    </p>
                    <div class="disF disF-a align mt-2" style="justify-content: space-between">
                        <h5>$14</h5>
                        <a href="">
                            <i class="fas fa-plus"></i>
                            <span>LEARN MORE</span>
                        </a>
                    </div>
                </div>
                </div>
                <div class="col-lg-6">
                    <div class="product">
                        <div class="row">
                            {{--  --}}
                            @foreach ($products as $product)
                            @if ( $product->id == 10 || $product->id == 11 || $product->id == 12 || $product->id == 13 )
                            <div class="col-sm-6 p-0">
                                    <div class="proBox wow fadeInRight  " data-wow-duration="2s">
                                        <img src="{{$product->img}}" alt="" class="respon-img">
                                        <h5>Juicy Beef <br> Burger Meal </h5>
                                        <div class="price">$16</div>
                                        <button class="add" id="cart{{$product->id}}">
                                            <i class="fas fa-plus"></i>
                                            <span>Add to cart</span>
                                        </button>
                                    </div>
                                </div>
                            @endif
                            @endforeach
                            {{--  --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>