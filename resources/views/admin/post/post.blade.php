    @extends('admin.master')

    @section('content')
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
                <!--md-6 starts-->
                <!--form control starts-->
                <div class="panel panel-success" id="hidepanel6">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="share" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            All Post List
                        </h3>
                    </div>
                    <div class="panel-body">
                    <?php if(Session::get('message')){?>
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                       {{Session::get('message')}}
                    </div>
                        <?php }?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Post Title</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($data['result'] as $key=>$row) { ?>
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$row->post_title}}</td>
                                    <td>{{$row->post_datetime}}</td>
                                    <td><label class="label label-success"> {{($row->post_status==1)?'Publich':'b'}}</label></td>
                                    <td width="15%">
                                        <a class="btn btn-sm btn-success" href="edit-post/{{$row->post_id}}"><i class="fa fa-edit"></i> Edit</a>
                                        <a class="btn btn-sm btn-success" href="delete-post/{{$row->post_id}}"><i class="fa fa-trash"></i> Delete</a>
                                        
                                    </td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                        <?php echo $data['result']->render(); ?>
                    </div>
                </div>
            </div>
        </section>

    </aside>
    @endsection