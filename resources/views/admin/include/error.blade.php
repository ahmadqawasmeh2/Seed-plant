<div class="br-mainpanel">
    @if(count($errors)>0 )
    @foreach ($errors->all() as $error)
    <div class="alert alert-dismissible alert-danger">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Oh !</strong> {{$error}}
    </div>
    @endforeach
    @endif

    @if(session('success'))
        <div class="alert  alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong class="d-block d-sm-inline-block-force">Well done!</strong>{{session('success')}}
        </div>
        @endif


        @if(session('error'))

        <div class="alert  alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong class="d-block d-sm-inline-block-force">Oh snap!</strong> {{session('error')}}
        </div> <!-- col-xl-6 -->
    @endif
</div>