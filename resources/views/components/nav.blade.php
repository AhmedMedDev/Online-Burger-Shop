<nav class="nav navIndex">
    <div class="container">
        <div class="logo disF">
            <img src="https://cdn.jevelin.shufflehound.com/wp-content/uploads/sites/44/2020/09/Jevelin_logo.png" alt="">
        </div>
        <div class="icon-nav hidden">
            <div class="inFerst"></div>
            <div class="inSecond"></div>
            <div class="inThird"></div>
        </div>
        {{--  --}}
            
            <a href="{{url('cart')}}" class="cart cart-icon">
                <div class="counter" id="cart_counter">{{$cartCount}}</div>
                <i class="fas fa-shopping-cart"></i>
            </a>
        {{--  --}}
        <div class="nav-links">
            <div class="container">
                <ul>
                    <li><a class="nav_a" href="" data-scroll = "HOME"><span>HOME</span></a></li>
                    <li><a class="nav_a" href="" data-scroll = "ABOUT"><span>ABOUT</span></a></li>
                    <li><a class="nav_a" href="" data-scroll = "OFFERS"><span>OFFERS</span></a></li>
                    <li><a class="nav_a" href="" data-scroll = "MENU"><span>MENU</span></a></li>
                    <li><a class="nav_a" href="" data-scroll = "CONTACT"><span>CONTACT</span></a></li>
                    @guest
                        <li>
                            <a href="{{ route('login') }}">
                                <span>{{ __('Login') }}</span>
                            </a>
                        </li>
                    @else
                    {{--  --}}
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <span>{{ Auth::user()->name }}</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('profile') }}">
                                {{ __('Dashboard') }}
                            </a>
                            {{--  --}}
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            {{--  --}}
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
</nav>
<div class="clear"></div> 