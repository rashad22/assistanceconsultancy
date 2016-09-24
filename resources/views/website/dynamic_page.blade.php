@extends('layouts.layout')
@section('content')
<h1 title="Assistance Consultancy" class="hidden">Dynamic Page</h1>
<!-- Breadcrumb Start -->
<div class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul>
                    <li><a href="\index">Home</a></li>
                    <li>{{$data['content']->post_name}}</li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- End Breadcrumb-->

<main class="inner_content">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="{{asset('website/images/about-1.jpg')}}" class="img-responsive" alt="" />
            </div>
            <div class="col-md-8">
                <h1 class="main_title">{{$data['content']->post_title}}</h1>
                <p>
                    {{$data['content']->post_content}}
                </p>
            </div>
        </div>
    </div>
</main>
@endsection
