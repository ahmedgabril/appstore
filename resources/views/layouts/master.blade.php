<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
            <title>app</title>

        @include('layouts.head-links')
        <livewire:styles />
    </head>
    <body class="" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":true, "showRightSidebarOnStart": false}' style="
    direction: rtl;
    text-align: right;
">
        <!-- Begin page -->
        <div class="spcontainer">
            <div class="spinner-border avatar-lg " role="status" style="color:#54ff99;"></div>

        </div>

        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
         @include('layouts.sidebar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                   @include('layouts.navbar')
                    <!-- end Topbar -->

                    <!-- Start Content-->
                    <div class="mt-5 container-fluid">

                        <!-- start page title -->
                        @yield('content')
                        <!-- end page title -->



                    </div>
                    <!-- container -->

                </div>
                <!-- content -->

                <!-- Footer Start -->
{{--              @include('layouts.footer')--}}
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->

        <div class="rightbar-overlay"></div>
        <!-- /End-bar -->
        <livewire:scripts />


     @include('layouts.footer-scripts')

        <script>
            $(document).ready(function() {
                $('.spcontainer').addClass('fadeOut');
            });
        </script>

    </body>
</html>
