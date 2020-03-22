<!DOCTYPE html>
<html lang="en">
  <head>
@include('partials._head')
  @yield('style')
  </head>
  <body class="hold-transition login-page">
      @yield('content')
    @include('partials._scripts')
     @yield('script')
  </body>
</html>
