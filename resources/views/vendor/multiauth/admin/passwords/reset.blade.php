@extends('vendor.multiauth.admin.layout.outinglayout')
@section('content')
<div class="login-box">
  <div class="login-logo">
    <b>Reset Admin Password</b>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    @include('vendor.multiauth.admin.layout.messages')  
    <form method="POST" action="{{ route('admin.password.request') }}" aria-label="{{ __('Admin Reset Password') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form-group row text-center">
            <label for="email" class="col-md-12">{{ __('E-Mail Address') }}</label>

            <div class="col-md-12">
                <input id="email" type="email" class="form-control" name="email" value="{{ $email ?? old('email') }}" required autofocus> 
            </div>
        </div>

        <div class="form-group row text-center">
            <label for="password" class="col-md-12">{{ __('Password') }}</label>

            <div class="col-md-12">
                <input id="password" type="password" class="form-control" name="password" required> 
            </div>
        </div>

        <div class="form-group row text-center">
            <label for="password-confirm" class="col-md-12">{{ __('Confirm Password') }}</label>

            <div class="col-md-12">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>
        </div>

        <div class="form-group text-center">
            <div class="">
                <button type="submit" class="btn btn-primary" style="margin-bottom: 10px;">
                    {{ __('Reset Password') }}
                </button>
            </div>
        </div>
    </form>
    

    

  </div>
  <!-- /.login-box-body -->
</div>
@endsection