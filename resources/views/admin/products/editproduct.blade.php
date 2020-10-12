@extends('admin.layouts.app')
@section('content')
@include('admin.include.header')

<div class="br-mainpanel">
  <div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <a class="breadcrumb-item" href="index.html">Bracket</a>
      <a class="breadcrumb-item" href="#"> Product</a>
      <span class="breadcrumb-item active">Edit Product</span>
    </nav>
  </div><!-- br-pageheader -->


  <div class="br-pagebody">
    <div class="br-section-wrapper">
      <h6 class="br-section-label">Edit Product</h6>
      <form  action="{{route('admin.admin.editproducts' , $products->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-layout form-layout-1">
          <div class="row mg-b-25">
            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label">Title: </label>
                <input class="form-control" type="text" name="title" placeholder="Enter title" value="{{$products->title}}">
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label">Price: </label>
                <input class="form-control" type="number" name="price" placeholder="Enter price" value="{{$products->price}}">
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
              <label class="form-control-label">Choose file: </label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="image" value="{{$products->image}}">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
            </div><!-- col -->

           
            <div class="col-lg-8">
              <div class="form-group mg-b-10-force">
                <label class="form-control-label">Categroy:</label>
                <select class="form-control select2" data-placeholder="Choose Categroy" name="cat_id">
                @foreach($categories as $categ)
                  <option  value="{{ $categ['id'] }}">{{ $categ['title'] }}</option>
                  @endforeach
                </select>
              </div>
            </div><!-- col-4 -->
          </div><!-- row -->
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" wrap="off" cols="30" rows="5" style="resize: none;" name="desc">{{$products->desc}}</textarea>
          </div>
     
          <button class="btn btn-info">Edit Product</button>

        </div><!-- form-layout -->
      </form>

    </div><!-- br-section-wrapper -->
  </div><!-- br-pagebody -->
</div><!-- br-mainpanel -->


@endsection