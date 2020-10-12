@extends('user.layouts.app')
@section('content')
<section class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <h1>Product</h1>
                <ol class="breadcrumb bc-3">
                    <li>
                        <a href="/"><i class="fa-home"></i>Home</a>
                    </li>
                    <li>
                    <strong>Product</strong>
                    </li>
                    <li class="active">
                        <strong>All Product</strong>
                    </li>
                </ol>
            </div>

            <div class="col-sm-3">
             
                <h2 class="text-muted text-right">{{$count}} Product</h2>
              
            </div>
        </div>
    </div>
</section>


<section class="blog">

    <div class="container">

        <div class="row">


            <div class="col-sm-8" style="float: right;">

                <div class="blog-post ">
             
                    <div class="row">
                    @foreach($Product as $data)
                        <div class="col-sm-4 col-xs-6">
                            <div class="gallery-item">
                                <a href="{{route('user.detailsproduct',$data->id)}}" data-lightbox-gallery="gallery1" class="image" title="San Francisco">
                                    <img src="{{$data->image}}" class="img-rounded" />
                                    <span class="hover-zoom"></span>

                                    <span class="title">{{$data->title}}</span>
                                </a>
                            </div>

                        </div>
                        @endforeach
                    </div>
                 

                    <!-- Blog Pagination -->
                    <div class="text-center">

                        <ul class="pagination">
                            <li class="active">
                               {{$Product->links()}}
                            </li>
                            
                        </ul>

                    </div>
                 
                   

                </div>

            </div>

            <div class="col-sm-4">

                <!-- List Sidebar -->
                <div class="sidebar">

                    <div class="head">Product Categories </div>


                    <div class="sidebar-content">

                        <ul>
                            @foreach($categories as $data) 
                            <li>
                                <a href="#">{{$data->title}}</a>
                            </li>
                            @endforeach
                        </ul>

                    </div>

                </div>



            </div>
        </div>

    </div>

    </div>

</section>
<!-- Footer Widgets -->
<section class="footer-widgets">

    <div class="container">

        <div class="row">

            <div class="col-sm-6">
                <a href="#">
                </a>
                <p>
                </p>
            </div>

            <div class="col-sm-3">

                <h5></h5>
            </div>

            <div class="col-sm-3">

                <h5></h5>

                <p>
                </p>

            </div>

        </div>

    </div>

</section>

@include('user.include.footer')

@endsection