<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Home - Zenith Event Management company </title>
   <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/bootstrap.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/font-awesome.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/meanmenu.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/jquery.fancybox.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/modal-video.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/owl.carousel.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/default.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/style.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/responsive.css')}}">
</head>
<body>


<!-- header area start -->
  <div class="section_titles fix pt-100 pb-50" style="background-image: url({{asset('public/assets/img/event.jpg')}});background-repeat: no-repeat;background-size: cover;background-position: center center;background-attachment: fixed;height: 100px;animation: 10s header_anim 5">

       <div class="container">
             <div class="section_top_heading text-center">
              <h2>ZENITH Event Management Company </h2>
             
       </div></div>

</div>


 <header>
    <div class="header-area d-flex align-items-center">
      <div class="container pos">
        <div class="row ">

          <div class="col-xl-3 col-lg-2 col-md-2 col-sm-4 col-8  d-flex align-items-center ">
            <div class="logo text-center">
              <a href="index.html"><img src="{{asset('public/assets/img/logo.png')}}" alt="logo"></a>
            </div>
          </div>
          <div class="col-xl-6 col-lg-7 col-sm-3 col-md-7 col-4 static d-flex align-items-center">
            <div class="main-menu d-none d-md-block">
              <nav>
                <ul>
                  <li><a href="{{URL::to('/')}}"><i class="fa fa-home"></i> Home </a></li>
                  <li><a href="{{URL::to('/about')}}"><i class="fa fa-users"></i> About Us </a></li>
                  <li><a href="{{URL::to('/service')}}"><i class="fa fa-server"></i> Service</a></li>
                  <li><a href="{{URL::to('/gallery')}}"><i class="fa fa-camera"></i> Gallery</a></li>
                  <li><a href="{{URL::to('/contact')}}"><i class="fa fa-map-marker"></i> Contact</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="mobile-menu d-md-none">
            <nav id="mobile-menu">
              <ul>
                  <li><a href="{{URL::to('/')}}">Home </a></li>
                  <li><a href="{{URL::to('/about')}}">About Us </a></li>
                  <li><a href="{{URL::to('/service')}}">Service</a></li>
                  <li><a href="{{URL::to('/gallery')}}">Gallery</a></li>
                  <li><a href="{{URL::to('/contact')}}">Contact</a></li>
              </ul>
            </nav>
          </div>

          

          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-5 col-12 d-flex align-items-center justify-content-md-end justify-content-center">
            <div class="header-right text-right">
              <ul>
                <li><a href="#" ><i class="fa fa-facebook" ></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              
                <li><a href="#"><i class="fa fa-search"></i></a>
                   <div class="search-form">
                      <form action="#">
                     <input type="text" placeholder="Search">
                     <button><i class="fa fa-search"></i></button>
                   </form>

                   </div>
                </li>
              </ul>
            </div>
          </div>


        </div>
      </div>
    </div>
  </header>
<!-- header area End -->

<!-- content -->
  @yield('main_content')
<!-- content -->
 <!--  Footer area start -->

<section class="footer-area fix">
	 <div class="container">
	 	<div class="footer-content pt-50">
	 	<div class="row">
	 		<div class="col-md-5">
	 			<div class="footer-text pb-30">
	 				<h4>Best Event Management commpany in Bangladesh.  </h4>
	 				
	 			</div>
	 		
	 		</div>
	 		<div class="col-md-6">
	 			<div class="footer_menu">
	 				
	 					<h3><a href="#"></a>About</h3>
			 			  <ul>        
			 			 	<li><a href="{{URL::to('/')}}"> Our team</a></li>		
			 			 	<li><a href="{{URL::to('/gallery')}}">Gallery</a></li>		
			 			 	<li><a href="{{URL::to('/')}}">Products</a></li>		
			 			 	<li><a href="{{URL::to('/service')}}">Service</a></li>		
			 			 	<li><a href="{{URL::to('/contact')}}">contact</a></li>		
			 			</ul>
			 					
	 					</div>
	 					
	 				 					
	 				</div>	 			
	 			 </div>
	 		</div>
	 	
	  
	  <div class="footer-bottom pt-15 pb-50">
		<div class="footer-left">
			<ul>
				<li>2019&copy;Zenith Event Management Company</li>
				<li><a href="#">Terms of Use</a></li>
				<li><a href="#">Privacy Policy</a></li>
			</ul>
		</div>
		<div class="footer-right">
			<i class="fa fa-facebook"></i>
			<i class="fa fa-twitter"></i>
			<i class="fa fa-instagram"></i>
		</div>
	</div>
	</div>
</section>




 <!--  Footer area start -->

























<!-- footer script -->


 <script src="{{asset('public/assets/js/jquery.js')}}" type="text/javascript"></script>
 <script src="{{asset('public/assets/js/bootstrap.min.js')}}" ></script>
 <script src="{{asset('public/assets/js/jquery-modal-video.min.js')}}" ></script>
 <script src="{{asset('public/assets/js/popper.js')}}" ></script>
 <script src="{{asset('public/assets/js/jquery.meanmenu.min.js')}}" ></script>
 <script src="{{asset('public/assets/js/isotope.pkgd.min.js')}}" ></script>
 <script src="{{asset('public/assets/js/isotop.js')}}" ></script>
 <script src="{{asset('public/assets/js/owl.carousel.min.js')}}" ></script>
 <script src="{{asset('public/assets/js/jquery.fancybox.min.js')}}" ></script>
 <script src="{{asset('public/assets/js/main.js')}}" ></script>
 <script>
   $(".video-play").modalVideo();
 </script>

</body>
</html>