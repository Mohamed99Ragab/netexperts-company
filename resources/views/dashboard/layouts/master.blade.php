<!DOCTYPE html>
<html lang="en">

@include('dashboard.layouts.head')
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
   @include('dashboard.layouts.header')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

      <!-- partial:partials/_sidebar.html -->
      @include('dashboard.layouts.sidebar')
      <!-- partial -->

      <div class="main-panel">

          @yield('content')

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
       @include('dashboard.layouts.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
    @include('dashboard.layouts.scripts')
</body>

</html>

