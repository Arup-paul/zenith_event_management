<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

use Session;
use DB;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $this->AuthCheck();
        $home = view('admin.pages.admin_main_content');
        return view('admin.admin_master')->with('main_content',$home);
    }


    public function AuthCheck(){
         $id = Session::get('id');
         if ($id) {
             return;
         }else{
            return Redirect::to('/admin')->send();
         }
    }



    public function add_service_category(){
         $this->AuthCheck();
         $result = DB::table('service_category')
                   ->get();
        $category = view('admin.pages.add_service_category')->with('all_category',$result);
        return view('admin.admin_master')->with('main_content',$category);
    }

     public function saveCategory(Request $request)
    {
        //
        $data  = array();
        $data['service_cat_name']   = $request->service_cat_name;
        $data['service_cat_des']    = $request->service_cat_des;
        $data['publication_status'] = $request->publication_status;

        DB::table('service_category')->insert($data);
        Session::put('save_category','Category Save Succesfully......');
        return Redirect::to('/add_service_category');
    }

        public function updateCategory(Request $request,$category_ids)
    {
        //
        $data  = array();
        $data['service_cat_name']   = $request->service_cat_name;
        $data['service_cat_des']    = $request->service_cat_des;
        //$category_id = $request->gallery_category_id;
           
           DB::table('service_category')
               ->where('service_category_id',$category_ids)
               ->update($data);
        
        return Redirect::to('/add_service_category');
    }

    public function unpublishCategory($catid){
          DB::table('service_category')
             ->where('service_category_id',$catid)
             ->update(['publication_status' => 0 ]);
             return Redirect::to('/add_service_category');
    }

      public function publishCategory($catid){
          DB::table('service_category')
             ->where('service_category_id',$catid)
             ->update(['publication_status' => 1 ]);
             return Redirect::to('/add_service_category');
    }

    public function deleteCategory($catid){
          DB::table('service_category')
             ->where('service_category_id',$catid)
             ->delete();
             Session::put('delete_category','Category Deleted Succesfully......');
             return Redirect::to('/add_service_category');
    }

     public function editCategory($catid){
         $edit =  DB::table('service_category')
             ->where('service_category_id',$catid)
             ->first();
         $editcategory = view('admin.pages.edit_service_category')->with('edit_category',$edit);
        return view('admin.admin_master')->with('main_content',$editcategory);    
           
    }



    // service post

     public function servicePost(){
         $this->AuthCheck();
         $result = DB::table('service_category')
                   ->get();

           $service_post = DB::table('service-post')
                   ->get(); 

        $post = view('admin.pages.service_post')
                    ->with('all_category',$result)
                    ->with('service_post',$service_post);

        return view('admin.admin_master')->with('main_content',$post);
    }

    


    public function serviceSavePost(Request $request)
    {
        //
        $data  = array();
        $data['category_name']   = $request->category_name;
        
        $data['post_title']    = $request->post_title;
        $data['post_des']    = $request->post_des;
        $data['publication_status'] = $request->publication_status;
        
        $file = $request->file('post_image');
        $filename = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $picture = date('His').$filename;
        $image_url ='public/upload_img/'.$picture;
        $destinationPath = base_path('public/upload_img/');
        $success = $file->move($destinationPath,$picture);

        if($success){
            $data['post_image']    = $image_url;
            DB::table('service-post')->insert($data);
            Session::put('save_post','Post Save Succesfully......');
            return Redirect::to('/service_post');
        }else{
            $error = $file->getErrorMessage();
        }

    }


     public function unpublishService($catid){
          DB::table('service-post')
             ->where('post_id',$catid)
             ->update(['publication_status' => 0 ]);
             return Redirect::to('/service_post');
    }

      public function publishService($catid){
          DB::table('service-post')
             ->where('post_id',$catid)
             ->update(['publication_status' => 1 ]);
             return Redirect::to('/service_post');
    }

    public function deleteService($catid){
           DB::table('service-post')
             ->where('post_id',$catid)
             ->delete();
             Session::put('delete_category','Category Deleted Succesfully......');
              return Redirect::to('/service_post');
    }

     
      public function editService($catid){
         $edit =  DB::table('service-post')
             ->where('post_id',$catid)
             ->first();

        $all_cat = DB::table('service_category')
                   ->get();  
                        
         $editpost = view('admin.pages.edit_service_post')
                 ->with('edit_post',$edit)
                 ->with('all_cat',$all_cat);
        return view('admin.admin_master')->with('main_content',$editpost);    
           
    }

    public function UpdateServicePost(Request $request,$post_ids){
        $data  = array();
        $data['category_name']   = $request->category_name;
        
        $data['post_title']    = $request->post_title;
        $data['post_des']    = $request->post_des;
        $data['publication_status'] = $request->publication_status;
        
        if($_FILES['post_image']['name']==''){
             $data['post_image']   = $request->post_image;
             DB::table('service-post')
                 ->where('post_id',$post_ids)
                 ->update($data);
                Session::put('save_post','Post Update Succesfully......');
                return Redirect::to('/service_post');
        }else{
            $file = $request->file('post_image');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $picture = date('His').$filename;
            $image_url ='public/upload_img/'.$picture;
            $destinationPath = base_path('public/upload_img/');
            $success = $file->move($destinationPath,$picture);

            if($success){
                $data['post_image']    = $image_url;
                DB::table('service-post')
                 ->where('post_id',$post_ids)
                 ->update($data);
                Session::put('save_post','Post Update Succesfully......');
                //unlink($request->post_image);
                return Redirect::to('/service_post');
            }else{
                $error = $file->getErrorMessage();
            } 
            }

       

    }





    











    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
