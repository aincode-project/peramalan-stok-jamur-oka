<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Jamur Oka</title>
  <link rel="icon" href="https://4.bp.blogspot.com/-pG7YD-PeMoM/V3y4VophEqI/AAAAAAAACxg/S01SA3ULzcgCp8kYxYu0_y-CyoqER4JbwCLcB/s200/logo.jpg" type="image/png" />

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  {{-- <link rel="stylesheet" href="{{ asset('backend-assets/plugins/fontawesome-free/css/all.min.css') }}"> --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('backend-assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('backend-assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('backend-assets/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend-assets/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('backend-assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('backend-assets/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('backend-assets/plugins/summernote/summernote-bs4.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('backend-assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend-assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend-assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

  <link href="{{ asset('backend-assets/plugins/highcharts/css/highcharts.css') }}" rel="stylesheet" />

  {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  {{-- <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> --}}

  <!-- Navbar -->
  @include('admin.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        @yield('content-header')
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @yield('content')
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('admin.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('backend-assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('backend-assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('backend-assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('backend-assets/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('backend-assets/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('backend-assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('backend-assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('backend-assets/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('backend-assets/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('backend-assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('backend-assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('backend-assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('backend-assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend-assets/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('backend-assets/dist/js/pages/dashboard.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('backend-assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend-assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend-assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('backend-assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend-assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('backend-assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend-assets/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('backend-assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('backend-assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('backend-assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('backend-assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('backend-assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

<!-- highcharts js -->
<script src="{{ asset('backend-assets/plugins/highcharts/js/highcharts.js') }}"></script>
<script src="{{ asset('backend-assets/plugins/highcharts/js/highcharts-more.js') }}"></script>
<script src="{{ asset('backend-assets/plugins/highcharts/js/variable-pie.js') }}"></script>
<script src="{{ asset('backend-assets/plugins/highcharts/js/solid-gauge.js') }}"></script>
<script src="{{ asset('backend-assets/plugins/highcharts/js/highcharts-3d.js') }}"></script>
<script src="{{ asset('backend-assets/plugins/highcharts/js/cylinder.js') }}"></script>
<script src="{{ asset('backend-assets/plugins/highcharts/js/funnel3d.js') }}"></script>
<script src="{{ asset('backend-assets/plugins/highcharts/js/exporting.js') }}"></script>
<script src="{{ asset('backend-assets/plugins/highcharts/js/export-data.js') }}"></script>
<script src="{{ asset('backend-assets/plugins/highcharts/js/accessibility.js') }}"></script>
<script src="{{ asset('backend-assets/plugins/highcharts/js/highcharts-custom.script.js') }}"></script>

@yield('script')
</body>
</html>
