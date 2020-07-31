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
              <h2 class="page-title">How to use <img src="../assets/img/Logo.png" alt="" height="60px"></h2>
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
            <h3>How To Use 9jaMade</h3>
            <div class="ad-detail-content">
              <p style="font-size:15px;"> 
      			   We developed this platform to help our fellow Nigerians post ads online and create more visibility for our Nigerian made products.
      			  </p>
              <blockquote>
    			    <p style="font-size:18px;">
      				  <strong>What are the rules?</strong>
    			    </p>
    			  </blockquote>
          
            <p> 
             <div class="ad-detail-content" style="font-size: 14px; line-height: 28px;">
              <li>You must be eighteen and over to use the site.</li>
              <li><strong>You’re only allowed one account.</strong> Our fees are per person, not per account. If you're using more than one account to avoid posting fees, we'll have to restrict your access to your accounts. Only use one.</li>
              <li><strong>Clean, clear and accurate photos please.</strong> We’ll ask you to take them down if you add contact details to them. Or if they lie about what you’re selling. For example, posting a picture of an animal that isn’t yours</li>
              <li><strong>Choose the best category you can.</strong> This will give you the best exposure and keep our site clean and tidy.</li>
              <li><strong>English Only.</strong> Though Nigeria has many languages, only English is allowed for easy communication between other tribes.</li>
              <li><font color="red">One ad per item, and one item per ad. Just so nobody gets confused, don't post duplicate ads</font></li>
              <li><strong>Only post it if it is made in Nigeria.</strong> Each user will have to be verified to make sure the products are made in Nigeria as the platform requires.</li>
              <li><strong>No spam please.</strong> This includes ad spam and keyword spamming in ads. Let’s keep our community as clean as we can.</li>
              <li><strong>Users and business must be residence of Nigeria.</strong></li>
              </div>
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