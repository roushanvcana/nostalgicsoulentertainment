@extends('layouts.sidenav')

@section('innercontent')
<!--Page Content-->
<!--banner-->
<section>
    <div class="text-white">
        <div class="lightSlider"
             data-item="1"
             data-controls="false"
             data-slide-margin="0"
             data-gallery="false"
             data-pause="8000"
             data-pauseonhover="true"
             data-auto="false"
             data-pager="false"
             data-loop="fasle">
            <div class="xv-slide" data-bg-possition="center"
                 style="background-image:url('assets/img/demo/genre-bg.jpg');">
                <div class="wrapper has-bottom-gradient">
                    <div class="p-md-5 p-3">
                        <div class="row">
                            <div class="col-12 col-lg-6 fadeInRight animated">
                                <div class="xv-slider-content clearfix color-white">
                                    <h1 class="mt-5 heading-banner">Genre</h1>
                                    <p class="heading-banner">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Architecto atque aut blanditiis consectetur
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-gradient"></div>
            </div>
        </div>
    </div>
    <!--slider Wrap-->
</section>
<!--banner ends-->
<main class="page has-sidebar">
<div class="container-fluid relative animatedParent animateOnce">
    <div class="animated fadeInUpShort p-md-5 p-3">
    
    <div class="wrapper">
        <!--<section class="section">
            <h1 class="my-5 text-primary">Genre</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Architecto atque aut blanditiis consectetur
            </p>
        </section>-->
        <section class="section">
            <div class="mb-4 mt-4">
                <h3>English Music</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="row">
                @foreach($genre as $key => $value)
                <div class="col-md-4 mb-3">
                    <div class="card p-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="col-8">
                                <div class="mr-4 float-left">
                                    <i class="icon-windows s-36"></i>
                                </div>
                                <h6>
                                    {{ ucwords($value->category." music") }}
                                </h6>
                                <a href="/{{ $value->category.'-music' }}">
                                    <small>50 Tracks</small>
                                </a>
                            </div>
                            <a href="/{{ $value->category.'-music'}}" class="ml-auto"><i class="icon-link"></i></a>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
                
                @endforeach
            </div>
        </section>
       
    </div>
    </div>
</div>
</main><!--@Page Content-->

@endsection