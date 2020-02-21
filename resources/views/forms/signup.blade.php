@extends('master')
@section('content')
<!-- Off-Canvas Wrapper-->
<div class="offcanvas-wrapper">
      <!-- Page Title-->
      <div class="page-title">
        <div class="container">
          <div class="column">
            <h1>Sign Up</h1>
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li>{{ Breadcrumbs::render('signup') }}</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Page Content-->
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6 mt-4 mb-4">
            <form class="login-box" method="POST" action="" novalidate="novalidate" autocomplete="off">
              @csrf
              <h4 class="margin-bottom-1x text-center">Here you can signup for new account</h4>
              <label for="name"></label>
              <div class="form-group input-group">
              <input class="form-control" value="{{old('name')}}" name="name" type="text" id="name" placeholder="Name" required>
              <span class="input-group-addon"><span class="text-danger">*</span><i class="far fa-smile-beam"></i></span>
              </div>
              <span class="text-danger">{{$errors->first('name')}}</span>
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
              <div class="text-center text-sm-right">
                <button class="btn btn-primary margin-bottom-none" name="submit" type="submit">Sign Up</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      
      @endsection
