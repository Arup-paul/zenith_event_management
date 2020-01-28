
@section('main_content');

<!--slider area  -->
<div class="slider-area ">
	<div class="slider-active owl-carousel">

	  <?php
          $all_slider  =  DB::table('indexitem')
        ->where('publication_status',1)
        ->where('category',1)
        ->orderBy('post_id','desc')
        ->limit('3')
        ->get();

    ?>
     @foreach($all_slider as $postitem)
		<div class="single-slider d-flex align-items-center justify-content-center  text-center"  style="background-image: url({{asset($postitem->post_image)}}); width: 100%;background-repeat: no-repeat;background-size: cover;background-position: center center;">
			<div class="slider-inner">
			
			<h2>{{$postitem->title}}</h2>
			
		</div>
		</div>
    @endforeach
	
	</div>
</div>

<!-- header area end -->

  <!-- we are you start -->
  <div class="we-are_section fix pt-40 pb-40" style="background-image: url({{asset('public/assets/img/event-bg.jpg')}}); width: 100%;background-repeat: no-repeat;background-size: cover;background-position: center center;background-attachment: fixed;">
  	<div class="container">
  		<div class="section_heading text-center">
  			<h2>Who We Are</h2>
  			<span></span>
  			<p>My team of results-driven former journalists and communications experts transforms complex thoughts and insights into persuasive stories.</p>
  		</div>
  		<div class="we_are_section_details pt-20">
  			<div class="row">
            <?php
          $all_weare  =  DB::table('indexitem')
           ->where('publication_status',1)
           ->where('category',2)
           ->orderBy('post_id','desc')
           ->limit('3')
           ->get();

    ?>

            @foreach($all_weare as $postitem)
  				<div class=" col-md-4 col-sm-6 col-12">
  					<div class="we_are_details">
  						<img src="{{asset($postitem->post_image)}}" alt="">
  						<h2>{{$postitem->title}}</h2>
  						<p>{{$postitem->description}}</p>
  					</div>
  				</div>
          @endforeach

  			
  			</div>
  		</div>
  	</div>
  </div>

  <!-- we are you End-->



<!-- About area start -->

  <div class="about-area fix">
  	<div class="container-fluid">
  		<div class="row">
  			<div class="col-xl-6">
  				<div class="about_video">
  					<iframe width="100%" height="400" src="https://www.youtube.com/embed/PIyORsLqkJc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  				</div>
  			</div>
  			<div class="col-xl-6 pt-50 pb-50">
  				<div class="about_text text-center">
  					<h2>Zenith <br>Celebration</h2>
  					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>


<!-- About area End -->

<!-- Client area start -->
   <div class="clients_area pt-50 pb-50 fix">
   	<div class="container">
   		<div class="section_heading text-center">
  			<h2 class="section_title_black">Clients</h2>
  			<span></span>
  		</div>
  	
       <div class="client_section">
         <div class="row">
               <?php
               $all_client  =  DB::table('sliders')
               ->where('publication_status',1)
               ->orderBy('post_id','desc')
               ->get();

               ?>
           @foreach($all_client as $postitem)
           <div class="col-md-3 col-sm-4 col-12">
             <img src="{{asset($postitem->post_image)}}" alt="">
           </div>
           @endforeach
           
         </div>
       </div>
   		</div>
   </div>
   

<!-- Client area End -->

<!-- client testimonial area start -->
<div class="testimonial_area pt-50 pb-50 fix">
    <div class="container">
      <div class="section_heading text-center">
        <h2 class="section_title_black">Client Testimonials</h2>
        <span></span>
      </div>
    
    <div class="col-8 offset-2">
      <div class="testimonial_active owl-carousel">
           <?php
          $all_testimonial  =  DB::table('indexitem')
           ->where('publication_status',1)
           ->where('category',3)
           ->orderBy('post_id','desc')
           ->limit('3')
           ->get();

    ?>
    @foreach($all_testimonial as $postitem)
    <div class="testimonial_section text-center">
      <img style="width: 100px; height: 100px;" src="{{asset($postitem->post_image)}}" alt="">
      <p>{{$postitem->description}}</p>
        <span>{{$postitem->title}}</span>
    </div>
    @endforeach

      
  </div>
  </div>
</div>
</div>



<!-- client testimonial area end -->

@endsection