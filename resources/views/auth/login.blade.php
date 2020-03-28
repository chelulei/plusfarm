@extends('layouts.front')
@section('content')
<div class="login-box">
  <div class="login-logo text-center">
     <a href="{{url('/')}}">
            <img src="{{ asset('/images/icons/logo1.png') }}"  width="" height="" alt="Plusfarm">
        </a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">
       @include('partials.messages')
      </p>
             <form method="POST" action="{{ route('login') }}">
                 @csrf
                  <div class="form-group">
                    <label class="label">{{ __('Username') }}</label>
                    <div class="input-group">
                      <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}"  placeholder="username"  required autocomplete="username" autofocus>
                         {{-- @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="label">Password</label>
                    <div class="input-group">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="*********">
                                {{-- @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button  type="submit"  class="btn btn-success submit-btn btn-block"> {{ __('Login') }}</button>
                  </div>
                  <div class="form-group d-flex justify-content-between">
                    <div class="form-check form-check-flat mt-0">
                      <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                           {{ __('  Keep me signed in') }} </label>
                    </div>
                     @if (Route::has('password.request'))
                    <a  href="{{ route('password.request') }}" class="text-small forgot-password text-black">
                      {{ __('Forgot Your Password?') }}
                    </a>
                     @endif
                  </div>
                  <div class="text-block text-center my-3">
                    <span class="text-small font-weight-semibold">Not a member ?</span>
                    <a href="{{ route('register') }}" class="text-black text-small">Create new account</a>
                  </div>
                </form>

                 <div class="social-auth-links text-center mb-3">
        {{-- <p>- OR -</p> --}}
        {{-- <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a> --}}
      </div>
      <!-- /.social-auth-links -->

      {{-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> --}}
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

@endsection
