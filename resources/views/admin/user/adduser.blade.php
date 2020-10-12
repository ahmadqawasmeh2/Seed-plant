@extends('admin.layouts.app')
@section('content')
@include('admin.include.header')

<div class="br-mainpanel">
  <div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <a class="breadcrumb-item" href="index.html">Bracket</a>
      <a class="breadcrumb-item" href="#"> Admins</a>
      <span class="breadcrumb-item active">Add Admins</span>
    </nav>
  </div><!-- br-pageheader -->
  <div class="br-pagebody">
    <div class="br-section-wrapper">
      <h6 class="br-section-label">Add Admins</h6>
      <form action="{{route('admin.admin.add_Admin')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-layout form-layout-1">
        <div class="row mg-b-25">
          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label">User Name:</label>
              <input class="form-control" type="text" name="name" placeholder="User Name">
            </div>
          </div><!-- col-4 -->
          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label">Email: </label>
              <input class="form-control" type="email" name="email" placeholder="Enter Email">
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
        <button type="submit" class="btn btn-info">Add Admins</button>
      </div><!-- form-layout -->
      </form>

    </div><!-- br-section-wrapper -->
  </div><!-- br-pagebody -->
</div><!-- br-mainpanel -->
@endsection