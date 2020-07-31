@extends('layout.header2')    
@section('title')
Activate || Naija Made
@endsection

@section('content')
  <body style="background: url(../assets/img/aerial.jpg);">
      
    </div>
    <!-- Header Section End --> 

<!-- Content section Start --> 
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <div class="page-login-form box">
             <h4 style="font-color:#fff;"> Congratulation, your account has been activaed successfully, click button below to continue<br><br>
                <a href="{{ route ('account_home') }}">
                 <button class="btn btn-success btn-sm" align="center">
                     Continue
                 </button>
                </a>
             </h4>
             
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Content section End --> 
@endsection