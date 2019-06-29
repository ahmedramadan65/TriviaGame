@extends('vendor.multiauth.admin.layout.outinglayout')
@section('content')
<div class="login-box">
  <div class="login-logo">
    <b>Reset Admin Password</b>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    @include('vendor.multiauth.admin.layout.messages')  
    
    <form method="POST" action="{{ route('admin.password.email') }}" aria-label="{{ __('Reset Admin Password') }}">
                        @csrf

                        <div class="form-group row text-center">
                            <label for="email" class="col-md-12">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required> 
                            </div>
                        </div>

                        <div class="form-group text-center">
                            <div class="">
                                <button type="submit" class="btn btn-primary" style="margin-bottom: 10px;">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
    

    

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

@endsection