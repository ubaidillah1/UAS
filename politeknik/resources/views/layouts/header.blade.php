<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('majestic/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('majestic/vendors/base/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('majestic/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{asset('majestic/css/all.min.css')}}">
  <script src="https://kit.fontawesome.com/903863b3be.js" crossorigin="anonymous"></script>
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('majestic/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('majestic/css/style.min.css')}}">
  <!-- <link rel="stylesheet" href="{{asset('majestic/css/carousel.css')}}"> -->
  <!-- <link rel="stylesheet" href="{{asset('bootstrap.min.css')}}"> -->
  <!-- endinject -->
  <!-- <script src="{{asset('majestic/js/jam.js')}}"></script> -->
  <link rel="shortcut icon" href="{{asset('majestic/images/apotek.png')}}" />
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
</head>
<style>
  .jam {
    font-family: tahoma;
    font-weight: bold;
    font-size: 20px;
    color: Grey;
    /* background-color: blue; */
    position: relative;
    top: 0px;
    left: 0px;
  }
</style>

<body>
  <div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      @include('layouts.navbar')
    </nav>
    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas " id="sidebar">
        @include('layouts.sidebar')
      </nav>
      <div class="main-panel">
        @include('layouts.flash-message')
        @yield('content')
        <footer class="footer">
          @include('layouts.footer')
        </footer>
      </div>
    </div>
  </div>
  <script src="{{asset('majestic/vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('majestic/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('majestic/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('majestic/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('majestic/js/off-canvas.js')}}"></script>
  <script src="{{asset('majestic/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('majestic/js/template.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('majestic/js/dashboard.js')}}"></script>
  <script src="{{asset('majestic/js/data-table.js')}}"></script>
  <script src="{{asset('majestic/js/jquery.dataTables.js')}}"></script>
  <script src="{{asset('majestic/js/dataTables.bootstrap4.js')}}"></script>
  <!-- End custom js for this page-->
  <!-- {{-- <script src="{{asset('majestic/js/jquery.cookie.js')}}" type="text/javascript"></script> --}} -->
  <!-- container-scroller -->

</body>

</html>