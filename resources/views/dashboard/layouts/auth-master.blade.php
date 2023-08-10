<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('dashboard/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('dashboard/css/vertical-layout-light/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('website/favicon/icon2.png')}}" />
</head>

<body>
<div class="container-scroller">

        @yield('content')
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{asset('dashboard/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('dashboard/js/off-canvas.js')}}"></script>
<script src="{{asset('dashboard/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('dashboard/js/template.js')}}"></script>
<script src="{{asset('dashboard/js/settings.js')}}"></script>
<script src="{{asset('dashboard/js/todolist.js')}}"></script>
<!-- endinject -->
</body>

</html>
