<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

use Session;
use DB;

class IndexController extends Controller
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


      public function addSlider(){
         $this->AuthCheck();
         $result = DB::table('sliders')
                   ->get();
        $category = view('admin.pages.add_slider')->with('slider',$result);
        return view('admin.admin_master')->with('main_content',$category);
    }

   
      public function saveSlider(Request $request)
    {
        //
        $data  = array();
        
        $data['slogan']    = $request->slogan;
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
            DB::table('sliders')->insert($data);
            Session::put('save_slider','Add Client  Succesfully......');
            return Redirect::to('/add_slider');
        }else{
            $error = $file->getErrorMessage();
        }

    }


        public function unpublishSlider($catid){
          DB::table('sliders')
             ->where('post_id',$catid)
             ->update(['publication_status' => 0 ]);
             return Redirect::to('/add_slider');
    }

      public function publishSlider($catid){
          DB::table('sliders')
             ->where('post_id',$catid)
             ->update(['publication_status' => 1 ]);
             return Redirect::to('/add_slider');
    }

    public function deleteSlider($catid){
          DB::table('sliders')
             ->where('post_id',$catid)
             ->delete();
             Session::put('delete_category','Client Deleted Succesfully......');
             return Redirect::to('/add_slider');
    }



    public function IndexItem(){
         $this->AuthCheck();
         $result = DB::table('indexitem')
                   ->get();
        $category = view('admin.pages.index_item')->with('indexitem',$result);
        return view('admin.admin_master')->with('main_content',$category);
    }


      public function saveItem(Request $request)
    {
        //
        $data  = array();
        
        $data['title']    = $request->title;
        $data['description']    = $request->description;
        $data['category']    = $request->category;
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
            DB::table('indexitem')->insert($data);
            Session::put('save_slider','Add Item  Succesfully......');
            return Redirect::to('/index_item');
        }else{
            $error = $file->getErrorMessage();
        }

    }


          public function unpublishItem($catid){
          DB::table('indexitem')
             ->where('post_id',$catid)
             ->update(['publication_status' => 0 ]);
             return Redirect::to('/index_item');
    }

      public function publishItem($catid){
          DB::table('indexitem')
             ->where('post_id',$catid)
             ->update(['publication_status' => 1 ]);
             return Redirect::to('/index_item');
    }

    public function deleteItem($catid){
          DB::table('indexitem')
             ->where('post_id',$catid)
             ->delete();
             Session::put('delete_category','Item Deleted Succesfully......');
             return Redirect::to('/index_item');
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
