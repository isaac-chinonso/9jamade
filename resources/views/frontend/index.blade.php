@extends('layout.header')    
@section('title')
Home Page || Naija Made
@endsection

@section('content')

 <!-- Start intro section -->
    <section id="intro" class="section-intro">
      <div class="overlay">
        <div class="container">
          <div class="main-text">
            <h2>Welcome To <img src="../assets/img/logo.png" alt="" height="60px"></h2>
            <p class="sub-title">The Home For Nigeria Made Product</p>

            <!-- Start Search box -->
            <div class="row search-bar">
              <div class="advanced-search">
               <form class="search-form" method="GET" role="search">
                  <div class="col-md-3 col-sm-6 search-col">
                    <div class="input-group-addon search-category-container">
                      <label class="styled-select">
                        <select class="dropdown-product selectpicker" >
                          <option selected disabled>All Categories</option>
                          @foreach ($category as $cat)
                          <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                          @endforeach
                        </select>                                    
                      </label>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6 search-col">
                    <div class="input-group-addon search-category-container">
                      <label class="styled-select location-select">
                        <select class="dropdown-product selectpicker" name="search" >
                          <option selected disabled>All Locations</option>
                          @foreach($state as $stat)
                          <option value="{{ $stat->id }}">{{ $stat->name }}</option>
                          @endforeach
                        </select>                                    
                      </label>
                    </div>


                  </div>
                  <div class="col-md-3 col-sm-6 search-col">
                    <input class="form-control keyword" name="search" value="" placeholder="Enter Keyword" type="text">
                    <i class="fa fa-search"></i>
                  </div>
                  <div class="col-md-3 col-sm-6 search-col">
                    <button class="btn btn-common btn-search btn-block"><strong>Search</strong></button>
                  </div>
                </form>
              </div>
            </div>
            <!-- End Search box -->
          </div>
        </div>
      </div>
    </section>
    <!-- end intro section -->

    <div class="wrapper">
      <!-- Categories Homepage Section Start -->
      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="inner-box">
                  <div class="widget-title">
                    <h4>Premium Ads</h4>
                  </div>
                  <div class="advimg">
                  Not available
                    <!-- <ul class="featured-list">
                      <li>
                        <img alt="" src="../assets/img/featured/img1.jpg">
                        <div class="hover">
                          <a href="#"><span>$49</span></a>
                        </div>
                      </li>
                    </ul> -->
                  </div>
                </div>
            </div>

            <div class="col-md-9">
              <div class="inner-box">
                 <div class="widget-title">
                    <h4>Featured Ads</h4>
                  </div> 
                <!-- Adds wrapper Start -->
            
              <div class="adds-wrapper">
              
              @foreach($ad as $ads)
              <div class="col-md-3">
                <div class="item-list make-grid">
                  <div class="col-sm-2 no-padding photobox">
                    <div class="add-image">
                      <a href="{{ route('viewads',$ads->slug) }}"><img src="upload/images/{{ $ads->image->first()->source }}" alt="{{ $ads->title }}"></a>
                    </div>
                  </div>
                  <div class="col-sm-7 add-desc-box">
                    <div class="add-details">
                      <h5 class="add-title"><a href="{{ route('viewads',$ads->slug) }}">{{ $ads->title }}</a></h5>
                      <div class="info">
                        <span class="category">{{ $ads->category->title }}</span>
                      </div>
                    </div>
                    <div class="col-sm-3 text-right  price-box">
                      <h2 class="item-price">₦{{ number_format($ads->price, 0, '.', ', ') }}</h2>
                    </div>
                  </div>
                  @if ($ads->review->count() > 0)
                      ( {{ $ads->review->count('rate') }}  ) 
                        <div class="rating">
                          <ul>
                            @if ($ads->review->avg('rate') < 1)
                              <li><i class="fa fa-star-half-o"></i></li>
                            @elseif ($ads->review->avg('rate') == 1)
                              <li><i class="fa fa-star"></i></li>
                            @elseif ($ads->review->avg('rate') < 2)
                              <li><i class="fa fa-star"></i></li>
                              <li><i class="fa fa-star-half-o"></i></li>
                            @elseif ($ads->review->avg('rate') == 2)
                              <li><i class="fa fa-star"></i></li>
                              <li><i class="fa fa-star"></i></li>
                            @elseif ($ads->review->avg('rate') < 3)
                              <li><i class="fa fa-star" aria-hidden="true"></i></li>
                              <li><i class="fa fa-star" aria-hidden="true"></i></li>
                              <li><i class="fa fa-star-half-o"></i></li>
                            @elseif ($ads->review->avg('rate') == 3)
                              <li><i class="fa fa-star" aria-hidden="true"></i></li>
                              <li><i class="fa fa-star" aria-hidden="true"></i></li>
                              <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            @elseif ($ads->review->avg('rate') < 4)
                              <li><i class="fa fa-star" aria-hidden="true"></i></li>
                              <li><i class="fa fa-star" aria-hidden="true"></i></li>
                              <li><i class="fa fa-star" aria-hidden="true"></i></li>
                              <li><i class="fa fa-star-half-o"></i></li>
                            @elseif ($ads->review->avg('rate') == 4)
                              <li><i class="fa fa-star" aria-hidden="true"></i></li>
                              <li><i class="fa fa-star" aria-hidden="true"></i></li>
                              <li><i class="fa fa-star" aria-hidden="true"></i></li>
                              <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            @elseif ($ads->review->avg('rate') < 5)
                              <li><i class="fa fa-star" aria-hidden="true"></i></li>
                              <li><i class="fa fa-star" aria-hidden="true"></i></li>
                              <li><i class="fa fa-star" aria-hidden="true"></i></li>
                              <li><i class="fa fa-star" aria-hidden="true"></i></li>
                              <li><i class="fa fa-star-half-o"></i></li>
                            @elseif ($ads->review->avg('rate') == 5)
                              <li><i class="fa fa-star" aria-hidden="true"></i></li>
                              <li><i class="fa fa-star" aria-hidden="true"></i></li>
                              <li><i class="fa fa-star" aria-hidden="true"></i></li>
                              <li><i class="fa fa-star" aria-hidden="true"></i></li>
                              <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            @endif
                          </ul>
                        </div>
                  @elseif ($ads->review->count() == 0)
                      No Review
                  @endif
                </div>
              </div>
              @endforeach
                 
              </div>
           
              <!-- Adds wrapper End -->
              </div>
            </div>

            
          </div>
          
        </div>
      </section>
      <!-- Categories Homepage Section End -->

    </div>
@endsection
   