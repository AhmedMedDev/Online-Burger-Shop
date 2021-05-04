<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <link rel="icon" href="https://jevelin.shufflehound.com/fav.png">
        
        <title>  Burger-Shop </title>

        <!------------------BOOTSTRAB------------------------------------------------------------------------->
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <!------------------END BOOTSTRAB------------------------------------------------------------------------->
        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/animation.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        @yield('css')
        
    </head>
    <body onload="Carttotal()">

        @yield('content')

        <!-- FOOTER-->  
        <div class="footer" >
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-lg-4 jev">
                            <img src="https://cdn.jevelin.shufflehound.com/wp-content/uploads/sites/44/2020/09/Jevelin_logo_dark.png" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                            <div class="disF footer-icon">
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-instagram"></i>
                                <i class="fab fa-youtube"></i>
                            </div>
                        </div>
                        <div class="col-lg-4 conus">
                            <h4 class="foHeader">Contact us</h4>
                            <div class="disF-a">
                                <i class="fas fa-map-marker-alt"></i>
                                <p>Street name 1, City</p>
                            </div>
                            <div class="disF-a">
                                <i class="fas fa-phone"></i>
                                <p>+569 2698 0256</p>
                            </div>
                            <div class="disF-a">
                                <i class="fas fa-envelope"></i>
                                <p>email2@companyname.com</p>
                            </div>
                            <div class="disF-a">
                                <i class="fas fa-envelope"></i>
                                <p>email2@companyname.com</p>
                            </div>
                        </div>
                        <div class="col-lg-4 subs">
                            <h4 class="foHeader center">Subscribe</h4>
                            <input 
                            type="email" 
                            name="email"
                            placeholder="Enter Your email here.." 
                            autocomplete=""
                            value="{{Auth::user()->email ?? ''}}"> <br>
                            <button class="subscribe">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--END FOOTER--> 
        <!-- scrollToTop-->
        <section class="scrollToTop">
            <i class="fas fa-chevron-up"></i>
        </section>
         <!--END scrollToTop--> 


         <!-- Scripts -->
        {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
        <script src="{{ asset('js/app.js') }}" ></script>
        <script src="{{asset('js/ajax.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
        <script>
            wow = new WOW({
                boxClass:     'wow',      
                animateClass: 'animated', 
                offset:       150,          
                mobile:       true,       
                live:         true,
            })
            new WOW().init();
            
        </script>
    </body>
</html>