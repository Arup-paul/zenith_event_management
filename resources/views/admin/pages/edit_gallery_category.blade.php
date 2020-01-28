@section('main_content')



  <!--main content start-->
       

                        <!--page title and breadcrumb start -->
                        <div class="row">
                            <div class="col-md-8">
                                <h1 class="page-title"> Gallery Category
                                    <small>Category Edit,View  </small>
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

                        <!-- Edit category Start-->

                          <div class="col-md-12">
                                <div class="panel">
                                    <header class="panel-heading">
                                       Edit Gallery Category
                                            <span class="tools pull-right">
                                                <a class="collapse-box fa fa-chevron-down" href="javascript:;"></a>
                                            </span>
                                    </header>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">

                            <h2 style="color:green; font-size: 18px;text-align: center;">
                     <?php
                        
                        $msg = Session::get('save_category');
                        if (isset($msg)) {
                            echo $msg;
                            Session::put('save_category',' ');
                         }
                       

                     ?>
                 </h2>
                            <form role="form" action="{{URL::to('/update-categorys/'.$edit_category->gallery_category_id)}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="sname">Category Name</label>
                                    <input class="form-control" id="sname" value="{{$edit_category->gallery_cat_name}}" type="text" name="gallery_cat_name">
                                </div>

                                 <div class="form-group">
                                    <label for="stext"> Description</label>
                                    <textarea class="form-control" id="stext" placeholder="Enter Description" type="text" name="gallery_cat_des"  cols="30" rows="10">{{$edit_category->gallery_cat_des}}
                                    </textarea>
                                    
                                </div>

                              <!--    <div class="form-group col-12" >
                                  <label for="mother_name"><i class="fa fa-user-o"></i> Publication Status:</label><br>
                                  <select name="publication_status" class="form-control" id="">
                                    <option value="">select----</option>
                                    <option value="1">publish</option>
                                    <option value="0">unpublish</option>
                                  </select>
                                </div> -->
                               
                               
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                                </div>
                            </div>
                        <!-- Edit category End -->   
  
      
  
  <!--main content end-->








@endsection