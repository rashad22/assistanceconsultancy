<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\postModel;
use DB;
use Session;
use Illuminate\Pagination;
use Illuminate\Http\UploadedFile;
use Input;

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
                    'post_title' => 'required|max:255|unique:post',
                    'post_details' => 'required',
        ]);
        if ($v->fails()) {
            return redirect()->back()->withErrors($v->errors());
        } else {
            $data_arr = array(
                'post_title' => $data->input('post_title'),
                'post_name' => $data->input('post_title'),
                'post_content' => $data->input('post_details'),
                'post_type' => 1,
                'post_slug' => $data->input('post_title'),
                'post_author' => 1,
                'post_datetime' => date('Y-m-d h:i:s'),
                'remember_token' => $data->input('_token'),
            );
            $q = DB::table('post')->insert($data_arr);
            if ($q > 0) {
                session::flash('message', 'Record added');
                return redirect('all-post');
            }
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
            'title' =>'Add Post',
            'active' =>'Post',
            'meta' => 'new Post'
            );
        $data['row'] = DB::table('post')->where('post_id', $id)->first();
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
                    'post_title' => 'required|max:255',
                    'post_details' => 'required',
        ]);
        if ($v->fails()) {
            return redirect()->back()->withErrors($v->errors());
        } else {
            $data_arr = array(
                'post_title' => $data->input('post_title'),
                'post_name' => $data->input('post_title'),
                'post_content' => $data->input('post_details'),
                'post_type' => 1,
                'post_slug' => $data->input('post_title'),
                'post_author' => 1,
                'post_datetime' => date('Y-m-d h:i:s'),
                'remember_token' => $data->input('_token'),
            );
            $q = DB::table('post')->where('post_id', $_POST['id'])->update($data_arr);

            if ($q > 0) {
                session::flash('message', 'Record Updated');
                return redirect('all-post');
            }
        }
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

}
