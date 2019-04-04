<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cinema</title>
  <!-- plugins:css -->
 <!--  <link rel="stylesheet" href="{{asset('backend/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('backend/vendors/base/vendor.bundle.base.css')}}"> -->
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('backend/images/favicon.png')}}" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
         <h3>Dashboard</h3>
      </div>
      <!-- pull-right Button of Logout --> 
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end"> 
          <ul class="navbar-nav navbar-nav-right">
              <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
             <!-- to LogOut admin -->
           <a class="btn btn-danger" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
         </form>
        <!-- end LogOut -->
        </button>         

        </ul>
       
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
              <i class="ti-shield menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
       
        
        <li class="nav-item">
         <a class="nav-link" href="{{ route('hall.add') }}">
           <i class="ti-pie-chart menu-icon"></i>
           <span class="menu-title">add New Hall</span>
         </a>
        </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('hall.all') }}">
              <i class="ti-pie-chart menu-icon"></i>
              <span class="menu-title">All Halls</span>
            </a>
          </li>

        <li class="nav-item">
         <a class="nav-link" href="{{ route('movie.add') }}">
           <i class="ti-pie-chart menu-icon"></i>
           <span class="menu-title">add New Movie</span>
         </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('movie.all') }}">
              <i class="ti-pie-chart menu-icon"></i>
              <span class="menu-title">All Movies</span>
            </a>
          </li>
       
        
        
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        @if (session('message'))
         <div class="alert alert-success text-center">
          {{ session('message') }}
         </div>
        @endif

        @yield('content')

        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019 <a href="https://www.agilebm.com/" target="_blank">AgileBM</a></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
<!--   <script src="{{asset('backend/vendors/base/vendor.bundle.base.js')}}"></script>
 -->  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- <script src="{{asset('backend/vendors/chart.js/Chart.min.js')}}"></script> -->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
<!--   <script src="{{asset('backend/js/off-canvas.js')}}"></script>
  <script src="{{asset('backend/js/hoverable-collapse.js')}}"></script> -->
  <!-- <script src="{{asset('backend/js/template.js')}}"></script>
  <script src="{{asset('backend/js/todolist.js')}}"></script> -->
  <!-- endinject -->
  <!-- Custom js for this page-->
 <!--  <script src="{{asset('backend/js/dashboard.js')}}"></script> -->
  <!-- End custom js for this page-->
</body>

</html>


