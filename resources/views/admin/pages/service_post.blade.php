@section('main_content')



  <!--main content start-->
       

                        <!--page title and breadcrumb start -->
                        <div class="row">
                            <div class="col-md-8">
                                <h1 class="page-title"> Service Post
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

                        <!-- Add category Start-->

                          <div class="col-md-12">
                                <div class="panel">
                                    <header class="panel-heading">
                                       Add Service Post
                                            <span class="tools pull-right">
                                                <a class="collapse-box fa fa-chevron-down" href="javascript:;"></a>
                                            </span>
                                    </header>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">

                          <h2 style="color:green; font-size: 18px;text-align: center;">
                     <?php
                        
                        $msg = Session::get('save_post');
                        if (isset($msg)) {
                            echo $msg;
                            Session::put('save_post',' ');
                         }
                       

                     ?>
                 </h2>
                            <form enctype="multipart/form-data" role="form" action="{{URL::to('/service-save-post')}}" method="post">
                                {{csrf_field()}}

                               <div class="form-group col-12" >
                                  <label for=""> Category name</label><br>
                                  <select name="category_name" class="form-control" id="">
                                    <option value="">select----</option>
                                    @foreach($all_category as $itemcat)
                                    <option value="{{$itemcat->service_cat_name}}">{{$itemcat->service_cat_des}}</option>
                                    @endforeach
                                    
                                  </select>
                              </div>
                                <div class="form-group">
                                    <label for="sname">Post Image</label>
                                    <input class="form-control" id="sname" placeholder="Enter a post image" type="file" name="post_image">
                                </div>

                                 <div class="form-group">
                                    <label for="stext"> Post Title</label>
                                    <input class="form-control" id="sname" placeholder="service title" type="text" name="post_title">
                                                                       
                                </div>
                                <div class="form-group">
                                    <label for="stext"> Post Description</label>
                                     <textarea class="form-control" id="stext" placeholder="Enter Description" type="text" name="post_des"  cols="30" rows="10"></textarea>
                                                                       
                                </div>

                               


                                 <div class="form-group col-12" >
                                  <label for=""><i class="fa fa-user-o"></i> Publication Status:</label><br>
                                  <select name="publication_status" class="form-control" id="">
                                    <option value="">select----</option>
                                    <option value="1">publish</option>
                                    <option value="0">unpublish</option>
                                  </select>
                                </div>
                               
                               
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                                </div>
                            </div>
                        <!-- Add Gallery post End --> 





                        <!--  category view-->

                          <div class="col-md-12">
                                <div class="panel">
                                    <header class="panel-heading">
                                       Edit service Post
                                            <span class="tools pull-right">
                                                <a class="collapse-box fa fa-chevron-down" href="javascript:;"></a>
                                            </span>
                                    </header>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            
                                     <h2 style="color:red; font-size: 18px;text-align: center;">
                     <?php
                        
                        $msg = Session::get('delete_category');
                        if (isset($msg)) {
                            echo $msg;
                            Session::put('delete_category',' ');
                         }
                       

                     ?>
                 </h2>

                        <table class="table table-bordered">
                             <thead>
                                <tr>
                                  <th>Sl No</th>
                                  <th>Category name</th>
                                  <th>Post Image</th>
                                  <th>Post Title</th>
                                  <th>Post Description</th>
                                  <th>Publication Status</th>
                                  <th>Action</th>
                                </tr>
                              </thead>

                               <tbody>
                               	@foreach($service_post as $postitem)

                               	<tr>
                               	<td>{{$postitem->post_id}}</td> 
                               	<td>{{$postitem->category_name}}</td>
                               	<td><img src="{{$postitem->post_image}}" height="100px" width="100px" alt=""></td>
                               	<td>{{$postitem->post_title}}</td>
                               	<td>{{$postitem->post_des}}</td>
                               
                                         <td>
                                            <?php
                                             if ($postitem->publication_status == 1){

                                            ?>
                                            <span class="btn btn-primary">publish</span>
                                          <?php }else {?>
                                            <span class="btn btn-danger "> Unpublish</span>
                                          <?php }?>
                                          </td>
                                     <td>
                                        <?php
                                         if ($postitem->publication_status == 1){

                                        ?>
                                        <span><a class="btn btn-success" style="color:#fff;" href="{{URL::to('/service-unpublish/'.$postitem->post_id)}}"><i class="fa fa-thumbs-down"></i></a></span>
                                         <?php } else{?>
                                      <span><a class="btn btn-danger" style="color:#fff;" href="{{URL::to('/service-publish/'.$postitem->post_id)}}"><i class="fa fa-thumbs-up"></i></a></span>
                                         <?php } ?> 

                                         <span><a class="btn btn-info" href="{{URL::to('/service-edit/'.$postitem->post_id)}}"><i class="fa fa-edit"></i></a></span>

                                       <span><a class="btn btn-danger" href="{{URL::to('/service-delete/'.$postitem->post_id)}}"><i class="fa fa-trash"></i></a></span>


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

                        <!--  category view End -->   




                        


               
      

                        
      
  
  <!--main content end-->








@endsection