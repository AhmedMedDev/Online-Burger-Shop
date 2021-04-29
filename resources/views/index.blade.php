@extends('layouts.index')

@section('content')
    <!--NAVBAR-->
    @include('components.nav')
    <!--END NAVBAR-->
    <!-- HEADER-->
    <header class="header " >
        <div class="container">
            <div class="content">
                <div class="row disF-j">
                <div class="box">
                    <div class="headerText">
                        <div class="disF-j">
                            <div class="leftBox">
                                <img src="https://jevelin.shufflehound.com/burger-shop/wp-content/uploads/sites/44/2020/09/Ellipse-732-copy-10.png" alt="" class="fadeInDown">
                                <img src="https://jevelin.shufflehound.com/burger-shop/wp-content/uploads/sites/44/2020/09/Ellipse-732-copy.png" alt="" class="fadeInLeft">
                                <img src="https://jevelin.shufflehound.com/burger-shop/wp-content/uploads/sites/44/2020/09/Ellipse-732-copy-11.png" alt="" class="fadeInUp">
                            </div>
                            <div class="rightBox">
                                <h4>
                                    CRISPY
                                    <span>TENDER</span>
                                </h4>
                            </div>
                        </div>
                        <h1>BURGER</h1>
                    </div>
                    <div class="headerImg ">
                        <img src="https://jevelin.shufflehound.com/burger-shop/wp-content/uploads/sites/44/2020/09/Layer-692.png" alt="" class="zoomIn">
                    </div>
                    
                </div>
                </div>
            </div>
        </div>
    </header>
    <!--END HEADER-->
    <!-- ABOUT-->
    <section class="about overflow" id="ABOUT">
        <div class="container-fluid">
            <div class="content">
                <div class="row">
                    <div class="col-lg-6 wow bounceInUp"  data-wow-duration="3s">
                    <div class="aboutImg disF-j disF-a">
                        <img src="https://cdn.jevelin.shufflehound.com/wp-content/uploads/sites/44/2020/09/food-photographer-david-fedulov-W1Yi4z375L0-unsplash.jpg" alt="" class="respon-img">
                    </div>
                    </div>
                    <div class="col-lg-6 disF-j disF-a wow fadeIn" data-wow-duration="2s">
                        <div class="aboutText">
                            <button>ABOUT US</button>
                            <h2>Delivering best ingredients for our trusty food lovers</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                            </p>
                            <strong>
                                Risus commodo viverra maecenas accumsan lacus lalala vel facilisis.
                            </strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END ABOUT-->
    <!-- Special offers-->
    @include('components.special')
    <!--END Special offers-->
    <!-- ENJOY-->
    <section class="enjoy overflow" id="MENU"> 
        <div class="item1 wow slideInLeft" data-wow-duration="2s">
            <img src="https://cdn.jevelin.shufflehound.com/wp-content/uploads/sites/44/2020/09/Layer-562.png" alt="" class="respon-img">
        </div>
        <div class="flex-container item2">
            <div class="content">
            <div class="enjText wow fadeIn" data-wow-duration="2s">
                <div class="off">-25% OFF</div>
                    <h2 class="mt-4">Enjoy our <br> specially prepared <br> burgers for you</h2>
                    <h5>Dont miss out on our daily special offers</h5>
                    <a href="#" class="see mt-4">
                        SEE MENU
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--END ENJOY-->
    <!-- New--> 
    <section class="new overflow" >
        <div class="flex-container item2">
            <div class="content">
            <div class="enjText wow fadeIn" data-wow-duration="2s">
                <div class="off">-15% OFF</div>
                    <h2 class="mt-4">New, amazing <br> sandwich offers<br> every day</h2>
                    <h5>Just add some of our juicy side dishes</h5>
                    <a href="#" class="see mt-4">
                        SEE MENU
                    </a>
                </div>
            </div>
        </div>
        <div class="item1 wow slideInRight" data-wow-duration="2s">
        <img src="https://cdn.jevelin.shufflehound.com/wp-content/uploads/sites/44/2020/09/Layer-563.png" alt="" class="respon-img">
        </div>
    </section>
    <!--END New-->
    <!-- Trending Burgers-->
    @include('components.trend')
    <!--END Trending Burgers -->
    <!-- Trending Burgers-->
    @include('components.dessert')
    <!--END Trending Burgers -->
    <!-- ABOUT-->
    <section class="testi" id="CONTACT">
        <div class="container-fluid">
            <div class="content">
                <div class="row">
                    <div class="col-lg-6 wow bounceInUp"  data-wow-duration="2s">
                    <div class="aboutImg disF-j disF-a">
                        <img src="https://cdn.jevelin.shufflehound.com/wp-content/uploads/sites/44/2020/09/nate-johnston-ozHMc88WgcI-unsplash.jpg" alt="" class="respon-img">
                    </div>
                    </div>
                    <div class="col-lg-6 disF-j disF-a wow fadeIn" data-wow-duration="2s">
                        <div class="testiText">
                            <button>TESTIMONIALS</button>
                            <h2>What our clients <br> have to say</h2>
                            <div class="testiBox">
                            <div class="rate">
                                99
                            </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                                </p>
                                <strong>
                                    -John Doe
                                </strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END ABOUT-->  
    <!-- PICS-->
    <div class="pics " id="ABOUT">
        <div class="content">
            <div class="row">
                <div class="imgBox col-lg-3 col-md-6 ">
                    <img src="https://cdn.jevelin.shufflehound.com/wp-content/uploads/sites/44/2020/09/insta2.jpg" alt="" class="respon-img">
                </div>
                <div class="imgBox col-lg-3 col-md-6">
                    <img src="https://cdn.jevelin.shufflehound.com/wp-content/uploads/sites/44/2020/09/inta3.jpg" alt="" class="respon-img">
                </div>
                <div class="imgBox col-lg-3 col-md-6">
                    <img src="https://cdn.jevelin.shufflehound.com/wp-content/uploads/sites/44/2020/09/inta4.jpg" alt="" class="respon-img">
                </div>
                <div class="imgBox col-lg-3 col-md-6">
                    <img src="https://cdn.jevelin.shufflehound.com/wp-content/uploads/sites/44/2020/09/insta1.jpg" alt="" class="respon-img">
                </div>
            </div>
        </div>
    </div>  
    <!--END PICS-->
@endsection