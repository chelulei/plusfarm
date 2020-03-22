<!DOCTYPE html>
<html lang="en">
  <head>
   @include('partials._head')
  @yield('style')
  <script src="{{asset('/backend/vendor/tinymce/plugin/tinymce/tinymce.min.js')}}"></script>
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
    });</script>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
       @include('partials._navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
       @include('partials._sidebar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
             {{-- @include('partials._pagetitle') --}}
            <!-- Page Title Header Ends-->
           {{-- @include('partials._statistics') --}}
           @yield('content')
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         @include('partials._footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
     @include('partials._modal')
 <!-- modal-->
    @include('partials._scripts')
    @yield('modal')
    @yield('script')
    <!-- End custom js for this page-->
  </body>
</html>
