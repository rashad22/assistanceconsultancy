<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\siteModel;
use DB;

class site extends Controller {
public function __construct() {
        $active_menu_ids = DB::table('option_meta')->where('meta_key', 'menu_page_ids')->first();
        if($active_menu_ids){
            $active_menu_ids = unserialize($active_menu_ids->meta_value);
        }
        $all_post = DB::table('post')->where('post_status',1)->get();
        $main_menu = array();
        foreach ($all_post as $key => $value) {
            if(in_array($value->post_id, $active_menu_ids)){
                array_push($main_menu,$value);                
            }
        }
       $GLOBALS['main_menu'] = $main_menu;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $data= array(
            'title' =>'Home',
            'active' =>'home',
            'meta' => 'home',
            'main_menu' =>$GLOBALS['main_menu']
            );
$data['content'] = DB::table('post')->where('post_type',2)->paginate(3);
            foreach ($data['content'] as $key => &$value) {
                $meta = DB::table('post_meta')->where(array('post_id'=>$value->post_id,'meta_key'=>'post_featured_image'))->first();
                if($meta){
                    
            $value->post_featured_image = DB::table('media')->where('med_id',$meta->meta_value)->first();
            }
            }
        //return view('admin/post/post')->with('data',$data);
        return view('website/index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
    public function page($slug,$id) {
        $data= array(
            'title' =>'Page',
            'active' =>'page',
            'meta' => $slug,
            'main_menu' =>$GLOBALS['main_menu']
            );
            $data['content'] = DB::table('post')->where('post_id',$id)->first();
            $meta = DB::table('post_meta')->where(array('post_id'=>$id,'meta_key'=>'post_featured_image'))->first();
            if($meta){
            $data['content_meta'] = DB::table('media')->where('med_id',$meta->meta_value)->first();
            }

        //return view('admin/post/post')->with('data',$data);
        return view('website/dynamic_page')->with('data',$data);
    }

    public function services() {
        $data= array(
            'title' =>'Services',
            'active' =>'services',
            'meta' => 'services',
            'main_menu' =>$GLOBALS['main_menu']
            );
            $data['content'] = DB::table('post')->where('post_type',2)->get();
            foreach ($data['content'] as $key => &$value) {
                $meta = DB::table('post_meta')->where(array('post_id'=>$value->post_id,'meta_key'=>'post_featured_image'))->first();
                if($meta){
                    
            $value->post_featured_image = DB::table('media')->where('med_id',$meta->meta_value)->first();
            }
            }
        //return view('admin/post/post')->with('data',$data);
        return view('website/all_services')->with('data',$data);
    }


}
