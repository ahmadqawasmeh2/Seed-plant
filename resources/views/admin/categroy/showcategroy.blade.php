@extends('admin.layouts.app')
@section('content')
@include('admin.include.header')
<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
  <div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <a class="breadcrumb-item" href="index.html">Bracket</a>
      <a class="breadcrumb-item" href="#">Categroy</a>
      <span class="breadcrumb-item active">Show Categroy</span>
    </nav>
  </div><!-- br-pageheader -->


  <div class="br-pagebody">
    <div class="br-section-wrapper">
    
      <div id="" class="dataTables_filter float-right">
        <a href="{{route('admin.admin.categroy')}}">
        <button class="btn btn-primary">Create Categroy</button>
        </a>
      </div>

      <h6 class="section-label">Show Categroy</h6>
      <div class="bd bd-white-1 rounded table-responsive">
        <table class="table table-hover mg-b-0">

          <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($categories as $categories)
            <tr>
              <th scope="row">{{$categories->id}}</th>
              <td>{{$categories->title}}</td>
              <td>
                <a  href="{{route('admin.admin.edit_categroy' , $categories->id)}}">
                <button type="button"class="btn-sm btn-danger btn-teal btn-rounded btn-sm m-0 btn-sm my-0"><i class="fas fa-edit"></i></button> </a>
              <a href="{{route('admin.admin.deletecat',$categories->id)}}">
             <button type="button" class="btn-sm btn-danger btn-teal btn-rounded btn-sm m-0 btn-sm my-0"><i class="far fa-trash-alt"></i></button></a>
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