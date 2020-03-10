@extends('layouts.front')
@section('style')
    <style>
       .login-logo {
    text-align: center;
    margin-bottom: 30px;
}
    </style>
@endsection
@section('content')
<div class="col-lg-4 mx-auto">
              <div class="auto-form-wrapper">
                 <div class="login-logo">
                    <a href="{{url('/')}}">
                        <img src="{{ asset('/images/icons/logo1.png') }}"  width="" height="" alt="Plusfarm">
                    </a>
                </div>
                @include('partials.messages')
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
                  <div class="form-group">
                    <button class="btn btn-block g-login">
                      <img class="mr-3" src="../../../assets/images/file-icons/icon-google.svg" alt="">Log in with Google</button>
                  </div>
                  <div class="text-block text-center my-3">
                    <span class="text-small font-weight-semibold">Not a member ?</span>
                    <a href="{{ route('register') }}" class="text-black text-small">Create new account</a>
                  </div>
                </form>
              </div>
            </div>
@endsection
