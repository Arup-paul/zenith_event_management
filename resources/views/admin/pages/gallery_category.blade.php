@section('main_content')



  <!--main content start-->
       

                        <!--page title and breadcrumb start -->
                        <div class="row">
                            <div class="col-md-8">
                                <h1 class="page-title"> Gallery Category
                                    <small>Category Insert,Delete,View  </small>
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
                                       Add Gallery Category
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
                            <form role="form" action="{{URL::to('/save-categorys')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="sname">Category Name</label>
                                    <input class="form-control" id="sname" placeholder="Enter Category" type="text" name="gallery_cat_name">
                                </div>

                                 <div class="form-group">
                                    <label for="stext"> Description</label>
                                    <textarea class="form-control" id="stext" placeholder="Enter Description" type="text" name="gallery_cat_des"  cols="30" rows="10"></textarea>
                                    
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


                        <!--  category view-->

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
                                  <th>Description</th>
                                  <th>Publication Status</th>
                                  <th>Action</th>
                                </tr>
                              </thead>

                              <tbody>
                                @foreach($all_category as $item) 
                                  <tr>
                                      <td>{{$item->gallery_category_id}}</td>
                                      <td>{{$item->gallery_cat_name}}</td>
                                      <td>{{$item->gallery_cat_des}}</td>
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
                                        <span><a class="btn btn-success" style="color:#fff;" href="{{URL::to('/unpublish-category/'.$item->gallery_category_id)}}"><i class="fa fa-thumbs-down"></i></a></span>
                                         <?php } else{?>
                                      <span><a class="btn btn-danger" style="color:#fff;" href="{{URL::to('/publish-category/'.$item->gallery_category_id)}}"><i class="fa fa-thumbs-up"></i></a></span>
                                         <?php } ?> 

                                         <span><a class="btn btn-info" href="{{URL::to('/edit-categorys/'.$item->gallery_category_id)}}"><i class="fa fa-edit"></i></a></span>

                                       <span><a class="btn btn-danger" href="{{URL::to('/delete-category/'.$item->gallery_category_id)}}"><i class="fa fa-trash"></i></a></span>


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