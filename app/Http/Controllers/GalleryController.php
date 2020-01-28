<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

use Session;
use DB;

class GalleryController extends Controller
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

     public function gallery_category(){
         $this->AuthCheck();
         $result = DB::table('gallery_category')
                   ->get();
        $category = view('admin.pages.gallery_category')->with('all_category',$result);
        return view('admin.admin_master')->with('main_content',$category);
    }



     public function saveCategory(Request $request)
    {
        //
        $data  = array();
        $data['gallery_cat_name']   = $request->gallery_cat_name;
        $data['gallery_cat_des']    = $request->gallery_cat_des;
        $data['publication_status'] = $request->publication_status;

        DB::table('gallery_category')->insert($data);
        Session::put('save_category','Category Save Succesfully......');
        return Redirect::to('/gallery_category');
    }

      public function updateCategory(Request $request,$category_id)
    {
        //
        $data  = array();
        $data['gallery_cat_name']   = $request->gallery_cat_name;
        $data['gallery_cat_des']    = $request->gallery_cat_des;
        //$category_id = $request->gallery_category_id;
           
           DB::table('gallery_category')
               ->where('gallery_category_id',$category_id)
               ->update($data);
        
        return Redirect::to('/gallery_category');
    }


    public function unpublishCategory($catid){
          DB::table('gallery_category')
             ->where('gallery_category_id',$catid)
             ->update(['publication_status' => 0 ]);
             return Redirect::to('/gallery_category');
    }

      public function publishCategory($catid){
          DB::table('gallery_category')
             ->where('gallery_category_id',$catid)
             ->update(['publication_status' => 1 ]);
             return Redirect::to('/gallery_category');
    }

    public function deleteCategory($catid){
          DB::table('gallery_category')
             ->where('gallery_category_id',$catid)
             ->delete();
             Session::put('delete_category','Category Deleted Succesfully......');
             return Redirect::to('/gallery_category');
    }

     public function editCategory($catid){
         $edit =  DB::table('gallery_category')
             ->where('gallery_category_id',$catid)
             ->first();
         $editcategory = view('admin.pages.edit_gallery_category')->with('edit_category',$edit);
        return view('admin.admin_master')->with('main_content',$editcategory);    
           
    }



    // gallery post



      public function gallery_post(){
         $this->AuthCheck();
         $all_cat = DB::table('gallery_category')
                   ->get();         
        $gallery_post = view('admin.pages.gallery_post')->with('all_cat',$all_cat);
        return view('admin.admin_master')->with('main_content',$gallery_post);
    }


      public function manage_gallery(){
         $this->AuthCheck();
         $all_post = DB::table('gallery_post')
                   ->get();         
        $gallery_post = view('admin.pages.manage_gallery')->with('all_post',$all_post);
        return view('admin.admin_master')->with('main_content',$gallery_post);
    }


     public function savePost(Request $request)
    {
        //
        $data  = array();
        $data['category_name']   = $request->category_name;
        
        $data['post_video']    = $request->post_video;
        $data['author']    = $request->author;
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
            DB::table('gallery_post')->insert($data);
            Session::put('save_post','Post Save Succesfully......');
            return Redirect::to('/gallery_post');
        }else{
            $error = $file->getErrorMessage();
        }

    }

    public function updateGalleryPost(Request $request,$post_ids){
        $data  = array();
        $data['category_name']   = $request->category_name;
        
        $data['post_video']    = $request->post_video;
        $data['author']    = $request->author;
        $data['publication_status'] = $request->publication_status;
        
        if($_FILES['post_image']['name']==''){
             $data['post_image']   = $request->post_image;
             DB::table('gallery_post')
                 ->where('post_id',$post_ids)
                 ->update($data);
                Session::put('save_post','Post Update Succesfully......');
                return Redirect::to('/manage_gallery');
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
                DB::table('gallery_post')
                 ->where('post_id',$post_ids)
                 ->update($data);
                Session::put('save_post','Post Update Succesfully......');
                //unlink($request->post_image);
                return Redirect::to('/manage_gallery');
            }else{
                $error = $file->getErrorMessage();
            } 
            }

       

    }


      public function editPost($catid){
         $edit =  DB::table('gallery_post')
             ->where('post_id',$catid)
             ->first();

        $all_cat = DB::table('gallery_category')
                   ->get();  
                        
         $editpost = view('admin.pages.edit_post')
                 ->with('edit_post',$edit)
                 ->with('all_cat',$all_cat);
        return view('admin.admin_master')->with('main_content',$editpost);    
           
    }



    public function unpublishPost($catid){
          DB::table('gallery_post')
             ->where('post_id',$catid)
             ->update(['publication_status' => 0 ]);
             return Redirect::to('/manage_gallery');
    }

      public function publishPost($catid){
          DB::table('gallery_post')
             ->where('post_id',$catid)
             ->update(['publication_status' => 1 ]);
             return Redirect::to('/manage_gallery');
    }

    public function deletePost($catid){
          DB::table('gallery_post')
             ->where('post_id',$catid)
             ->delete();
             Session::put('delete_post','Category Deleted Succesfully......');
             return Redirect::to('/manage_gallery');
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
