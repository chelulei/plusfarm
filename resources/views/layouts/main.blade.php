<!DOCTYPE html>
<html lang="en">
  <head>
   @include('partials._head')
     @yield('style')
  {{-- <script src="{{asset('/backend/vendor/tinymce/plugin/tinymce/tinymce.min.js')}}"></script>
    <script>tinymce.init({
            selector:'textarea.my-editor',
            setup : function(ed)
            {
                ed.on('init', function()
                {
                    this.execCommand("fontName", false, "tahoma");
                    this.execCommand("fontSize", false, "12px");
                });
            }  ,
                        menubar:'false',
             toolbar: "styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link fontsizeselect |",
              relative_urls: false
    });</script>  --}}
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
           @yield('content')
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
    @yield('modal') --}}
    @yield('script') --}}

</body>
</html>
