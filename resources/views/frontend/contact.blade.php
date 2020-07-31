@extends('layout.header')    
@section('title')
Contact Us || Naija Made
@endsection

@section('content')
     <!-- Page Header Start -->
    <div class="page-header" style="background: url(assets/img/banner1.jpg);">
      <div class="container">
        <div class="row">         
          <div class="col-md-12">
            <div class="breadcrumb-wrapper">
              <h2 class="page-title">Contact Us</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End --> 
    
      <div id="google-map"></div>
      <!-- End Map Section -->
      
      <!-- Start Contact Us Section -->
      <section id="content">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <h2 class="title-2">
                Leave A Meassage!
              </h2>
              <!-- Form -->
              <form id="contactForm" class="contact-form" data-toggle="validator">
                <div class="row">
                  <div class="col-md-6">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required data-error="Please enter your name">
                          <div class="help-block with-errors"></div>
                        </div>                    
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">                      
                          <input type="email" class="form-control" id="email" placeholder="mail@sitename.com" required data-error="Please enter your email">
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group"> 
                          <input type="text" class="form-control" id="msg_phone" name="phone" placeholder="Phone" required data-error="Please enter your Phone Number">
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group"> 
                          <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required data-error="Please enter your subject">
                          <div class="help-block with-errors"></div>
                        </div>
                      </div> 
                      <div class="col-md-12">
                        <button type="submit" id="submit" class="btn btn-common">Send Your Message</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div> 
                        <div class="clearfix"></div>   
                      </div>
                    </div>
                  </div>    
                  <div class="col-md-6">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group"> 
                          <textarea class="form-control" placeholder="Message" rows="10" data-error="Write your message" required></textarea>
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                    </div>
                  </div>                   
                </div> 
              </form>
            </div>
            <div class="col-md-3">
              <h2 class="title-2">
                Contact Information
              </h2>
              <div class="information">
                <div class="contact-datails">
                  <div class="icon">
                    <i class="fa fa-map-marker icon-radius"></i>
                  </div>
                  <div class="info">
                    <h3>Address</h3>
                    <span class="detail">Main Office: NO.22-23 Street Name- City,Country</span>
                    <span class="datail">Customer Center: NO.130-45 Streen Name- City, Country</span>
                  </div>
                </div>                
                <div class="contact-datails">
                  <div class="icon">
                    <i class="fa fa-phone icon-radius"></i>
                  </div>
                  <div class="info">
                    <h3>Phone Numbers</h3>
                    <span class="detail">Main Office: +880 123 456 789</span>
                    <span class="datail">Customer Supprort: +880 123 456 789 </span>
                  </div>
                </div>
                <div class="contact-datails">
                  <div class="icon">
                    <i class="fa fa-location-arrow icon-radius"></i>
                  </div>
                  <div class="info">
                    <h3>Email Address</h3>
                    <span class="detail">Customer 
                    Support: info@mail.com</span>
                    <span class="detail">Technical Support: support@mail.com</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact Us Section  -->    
    
@include('layout.footer')

@endsection