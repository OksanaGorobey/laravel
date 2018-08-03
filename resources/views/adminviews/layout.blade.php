<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>AdminLTE 3 | Dashboard 3</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset("/admin-lte/plugins/font-awesome/css/font-awesome.min.css")}}">
    <!-- IonIcons -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset("/admin-lte/dist/css/adminlte.min.css")}}">
    <!-- Google Font: Source Sans Pro -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    @yield('head')

</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include('adminviews.parials.navbar')

    @include('adminviews.parials.sidebar')


    <div class="content-wrapper" style="min-height: 130px;">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">@yield('page-title')</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        {{--<ol class="breadcrumb float-sm-right">--}}
                            {{--<li class="breadcrumb-item"><a href="#">Home</a></li>--}}
                            {{--<li class="breadcrumb-item active">Dashboard v3</li>--}}
                        {{--</ol>--}}
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        @yield('content')
    </div>

    @include('adminviews.parials.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset("/admin-lte/plugins/jquery/jquery.min.js")}}"></script>
<!-- Bootstrap -->
<script src="{{ asset("/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<!-- AdminLTE -->
<script src="{{ asset("/admin-lte/dist/js/adminlte.js")}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset("/admin-lte/plugins/chart.js/Chart.min.js")}}"></script>
<script src="{{ asset("/admin-lte/dist/js/demo.js")}}"></script>
<script src="{{ asset("/admin-lte/dist/js/pages/dashboard3.js")}}"></script>
@yield('scripts')
</body>
</html>
