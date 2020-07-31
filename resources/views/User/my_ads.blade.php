 @extends('layout.master2')    
@section('title')
My Post || 9jaMade
@endsection

@section('content')

 <!-- Start Content -->
    <div id="content">
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
                        <li>
                          <a href="{{ route('account_home') }}"><i class="fa fa-home"></i> Personal Home</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="collapse-box">
                    <h5 class="collapset-title ">Manage Ads <a aria-expanded="true" class="pull-right" data-toggle="collapse" href="#myads"><i class="fa fa-angle-down"></i></a></h5>
                    <div aria-expanded="true" id="myads" class="panel-collapse collapse in">
                    <ul class="acc-list">
                        <li>
                          <a href="{{ route('post_ads') }}"><i class="fa fa-credit-card"></i> Post Ads <span class="badge"></span></a>
                        </li>
                        <li>
                          <a href="{{ route('my_ads') }}"><i class="fa fa-heart-o"></i> Active Ads <span class="badge">{{ $adds }}</span></a>
                        </li>
                        <li>
                          <a href="{{ route ('pending_ads') }}"><i class="fa fa-star-o"></i> Pending Ads <span class="badge">{{ $ads }}</span></a>
                        </li>
                       
                      </ul>
                    </div>
                  </div>
                  <div class="collapse-box invisible">
                    <h5 class="collapset-title">Terminate Account <a aria-expanded="true" class="pull-right" data-toggle="collapse" href="#close"><i class="fa fa-angle-down"></i></a></h5>
                    <div aria-expanded="true" id="close" class="panel-collapse collapse in">
                      <ul class="acc-list">
                       @foreach($users as $user)
                        <li>
                          <a href="{{ route('deleteuser',$user->id) }}">Close Account</a>
                        </li>
                        @endforeach
                      </ul>
                  
                </div>
              </div>
             
            </aside>
          </div>
          <div class="col-sm-9 page-content">
            <div class="inner-box">
              <h2 class="title-2"><i class="fa fa-credit-card"></i> My ADS</h2>
              <div class="table-responsive">
                <div class="table-action">
                  <div class="checkbox">
                    <label for="checkAll">
                      <input id="checkAll" onclick="checkAll(this)" type="checkbox">
                      Select: All | <a href="#" class="btn btn-xs btn-danger">Delete <i class="fa fa-close"></i></a>
                    </label>
                  </div>
                  <div class="table-search pull-right col-xs-7">
                    <div class="form-group">
                      <label class="col-xs-5 control-label text-right">Search <br>
                        <a title="clear filter" class="clear-filter" href="#clear">[clear]</a> 
                      </label>
                      <div class="col-xs-7 searchpan">
                        <input class="form-control" id="filter" type="text">
                      </div>
                    </div>
                  </div>
                </div>
                <table class="table table-striped table-bordered add-manage-table">
                  <thead>
                    <tr>
                      <th data-type="numeric"></th>
                      <th>Photo</th>
                      <th>Ads Details</th>
                      <th>Price</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                  @foreach($ad as $ads)
                      <tr>
                        <td class="add-img-selector">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox">
                            </label>
                          </div>
                        </td>
                        <td class="add-img-td">
                          <a href="#">
                            <img src="../upload/images/{{ $ads->image->first()->source }}" width="250px" height="90px">
                          </a>
                        </td>
                        <td class="ads-details-td">
                          <h4><a href="#">{{ $ads->title }}</a></h4>
                          <p> <strong> Posted </strong>:
                          {{ $ads->created_at->diffForHumans() }}</p>  
                          <p> <!-- <strong>Visitors </strong>: 221 <strong> -->Located In:</strong> {{ $ads->state->name }} </p>
                        </td>
                        <td class="price-td">
                          <strong> ₦{{ $ads->price }}</strong>
                        </td>
                        <td class="action-td">
                          <p><a href="{{ route('viewpost',$ads->id) }}" class="btn btn-success btn-xs"> <i class="fa fa-pencil-square-o"></i> Edit</a></p>
                          <p><a class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete{{ $ads->id }}"> <i class=" fa fa-trash"></i> Delete</a></p>
                                              <!-- sample modal content -->
                                              <div id="delete{{ $ads->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content">
                                                          <div class="modal-header">
                                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                              <h4 class="modal-title" id="myModalLabel">Delete this Ads</h4>
                                                          </div>
                                                          <div class="modal-body">
                                                              <h4>Confirm Delete</h4>
                                                              <p>Are you sure you want to delete {{ $ads->title }}</p>
                                                          </div>
                                                          <div class="modal-footer">
                                                              <button type="button" class="btn btn-primary waves-effect" data-dismiss="modal">Close</button>
                                                              <a href="{{ route('deleteads',$ads->id) }}" class="btn btn-danger waves-effect waves-light">Yes</a>
                                                          </div>
                                                      </div><!-- /.modal-content -->
                                                  </div><!-- /.modal-dialog -->
                                              </div><!-- /.modal -->
                        </td>
                      </tr>
                  
                  @endforeach
                    
                    
                    
                  </tbody>
                </table>
              </div>               
            </div>
          </div>
          </div>
        </div>  
      </div>      
    </div>
    <!-- End Content -->

     @include ('layout.footer');
@endsection
   