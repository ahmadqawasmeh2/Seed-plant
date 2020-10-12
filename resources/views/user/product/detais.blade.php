@extends('user.layouts.app')
@section('content')
<section class="portfolio-item-details">
  
    <div class="container">
        <div class="col-lg-9">
            <div class="card mt-4">
                <img class="card-img-top img-fluid" src="{{url($product->image)}}" alt="">
                <div class="card-body">
                    <h3 class="card-title">{{$product->title}}</h3>
                    <h4>{{$product->price}}</h4>
                    <p class="card-text">{{$product->desc}}</p>
                </div>
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
            @foreach($products as $data)
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
        @foreach($products as $data)
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

@include('user.include.footer')

@endsection