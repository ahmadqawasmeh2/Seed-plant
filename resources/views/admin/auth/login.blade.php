@extends('admin.layouts.app')
@section('content')
<div class="d-flex align-items-center justify-content-center ht-100v">
  <video id="headVideo" class="pos-absolute a-0 wd-100p ht-100p object-fit-cover" autoplay muted loop>
    <source src="dashboard/videos/video1.mp4" type="video/mp4">
    <source src="dashboard/videos/video1.ogv" type="video/ogg">
    <source src="dashboard/videos/video1.webm" type="video/webm">
  </video><!-- /video -->
  <form action="{{route('login.login.login')}}" method="post">
    @csrf
  <div class="overlay-body bg-black-7 d-flex align-items-center justify-content-center">
    <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 rounded bg-black-6">
      <div class="signin-logo tx-center tx-28 tx-bold tx-white"><span class="tx-normal">[</span> <span class="tx-info">Bothor </span>Factory <span class="tx-normal">]</span></div>
      <div class="tx-white-5 tx-center mg-b-60">Login Admin</div>

      <div class="form-group">
        <input type="email" class="form-control @error('email') fc-outline-dark @enderror" placeholder="Enter your Email" value="{{ old('email') }}" name="email">
        @error('email')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div><!-- form-group -->

      <div class="form-group">
        <input type="password" class="form-control @error('password') fc-outline-dark @enderror" placeholder="Enter your password" name="password">
        <!-- <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a> -->
        @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
      <button type="submit" class="btn btn-info btn-block">Sign In</button>

      <!-- <div class="mg-t-60 tx-center">Not yet a member? <a href="" class="tx-info">Sign Up</a></div> -->
    </div><!-- login-wrapper -->
  </div><!-- overlay-body -->
  </form>
</div><!-- d-flex -->

@endsection