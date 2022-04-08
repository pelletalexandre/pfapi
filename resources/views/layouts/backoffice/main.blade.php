<!DOCTYPE html> 
<html lang="{{ config('app.locale') }}">

@include ('layouts.backoffice.header')


<body class="skin-default fixed-layout">
<style>
        body
        {
           
        }        

        @media (min-width: 768px){
.navbar-header {
    width: 280px;
}
        }
    </style>

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
                <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.html">
                            <!-- Logo icon --><b>
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img src="{{ asset ('images/theme/logo-icon.png') }}" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <!--img src="assets/images/logo-light-icon.png" alt="homepage" class="light-logo" /-->
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text --><span>
                             <!-- dark Logo text -->
                             <img src="{{ asset ('images/theme/logo.png') }}" alt="homepage" class="dark-logo" />
                             <!-- Light Logo text -->    
                             <img src="{{ asset ('images/theme/logo.png') }}" class="light-logo" alt="homepage"  /></span> </a><!--style="filter: brightness(100);"-->
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-collapse">
                        <!-- ============================================================== -->
                        <!-- toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav mr-auto">
                            <!-- This is  -->
                            <li class="nav-item"> <a class="nav-link nav-toggler d-block d-sm-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                            <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                            <!-- ============================================================== -->
                            <!-- Search -->
                            <!-- ============================================================== -->
                            <!--<li class="nav-item">
                                <form class="app-search d-none d-md-block d-lg-block">
                                    <input type="text" class="form-control" placeholder="Search & enter">
                                </form>
                            </li>-->
                        </ul>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav my-lg-0">
                            <!-- ============================================================== -->
                            <!-- User Profile -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown u-pro">
                                <!-- <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="hidden-md-down">Mon compte &nbsp;
                                        <i class="fa fa-angle-down"></i></span> 
                                </a> -->
                                <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                    <!-- text-->
                                    <!--<a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My Profile</a>-->
                                    <!-- text-->
                                    <!--<a href="javascript:void(0)" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>-->
                                    <!-- text-->
                                    <!--<a href="javascript:void(0)" class="dropdown-item"><i class="ti-email"></i> Inbox</a>-->
                                    <!-- text-->
                                    <div class="dropdown-divider"></div>
                                    <!-- text-->
                                    <!--<a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Paramètres du compte</a>-->
                                    
                                    
                                    
                                    

                                    <!-- text-->
                                    <div class="dropdown-divider"></div>
                                    <!-- text-->
                                    <a href="/*route('logout')*/ "
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="dropdown-item"><i class="fa fa-power-off"></i> Déconnexion</a>
                                                     <form id="logout-form" action="route('logout') " method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    <!-- text-->
                                </div>
                            </li>
                            <!-- ============================================================== -->
                            <!-- End User Profile -->
                            <!-- ============================================================== -->
                        </ul>
                    </div>
                </nav>
            </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
     
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                @include('layouts.backoffice.menu')
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->



        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                @yield ('ariane')
                <div class="row page-titles">
                    <div class="col-md-12 align-self-center">
                        <h4 class="text-themecolor">@yield ('titre')</h4>
                    </div>
                    <!--
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                    -->
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->


                @yield ('formulaire_statut')

                <?php //dump($edition); 
                
                    $cururl = $_SERVER['REQUEST_URI'];
	                $posuri = strpos($cururl,"formulaire_");
                    $posurii = strpos($cururl,"epreuves");
                    
	                if (($posuri+$posurii)>0){$showGreenMsg=1;}else{$showGreenMsg=0;}
                
                ?>
                
                <?php //dump($edition) ?>
                <!-- ============================================================== -->
                <!-- Info box - Non utilisé pour l'instant -->
                <!-- ============================================================== -->
                @yield ('infobox')
                
                <!-- ============================================================== -->
                <!-- END Info box -->
                <!-- ============================================================== -->


                <!-- ============================================================== -->
                <!-- Page Content -->
                <!-- ============================================================== -->
                
                
                
                @yield ('content')
                

                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->



                
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
                © 2022
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
   
    @include('layouts.backoffice.script')

    @yield ('custom_script')
</body>

</html>