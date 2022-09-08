<!DOCTYPE html>
<html>
   <head>
    <title>Ridepharma</title>

    <link rel="stylesheet" href="{{ URL::asset('admin/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/vendors/flag-icon-css/css/flag-icon.min.css') }}" >
    <link rel="stylesheet" href="{{ URL::asset('admin/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin//vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/css/style.css') }}">
    <link rel="shortcut icon"  href="{{ URL::asset('admin/images/favicon.png') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/5.0.7/sweetalert2.min.css" rel="stylesheet">

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


   </head>
   <body>
      
      @include('../components/admin/flash-message')

      @yield('content')

      <script src="{{ URL::asset('admin/vendors/js/vendor.bundle.base.js') }}"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <script src="{{ URL::asset('admin/vendors/chart.js/Chart.min.js') }}"></script>

      <script src="{{ URL::asset('admin/vendors/jquery-circle-progress/js/circle-progress.min.js') }}"></script>


      <script src="{{ URL::asset('admin/js/jquery.cookie.js') }}" type="text/javascript"></script>
      <!-- End plugin js for this page -->
      <!-- inject:js -->

      <script src="{{ URL::asset('admin/js/off-canvas.js') }}"></script>

      <script src="{{ URL::asset('admin/js/hoverable-collapse.js') }}"></script>
      
      <script src="{{ URL::asset('admin/js/misc.js') }}"></script>

      <!-- endinject -->
      <!-- Custom js for this page -->
      <script src="{{ URL::asset('admin/js/dashboard.js') }}"></script>

      <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

      
    </body>
</html>