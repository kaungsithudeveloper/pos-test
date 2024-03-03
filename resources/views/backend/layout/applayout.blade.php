<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="8Ray Shop">
    <meta name="author" content="8Ray Shop">
    <meta name="keywords" content="8Ray Shop">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('backend/assets/images/brand/favicon.ico') }}">

    <!-- TITLE -->
    <title>8Ray Shop</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ url('backend/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- STYLE CSS -->
     <link href="{{ url('backend/assets/css/style.css') }}" rel="stylesheet">
     <link href="{{ url('backend/assets/css/custom.css') }}" rel="stylesheet">

	<!-- Plugins CSS -->
    <link href="{{ url('backend/assets/css/plugins.css') }}" rel="stylesheet">

    <!--- FONT-ICONS CSS -->
    <link href="{{ url('backend/assets/css/icons.css') }}" rel="stylesheet">

    <!-- INTERNAL Switcher css -->
    <link href="{{ url('backend/assets/switcher/css/switcher.css') }}" rel="stylesheet">
    <link href="{{ url('backend/assets/switcher/demo.css') }}" rel="stylesheet">
</head>

<body class="app sidebar-mini ltr light-mode">

    <!-- GLOBAL-LOADER -->
    @include('backend.layout.apploader')
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            @include('backend.layout.appheader')
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
            @include('backend.layout.appsidebar')
            <!--/APP-SIDEBAR-->

            <!--app-content open-->
            @yield('content')
            <!--app-content closed-->
        </div>

        <!-- Sidebar-right -->
        @include('backend.layout.appsidebar_right')
        <!--/Sidebar-right-->



        <!-- FOOTER -->
        @include('backend.layout.appfooter')
        <!-- FOOTER CLOSED -->
    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="{{ url('backend/assets/js/jquery.min.js') }}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ url('backend/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ url('backend/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

	<!-- TypeHead js -->
	<script src="{{ url('backend/assets/plugins/bootstrap5-typehead/autocomplete.js') }}"></script>
    <script src="{{ url('backend/assets/js/typehead.js') }}"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{ url('backend/assets/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
    <script src="{{ url('backend/assets/plugins/p-scroll/pscroll.js') }}"></script>
    <script src="{{ url('backend/assets/plugins/p-scroll/pscroll-1.js') }}"></script>

    <!-- SIDE-MENU JS -->
    <script src="{{ url('backend/assets/plugins/sidemenu/sidemenu.js') }}"></script>

    <!-- SIDEBAR JS -->
    <script src="{{ url('backend/assets/plugins/sidebar/sidebar.js') }}"></script>

    <!-- Color Theme js -->
    <script src="{{ url('backend/assets/js/themeColors.js') }}"></script>

    <!-- Sticky js -->
    <script src="{{ url('backend/assets/js/sticky.js') }}"></script>

    <!-- CUSTOM JS -->
    <script src="{{ url('backend/assets/js/custom.js') }}"></script>

    <!-- Custom-switcher -->
    <script src="{{ url('backend/assets/js/custom-swicher.js') }}"></script>

    <!-- Switcher js -->
    <script src="{{ url('backend/assets/switcher/js/switcher.js') }}"></script>

</body>

</html>
