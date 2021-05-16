<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('dashboard/assets/img/apple-icon.png')}}">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="icon" href="https://jevelin.shufflehound.com/fav.png">

  {{-- <link rel="icon" type="image/png" href="{{asset('dashboard/assets/img/favicon.png')}}"> --}}
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>@yield('title')</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  <!-- CSS Files -->
  <link href="{{asset('dashboard/assets/css/material-dashboard.css?v=2.1.2')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('css/dashboard.css')}}" rel="stylesheet" />
  <link href="{{asset('dashboard/assets/demo/demo.css')}}" rel="stylesheet" />
  
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="">
          <!--data-image="{{asset('dashboard/assets/img/sidebar-1.jpg')}}"-->
          <!--
            Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
    
            Tip 2: you can also add an image using data-image tag
        -->
          <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
              Creative Tim
            </a></div>
          <div class="sidebar-wrapper">
            <ul class="nav">
              <li class="nav-item   ">
                <a class="nav-link" href="{{url('home')}}">
                  <i class="material-icons">dashboard</i>
                  <p>Landing Page</p>
                </a>
              </li>
              <li class="nav-item " id="User-Profile">
                <a class="nav-link" href="{{url('profile')}}">
                  <i class="material-icons">person</i>
                  <p>User Profile</p>
                </a>
              </li>
              <li class="nav-item " id="Edit-Profile">
                <a class="nav-link" href="{{url('profileEdit')}}">
                  <i class="material-icons">edit</i>
                  <p>Edit Profile</p>
                </a>
              </li>
              <li class="nav-item " id="Address">
                <a class="nav-link" href="{{url('address')}}">
                  <i class="material-icons">library_books</i>
                  <p>Address</p>
                </a>
              </li>
              <li class="nav-item " id="Favorite">
                <a class="nav-link" href="{{url('favorite')}}">
                  <i class="material-icons">bubble_chart</i>
                  <p>Favorite</p>
                </a>
              </li>
              <li class="nav-item " id="Order-List">
                <a class="nav-link" href="{{url('favorite')}}">
                  <i class="material-icons">list_alt</i>
                  <p>Order List</p>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="./notifications.html">
                  <i class="material-icons">notifications</i>
                  <p>Notifications</p>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="./rtl.html">
                  <i class="material-icons">language</i>
                  <p>Contact Us</p>
                </a>
              </li>
              <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                  <i class="material-icons">unarchive</i>
                  <p>Upgrade to PRO</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="main-panel">
          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
              <div class="navbar-wrapper">
                <a class="navbar-brand" href="javascript:;">@yield('title')</a>
              </div>
              <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end">
                <form class="navbar-form">
                  <div class="input-group no-border">
                    <input type="text" value="" class="form-control" placeholder="Search...">
                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                      <i class="material-icons">search</i>
                      <div class="ripple-container"></div>
                    </button>
                  </div>
                </form>
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="javascript:;">
                      <i class="material-icons">dashboard</i>
                      <p class="d-lg-none d-md-block">
                        Stats
                      </p>
                    </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="material-icons">notifications</i>
                      <span class="notification">5</span>
                      <p class="d-lg-none d-md-block">
                        Some Actions
                      </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Mike John responded to your email</a>
                      <a class="dropdown-item" href="#">You have 5 new tasks</a>
                      <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                      <a class="dropdown-item" href="#">Another Notification</a>
                      <a class="dropdown-item" href="#">Another One</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="material-icons">person</i>
                      <p class="d-lg-none d-md-block">
                        Account
                      </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                      <a class="dropdown-item" href="#">Profile</a>
                      <a class="dropdown-item" href="#">Settings</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Log out</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <!-- End Navbar -->
          @yield('mainContent')
        </div>
        
        

    </div>
    <div class="fixed-plugin">
      <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
          <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
          <li class="header-title"> Sidebar Filters</li>
          <li class="adjustments-line">
            <a href="javascript:void(0)" class="switch-trigger active-color">
              <div class="badge-colors ml-auto mr-auto">
                <span class="badge filter badge-purple" data-color="purple"></span>
                <span class="badge filter badge-azure" data-color="azure"></span>
                <span class="badge filter badge-green" data-color="green"></span>
                <span class="badge filter badge-warning" data-color="orange"></span>
                <span class="badge filter badge-danger" data-color="danger"></span>
                <span class="badge filter badge-rose active" data-color="rose"></span>
              </div>
              <div class="clearfix"></div>
            </a>
          </li>
          <li class="header-title">Images</li>
          <li class="active">
            <a class="img-holder switch-trigger" href="javascript:void(0)">
              <img src="{{asset('dashboard/assets/img/sidebar-1.jpg')}}" alt="">
            </a>
          </li>
          <li>
            <a class="img-holder switch-trigger" href="javascript:void(0)">
              <img src="{{asset('dashboard/assets/img/sidebar-2.jpg')}}" alt="">
            </a>
          </li>
          <li>
            <a class="img-holder switch-trigger" href="javascript:void(0)">
              <img src="{{asset('dashboard/assets/img/sidebar-3.jpg')}}" alt="">
            </a>
          </li>
          <li>
            <a class="img-holder switch-trigger" href="javascript:void(0)">
              <img src="{{asset('dashboard/assets/img/sidebar-4.jpg')}}" alt="">
            </a>
          </li>
          <li class="button-container">
            <a href="https://www.creative-tim.com/product/material-dashboard" target="_blank" class="btn btn-primary btn-block">Free Download</a>
          </li>
          <!-- <li class="header-title">Want more components?</li>
              <li class="button-container">
                  <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
                    Get the pro version
                  </a>
              </li> -->
          <li class="button-container">
            <a href="https://demos.creative-tim.com/material-dashboard/docs/2.1/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block">
              View Documentation
            </a>
          </li>
          {{-- <li class="button-container github-star">
            <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
          </li> --}}
          {{-- <li class="header-title">Thank you for 95 shares!</li> --}}
          {{-- <li class="button-container text-center">
            <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
            <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
            <br>
            <br>
          </li> --}}
        </ul>
      </div>
    </div>
<!--   Core JS Files   -->

<script src="{{asset('dashboard/assets/js/core/jquery.min.js')}}"></script>
<script src="{{asset('dashboard/assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('dashboard/assets/js/core/bootstrap-material-design.min.js')}}"></script>
<script src="{{asset('dashboard/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>

<!-- Plugin for the momentJs  -->
{{-- <script src="{{asset('dashboard/assets/js/plugins/moment.min.js')}}"></script> --}}
<!--  Plugin for Sweet Alert -->
{{-- <script src="{{asset('dashboard/assets/js/plugins/sweetalert2.js')}}"></script> --}}
<!-- Forms Validations Plugin -->
{{-- <script src="{{asset('dashboard/assets/js/plugins/jquery.validate.min.js')}}"></script> --}}
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
{{-- <script src="{{asset('dashboard/assets/js/plugins/jquery.bootstrap-wizard.js')}}"></script> --}}
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
{{-- <script src="{{asset('dashboard/assets/js/plugins/bootstrap-selectpicker.js')}}"></script> --}}
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
{{-- <script src="{{asset('dashboard/assets/js/plugins/bootstrap-datetimepicker.min.js')}}"></script> --}}
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
{{-- <script src="{{asset('dashboard/assets/js/plugins/jquery.dataTables.min.js')}}"></script> --}}
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
{{-- <script src="{{asset('dashboard/assets/js/plugins/bootstrap-tagsinput.js')}}"></script> --}}
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
{{-- <script src="{{asset('dashboard/assets/js/plugins/jasny-bootstrap.min.js')}}"></script> --}}
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
{{-- <script src="{{asset('dashboard/assets/js/plugins/fullcalendar.min.js')}}"></script> --}}
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
{{-- <script src="{{asset('dashboard/assets/js/plugins/jquery-jvectormap.js')}}"></script> --}}
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
{{-- <script src="{{asset('dashboard/assets/js/plugins/nouislider.min.js')}}"></script> --}}
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script> --}}
<!-- Library for adding dinamically elements -->
{{-- <script src="{{asset('dashboard/assets/js/plugins/arrive.min.js')}}"></script> --}}
<!--  Google Maps Plugin    -->
{{-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> --}}
<!-- Chartist JS -->
{{-- <script src="{{asset('dashboard/assets/js/plugins/chartist.min.js')}}"></script> --}}
<!--  Notifications Plugin    -->
{{-- <script src="{{asset('dashboard/assets/js/plugins/bootstrap-notify.js')}}"></script> --}}
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('dashboard/assets/js/material-dashboard.js?v=2.1.2')}}" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('dashboard/assets/demo/demo.js')}}"></script>
<script src="{{asset('dashboard/assets/js/main.js')}}"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('js/swal.js') }}" ></script>
<script src="{{asset('js/dashboard.js')}}"></script>
<script src="{{asset('js/ajax.js')}}"></script>

<script>
  $(document).ready(function() {
      
    md.initDashboardPageCharts();
  });
</script>
</body>

</html>