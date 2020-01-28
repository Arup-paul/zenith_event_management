@section('main_content');


<!-- title area start-->
  <div class="section_titles fix pt-100 pb-50" style="background-image: url({{asset('public/assets/img/service.jpg')}});background-repeat: no-repeat;background-size: cover;background-position: center center;background-attachment: fixed;height: 300px;animation: 10s header_anim 8">

  	   <div class="container">
  	   	     <div class="section_heading text-center">
  	   	     	<h2>Service</h2>
  	   	     	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
  	   	     </div>
  	   </div>

</div>
<!-- title area end -->

<!-- service page start -->
     <section class="product-area pt-100 pb-100">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="product-tab">
          	<!-- content heaing -->
            <ul class="nav mb-50 " id="myTab" role="tablist" >
               
                   <?php
       $all_cat = DB::table('service_category')
                 ->where('publication_status',1)
                 ->get();
   ?>  
                   @foreach($all_cat as $item)
                       <li class="nav-item">
                  <a class="nav-link " id="{{$item->service_cat_name}}-tab" data-toggle="tab" href="#{{$item->service_cat_name}}" role="tab" aria-controls="{{$item->service_cat_name}}" aria-selected="true">{{$item->service_cat_des}}</a>
                </li>
              
                @endforeach

               
            </ul>

              <!-- content  -->
            <div class="tab-content" id="myTabContent">
             

                 @foreach($post as $postitem)
              <div class="tab-pane fade show active" id="{{$postitem->category_name}}" role="tabpanel" aria-labelledby="{{$postitem->category_name}}-tab">
              <div class="product-active pb-20">
                      <div class="service-section">
                        <div class="row">
                          <div class="col-md-6 offset-md-1">
                            <div class="service-img">
                              <img src="{{asset($postitem->post_image)}}" alt="">
                            </div>
                          </div>
                          <div class="col-md-5">
                            <div class="service_details">
                              <h2>{{$postitem->post_title}}</h2>
                               <p>{{$postitem->post_des}}</p>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                  </div>
                @endforeach



          

            
    		</div>
    	</div>
    </div>
  </div>
</div>

      
  </section>


<!-- service page End -->


@endsection