@extends('vendor.multiauth.admin.app') 
@section('main-content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Blank page
            <small>it all starts here</small>
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            
            <div class="box-body">
              <div class="col-md-8 col-md-offset-2">
    <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Change Admin Password</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="{{ route('admin.password.change') }}">
            @csrf    
              <div class="box-body">
                <div class="form-group row">
                    <label for="oldPassword" class="col-sm-2 control-label">{{ __('Old Password') }}</label>

                    <div class="col-sm-10">
                        <input id="oldPassword" type="password" class="form-control{{ $errors->has('oldPassword') ? ' is-invalid' : '' }}" name="oldPassword" value="{{ $oldPassword ?? old('oldPassword') }}"
                            required autofocus> @if ($errors->has('oldPassword'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('oldPassword') }}</strong>
                            </span> @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 control-label">{{ __('Password') }}</label>

                    <div class="col-sm-10">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                            required> @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span> @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-sm-2 control-label">{{ __('Confirm Password') }}</label>

                    <div class="col-sm-10">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>
                


              </div>
              <!-- /.box-body -->
              <div class="form-group text-center">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" style="margin-bottom: 10px;">
                        {{ __('Change Password') }}
                    </button>
                </div>
            </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
            </div>
            <!-- /.box-body -->
        
            <!-- /.box-footer-->
          </div>
          <!-- /.box -->

        </section>
        <!-- /.content -->
      </div>
    
@endsection

