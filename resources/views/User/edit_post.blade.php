@extends('layout.master1')   
@section('title')
 Update Post || 9jaMade
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

                  <div class="collapse-box">
                    <h5 class="collapset-title">My Package <a aria-expanded="true" class="pull-right" data-toggle="collapse" href="#close"><i class="fa fa-angle-down"></i></a></h5>
                    <div aria-expanded="true" id="close" class="panel-collapse collapse in">
                      <ul class="acc-list">
                        <!-- <li>
                          <a href="account-close.html"><i class="fa fa-close"></i> Close Account</a>
                        </li> -->

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

            <aside>
              <div class="inner-box">
                <div class="user-panel-sidebar">
                  <div class="collapse-box">
                    <h4>QUICK RULES</h4>

                        <li>Make sure you post in the correct category.</li>
                        <li>Do not post the same ad more than once or repost an ad within 48 hours.</li>
                        <li>Do not upload pictures with watermarks.</li>
                        <li>Do not post ads containing multiple items unless it's a package deal.</li>
                        <li>Do not put your email or phone numbers in the title or description.</li>
                  
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
                Update Post
              </h2>
              <form method="post" enctype="multipart/form-data" action="{{ route('updatead',$ad->id) }}">
                <div class="form-group">
                  <label class="control-label">Category</label>
                  <span  style="color: red;font-size: 17px;font-weight: bold;">*</span>
                  <select name="category_id" id="category-group" class="form-control">
                          <option value="{{ $ad->category->id }}" selected>{{ $ad->category->title }}</option>
                          @foreach ($category as $cat)
                          <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                          @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label class="control-label">Ad title</label>
                  <span  style="color: red;font-size: 17px;font-weight: bold;">*</span>
                  <input name="title" placeholder="Ad title" class="form-control input-md" type="text" value="{{ $ad->title }}">
                  <span class="help-block">A great title needs at least 60 characters. </span><br>
              

                <div class="form-group">
                    <div class="col-md-12">
                      <label class="control-label">Price</label>
                      <span  style="color: red;font-size: 17px;font-weight: bold;">*</span>
                      <input name="price" placeholder="₦2,999 " class="form-control input-md" type="text" value="{{ $ad->price }}">
                    </div>
                    
                </div>  <br><br><br>

                <div class="form-group">
                    <div class="col-md-12">
                      <label class="control-label">State</label>
                      <span  style="color: red;font-size: 17px;font-weight: bold;">*</span>
                      <select name="state_id" id="category-group" class="form-control">
                          <option value="{{ $ad->state->id }}" selected>{{ $ad->state->name }}</option>
                          @foreach ($state as $stat)
                          <option value="{{ $stat->id }}">{{ $stat->name }}</option>
                          @endforeach
                      </select>
                    </div>
                   
                </div>  <br><br><br>

                <div class="form-group">
                  <label class="control-label" for="textarea">Describe ad </label>
                  <span  style="color: red;font-size: 17px;font-weight: bold;">*</span>
                  <textarea class="form-control" id="textarea" name="description" value="{{ $ad->description }}">{{ $ad->description }}</textarea>
                </div>
                
                <h2 class="title-2">
                  Classified Picture <span  style="color: red;font-size: 17px;font-weight: bold;">*</span>
                </h2>
                <div class="row form-group add-image">
                    <div class="col-sm-9">
                      <h5><i class="fa fa-upload" aria-hidden="true"></i>Select File to Upload</h5>
                      <div class="upload-section">
                        <label class="upload-image" for="upload-image-one">
                          <input type="file" id="upload-image-one" name="image">
                        </label>                    
                      </div>  
                        
                    </div>
                  </div>
                  
                  <p class="help-block">Photos for your ad <span>(This will be your cover photo )</span> </p>
                </div>
                 
                <div class="form-group">
                  <div class="well">
                    <button type="cancel" class="btn btn-danger">Cancel</button>
                    <button type="submit" class="btn btn-common">Update</button>
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
   