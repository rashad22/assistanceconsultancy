@extends('layouts.layout')
@section('content')
<h1 title="Assistance Consultancy" class="hidden">Assistance Consultancy</h1>
<main>
    <!-- Main Slider -->
    <div id="main_slider" class="carousel slide" data-ride="carousel" data-interval="false">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#main_slider" data-slide-to="0" class="active"></li>
            <li data-target="#main_slider" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="website/images/slide-1.jpg" alt="...">
                <div class="carousel-caption">
                    <h2 class="big_text">Assistance in Bangladesh</h2>
                    <p>We are professional step by step guidance through the flat buy or sale or rent or management in Bangladesh. We are also able to assistant with Birth Certificate, Passport, National ID card, Power of attorney and Open a bank account in Bangladesh</p>
                </div>
            </div>
            <div class="item">
                <img src="website/images/slide-2.jpg" alt="...">
                <div class="carousel-caption">
                    <h2 class="big_text">Personal Services</h2>
                    <p>Birth Certificate <br />
                        Open a bank account in Bangladesh <br />
                        National ID card<br />
                        Power of attorney </p>
                </div>
            </div>
        </div>
    </div><!-- End Main Slider -->

    <!-- Brochure Section-->
    <div class="section brochure visible-sm visible-md visible-lg">
        <div class="container">
            <div class="row">
                <div class="text_center_480 full_480 col-xs-8 col-sm-7 col-md-4 col-md-offset-3">
                    <p>Download our official brochure.</p>
                </div>
                <div class="text_center_480 full_480 col-xs-4 col-sm-5 col-md-4 text-right">
                    <a href="website/resources/brochure_2.pdf" download="BD Cosulting 3b Publication.pdf" class="btn btn-info btn-raised"><i class="fa fa-download"></i> Dowload</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Brochure section -->

    <!-- Services section -->

    <!-- End services section-->

    <!-- Success Section -->
    <div class="section success">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <span class="big_text">Personal Services</span>
                    <ul>
                        <li>Birth Certificate </li>
                        <li>Open a bank account in Bangladesh </li>
                        <li>National ID card</li>
                        <li>Power of attorney</li>
                    </ul>

                </div>
            </div>
        </div>
    </div><!-- End Success Section-->
</main>
@endsection
