<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('dashboard/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('dashboard/assets/img/favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Ahmed</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{asset('dashboard/assets/css/material-dashboard.css?v=2.1.2')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('dashboard/assets/demo/demo.css')}}" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="{{asset('dashboard/assets/img/sidebar-1.jpg')}}">
          <!--
            Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
    
            Tip 2: you can also add an image using data-image tag
        -->
          <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
              Creative Tim
            </a></div>
          <div class="sidebar-wrapper">
            <ul class="nav">
              <li class="nav-item active" id="User-Profile">
                <a class="nav-link" href="{{url('user')}}">
                  <i class="material-icons">person</i>
                  <p>User Profile</p>
                </a>
              </li>
              <li class="nav-item " id="Edit-Profile">
                <a class="nav-link" href="{{url('useredit')}}">
                  <i class="material-icons">edit</i>
                  <p>Edit Profile</p>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="./typography.html">
                  <i class="material-icons">library_books</i>
                  <p>Your Address</p>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="./icons.html">
                  <i class="material-icons">bubble_chart</i>
                  <p>Favorite</p>
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
                  <p>RTL Support</p>
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