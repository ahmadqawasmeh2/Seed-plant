@extends('admin.layouts.app')
@section('content')
@include('admin.include.header')

    <div class="br-mainpanel">
      <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">Bracket</a>
          <a class="breadcrumb-item" href="#"> Categroy</a>
          <span class="breadcrumb-item active">Add Categroy</span>
        </nav>
      </div><!-- br-pageheader -->
      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="br-section-label">Add Categroy</h6>
          <form  action="{{route('admin.admin.add_categroy')}}" method="POST">
            @csrf
          <div class="form-layout form-layout-1">
            <div class="row mg-b-25">
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Title: </label>
                  <input class="form-control" type="text" name="title"  placeholder="Enter title">
                </div>
                <button class="btn btn-info float-right">Add Categroy</button>
              </div><!-- col-4 -->
            </div><!-- row -->
          </div><!-- form-layout -->
          </form>
        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->
    </div><!-- br-mainpanel -->
@endsection