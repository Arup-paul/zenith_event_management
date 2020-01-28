<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="shortcut icon" type="image/png" href="/imgs/favicon.png" /> -->
        <title>Home</title>

        <!-- inject:css -->
        <link rel="stylesheet" href="{{asset('public/admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/admin/bower_components/simple-line-icons/css/simple-line-icons.css')}}">
        <link rel="stylesheet" href="{{asset('public/admin/bower_components/weather-icons/css/weather-icons.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/admin/bower_components/themify-icons/css/themify-icons.css')}}">
        <!-- endinject -->

        <!-- Main Style  -->
        <link rel="stylesheet" href="{{asset('public/admin/dist/css/main.css')}}">

        <!-- Rickshaw Chart Depencencies -->
        <link rel="stylesheet" href="{{asset('public/admin/bower_components/rickshaw/rickshaw.min.css')}}">

        <!--easypiechart-->
        <link rel="stylesheet" href="{{asset('public/admin/assets/js/jquery-easy-pie-chart/easypiechart.css')}}">

        <!--horizontal-timeline-->
        <link rel="stylesheet" href="{{asset('public/admin/assets/js/horizontal-timeline/css/style.css')}}">


        <script src="{{asset('public/admin/assets/js/modernizr-custom.js')}}"></script>
    </head>
    <body>

        <div id="ui" class="ui">

            <!--header start-->
            <header id="header" class="ui-header">

                <div class="navbar-header">
                    <!--logo start-->
                    <a href="index.html" class="navbar-brand">
                        <span class="logo"><img src="{{asset('public/admin/imgs/logo-dark.png')}}" alt=""/></span>
                        <span class="logo-compact"><img src="{{asset('public/admin/imgs/logo-icon-dark.png')}}" alt=""/></span>
                    </a>
                    <!--logo end-->
                </div>

                <div class="search-dropdown dropdown pull-right visible-xs">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-search"></i></button>
                    <div class="dropdown-menu">
                        <form >
                            <input class="form-control" placeholder="Search here..." type="text">
                        </form>
                    </div>
                </div>

                <div class="navbar-collapse nav-responsive-disabled">

                    <!--toggle buttons start-->
                    <ul class="nav navbar-nav">
                        <li>
                            <a class="toggle-btn" data-toggle="ui-nav" href="">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- toggle buttons end -->

                    <!--search start-->
                    <form class="search-content hidden-xs" >
                        <button type="submit" name="search" class="btn srch-btn">
                            <i class="fa fa-search"></i>
                        </button>
                        <input type="text" class="form-control" name="keyword" placeholder="Search here...">
                    </form>
                    <style>
                    	.username {
							font-size: 20px;
							padding-top: 10px;
							display: block;
							margin: 0px 10px;
							}
                    	.logout {
							font-size: 18px;
							background: #ac1b1b;;
							color: #fff;
							padding: 10px;
							text-align: center;
							/* margin: 10px; */
							/* padding-top: 46px; */
							display: block;
							}
                    </style>
                    <!--search end-->
                      
                    <!--logout start-->
                    <ul class="nav navbar-nav navbar-right">
                        
                         <a class="logout" href="{{URL::to('logout')}}">Log Out</a>
                      

                    </ul>
                    <!--logout end-->
                        <ul class="nav navbar-nav navbar-right">
                        
                        <span class="username">
                        	{{Session::get('admin_name')}}
                        </span>
                      

                    </ul>

                </div>

            </header>
            <!--header end-->

            <!--sidebar start-->
            <aside id="aside" class="ui-aside">
                <ul class="nav" ui-nav>
                    <li class="nav-head">
                        <h5 class="nav-title text-uppercase light-txt">Navigation</h5>
                    </li>
                    <li class="active">
                        <a href=""><i class="fa fa-home"></i><span>Dashboard</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="nav nav-sub nav-sub--open">
                            <li class="nav-sub-header"><a href="{{url('/dashboard')}}"><span>Dashboard </span></a></li>
                        </ul>
                    </li>

                    <li class="nav-head">
                        <h5 class="nav-title text-uppercase light-txt">Control Data</h5>
                    </li>

                  

                     <li>
                        <a href=""><i class="fa fa-server"></i><span>Home Page</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="nav nav-sub">
                            <li><a href="{{URL::to('add_slider')}}"><span> Add Client</span></a></li> 
                            <li><a href="{{URL::to('index_item')}}"><span> Index Item</span></a></li> 
                        </ul>
                    </li>

                      <li>
                        <a href=""><i class="fa fa-server"></i><span>Service</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="nav nav-sub">
                            <li><a href="{{URL::to('add_service_category')}}"><span> Service Category</span></a></li> 
                            <li><a href="{{URL::to('service_post')}}"><span> Service Post</span></a></li> 
                        </ul>
                    </li>

                    <li>
                        <a href=""><i class="fa fa-camera"></i><span>Gallery</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="nav nav-sub">
                            <li><a href="{{URL::to('gallery_category')}}"><span> Gallery Category</span></a></li> 
                            <li><a href="{{URL::to('gallery_post')}}"><span> Gallery Post</span></a></li> 
                            <li><a href="{{URL::to('manage_gallery')}}"><span>Manage Gallery Post</span></a></li> 
                        </ul>
                    </li>
                </ul>
            </aside>
            <!--sidebar end-->

            <!-- main content -->
               <div id="content" class="ui-content ui-content-aside-overlay">
                <div class="ui-content-body">

                    <div class="ui-container">
               @yield('main_content');



           </div>
       </div>
   </div>
            <!-- main content -->

            <!--footer start-->
            <div id="footer" class="ui-footer">
                2017 &copy; Arup paul by RioTheme.
            </div>
            <!--footer end-->

        </div>

        <!-- inject:js -->
         <script src="{{asset('public/admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
         <script src="{{asset('public/admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
         <script src="{{asset('public/admin/bower_components/jquery.nicescroll/dist/jquery.nicescroll.min.js')}}"></script>
         <script src="{{asset('public/admin/bower_components/autosize/dist/autosize.min.js')}}"></script>
        <!-- endinject -->

        <!--highcharts-->
         <script src="{{asset('public/admin/bower_components/highcharts/highcharts.js')}}"></script>
         <script src="{{asset('public/admin/bower_components/highcharts/highcharts-more.js')}}"></script>
         <script src="{{asset('public/admin/bower_components/highcharts/modules/exporting.js')}}"></script>
       

        <!--sparkline-->
        <script src="{{asset('public/admin/bower_components/bower-jquery-sparkline/dist/jquery.sparkline.retina.js')}}"></script>
        <script src="{{asset('public/admin/assets/js/init-sparkline.js')}}"></script>


        <!--echarts-->
        <script src="{{asset('public/admin/assets/js/echarts/echarts-all-3.js')}}"></script>

        <!--basic line echarts init-->
        

        

        <!--easypiechart-->
        <script src="{{asset('public/admin/assets/js/jquery-easy-pie-chart/jquery.easypiechart.js')}}"></script>
        


        <!--horizontal-timeline-->
         <script src="{{asset('public/admin/assets/js/horizontal-timeline/js/jquery.mobile.custom.min.js')}}"></script>
         <script src="{{asset('public/admin/assets/js/horizontal-timeline/js/main.js')}}"></script>

        <!-- Common Script   -->
         <script src="{{asset('public/admin/dist/js/main.js')}}"></script>


    </body>
</html>
