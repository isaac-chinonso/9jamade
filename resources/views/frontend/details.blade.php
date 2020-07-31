@extends('layout.header')    
@section('title')
Details || Naija Made
@endsection

@section('content')


 <!-- Page Header Start -->
    <div class="page-header" style="background: url(../assets/img/banner1.jpg);">
      <div class="container">
        <div class="row">         
          <div class="col-md-12">
            <div class="breadcrumb-wrapper">
              <h2 class="page-title">Ad Details</h2>
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
          <!-- Product Info Start -->
          <div class="product-info">
            <div class="col-sm-8">
              @include('include.success')
              @include('include.warning')
              @include('include.error')
              <div class="inner-box ads-details-wrapper">
               <div class="widget-title">
                  <h2 style="text-transform: capitalize;">{{ $addetails->title }}</h2>
                </div>
                  <p class="item-intro">
                      <span class="poster">For sale by 
                      <span class="ui-bubble is-member">{{ $addetails->user->username }}</span> |
                      <span class="date"><i class="fa fa-clock-o"></i> {{ $addetails->created_at->diffForHumans() }}</span> | 
                      <span class="location"><i class="fa fa-map-marker"></i> {{ $addetails->state->name }}</span>
                  </p>
                <div id="owl-demo" class="owl-carousel owl-theme">
                    <div class="item">
                      <img src="../upload/images/{{ $addetails->image->first()->source }}" alt="">
                    </div>
                    <div class="item">
                      <img src="/file/" alt="">
                    </div>
                    <div class="item">
                      <img src="/file/" alt="">
                    </div>
                </div>
              </div>

              <div class="Ads-Details">
                <h2 class="title-2"><strong>Description</strong></h2>
                  <div class="row">
                  <div class="ads-details-info col-md-8">
                    <p>{{ $addetails->description }}</p>
                    
                     
                  </div>
                  <div class="col-md-4">
                    <aside class="panel panel-body panel-details">
                      <ul>
                        <li>
                        <p class=" no-margin "><strong>Price:</strong> ₦{{ $addetails->price }}</p>
                        </li>
                        <li>
                        <p class="no-margin"><strong>Category:</strong> {{ $addetails->category->title }}</p>
                        </li>
                        <li>
                        <p class="no-margin"><strong>Location:</strong> {{ $addetails->state->name }}</p>
                        </li>
                      </ul>
                    </aside>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-sm-4 col-xs-12">
              <div class="inner-box">
                <div class="widget-title">
                  <h4>Contact Info</h4>
                </div>  
                <ul class="list-border">
                        <li>
                          <a href="#"> <i class=" fa fa-user"></i> More ads by {{ $addetails->user->username }} </a>
                        </li>
                        <li>
                          <a href="#"> <i class="fa fa-share-alt"></i> Share ad </a>
                      <div>  
                        <i class="fb-share-button" data-href="https://preview.9jamade.ng/detail/{{ $addetails->slug }}" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fpreview.9jamade.ng/detail%2F{{ $addetails->slug }}&amp;src=sdkpreparse">share</a></i>

                        <i><a href="https://twitter.com/share?ref_src=twsrc%5Etfw" target="_blank" class="twitter-share-button" data-show-count="true"></a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></i>

                      </div>

                        </li> 
                </ul><br>
                  <div class="slider-text">  
                      <!-- contact-with -->
                      <div class="contact-with">
                      <span style="font-size: 17px;color: blue;">
                          <i class="fa fa-map-marker"></i> 
                         {{ $addetails->lga->name }} {{ $addetails->state->name }} State
                      </span><br>
                      <span style="font-size: 17px;color: red;">
                          <i class="fa fa-phone-square"></i>
                          {{ $addetails->user->profile->first()->phone }}
                      </span><br><br>
                        <a href="#" class="btn btn-success btn-sm"><i class="fa fa-envelope-square"></i>Reply by email</a>
                      </div><!-- contact-with -->  
                  </div>   
              </div>
            </div>

            <div class="col-sm-4">
             <div class="inner-box">
                <div class="widget-title">
                  <h4>Sponsored Ads</h4>
                </div>
                Not available
              </div>
            </div>
          </div>
          <!-- Product Info End -->
        </div>
        <div class="row">
          <div class="wrapper">
          <!-- Categories Homepage Section Start -->
          <section id="categories-homepage">
            <div class="container">
              <div class="col-md-12">
                  <div class="widget-title">
                   <button class="btn btn-success btn-xs pull-right" ><a href="{{ route('review',$addetails->slug) }}" style="color: #fff;">Write A Review</a></button>
                      
                      <h3>Reviews</h3>
                    </div> 
                     
                     @foreach($review as $rev)  
                        <span class="pull-left"><img src="../assets/img/fill.jpg" width="50px" height="50px"> {{ $rev->profile->fname }} {{ $rev->profile->lname }} </span>
                              <div class="rating">
                                <ul style="margin-left: 20px;margin-top: 12px;">
                                @if ($rev->rate == 0.5)
                                    <li><i class="fa fa-star-half-o"></i></li>
                                  @elseif ($rev->rate == 1)
                                    <li><i class="fa fa-star"></i></li>
                                  @elseif ($rev->rate == 1.5)
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star-half-o"></i></li>
                                  @elseif ($rev->rate == 2)
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                  @elseif ($rev->rate == 2.5)
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-half-o"></i></li>
                                  @elseif ($rev->rate == 3)
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                  @elseif ($rev->rate == 3.5)
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-half-o"></i></li>
                                  @elseif ($rev->rate == 4)
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                  @elseif ($rev->rate == 4.5)
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-half-o"></i></li>
                                  @elseif ($rev->rate == 5)
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                @endif
                                <span> | {{ $rev->comment }}</span>
                                </ul>

                              </div>
                         
                        
                        <br><br><hr>
                      @endforeach


                  </div>
              </div> 

              </div>
            </div>
          </section>
          <!-- Categories Homepage Section End -->

        </div>
      </div>         
    </div>
    <!-- End Content -->


 @include('layout.footer')
@endsection