<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content=""> 

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'PANEL ADMINISTRATION - PRIVATE FLYING') }}</title> --}}

    @if (isset ($edition))
    <title>@yield('tabtitle', $edition->libelle)</title>
    @elseif ( isset($organisateur ) )
        <title>@yield('tabtitle', $organisateur->organisation)</title>
    @else
         <title>@yield('tabtitle', 'PANEL ADMINISTRATION - PRIVATE FLYING')</title>
    @endif


    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset ('images/logo/favicon_32.png') }}">
    <!-- This page CSS -->


    <!-- Tab pages CSS -->
    <!-- <link href="{{ asset('css/theme/pages/tab-page.css') }}" rel="stylesheet"> -->
    <!-- chartist CSS -->
    <!-- <link href="{{ asset('js/libs/morrisjs/morris.css') }}" rel="stylesheet"> -->
    <!--Toaster Popup message CSS -->
    <!-- <link href="{{ asset('js/libs/toast-master/css/jquery.toast.css') }}" rel="stylesheet"> -->
    <!-- chartist CSS -->
    <!-- <link href="{{ asset('js/libs/chartist-js/dist/chartist.min.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('js/libs/chartist-js/dist/chartist-init.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('js/libs/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('js/libs/css-chart/css-chart.css') }}" rel="stylesheet"> -->
    
    <!--Icheck-->
    <!-- <link href="{{ asset('js/libs/icheck/skins/all.css') }}" rel="stylesheet"> -->

    
    <!--Bootstrap MultiSelect -->
    <!-- <link href="{{ asset('js/libs/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet"> -->

    <!-- Bootstrap Datepicker -->
    <!--Bootstrap Switch -->
    <!-- <link href="{{ asset('js/libs/bootstrap-switch/bootstrap-switch.css') }}" rel="stylesheet"> -->

    <!-- Bootstrap Datepicker -->
    <!-- <link href="{{ asset('js/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet"> -->

    <!-- Bootstrap DateRangePicker -->
    <!-- <link href="{{ asset('js/libs/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet"> -->

    <!-- Dropify -->
    <!-- <link href="{{ asset('js/libs/dropify/dist/css/dropify.min.css') }}" rel="stylesheet"> -->

    <!-- Step Wizard -->
    <!-- <link href="{{ asset('js/libs/wizard/steps.css') }}" rel="stylesheet"> -->

    <!-- Color Picker -->
    <!-- <link href="{{ asset('js/libs/material-color-picker-plus/dist/jquery.material-color-picker.min.css') }}" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->

    <!-- Mignific Popup -->
    <!-- <link href="{{ asset('js/libs/Magnific-Popup-master/dist/magnific-popup.css') }}" rel="stylesheet"> -->

    <!--This page css - Morris CSS -->
    <!--<link href="{{ asset('js/libs/morrisjs/morris.css') }}" rel="stylesheet">-->
    <!-- Custom CSS -->
    <link href="{{ asset('css/theme/style.min.css') }}" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{{ asset('css/theme/pages/dashboard1.css') }}" rel="stylesheet">

    <!-- <link href="{{ asset('css/theme/pages/user-card.css') }}" rel="stylesheet"> -->


    <link href="{{ asset('js/libs/jqueryui/jquery-ui.min.css') }}" rel="stylesheet">


    <script src="{{ asset('js/libs/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/libs/jqueryui/jquery-ui.min.js') }}"></script>

    <!-- Editeur HTML-->
    <!-- <link href="{{ asset('js/libs/summernote/dist/summernote.css') }}" rel="stylesheet"> -->


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>