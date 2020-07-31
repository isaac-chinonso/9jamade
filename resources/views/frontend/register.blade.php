@extends('layout.header2')    
@section('title')
Register || Naija Made
@endsection

@section('content')
  <body style="background: url(assets/img/aerial.jpg);">
      
    </div>
    <!-- Header Section End --> 

<!-- Content section Start --> 
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <div class="page-login-form box1">
              @include('include.success')
              @include('include.warning')
              @include('include.error')
              <h3 style="color: #fff;opacity: 1.0;">
                Register
              </h3>
              <form method="post" action="{{ route('saveuser') }}" role="form" class="login-form">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-icon">
                        <i class="icon fa fa-user"></i>
                        <input type="text" class="form-control" name="fname" placeholder="first name" value="{{ Request::old('fname')}}">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-icon">
                        <i class="icon fa fa-user"></i>
                        <input type="text" class="form-control" name="lname" placeholder="last name" value="{{ Request::old('lname')}}">
                      </div>
                    </div>  
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-icon">
                    <i class="icon fa fa-user"></i>
                    <input type="text" id="sender-email" class="form-control" name="username" placeholder="User Name" value="{{ Request::old('username')}}">
                  </div>
                </div> 
                <div class="form-group">
                  <div class="input-icon">
                    <i class="icon fa fa-envelope"></i>
                    <input type="text" id="sender-email" class="form-control" name="email" placeholder="Email Address" value="{{ Request::old('email')}}">
                  </div>
                </div> 
                <div class="form-group">
                  <div class="input-icon">
                    <i class="icon fa fa-user"></i>
                    <input type="text" class="form-control" name="business_name" placeholder="Business Name" value="{{ Request::old('business_name')}}">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-icon">
                    <i class="icon fa fa-unlock-alt"></i>
                    <input type="password" class="form-control" name="password"  placeholder="Password">
                  </div>
                </div>  
                <div class="form-group">
                  <div class="input-icon">
                    <i class="icon fa fa-unlock-alt"></i>
                    <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
                  </div>
                </div>                 
                <div class="checkbox">
                  <input type="checkbox" id="remember" name="rememberme" value="forever" style="float: left;">
                  <label for="remember" style="color: #fff;opacity: 1.0;">By creating account you agree to our Terms & Conditions</label>
                </div>
                <button type="submit" class="btn btn-common log-btn">Register</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
              </form>
              <ul class="form-links">
                <li class="pull-left"><a href="{{ route ('login') }}">Already a user, Click here to login</a></li>
                <!-- <li class="pull-right"><a href="#">Lost your password?</a></li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Content section End --> 
@endsection