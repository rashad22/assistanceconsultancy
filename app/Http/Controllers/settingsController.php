<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Http\UploadedFile;
use DB;
use Session;
use Illuminate\Support\Facades\Input;

class settingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function menu(){
        $data= array(
            'title' =>'Menu',
            'active' =>'menu',
            'meta' => 'menu'
            );
        $all_menu = array();
        $active_menu = array();
        $post_list = DB::table('post')->where('post_status', 1)->get()->toArray();;
        $active_menu_ids = DB::table('option_meta')->where('meta_key', 'menu_page_ids')->first()->meta_value;
        
        if($active_menu_ids!='N;'){
        $menu_item = unserialize($active_menu_ids);
        foreach ($post_list as $key => $value) {
            if(in_array($value->post_id,$menu_item)){
                array_push($active_menu,$value);
            }else{
                array_push($all_menu,$value);

            }
        }
        $data['post_list'] =$all_menu;
       $data['active_menu'] =$active_menu;
        }else{
            $data['post_list'] =$post_list;
            $data['active_menu'] =array();
        }
        //$all_post_ids = array_intersect(array_column($data['post_list'], 'post_id'), $menu_item);
       
        return view('admin/menu')->with('data', $data);
    }
    public function menu_update(Request $data){
        $data_arr = array(
            'opt_id'=>1,
            'meta_key'=>'menu_page_ids',
            'meta_value'=>serialize($data->input('menu_item'))
            );
        $exist_menu = DB::table('option_meta')->where(array('opt_id'=> $data_arr['opt_id'],'meta_key'=>$data_arr['meta_key']))->first();
        if($exist_menu){
            $q = DB::table('option_meta')->where('meta_id', $exist_menu->meta_id)->update($data_arr);
        }else{
            $q = DB::table('option_meta')->insert($data_arr);
        }

            if ($q > 0) {
                session::flash('message', 'Menu Updated');
                return redirect('menu');
            }
    }
    public function theme_option(){
         $data= array(
            'title' =>'Theme Option',
            'active' =>'theme_option',
            'meta' => 'theme_option'
            );
         return view('admin/theme_option')->with('data',$data);
    }
    public function uploads(){
        $image = Input::file('file');
            if($image){
                $destinationPath = 'uploads/';
                $filename = str_random(15);
                $extension = $image->getClientOriginalExtension();
                $imagefullname = $filename . '.' . $extension;
                $imagewithurl = "uploads/" . $imagefullname;
                $success = Input::file('file')->move($destinationPath, $imagefullname);
                
                $media_arr = array(
                    'med_name'=>$imagefullname,
                    'med_caption'=>'',
                    'med_description'=>'',
                    'med_path'=>$destinationPath,
                    'created_at'=>date('Y-m-d h:i:s')
                    );
                $med_id = DB::table('media')->insertGetId($media_arr);
                if ($image&&$med_id > 0) {
                $meta_arr = array(
                    'opt_name'=>'site_logo',
                    'opt_value'=>$med_id,
                    );
               $option = DB::table('options')->insert($meta_arr);
                if($option){
                    session::flash('message', 'Image Uploaded');
                return redirect('all-post');
                }
            }
    }
}
}
