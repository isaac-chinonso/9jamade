 @extends('layout.master2')    
@section('title')
Account-Home || Naija Made
@endsection

@section('content')

 <!-- Start Content -->
    <div id="content">
      <div class="container">
       <div class="row">
        <div class="col-md-12">
          <div class="inner-box">
              <div class="usearadmin">
               <h3><img class="userimg" src="/file/{{ Auth::user()->profile->first()->image }}" alt=""> {{ Auth::user()->username }}</h3>
               
              </div>
            </div>
        </div>
       </div>
        <div class="row">
          <div class="col-sm-3 page-sideabr">
            <aside>
              <div class="inner-box">
                <div class="user-panel-sidebar">
                  <div class="collapse-box">
                    <h5 class="collapset-title no-border">My Details <a aria-expanded="true" class="pull-right" data-toggle="collapse" href="#myclassified"><i class="fa fa-angle-down"></i></a></h5>
                    <div aria-expanded="true" id="myclassified" class="panel-collapse collapse in">
                      <ul class="acc-list">
                        <li class="active">
                          <a href="{{ route('account_home') }}"><i class="fa fa-home"></i> Personal Home</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="collapse-box">
                    <h5 class="collapset-title">Manage Ads <a aria-expanded="true" class="pull-right" data-toggle="collapse" href="#myads"><i class="fa fa-angle-down"></i></a></h5>
                    <div aria-expanded="true" id="myads" class="panel-collapse collapse in">
                    <ul class="acc-list">
                        <li>
                          <a href="{{ route('post_ads') }}"><i class="fa fa-credit-card"></i> Post Ads <span class="badge">{{ $ad }}</span></a>
                        </li>
                        <li>
                          <a href="{{ route('my_ads') }}"><i class="fa fa-heart-o"></i> My Ads <span class="badge">{{ $ad }}</span></a>
                        </li>
                        <li>
                          <a href=""><i class="fa fa-star-o"></i> Favourite Ads <span class="badge"></span></a>
                        </li>
                       
                      </ul>
                    </div>
                  </div>
                  <div class="collapse-box invisible">
                    <h5 class="collapset-title">Terminate Account <a aria-expanded="true" class="pull-right" data-toggle="collapse" href="#close"><i class="fa fa-angle-down"></i></a></h5>
                    <div aria-expanded="true" id="close" class="panel-collapse collapse in">
                      <ul class="acc-list">
                        <li>
                          <a href="account-close.html"><i class="fa fa-close"></i> Close Account</a>
                        </li>

                      </ul>
                  
                </div>
              </div>
             
            </aside>
          </div>
          <div class="col-sm-9 page-content">
            <div class="inner-box">
              <div class="welcome-msg">
                <h3 class="page-sub-header2 clearfix no-padding">Hello <span style="text-transform: capitalize;">{{ Auth::user()->username }}</span> </h3>
                <!-- <span class="page-sub-header-sub small">You last logged in at: 01-03-2016 12:40 AM [UK time (GMT + 6:00hrs)]</span> --> 
              </div>
              <div id="accordion" class="panel-group">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title"> <a href="#collapseB1" data-toggle="collapse"> My details </a> </h4>
                  </div>
                  <div class="panel-collapse collapse in" id="collapseB1">
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="control-label">full Name</label>
                            <input class="form-control" type="text" name="full_name" value="{{ Auth::user()->profile->first()->fname }} {{ Auth::user()->profile->first()->lname }}" disabled>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="control-label">Email</label>
                            <input class="form-control" type="email" name="email" value="{{ Auth::user()->email }}" disabled>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label">Business Name</label>
                        <input class="form-control" type="text" name="business_name" value="{{ Auth::user()->business_name }}" disabled>
                      </div>
                      
                    </div>
                  </div>
                </div>


                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title"> <a aria-expanded="false" class="collapsed" href="#collapseB3" data-toggle="collapse"> Profile </a> </h4>
                  </div>
                  <div style="height: 0px;" aria-expanded="false" class="panel-collapse collapse" id="collapseB3">
                    <div class="panel-body">
                      @include('include.success')
                      @include('include.warning')
                      @include('include.error')
                      <form role="form" method="post" action="{{ route('updateprofile') }}" enctype="multipart/form-data">
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="control-label">First Name</label>
                              <input class="form-control" name="fname" type="text" value="{{ Auth::user()->profile->first()->fname }}">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="control-label">Last Name</label>
                              <input class="form-control" name="lname" type="text" value="{{ Auth::user()->profile->first()->lname }}">
                            </div>  
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="control-label">Phone Number</label>
                              <input class="form-control" placeholder="enter phone" name="phone" type="text" value="{{ Auth::user()->profile->first()->phone }}">
                            </div>  
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label">Website Link</label>
                              <input class="form-control" placeholder="Enter website link" name="weblink" type="text" value="{{ Auth::user()->profile->first()->weblink }}">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label">Facebook Link</label>
                              <input class="form-control" placeholder="facebook link" name="fblink" type="text" >
                            </div>  
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label">Instagram Link</label>
                              <input class="form-control" placeholder="Instagram link" name="iglink" type="text">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label">Twitter Link</label>
                              <input class="form-control" placeholder="Twitter link" name="twitlink" type="text">
                            </div>  
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="control-label">Click to Choose image</label>
                              <input class="form-control" name="image" type="file">
                            </div>  
                          </div>
                        </div>
                          <a  target="_blank" href="{{ Auth::user()->profile->first()->fblink }}" class="btn btn-primary btn-sm"><i class="fa fa-facebook"></i> Facebook</a>

                          <a  target="_blank" href="{{ Auth::user()->profile->first()->twitlink }}" class="btn btn-info btn-sm"><i class="fa fa-twitter"></i> Twitter</a>

                          <a  target="_blank" href="{{ Auth::user()->profile->first()->iglink }}" class="btn btn-danger btn-sm"><i class="fa fa-instagram"></i> Instagram</a><br>

                        
                        

                        <div class="form-group">
                          <button type="submit" class="btn btn-common">Update</button>
                        </div>
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                      </form>
                    </div>
                  </div>
                </div>

                <!-- <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title"> <a aria-expanded="false" class="collapsed" href="#collapseB2" data-toggle="collapse"> Change Password </a> </h4>
                      </div>
                      <div style="height: 0px;" aria-expanded="false" class="panel-collapse collapse" id="collapseB2">
                        <div class="panel-body">
                          <form role="form" >
                            <div class="form-group">
                              <label class="control-label">New Password</label>
                              <input class="form-control" placeholder="" type="password">
                            </div>
                            <div class="form-group">
                              <label class="control-label">Confirm Password</label>
                              <input class="form-control" placeholder="" type="password">
                            </div>
                            <div class="form-group">
                              <button type="submit" class="btn btn-common">Update</button>
                            </div>
                          </form>
                        </div>
                      </div>
                </div> -->
                
              </div>
            </div>
          </div>
        </div>  
      </div>      
    </div>
    <!-- End Content -->

    <script type="text/javascript">
      
  //-------------------------------SELECT CASCADING-------------------------//
    var currentCities=[];
// This is a demo API key that can only be used for a short period of time, and will be unavailable soon. You should rather request your API key (free)  from http://battuta.medunes.net/   
var BATTUTA_KEY="00000000000000000000000000000000"
    // Populate country select box from battuta API
  url="https://battuta.medunes.net/api/country/all/?key="+BATTUTA_KEY+"&callback=?";
    $.getJSON(url,function(countries)
    {
      console.log(countries);
      $('#country').material_select();
      //loop through countries..
      $.each(countries,function(key,country)
      {
          $("<option></option>")
                  .attr("value",country.code)
                  .append(country.name)
                        .appendTo($("#country"));
         
      }); 
      // trigger "change" to fire the #state section update process
      $("#country").material_select('update');
      $("#country").trigger("change");
      

    });
    
    $("#country").on("change",function()
    {
    
      countryCode=$("#country").val();
      
      // Populate country select box from battuta API
      url="https://battuta.medunes.net/api/region/"
      +countryCode
      +"/all/?key="+BATTUTA_KEY+"&callback=?";

      $.getJSON(url,function(regions)
      {
        $("#region option").remove();
        //loop through regions..
        $.each(regions,function(key,region)
        {
            $("<option></option>")
                    .attr("value",region.region)
                    .append(region.region)
                          .appendTo($("#region"));
        });
        // trigger "change" to fire the #state section update process
        $("#region").material_select('update');
        $("#region").trigger("change");
        
      }); 
      
    });
    $("#region").on("change",function()
    {
      
      // Populate country select box from battuta API
      countryCode=$("#country").val();
    region=$("#region").val();
      url="https://battuta.medunes.net/api/city/"
      +countryCode
      +"/search/?region="
      +region
      +"&key="
      +BATTUTA_KEY
      +"&callback=?";
      
      $.getJSON(url,function(cities)
      {
        currentCities=cities;
          var i=0;
          $("#city option").remove();
        
        //loop through regions..
        $.each(cities,function(key,city)
        {
            $("<option></option>")
                    .attr("value",i++)
                    .append(city.city)
                    .appendTo($("#city"));
        });
        // trigger "change" to fire the #state section update process
        $("#city").material_select('update');
        $("#city").trigger("change");
        
      }); 
      
    }); 
    $("#city").on("change",function()
    {
      currentIndex=$("#city").val();
      currentCity=currentCities[currentIndex];
      city=currentCity.city;
      region=currentCity.region;
      country=currentCity.country;
      lat=currentCity.latitude;
      lng=currentCity.longitude;
      $("#location").html('<i class="fa fa-map-marker"></i> <strong> '+city+"/"+region+"</strong>("+lat+","+lng+")");
    });
   //-------------------------------END OF SELECT CASCADING-------------------------//
    </script>
@endsection
   