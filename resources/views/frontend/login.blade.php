@extends('layout.header2')    
@section('title')
Login || Naija Made
@endsection

@section('content')
  <body style="background: url(assets/img/aerial.jpg);">
      
    </div><br><br><br>
    <!-- Header Section End --> 

<!-- Content section Start --> 
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-4 col-md-4 col-md-offset-4">
            <div class="page-login-form box1">
              @include('include.success')
              @include('include.warning')
              @include('include.error')
              <h3 style="color: #fff;opacity: 1.0;">
                Login
              </h3>
              <form method="post" action="{{ route('login') }}" role="form" class="login-form">
                <div class="form-group">
                  <div class="input-icon">
                    <i class="icon fa fa-user"></i>
                    <input type="text" id="sender-email" class="form-control" name="email" placeholder="Email" value="{{ Request::old('email') }}">
                  </div>
                </div> 
                <div class="form-group">
                  <div class="input-icon">
                    <i class="icon fa fa-unlock-alt"></i>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                  </div>
                </div>                  
                <div class="checkbox">
                  <input type="checkbox" id="remember" name="rememberme" value="forever" style="float: left;">
                  <label for="remember" style="color: #fff;opacity: 1.0;">Remember me</label>
                </div>
                <button type="submit" class="btn btn-common log-btn">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
              </form>
              <ul class="form-links">
                <li class="pull-left"><a href="{{ route ('register') }}">Don't have an account?</a></li>
                <!-- <li class="pull-right"><a href="#">Lost your password?</a></li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section><br><br>
        <!-- Content section End --> 
        @endsection