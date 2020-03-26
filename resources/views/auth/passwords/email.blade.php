@extends('layouts.front')
@section('style')
    <style>
       .login-logo {
    text-align: center;
    margin-bottom: 30px;
}
    </style>
@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Plus</b>Farm</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>
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
              <p class="mt-3 mb-1">
        <a href="{{ route('login') }}">Login</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
@endsection
