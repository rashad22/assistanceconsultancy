<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\postModel;
use DB;
use Session;
use Illuminate\Pagination;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Input;

class post extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
        $data= array(
            'title' =>'All Post',
            'active' =>'Post',
            'meta' => 'all Post'
            );
       $data['result'] = DB::table('post')->paginate(5);
        return view('admin/post/post')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $data= array(
            'title' =>'Add Post',
            'active' =>'Post',
            'meta' => 'new Post'
            );
        return view('admin/post/add_post')->with('data',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data) {
        
        $post = $data->all();

        $v = \Validator::make($data->all(), [
                    'post_name' => 'required|max:100|unique:post',
                    'post_title' => 'required|max:255|unique:post',
                    'post_details' => 'required',
        ]);
        if ($v->fails()) {
            return redirect()->back()->withErrors($v->errors());
        } else {

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
            }
            $data_arr = array(
                'post_title' => $data->input('post_title'),
                'post_name' => $data->input('post_name'),
                'post_content' => $data->input('post_details'),
                'post_type' => $data->input('post_type'),
                'post_slug' => preg_replace('/  */', '-', $data->input('post_name')),
                'post_author' => 1,
                'post_datetime' => date('Y-m-d h:i:s'),
                'remember_token' => $data->input('_token'),
            );
            $post_id = DB::table('post')->insertGetId($data_arr);
            
            if ($image&&$post_id > 0) {
                $meta_arr = array(
                    'meta_key'=>'post_featured_image',
                    'post_id'=>$post_id,
                    'meta_value'=>$med_id,
                    );
                DB::table('post_meta')->insert($meta_arr);
                
            }
            session::flash('message', 'Record added');
                return redirect('all-post');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
        $data= array(
            'title' =>'Post Details',
            'active' =>'Post',
            'meta' => 'all Post'
            );
        $data['row'] = DB::table('post')->where('post_id', $id)->first();
        $meta = DB::table('post_meta')->where(array('post_id'=>$id,'meta_key'=>'post_featured_image'))->first();
        if($meta){
            $data['post_featured_image'] = DB::table('media')->where('med_id',$meta->meta_value)->first();
        }
        return view('admin/post/post_details')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
        $data= array(
            'title' =>'Edit Post',
            'active' =>'Post',
            'meta' => 'all Post'
            );
        $data['row'] = DB::table('post')->where('post_id', $id)->first();
        $meta = DB::table('post_meta')->where(array('post_id'=>$id,'meta_key'=>'post_featured_image'))->first();
        if($meta){
            $data['post_featured_image'] = DB::table('media')->where('med_id',$meta->meta_value)->first();
        }
        return view('admin/post/edit_post')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $data) {
        //
        $post = $data->all();
        $v = \Validator::make($data->all(), [
                    'post_name' => 'required|max:100',
                    'post_title' => 'required|max:255',
                    'post_details' => 'required',
        ]);
        if ($v->fails()) {
            return redirect()->back()->withErrors($v->errors());
        } else {
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
            }
            $data_arr = array(
                'post_title' => $data->input('post_title'),
                'post_name' => $data->input('post_name'),
                'post_content' => $data->input('post_details'),
                'post_type' => $data->input('post_type'),
                'post_slug' => $data->input('post_title'),
                'post_author' => 1,
                'post_datetime' => date('Y-m-d h:i:s'),
                'remember_token' => $data->input('_token'),
            );
            $q = DB::table('post')->where('post_id', $_POST['id'])->update($data_arr);
            if ($image&&$q > 0) {
                $meta_con = array(
                    'meta_key'=>'post_featured_image',
                    'post_id'=>$_POST['id']
                    );
                $meta_arr = array(
                    'meta_key'=>'post_featured_image',
                    'post_id'=>$_POST['id'],
                    'meta_value'=>$med_id,
                    );
                $meta_check = DB::table('post_meta')->where($meta_con)->first();
                if($meta_check){
                DB::table('post_meta')->where($meta_con)->update($meta_arr);

                }else{
                DB::table('post_meta')->insert($meta_arr);

                }
                
            }
            
        }
        session::flash('message', 'Record Updated');
                return redirect('all-post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
        $q = DB::table('post')->where('post_id', $id)->delete();
        if ($q) {
            session::flash('message', 'Record Removed');
                return redirect('all-post');
        }
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

}
