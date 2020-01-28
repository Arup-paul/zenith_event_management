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

                        <!-- Add category Start-->

                          <div class="col-md-12">
                                <div class="panel">
                                    <header class="panel-heading">
                                       Add Gallery Post
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
                            <form enctype="multipart/form-data" role="form" action="{{URL::to('/save-post')}}" method="post">
                                {{csrf_field()}}

                                 <div class="form-group col-12" >
                                  <label for=""> Category name</label><br>
                                  <select name="category_name" class="form-control" id="">
                                    <option value="">select----</option>
                                    @foreach($all_cat as $itemcat)
                                    <option value="{{$itemcat->gallery_cat_name}}">{{$itemcat->gallery_cat_name}}</option>
                                    @endforeach
                                    
                                  </select>
                                </div>
                                <div class="form-group">
                                    <label for="sname">Post Image</label>
                                    <input class="form-control" id="sname" placeholder="Enter a post image" type="file" name="post_image">
                                </div>

                                 <div class="form-group">
                                    <label for="stext"> Post Video - <small>Youtube Data Video Id </small></label>
                                    <input class="form-control" id="sname" placeholder="Youtube video upload" type="text" name="post_video">
                                                                       
                                </div>

                                

                                <div class="form-group">
                                    <label for="stext"> Author Name</label>
                                    <input class="form-control" id="sname" placeholder="Author Name" type="text" name="author">
                                                                       
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




                        


               
      

                        
      
  
  <!--main content end-->








@endsection