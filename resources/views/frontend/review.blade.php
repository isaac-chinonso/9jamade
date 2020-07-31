@extends('layout.header')    
@section('title')
Post Review || Naija Made
@endsection

@section('content')


 <!-- Page Header Start -->
    <div class="page-header" style="background: url(../assets/img/banner1.jpg);">
      <div class="container">
        <div class="row">         
          <div class="col-md-12">
            <div class="breadcrumb-wrapper">
              <h2 class="page-title">Post Review - {{ $addetails->title}}</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End --> 

    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="row">
        <button class="btn btn-info btn-sm" style="background-color: #aaa; "><a href="{{ route('viewads',$addetails->slug) }}" style="color: #fff;"><< GO BACK TO PRODUCT</a></button><hr>
            <div class="col-md-4">
            <h3>Your review of this product</h3>
              <div class="usearadmin">
                <img src="../../upload/images/{{ $addetails->image->first()->source }}" width="600px" height="400px" alt="">
              </div>
            </div>
            <div class="col-md-6">
            
              <div>
              <h3 style="text-transform: capitalize;">{{ $addetails->title }}</h3>
              <small style="color: #bbb;">{{ $addetails->category->title }}</small><br><br>
                  @include('include.success')
                  @include('include.warning')
                  @include('include.error')
                  <form method="POST" action="{{ route('postreview',$addetails->id) }}">
                        <div class="form-group">
                          <label>Rate it</label>
                          <div class="form-control">
                            <fieldset class="rating">
                              <input type="radio" id="star5" name="rate" value="5" />
                                <label class="full" for="star5" title="Awesome - 5 stars"></label>
                              <input type="radio" id="star4half" name="rate" value="4.5" />
                                <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                              <input type="radio" id="star4" name="rate" value="4" />
                                <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                              <input type="radio" id="star3half" name="rate" value="3.5" />
                                <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                              <input type="radio" id="star3" name="rate" value="3" />
                                <label class="full" for="star3" title="Meh - 3 stars"></label>
                              <input type="radio" id="star2half" name="rate" value="2.5" />
                                <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                              <input type="radio" id="star2" name="rate" value="2" />
                                <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                              <input type="radio" id="star1half" name="rate" value="1.5" />
                                <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                              <input type="radio" id="star1" name="rate" value="1" />
                                <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                              <input type="radio" id="starhalf" name="rate" value="0.5" />
                                <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                            </fieldset>
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Reviews</label>
                            <textarea class="form-control" name="comment"></textarea>
                        </div>
                    <div class="pull-right">
                      <button class="btn btn-success btn-sm waves-effect waves-light">SEND MY REVIEW</button>
                    </div>
                    <input type="hidden" name="_token" value="{{ Session::token() }}"> 
                  </form>
              </div><!-- /.modal -->
              
            </div>

            <div class="col-md-2">
            </div>
         
        </div>
        
      </div>         
    </div>
    <!-- End Content -->


@include('layout.footer')
@endsection