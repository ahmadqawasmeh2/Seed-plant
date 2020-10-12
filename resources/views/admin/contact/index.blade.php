@extends('admin.layouts.app')
@section('content')
@include('admin.include.header')

<div class="br-mainpanel">
  <div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <a class="breadcrumb-item" href="index.html">Bracket</a>
      <a class="breadcrumb-item" href="#">Contact</a>
      <span class="breadcrumb-item active">Show Contact</span>
    </nav>
  </div><!-- br-pageheader -->


  <div class="br-pagebody">
    <div class="br-section-wrapper">
      <h6 class="section-label">Show Contact</h6>
      <div class="bd bd-white-1 rounded table-responsive">
        <table class="table table-hover mg-b-0">

          <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Name</th>
              <th>email</th>
              <th>desc</th>
            </tr>
          </thead>
          <tbody>
          @foreach($contacts as $contact)
            <tr>
              <th scope="row">{{$contact->id}}</th>
              <td>{{$contact->title}}</td>
              <td>{{$contact->name}}</td>
              <th>{{$contact->email}}</th>
              <td>{{$contact->desc}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div><!-- bd -->

    </div><!-- table-responsive -->

  </div><!-- br-section-wrapper -->
</div><!-- br-pagebody -->


    </div>
@endsection




