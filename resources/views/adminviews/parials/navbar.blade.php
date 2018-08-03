<!-- Navbar -->
<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route ('news.main') }}" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('logout') }}" class="nav-link">Выйти</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="{{route('admin.coms.index')}}">
                <i class="fa fa-comments-o"></i>
                <span class="badge badge-danger navbar-badge">{{$count_comments}}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                <a href="{{route('admin.coms.index')}}" class="dropdown-item dropdown-footer">See All</a>
            </div>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        {{--вдруг что то добавлю--}}
    </ul>
</nav>
<!-- /.navbar -->
