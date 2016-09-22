<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
//use App\postmodel;
use DB;
use Session;
use Illuminate\Pagination;

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
        return view('post/post');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin/post/add_post');
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
                    'post_title' => 'required',
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
                return redirect('new-post');
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

}
