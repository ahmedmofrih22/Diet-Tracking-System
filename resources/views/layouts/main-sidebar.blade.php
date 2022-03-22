<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <li>
                        <a href="{{ url('dashboard') }}">
                            <div class="pull-left"><i class="ti-home"></i><span
                                    class="right-nav-text">Dashboard</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>


                    </li>
                    <!-- menu title -->

                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Components </li>
                    <!-- menu item Elements-->
                    @can('Categories')
                        <li>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#calendar-menu">
                                <div class="pull-left"><i class="ti-palette"></i><span
                                        class="right-nav-text">Categories</span></div>
                                <div class="pull-right"><i class="ti-plus"></i></div>
                                <div class="clearfix"></div>
                            </a>
                            <ul id="calendar-menu" class="collapse" data-parent="#sidebarnav">
                                @can('children')
                                    <li> <a href="{{ url('children') }}">children</a> </li>
                                @endcan
                                @can('Young')
                                    <li> <a href="{{ url('Young') }}">Young </a> </li>
                                @endcan
                                @can('Elderly')
                                    <li> <a href="{{ url('Elderly') }}">Elderly</a> </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan

                    {{-- <li>
                        <a href="{{ url('Categore') }}"><i class="ti-palette"></i>Categories</a>

                    </li> --}}
                    <!-- menu item calendar-->

                    <!-- menu item todo-->

                    <!-- menu item Charts-->


                    <!-- menu font icon-->
                    @can('AdminPortal')
                        <li>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#font-icon">
                                <div class="pull-left"><i class="ti-home"></i><span
                                        class="right-nav-text">AdminPortal</span></div>
                                <div class="pull-right"><i class="ti-plus"></i></div>
                                <div class="clearfix"></div>
                            </a>
                            <ul id="font-icon" class="collapse" data-parent="#sidebarnav">
                                @can('Users')
                                    <li> <a href="{{ url('users') }}">Users</a> </li>
                                @endcan
                                @can('customers')
                                    <li> <a href="{{ url('Client') }}">customers</a> </li>
                                @endcan
                                @can('powers')
                                    <li> <a href="{{ url('roles') }}">powers</a> </li>
                                @endcan


                            </ul>
                        </li>
                    @endcan



                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
