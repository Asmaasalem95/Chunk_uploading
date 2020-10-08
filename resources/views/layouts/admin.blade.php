<!DOCTYPE html>
<html>
@include('partials._head')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Left side column. contains the logo and sidebar -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="margin-left: 0px;">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
            @yield('content')
        </section>

        <!-- /.content -->
    </div>
</div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.18
        </div>

    </footer>

    <!-- Control Sidebar -->
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
</div>
@include('partials._footer_scripts')
</body>
</html>
