@extends('layout.header')    
@section('title')
Career || Naija Made
@endsection

@section('content')

<!-- Page Header Start -->
    <div class="page-header" style="background: url(assets/img/banner1.jpg);">
      <div class="container">
        <div class="row">         
          <div class="col-md-12">
            <div class="breadcrumb-wrapper">
              <h2 class="page-title">Careers</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End --> 

    <!-- Main container Start -->  
    <div class="main-container">
      <div class="container">
        <div class="row">          
          <div class="col-sm-12">
            <div class="ad-detail-content">
              
              <h2 align="center"><font color="red">no vacancies at this time</font></h2>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Main container End -->  

    @include('layout.footer')

    @endsection