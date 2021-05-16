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
        
          <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-normal">
              Creative Tim
            </a>
          </div>

          {{-- Main Navbar --}}
          @include('components\dashboard\navs\admin-dashboard-nav')
          {{-- Main Navbar --}}

        </div>

        <div class="main-panel">

          <!-- Navbar Header -->
          @include('components\dashboard\navs\header-nav')
          <!-- End Navbar Header -->

          {{-- mainContent --}}
          @yield('mainContent')
          {{-- mainContent --}}

        </div>
    </div>

    {{-- Fixed Plugin --}}
    @include('components\dashboard\fixed-plugin')
    {{-- Fixed Plugin --}}

    <!--   Core JS Files   -->
    <script src="{{asset('dashboard/assets/js/core/jquery.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/core/popper.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/core/bootstrap-material-design.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/material-dashboard.js?v=2.1.2')}}" type="text/javascript"></script>
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