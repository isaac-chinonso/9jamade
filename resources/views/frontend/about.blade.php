@extends('layout.header')    
@section('title')
About Us || Naija Made
@endsection

@section('content')

<!-- Page Header Start -->
    <div class="page-header" style="background: url(assets/img/banner1.jpg);">
      <div class="container">
        <div class="row">         
          <div class="col-md-12">
            <div class="breadcrumb-wrapper">
              <h2 class="page-title">About Us</h2>
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
          <div class="col-sm-8">
            <img src="assets/img/about.jpg" alt="">
            <div class="ad-detail-content">
              <p style="font-size:15px;"> 
			    Ever since the recession that hit the Nigerian economy back in 2015 and the hike in prices of goods and services, most of which were gotten from the international market, a group of entrepreneurs by the names Ifeanyi Obi, Ojomo Eric and Isaac Chinonso had the idea to develop a unique website that will put Nigerian made goods and products on the map locally and internationally.
				That was how Naija Made was developed and came to be.
			  </p>
              <blockquote>
			    <p style="font-size:15px;">
				  Though we are still young and new in the classified ad business, we tend to provide a service that is beneficiary to all Nigerians and Nigerian home made products, hence also playing a part in trying to encourage our 
				  fellow citizens to patronize our Nigerian made goods to help our economy grow again.
			    </p>
			  </blockquote>
          
              <p style="font-size:15px;"> 
			    We will continue to grow, expand and improve as time goes on, and we hope and pray we provide the best services that will add values in Nigeria
				for Nigerians.
			  </p>
         
              <p style="font-size:15px;">With Regards,<br>
			     The Naija Made Team.
			  </p>
            </div>
          </div>
          <div class="col-sm-4 page-sidebar">
            <aside>
              <div class="inner-box">
                <div class="categories">
                  <div class="widget-title">
                    <i class="fa fa-align-justify"></i>
                    <h4>All Categories</h4>
                  </div>
                  <div class="categories-list">
                    <ul>
                      <li>
                        <a href="#">
                          <i class="fa fa-github-alt"></i>
                          Fashion & Beauty <span class="category-counter"></span>
                        </a>
                      </li>
                      
                      <li>
                        <a href="#">
                          <i class="fa fa-leaf"></i>
                          Fine Arts <span class="category-counter"></span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-home"></i>
                          Home & Furnitures <span class="category-counter"></span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-wrench"></i>
                          Electronics <span class="category-counter"></span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-home"></i>
                          Produce <span class="category-counter"></span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-black-tie"></i>
                          Others <span class="category-counter"></span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              
            </aside>
          </div>
        </div>
      </div>
    </div>
    <!-- Main container End -->  

   @include('layout.footer')

  @endsection