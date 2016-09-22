@extends('admin.master')

@section('content')
<aside class="right-side">
    <section class="content-header">
        <h1>New page</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Pages</li>
            <li class="active">New Post</li>
        </ol>
    </section>
    <section class="content">
        <div class="col-md-12">
            <!--md-6 starts-->
            <!--form control starts-->
            <div class="panel panel-success" id="hidepanel6">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="share" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Add New Page
                    </h3>
                </div>
                <div class="panel-body">
                    <p class="bg-danger">{{$errors->first('post_title')}}</p>
                    <p class="bg-danger">{{$errors->first('post_dtails')}}</p>
                    <form role="form" action="save" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="col-md-9">
                            <div class="form-group">
                                <label>Post Title</label>
                                <input class="form-control" name="post_title" id="post_title">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>

                            <div class="form-group">
                                <label>Post Details</label>
                                <textarea class="form-control" rows="3" name="post_details" id="post_details"></textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="header">
                                <h4>Featured Image</h4>
                            </div>
                            <div class="form-group">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                        <img data-src="holder.js/100%x100%" alt="...">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                    <div>
                                        <span class="btn btn-default btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="..."></span>
                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-responsive btn-default">Submit</button>
                        <button type="reset" class="btn btn-responsive btn-default">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

</aside>
@endsection