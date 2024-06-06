<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title','Welcome to Library')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin_assets')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin_assets')}}/dist/css/adminlte.min.css">

  @stack('styles')
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
    @include('layouts.partials.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    @include('layouts.partials.sidedar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('page_header')

    <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                        <!-- Default box -->
                        @yield('content')
                        <!-- /.card -->
                </div>
            </div>
        </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">Student. VonTevin</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('admin_assets')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin_assets')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin_assets')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{asset('admin_assets')}}/dist/js/demo.js"></script> --}}

@stack('scripts')
</body>
</html>
