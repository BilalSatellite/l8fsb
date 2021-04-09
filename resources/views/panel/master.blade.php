
<!DOCTYPE html>
<html lang="en">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}|@yield('tital')</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/adminlte.min.css') }}" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed">

    <div class="wrapper">
        <!-- Navbar -->
        @include("panel.include.topNavbar")
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include("panel.include.sideBar_main")
        <!-- / Main Sidebar Container -->

        <!-- Content Wrapper. Contains page content -->

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">@yield('tital')</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                               <p> alert Masseges</p>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div><!-- /.content-header -->
            <!-- Main content -->
            @yield('content')
        </div><!-- /.content-wrapper -->
        <!-- /.content-wrapper -->

        <!-- Footer-->
        @include("panel.include.footer")
        <!--/ Footer-->
    </div><!-- ./wrapper -->
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="{{ asset('js/adminlte.min.js') }}"></script>
    @yield('scripts')
</body>
</html>

