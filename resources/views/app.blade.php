<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>How To Install Vue 3 in Laravel 9 with Vite</title>


    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">




    @vite('resources/css/app.css')

</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed22 layout-footer-fixed">
<div id="app">

</div>



<script src="{{asset('plugins/jquery/jquery.min.js')}}?v={{time()}}"></script>
<!-- Bootstrap -->
<script src="{{asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}?v={{time()}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}?v={{time()}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('/dist/js/adminlte.js')}}?v={{time()}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('/plugins/jquery-mousewheel/jquery.mousewheel.js')}}?v={{time()}}"></script>
<script src="{{asset('/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('/plugins/chart.js/Chart.min.js')}}"></script>
@vite('resources/js/app.js')



</body>
</html>
