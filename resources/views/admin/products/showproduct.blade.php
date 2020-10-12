@extends('admin.layouts.app')
@section('content')
@include('admin.include.header')
<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
  <div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <a class="breadcrumb-item" href="index.html">Bracket</a>
      <a class="breadcrumb-item" href="#">Product</a>
      <span class="breadcrumb-item active">Show Product</span>
    </nav>
  </div><!-- br-pageheader -->

  <div class="br-pagebody">
    <div class="br-section-wrapper">
      <div id="" class="dataTables_filter float-right">

        <a href="{{route('admin.admin.product')}}">
          <button class="btn btn-primary">Create Product</button>
        </a>
      </div>
      <h6 class="section-label">Show Product</h6>
      <div class="bd bd-white-1 rounded table-responsive">
        <table class="table table-hover mg-b-0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Price</th>
              <th>Image</th>
              <th>Description</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($product as $data)
            <tr>
              <th scope="row">{{$data->id}}</th>
              <td>{{$data->title}}</td>
              <td>{{$data->price}}</td>
              <td> <a type="button" href="{{route('admin.admin.edit_products' , $data->id)}}" class="btn btn-primary"><i class="far fa-eye"></i></a></td>
              <td>{{$data->desc}}</td>
              <td>

              <a  href="{{route('admin.admin.edit_products' , $data->id)}}">
                <button type="button"class="btn-sm btn-danger btn-teal btn-rounded btn-sm m-0 btn-sm my-0"><i class="fas fa-edit"></i></button> </a>
              <a href="{{route('admin.admin.delete' , $data->id)}}">
             <button type="button" class="btn-sm btn-danger btn-rounded btn-sm m-0 btn-sm my-0"><i class="far fa-trash-alt"></i></button></a>

                <!-- <a type="button" href="{{route('admin.admin.edit_products' , $data->id)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                <a type="button" href="{{route('admin.admin.delete' , $data->id)}}" class="btn btn-danger"><i class="far fa-trash-alt"></i></a> -->
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div><!-- bd -->

    </div><!-- table-responsive -->

  </div><!-- br-section-wrapper -->
</div><!-- br-pagebody -->


@endsection