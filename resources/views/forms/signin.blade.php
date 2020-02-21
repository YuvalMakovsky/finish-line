@extends('master')
@section('content')
<!-- Off-Canvas Wrapper-->
<div class="offcanvas-wrapper">
      <!-- Page Title-->
      <div class="page-title">
        <div class="container">
          <div class="column">
            <h1>Sign In</h1>
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li>{{ Breadcrumbs::render('signin') }}</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Page Content-->      
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6 mt-4 mb-4">
            <form class="login-box" method="POST" action="" novalidate="novalidate" autocomplete="off">
              @csrf
              <div class="row margin-bottom-1x">
                <div class="col-xl-4 col-md-6 col-sm-4"><a class="btn btn-sm btn-block facebook-btn" href="#"><i class="socicon-facebook"></i>&nbsp;Facebook login</a></div>
                <div class="col-xl-4 col-md-6 col-sm-4"><a class="btn btn-sm btn-block twitter-btn" href="#"><i class="socicon-twitter"></i>&nbsp;Twitter login</a></div>
                <div class="col-xl-4 col-md-6 col-sm-4"><a class="btn btn-sm btn-block google-btn" href="#"><i class="socicon-googleplus"></i>&nbsp;Google+ login</a></div>
              </div>
              <h4 class="margin-bottom-1x text-center">Here you can sign in with your account</h4>
              <label for="email"></label>
              <div class="form-group input-group">
              <input class="form-control" value="{{old('email')}}" name="email" type="email" id="email" placeholder="Email" required>
              <span class="input-group-addon"><span class="text-danger">*</span><i class="icon-mail"></i></span>
              </div>
              <span class="text-danger">{{$errors->first('email')}}</span>
              <label for="password"></label>
              <div class="form-group input-group">
                <input class="form-control" name="password" id="password" type="password" placeholder="Password" required>
                <span class="input-group-addon"><span class="text-danger">*</span><i class="icon-lock"></i></span>
              </div>
              <span class="text-danger">{{$errors->first('password')}}</span>
              <div class="d-flex flex-wrap justify-content-between padding-bottom-1x">
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="remember_me" checked>
                  <label class="custom-control-label" for="remember_me">Remember me</label>
                </div><a class="navi-link" href="account-password-recovery.html">Forgot password?</a>
              </div>
              <div class="text-center text-sm-right">
                  @if(Session::has('attm_error'))
                  <div class="alert alert-danger text-center">{{ Session::get('attm_error') }} </div>
                  @endif
                <button class="btn btn-primary margin-bottom-none" name="submit" type="submit">Sign in</button>
                
              
              </div>
            </form>
          </div>
        </div>
      </div>
      
      @endsection
