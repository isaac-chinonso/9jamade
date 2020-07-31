 @extends('layout.master2')   
@section('title')
Post Ads || Naija Made
@endsection

@section('content')

  <!-- Content section Start --> 
    <section id="content">
      <div class="container">
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
                          <a href="{{ route('account_home')}}"><i class="fa fa-home"></i> Personal Home</a>
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
            <div class="page-ads box">
              @include('include.success')
              @include('include.warning')
              @include('include.error')
              <h2 class="title-2">
                Post A Classified Ad
              </h2>
              <form method="post" enctype="multipart/form-data" action="{{ route('saveads') }}">
                <div class="form-group">
                  <label class="control-label">Category</label>
                  <span  style="color: red;font-size: 17px;font-weight: bold;">*</span>
                  <select name="category" id="category-group" class="form-control">
                    <option value="0">All Categories</option>
                    <option class="subitem" value="Fashion-Beauty"> Fashion & Beauty</option>
                    <option value="Fine-Arts"> Fine Arts</option>
                    <option value="Home-Furniture"> Home & Furniture</option>
                    <option value="Electronics"> Electronics</option>
                    <option value="produce"> Produce</option>
                    <option value="other"> Others</option>
                  </select>
                </div>
                <div class="form-group">
                  <label class="control-label">Ad title</label>
                  <span  style="color: red;font-size: 17px;font-weight: bold;">*</span>
                  <input name="title" placeholder="Ad title" class="form-control input-md" type="text" value="{{ Request::old('title') }}">
                  <span class="help-block">A great title needs at least 60 characters. </span>
                </div>

                <div class="form-group">
                  <label class="control-label">Price</label>
                  <span  style="color: red;font-size: 17px;font-weight: bold;">*</span>
                  <input name="price" placeholder="#2,999 " class="form-control input-md" type="text" value="{{ Request::old('price')}}">
                </div>

                <div class="form-group">
                  <label class="control-label">Location</label>
                  <span  style="color: red;font-size: 17px;font-weight: bold;">*</span>
                  <input name="location" placeholder="lagos" class="form-control input-md" type="text" value="{{ Request::old('location')}}">
                </div>

                <div class="form-group">
                  <label class="control-label" for="textarea">Describe ad </label>
                  <span  style="color: red;font-size: 17px;font-weight: bold;">*</span>
                  <textarea class="form-control" id="textarea" name="description" value="{{ Request::old('description')}}"></textarea>
                </div>    
                
                <h2 class="title-2">
                  Classified Picture <span  style="color: red;font-size: 17px;font-weight: bold;">*</span>
                </h2>
                <div class="form-group">
                  <label class="control-label">Select images</label>
                  <div class="mb15">
                    <div class="input-group ">
                      <div tabindex="-1" class="form-control file-caption">
                          <div style="width: 239px;" class="file-caption-name"></div>
                      </div>
                      <div class="input-group-btn">
                        <div class="btn btn-default btn-file" style="width: 135px;height: 10px;">
                          <i class="glyphicon glyphicon-folder-open"></i> &nbsp;Browse … 
                          <input id="input-upload-img1" class="file" data-preview-file-type="text" name="image1" type="file">
                        </div>
                      </div>
                    </div>  
                  </div>
                  <div class="mb15">
                    <div class="input-group ">
                      <div tabindex="-1" class="form-control file-caption">
                          <div style="width: 239.12px;" class="file-caption-name"></div>
                      </div>
                      <div class="input-group-btn">
                        <div class="btn btn-default btn-file" style="width: 135px;height: 10px;">
                          <i class="glyphicon glyphicon-folder-open"></i> &nbsp;Browse … 
                          <input id="input-upload-img1" class="file" data-preview-file-type="text" name="image2" type="file">
                        </div>
                      </div>
                    </div>
                  </div>                  
                  <div class="mb15">
                    <div class="input-group ">
                      <div tabindex="-1" class="form-control file-caption">
                          <div style="width: 239.12px;" class="file-caption-name"></div>
                      </div>
                      <div class="input-group-btn">
                        <div class="btn btn-default btn-file" style="width: 135px;height: 10px;">
                          <i class="glyphicon glyphicon-folder-open"></i> &nbsp;Browse … 
                          <input id="input-upload-img1" class="file" data-preview-file-type="text" name="image3" type="file">
                        </div>
                      </div>
                    </div> 
                  </div>
                  <div class="mb15">
                    <div class="input-group ">
                      <div tabindex="-1" class="form-control file-caption">
                          <div style="width: 239.12px;" class="file-caption-name"></div>
                      </div>
                      <div class="input-group-btn">
                        <div class="btn btn-default btn-file" style="width: 135px;height: 10px;">
                          <i class="glyphicon glyphicon-folder-open"></i> &nbsp;Browse … 
                          <input id="input-upload-img1" class="file" data-preview-file-type="text" name="image4" type="file">
                        </div>
                      </div>
                    </div> 
                  </div>
                  <div class="mb15">
                    <div class="input-group ">
                      <div tabindex="-1" class="form-control file-caption">
                          <div style="width: 239.12px;" class="file-caption-name"></div>
                      </div>
                      <div class="input-group-btn">
                        <div class="btn btn-default btn-file" style="width: 135px;height: 10px;">
                          <i class="glyphicon glyphicon-folder-open"></i> &nbsp;Browse … 
                          <input id="input-upload-img1" class="file" data-preview-file-type="text" name="image5" type="file">
                        </div>
                      </div>
                    </div>  
                  </div>        
                  <p class="help-block">Add up to 5 photos. Use a real image of your product, not catalogs.</p>
                </div>
                 
                <div class="form-group">
                  <div class="well">
                    <p>Please make sure the email and phone number you provided is valid and readily available.
                    </p>
                    
                    <div class="checkbox">
                      <label><input type="checkbox"> I agree to the <a href="#">Terms of Use</a></label>
                    </div>
                    <button type="cancel" class="btn btn-danger">Cancel</button>
                    <button type="submit" class="btn btn-common">Submit</button>
                  </div> 
                </div>   
                <input type="hidden" name="_token" value="{{ Session::token() }}">                         
              </form>
            </div>
          </div>
        </div>  
      </div>
    </section>
    <!-- Content section End --> 
@endsection
   