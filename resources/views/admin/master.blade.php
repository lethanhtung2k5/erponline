<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN PLUGIN CSS -->
    <link href="{{ asset('admin/assets/plugins/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/plugins/jquery-metrojs/MetroJs.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/plugins/shape-hover/css/demo.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/plugins/shape-hover/css/component.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/plugins/owl-carousel/owl.carousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/plugins/owl-carousel/owl.theme.css') }}" />
    <link href="{{ asset('admin/assets/plugins/jquery-notifications/css/messenger.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('admin/assets/plugins/jquery-notifications/css/messenger-theme-flat.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('admin/assets/plugins/pace/pace-theme-flash.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('admin/assets/plugins/jquery-slider/css/jquery.sidr.light.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/jquery-ricksaw-chart/css/rickshaw.css') }}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/Mapplic/mapplic/mapplic.css') }}" type="text/css" media="screen">
    <!-- END PLUGIN CSS -->
    <!-- BEGIN PLUGIN CSS -->
    <link href="{{ asset('admin/assets/plugins/pace/pace-theme-flash.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('admin/assets/plugins/bootstrapv3/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/plugins/bootstrapv3/css/bootstrap-theme.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('admin/assets/plugins/animate.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/plugins/jquery-scrollbar/jquery.scrollbar.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PLUGIN CSS -->
    <!-- BEGIN CORE CSS FRAMEWORK -->
    <link href="{{ asset('admin/webarch/css/webarch.css') }}" rel="stylesheet" type="text/css" />
    <!-- END CORE CSS FRAMEWORK -->
  </head>
  <!-- END HEAD -->

  <!-- BEGIN BODY -->
  <body class="">
    <!-- BEGIN HEADER -->
    @include("admin.elements.header")
    <!-- END HEADER -->

    <!-- BEGIN CONTAINER -->
    <div class="page-container row-fluid">
        <!-- BEGIN SIDEBAR -->
        @include("admin.elements.slidebar")
        <!-- END SIDEBAR -->

        <!-- BEGIN PAGE CONTAINER-->
        @yield('content')
        <!-- END PAGE CONTAINER-->
    </div>
    <!-- END CONTAINER -->

    <!-- BEGIN CORE JS FRAMEWORK-->
    <script src="{{ asset('admin/assets/plugins/pace/pace.min.js') }}" type="text/javascript"></script>
    <!-- BEGIN JS DEPENDECENCIES-->
    <script src="{{ asset('admin/assets/plugins/jquery/jquery-1.11.3.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/bootstrapv3/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-block-ui/jqueryblockui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-unveil/jquery.unveil.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/bootstrap-select2/select2.min.js') }}" type="text/javascript"></script>
    <!-- END CORE JS DEPENDECENCIES-->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="{{ asset('admin/webarch/js/webarch.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/js/chat.js') }}" type="text/javascript"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="{{ asset('admin/assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-ricksaw-chart/js/raphael-min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-ricksaw-chart/js/d3.v2.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-ricksaw-chart/js/rickshaw.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-sparkline/jquery-sparkline.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/skycons/skycons.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/owl-carousel/owl.carousel.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-gmap/gmaps.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/Mapplic/js/jquery.easing.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/Mapplic/js/jquery.mousewheel.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/Mapplic/js/hammer.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/Mapplic/mapplic/mapplic.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-flot/jquery.flot.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-metrojs/MetroJs.min.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="{{ asset('admin/assets/js/dashboard_v2.js') }}" type="text/javascript"></script>
    <!--script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/backbone.js/0.9.10/backbone-min.js"></script-->
    <script src="{{ asset('admin/assets/plugins/jquery-notifications/js/messenger.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-notifications/js/messenger-theme-future.js') }}" type="text/javascript"></script>
    <!--script type="text/javascript" src="{{ asset('admin/assets/plugins/jquery-notifications/js/demo/location-sel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/assets/plugins/jquery-notifications/js/demo/theme-sel.js') }}"></script-->
    <script src="{{ asset('admin/assets/js/notifications.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/js/custom.js') }}" type="text/javascript"></script>
  </body>
</html>