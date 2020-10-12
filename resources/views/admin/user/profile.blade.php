@extends('admin.layouts.app')
@section('content')
@include('admin.include.header')
<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel br-profile-page">

    <div class="card widget-4 bd-0 rounded-0">
        <div class="card-header ht-75">
            <div class="hidden-xs-down">

            </div>
            <div class="tx-24 hidden-xs-down">

            </div>
        </div><!-- card-header -->
        <div class="card-body">
            <div class="card-profile-img">
                <img src="https://via.placeholder.com/500" alt="">
            </div><!-- card-profile-img -->
            <h4 class="tx-normal tx-roboto tx-white">{{Auth::guard('admins')->user()->name}}</h4>
            <p class="mg-b-25">{{Auth::guard('admins')->user()->email}}</p>

        </div><!-- card-body -->
    </div><!-- card -->

    <div class="ht-70 bg-black-1 pd-x-20 d-flex align-items-center justify-content-center bd-b bd-white-1">
        <ul class="nav nav-outline active-primary align-items-center flex-row" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#posts" role="tab">Posts</a></li>
            <li class="nav-item hidden-xs-down"><a class="nav-link" data-toggle="tab" href="#Profile" role="tab">Edit Proile</a></li>
        </ul>
    </div>

    <div class="tab-content br-profile-body">
        <div class="tab-pane fade active show" id="posts">
            <div class="row">
                <div class="col-lg-8">
                     @foreach($products as $admins)
                    <div class="media-list bg-br-primary rounded bd bd-white-1">
                        
                        <div class="media pd-20 pd-xs-30">
                            <img src="https://via.placeholder.com/500" alt="" class="wd-40 rounded-circle"> 
                            
                            <div class="media-body mg-l-20">
                                <div class="d-flex justify-content-between mg-b-10">
                                    <div>
                                        <h6 class="mg-b-2 tx-white tx-14">{{Auth::guard('admins')->user()->name}}</h6>
                                        <span class="tx-12 tx-gray-500">{{Auth::guard('admins')->user()->email}}</span>
                                    </div>
                                    <span class="tx-12">{{Auth::guard('admins')->user()->created_at}}</span>
                                </div><!-- d-flex -->
                               
                                <span class="tx-12 tx-gray-500">{{$admins->desc}}</span>
                                <img src="{{url($admins->image)}}" class="img-fluid mg-b-10" alt="">
                               
                            </div><!-- media-body -->
                            
                        </div><!-- media -->
                      

                    </div><!-- card -->
                 @endforeach
                    <div class="bg-black-1 pd-y-12 tx-center mg-t-15 mg-xs-t-30 bd bd-white-1 rounded">
                        <a href="" class="tx-gray-600 hover-info">Load more</a>
                    </div>
                </div><!-- col-lg-8 -->
                <div class="col-lg-4 mg-t-30 mg-lg-t-0">
                    <div class="card pd-20 pd-xs-30 bd-gray-400">
                        <h6 class="tx-white tx-uppercase tx-13 mg-b-25">Contact Information</h6>

                        <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Name</label>
                        <p class="tx-info mg-b-25">{{Auth::guard('admins')->user()->name}}</p>

                        <label class="tx-10 tx-uppercase tx-mont tx-semibold tx-spacing-1 mg-b-2">Email Address</label>
                        <p class="tx-white mg-b-25">{{Auth::guard('admins')->user()->email}}</p>
                    </div><!-- card -->

                </div><!-- col-lg-4 -->
            </div><!-- row -->
        </div><!-- tab-pane -->
        <div class="tab-pane fade" id="Profile">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card pd-20 pd-xs-30 bd-gray-400 mg-t-30">
                        <h6 class="tx-white tx-uppercase tx-14 mg-b-30">Edit Profile</h6>
                        <h6 class="br-section-label">Edit Profile</h6>
                        <form action="{{route('admin.admin.updateprofile', $admins->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-layout form-layout-1">
                                <div class="row mg-b-25">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">User Name:</label>
                                            <input class="form-control" type="text" name="name" placeholder="User Name" value="{{Auth::guard('admins')->user()->name}}">
                                        </div>
                                    </div><!-- col-4 -->
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Email: </label>
                                            <input class="form-control" type="email" name="email" placeholder="Enter Email"value="{{Auth::guard('admins')->user()->email}}">
                                        </div>
                                    </div><!-- col-4 -->

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Password: </label>
                                            <input class="form-control" type="password" name="password" placeholder="Enter password">
                                        </div>
                                    </div><!-- col-4 -->

                                    <div class="col-lg-4">
                                        <label class="form-control-label">Choose file: </label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile" name="image">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div><!-- col -->
                                </div><!-- row -->
                                <button type="submit" class="btn btn-info">Edit Admins</button>
                            </div><!-- form-layout -->
                        </form>

                    </div><!-- card -->
                </div><!-- col-lg-8 -->
            </div><!-- br-pagebody -->

        </div><!-- br-mainpanel -->
        <!-- ########## END: MAIN PANEL ########## -->
        @endsection