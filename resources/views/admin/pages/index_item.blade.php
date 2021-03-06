@section('main_content')



  <!--main content start-->
       

                        <!--page title and breadcrumb start -->
                        <div class="row">
                            <div class="col-md-8">
                                <h1 class="page-title"> Index Item
                                    <small>Add  slider,Who we are & Testimonial </small>
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
                                       Add Item
                                            <span class="tools pull-right">
                                                <a class="collapse-box fa fa-chevron-down" href="javascript:;"></a>
                                            </span>
                                    </header>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">

                            <h2 style="color:green; font-size: 18px;text-align: center;">
                     <?php
                        
                        $msg = Session::get('save_slider');
                        if (isset($msg)) {
                            echo $msg;
                            Session::put('save_slider',' ');
                         }
                       

                     ?>
                 </h2>
                           <form enctype="multipart/form-data" role="form" action="{{URL::to('/save-item')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="sname">Title</label>
                                    <input class="form-control" id="sname" placeholder="Enter Title" type="text" name="title">
                                </div>

                                 <div class="form-group">
                                    <label for="sname"> Image</label>
                                    <input class="form-control" id="sname" placeholder="Enter a post image" type="file" name="post_image">
                                </div>

                                 <div class="form-group">
                                    <label for="sname">Description</label>
                                    <textarea name="description" class="form-control" id="" cols="30" rows="10" placeholder="Enter a Description"></textarea>
                                    
                                </div>

                                 <div class="form-group col-12" >
                                  <label for="mother_name"><i class="fa fa-user-o"></i> Category</label><br>
                                  <select name="category" class="form-control" id="">
                                    <option value="">select----</option>
                                    <option value="1">Slider</option>
                                    <option value="2">Who We Are</option>
                                    <option value="3">Testimonial</option>
                                  </select>
                                </div>

                                 <div class="form-group col-12" >
                                  <label for="mother_name"><i class="fa fa-user-o"></i> Publication Status:</label><br>
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
                        <!-- Add category End -->  




                         <!--  Slider view-->

                          <div class="col-md-12">
                                <div class="panel">
                                    <header class="panel-heading">
                                       Edit slider
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
                                  <th>Title</th>
                                  <th>Description</th>
                                  <th>Category</th>
                                  <th>Image</th>
                                  <th>Publication Status</th>
                                  <th>Action</th>
                                </tr>
                              </thead>

                              <tbody>
                                @foreach($indexitem as $item) 
                                  <tr>
                                      <td>{{$item->post_id}}</td>
                                      <td>{{$item->title}}</td>
                                      <td>{{$item->description}}</td>
                                      <td>{{$item->category}}</td>
                                      <td><img src="{{$item->post_image}}" height="100px" width="100px" alt=""></td>
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
                                        <span><a class="btn btn-success" style="color:#fff;" href="{{URL::to('/unpublish-item/'.$item->post_id)}}"><i class="fa fa-thumbs-down"></i></a></span>
                                         <?php } else{?>
                                      <span><a class="btn btn-danger" style="color:#fff;" href="{{URL::to('/publish-item/'.$item->post_id)}}"><i class="fa fa-thumbs-up"></i></a></span>
                                         <?php } ?> 

                                      <!--  <span><a class="btn btn-info" href="{{URL::to('/edit-item/'.$item->post_id)}}"><i class="fa fa-edit"></i></a></span> -->

                                       <span><a class="btn btn-danger" href="{{URL::to('/delete-item/'.$item->post_id)}}"><i class="fa fa-trash"></i></a></span>


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
                        <!--  Slider view End -->     



                        <!--  -->
                       
      
  
  <!--main content end-->








@endsection