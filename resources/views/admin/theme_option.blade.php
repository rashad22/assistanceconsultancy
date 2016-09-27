    @extends('admin.master')

    @section('content')
    <link rel="stylesheet" href="{{asset('admin/css/pages/blog.css')}}" />
    
    <aside class="right-side">
        <section class="content-header">
            <h1>{{$data['title']}}</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#">
                        <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                        Dashboard
                    </a>
                </li>
                <li>Pages</li>
                <li class="active">{{$data['title']}}</li>
            </ol>
        </section>
        <section class="content">
           
            <div class="col-md-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab_1" data-toggle="tab">Theme Logo</a>
                        </li>
                        <li>
                            <a href="#tab_2" data-toggle="tab">Theme Options</a>
                        </li>
                        
                    </ul>
                    <div class="tab-content content-bg" id="slim2">
                        <div class="tab-pane active" id="tab_1">
                        <form action="{{ URL::to('logo-uploads') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
<br/>
<input type="hidden" name="_token" value="{{csrf_token()}}"/>
                           <div class="form-group">
                            <label for="file" class="col-sm-2 control-label">Logo </label>
                            <div class="col-sm-5">
                            <span class="btn btn-primary btn-file">
                              <input type="file" id="file" name="file"/>
                              </span>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="file" class="col-sm-2 control-label"> </label>
                            <div class="col-sm-5">
                              <input type="submit" class="btn btn-success" id="submit" name="submit" value="Upload" />
                            </div>
                          </div>
                          <br/>
                          </form>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2">
                            <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
<br/>
                           <div class="form-group">
                            <label for="site_name" class="col-sm-2 control-label">Site Name </label>
                            <div class="col-sm-8">
                              <input type="text" id="site_name" name="site_name" class="form-control" />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="site_email" class="col-sm-2 control-label">Site E-mail </label>
                            <div class="col-sm-8">
                              <input type="text" id="site_email" name="site_email" class="form-control" />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="site_contact" class="col-sm-2 control-label">Contact No </label>
                            <div class="col-sm-8">
                              <input type="text" id="site_contact" name="site_contact" class="form-control" />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="file" class="col-sm-2 control-label"> </label>
                            <div class="col-sm-5">
                              <input type="submit" class="btn btn-success" id="submit" name="submit" value="Submit" />
                            </div>
                          </div>
                          <br/>
                          </form>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>



            </div>
        </section>

    </aside>
    @endsection