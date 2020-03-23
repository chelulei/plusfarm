<!DOCTYPE html>
<html lang="en">
  <head>
   @include('partials._head')
     @yield('style')
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">
        <!-- Navbar -->
      @include('partials._navbar')
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
           @include('partials._sidebar')

            <!-- Sidebar Menu -->

        <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
      <!-- Content Header (Page header) -->
         @include('partials._pageheader')
          <!-- /.content-header -->
           <!-- Main content -->
            <section class="content">
              <div class="container-fluid">
                 @yield('content')
              </div>
            </section>
           <!-- /.content -->

    <!-- /.content -->
      </div>
       <!-- /.content-wrapper -->
  @include('partials._footer')
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
      </div>
      <!-- ./wrapper -->
  @include('partials._modal')
 <!-- modal-->
  @include('partials._scripts')
    @yield('modal')
    @yield('script')

</body>
</html>
