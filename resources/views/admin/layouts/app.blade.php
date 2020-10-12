<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Bothor Factory</title>

    <!-- vendor css -->
       <!-- vendor css -->
    <link href="{{asset('dashboard/lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/lib/select2/css/select2.min.css')}}" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{asset('dashboard/css/bracket.css')}}">
    <link href="{{asset('dashboard/lib/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{asset('dashboard/css/bracket.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/css/bracket.dark.css')}}">
    
<style>


.table-image
 {
  td, th
   {
    vertical-align:middle;
  }
}
</style>

</head>

<body>
  
    <main>
    @include('admin.include.error')

        @yield('content')
    </main>

    <script src="{{asset('dashboard/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('dashboard/lib/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <script src="{{asset('dashboard/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('dashboard/lib/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('dashboard/lib/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('dashboard/lib/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('dashboard/lib/rickshaw/vendor/d3.min.js')}}"></script>
    <script src="{{asset('dashboard/lib/rickshaw/vendor/d3.layout.min.js')}}"></script>
    <script src="{{asset('dashboard/lib/rickshaw/rickshaw.min.js')}}"></script>
    <script src="{{asset('dashboard/lib/jquery.flot/jquery.flot.js')}}"></script>
    <script src="{{asset('dashboard/lib/jquery.flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('dashboard/lib/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('dashboard/lib/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('dashboard/lib/select2/js/select2.full.min.js')}}"></script>
    <script src="{{asset('dashboard/lib/gmaps/gmaps.min.js')}}"></script>
    <script src="{{asset('dashboard/js/bracket.js')}}"></script>
    <script src="{{asset('dashboard/js/map.shiftworker.js')}}"></script>
    <script src="{{asset('dashboard/js/ResizeSensor.js')}}"></script>
    <script src="{{asset('dashboard/js/dashboard.js')}}"></script>
    <script>
        $(function() {
            'use strict';

            // Check if video can play, and play it
            var video = document.getElementById('headVideo');
            video.addEventListener('canplay', function() {
                video.play();
            });

        });
    </script>
    <script>
      $(function(){
        'use strict'
        $(window).resize(function(){
          minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
          if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
            // show only the icons and hide left menu label by default
            $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
            $('body').addClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideUp();
          } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
            $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
            $('body').removeClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideDown();
          }
        }
      });
    </script>
</body>
</html>