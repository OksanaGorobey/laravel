<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ asset("/admin-lte/index3.html")}}" class="brand-link">
        <span class="brand-text font-weight-light">Admin Page</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="{{route('admin.profile')}}" class="d-block">  {{auth()->user()-> name}}  </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview {{active_class(if_route_pattern('admin.*'))}}">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            Dashboard
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-tree"></i>
                                <p>
                                    News
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: none;">
                                <li class="nav-item">
                                    <a href="{{route('admin.news')}}" class="nav-link">
                                        <i class="nav-icon fa fa-circle-o text-info"></i>
                                        <p>Add news</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('admin.tatop.index')}}" class="nav-link {{active_class(if_route('admin.tatop.index'))}}">
                                        <i class="nav-icon fa fa-circle-o text-info"></i>
                                        <p>Add tags & topics</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="../../index2.html" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Add Advertisment</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{route('admin.admins.index')}}" class="nav-link {{active_class(if_route('admin.admins.index'))}}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>All users</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{route('admin.menu.index')}}" class="nav-link {{active_class(if_route('admin.menu.index'))}}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Add menu</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>