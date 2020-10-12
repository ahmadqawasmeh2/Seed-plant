@extends('user.layouts.app')
@section('content')
<section class="breadcrumb">

    <div class="container">

        <div class="row">

            <div class="col-sm-12">

                <h1>Bothor Factory</h1>

                <ol class="breadcrumb bc-3">
                    <li>
                        <i class="fa-home"></i>Home
                    </li>
                    <li class="active">
                        <strong>Featured Products</strong>
                    </li>
                </ol>

            </div>

        </div>

    </div>

</section>




<section class="gallery-container">

    <div class="container">

        <div class="row">
        @foreach($products as $data)
            <div class="col-sm-4 col-xs-6">
                <div class="gallery-item">
                    <a href="{{route('user.detailsproduct',$data->id)}}" data-lightbox-gallery="gallery1" class="image" title="Athletica">
                        <img src="{{$data->image}}" class="img-rounded" />
                        <span class="hover-zoom"></span>

                        <span class="title">{{$data->title}}</span>
                    </a>
                </div>   
            </div>
            @endforeach




        </div>

    </div>

    <div class="row">

        <div class="col-md-12">

            <div class="d-flex justify-content-center pt-4">
                <a class="button button-subscribe " href="{{route('user.showproduct')}}">
                    All Products
                </a>
            </div>

        </div>
    </div>

    </div>

</section>


<section class="testimonialscontainer">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
            </div>
        </div>
    </div>
</section>


<section class="testimonials-container">


    <div class="container">

        <div class="section-intro pb-60px">
            <h3 style="color:#C81F36; font-weight:bold">Bothor Factory</h3>
            <h2 style="color:#707070" class="mt-2">Latest Products</h2>
        </div>

        <div class="col-md-12">

            <div class="testimonials carousel slide" data-interval="8000">

                <div class="carousel-inner">
               
                    <div class="item active"> 
                        @foreach($product as $data)
                        <div class="col-sm-4 ">
                            <div class="gallery-item">
                                <a href="{{route('user.detailsproduct',$data->id)}}" data-lightbox-gallery="gallery1" class="image" title="Athletica">
                                    <img src="{{$data->image}}" class="img-rounded" />
                                    <span class="hover-zoom"></span>

                                    <span class="title">{{$data->title}}</span>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                  

                    <div class="item">
                    @foreach($product as $data)
                        <div class="col-sm-4">
                            <div class="gallery-item">
                                <a href="{{route('user.detailsproduct',$data->id)}}" data-lightbox-gallery="gallery1" class="image" title="Athletica">
                                    <img src="{{$data->image}}" class="img-rounded" />
                                    <span class="hover-zoom"></span>

                                    <span class="title">{{$data->title}}</span>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>

        </div>

    </div>

</section>

</div>
@include('user.include.footer')

@endsection