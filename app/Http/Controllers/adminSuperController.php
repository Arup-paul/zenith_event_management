<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

use Session;

class adminSuperController extends Controller
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

     public function logout()
    {
        Session::put('admin_name','');
        Session::put('id','');
        Session::put('logout','You Are Succesfully Logout');
        return Redirect::to('/admin');


    }



    public function AuthCheck(){
         $id = Session::get('id');
         if ($id) {
             return;
         }else{
            return Redirect::to('/admin')->send();
         }
    }


    //add_category

    public function add_category(){
         $this->AuthCheck();
        $category = view('admin.pages.add_category');
        return view('admin.admin_master')->with('main_content',$category);
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
