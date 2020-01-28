@section('main_content')



  <!--main content start-->
       

                        <!--page title and breadcrumb start -->
                        <div class="row">
                            <div class="col-md-8">
                                <h1 class="page-title"> Gallery Post
                                    <small>post Insert,Delete,View  </small>
                                </h1>
                            </div>
                            <div class="col-md-4">
                                <ul class="breadcrumb pull-right">
                                    <li>Home</li>
                                    <li><a href="#" class="active">Dashboard</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--page title and breadcrumb end -->

                       


                        <!--  Gallery view-->

                          <div class="col-md-12">
                                <div class="panel">
                                    <header class="panel-heading">
                                       Edit Gallery Post
                                            <span class="tools pull-right">
                                                <a class="collapse-box fa fa-chevron-down" href="javascript:;"></a>
                                            </span>
                                    </header>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            
                                     <h2 style="color:red; font-size: 18px;text-align: center;">
                     <?php
                        
                        $msg = Session::get('delete_post');
                        if (isset($msg)) {
                            echo $msg;
                            Session::put('delete_post',' ');
                         }
                       

                     ?>
                 </h2>

                        <table class="table table-bordered">
                             <thead>
                                <tr>
                                  <th>Sl No</th>
                                  <th>Category name</th>
                                  <th>Post Image</th>
                                  <th>Post Video Link</th>
                                  <th>Author</th>
                                  <th>publication Status</th>
                                  <th>Action</th>
                                </tr>
                              </thead>

                              <tbody>
                                @foreach($all_post as $item) 
                                  <tr>
                                      <td>{{$item->post_id}}</td>
                                      <td>{{$item->category_name}}</td>
                                      <td>
                                      	<img src="{{$item->post_image}}" height="100px" width="100px" alt="">
                                      </td>
                                      <td>{{$item->post_video}}</td>
                                      <td>{{$item->author}}</td>
                                         <td>
                                            <?php
                                             if ($item->publication_status == 1){

                                            ?>
                                            <span class="btn btn-primary">publish</span>
                                          <?php }else {?>
                                            <span class="btn btn-danger "> Unpublish</span>
                                          <?php }?>
                                          </td>
                                     <td>
                                        <?php
                                         if ($item->publication_status == 1){

                                        ?>
                                        <span><a class="btn btn-success" style="color:#fff;" href="{{URL::to('/unpublish-post/'.$item->post_id)}}"><i class="fa fa-thumbs-down"></i></a></span>
                                         <?php } else{?>
                                      <span><a class="btn btn-danger" style="color:#fff;" href="{{URL::to('/publish-post/'.$item->post_id)}}"><i class="fa fa-thumbs-up"></i></a></span>
                                         <?php } ?> 

                                         <span><a class="btn btn-info" href="{{URL::to('/edit-post/'.$item->post_id)}}"><i class="fa fa-edit"></i></a></span>

                                       <span><a class="btn btn-danger" href="{{URL::to('/delete-post/'.$item->post_id)}}"><i class="fa fa-trash"></i></a></span>


                                   </td>
                                      
                                  </tr>
                                 @endforeach
                              </tbody>
                        </table>
                        </div>
                    </div>
                </div>
                                </div>
                            </div>
                        <!--  Gallery view End -->    


               
      

                        
      
  
  <!--main content end-->








@endsection