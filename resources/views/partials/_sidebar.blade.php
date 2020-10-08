<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-inbox"></i> <span>Packages</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{route('packages.index')}}"><i class="fa fa-circle-o"></i> All Packages</a></li>
                    <li><a href="{{route('packages.create')}}"><i class="fa fa-circle-o"></i> New Package</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-spoon"></i> <span>Meals</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{route('meals.index')}}"><i class="fa fa-circle-o"></i> All Meals</a></li>
                    <li><a href="{{route('meals.create')}}"><i class="fa fa-circle-o"></i> New Meal</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-clock-o"></i> <span>Time Slots</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{route('times.index')}}"><i class="fa fa-circle-o"></i> All Time Slots</a></li>
                    <li><a href="{{route('times.create')}}"><i class="fa fa-circle-o"></i> New Time Slot</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('subscriptions.index')}}">
                    <i class="fa fa-check-circle"></i> <span>Subscriptions</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>
            <li>
                <a href="{{route('contact_us')}}">
                    <i class="fa fa-envelope-o"></i> <span>Contact us Messages</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
