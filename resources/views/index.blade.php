<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Club JB</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/select2.min.css')}}">
    {{--<link rel="stylesheet" href="{{URL::asset('assets/banner/style.css')}}">--}}
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{URL::asset('assets/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/summernote/summernote-bs4.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/toastr/toastr.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


    @yield('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <header class="main-header">
        @include('header')
    </header>

    <aside class="main-sidebar">
        @include('sidebar')
    </aside>

    <div class="content-wrapper">
        @yield('content')
    </div>
</div>

<script src="{{URL::asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.min.js')}}"></script>
<script src="{{URL::asset('assets/js/table_search.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{URL::asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{URL::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{URL::asset('assets/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{URL::asset('assets/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{URL::asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{URL::asset('assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{URL::asset('assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{URL::asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{URL::asset('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{URL::asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{URL::asset('assets/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{URL::asset('assets/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{URL::asset('assets/dist/js/demo.js')}}"></script>
<script src="{{URL::asset('assets/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/toastr/toastr.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $('.emp_type_js').select2();
    });
</script>

<script>
    $(document).ready(function(){
        $('.tl_js').select2();
    });
</script>

<script>
    $(document).ready(function(){
        $('.hr_js').select2();
    });
</script>

<script>
    $(document).ready(function(){
        $('.country_js').select2();
    });
</script>

<script>
    $(document).ready(function(){
        $('.state_js').select2();
    });
</script>

<script>
    $(document).ready(function(){
        $('.city_js').select2();
    });
</script>

<script>
    $(document).ready(function(){
        $('.venue_js').select2();
    });
</script>

<script>
    $(document).ready(function(){
        $('.un_js').select2();
    });
</script>

<script>
    $(document).ready(function(){
        $('.permission_js').select2();
    });
</script>

{{--<script>--}}
    {{--$('#input').keyup(function () {--}}
        {{--table_search($('#input').val(),$('#table tbody tr'),'012');--}}
    {{--});--}}
{{--</script>--}}

<script>
    $(document).ready(function(){
        $('#input').on('keyup',function(){
            var value = $(this).val().toLowerCase();
            $('#table tbody tr').filter(function(){
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });
    });
</script>

<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>

@yield('scripts')
</body>
</html>