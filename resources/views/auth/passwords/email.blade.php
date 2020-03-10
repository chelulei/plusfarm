@extends('layouts.front')
@section('style')
    <style>
       .login-logo {
    text-align: center;
    margin-bottom: 30px;
}
    </style>
@section('content')
<div class="col-lg-4 mx-auto">
              <div class="auto-form-wrapper">
                 <div class="login-logo">
                    <a href="{{url('/')}}">
                        <img src="{{ asset('/images/icons/logo1.png') }}"  width="" height="" alt="Plusfarm">
                    </a>
                </div>
                @include('partials.messages')
              @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
             <form method="POST" action="{{ route('password.email') }}">
                         @csrf
                                <div class="form-group">
                                    <label>{{ __('E-Mail Address') }}</label>
                                    <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"" type="email" name="email" placeholder="Email"
                                    value="{{ old('email') }}" required>
                                     @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <button class="btn btn-success" type="submit">
                                       {{ __('Send Password Reset Link') }}
                                </button>
                            </form>
              </div>
            </div>
@endsection
