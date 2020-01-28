@section('main_content');


<!-- title area start-->
  <div class="section_titles fix pt-100 pb-50" style="background-image: url({{asset('public/assets/img/gallery.jpg')}});background-repeat: no-repeat;background-size: cover;background-position: center center;background-attachment: fixed;height: 300px;animation: 10s header_anim 8">

  	   <div class="container">
  	   	     <div class="section_heading text-center">
  	   	     	<h2>Gallery</h2>
  	   	      	<p>Our knowledge and experience in the hospitality</p>
  	   	     </div>
  	   </div>

</div>
<!-- title area end -->

<!-- Gallery page start -->
 
  <!-- Gallery   area Start -->


 <section class="portfolio-area mb-60 mt-60">
       <div class="container">
          <?php
       $all_cat = DB::table('gallery_category')
                 ->where('publication_status',1)
                 ->get();
   ?>

 <div class="row">
 	<div class="col-12">
     <div id="filters" class="button-group">  <button class="button is-checked" data-filter="*">All</button>

  
   @foreach($all_cat as $item)
  <button class="button" data-filter=".{{$item->gallery_cat_name}}">{{$item->gallery_cat_name}}</button>
   @endforeach

  
</div>
</div>


<div class="col-12">

<div class="grid" >
   
   @foreach($post as $postitem)

   <div class="element-item {{$postitem->category_name}} " data-category="metalloid" name="edit_post">
    <img src="{{asset($postitem->post_image)}}">
     <div class="overlay-effects">
      <div class="portfolio-icon">
        <button  class="video-play" data-video-id="{{$postitem->post_video}}"><i class="fa fa-play"></i></button>

      </div>
    </div>
  </div>
  @endforeach
  



  </div> 
               </div>
          </div>


       </div>
  </section>


<!-- gallery area end-->

<!-- gallery page End -->



@endsection

