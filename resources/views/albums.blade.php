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
                 style="background-image:url('assets/img/demo/album-bg.jpg');">
                <div class="wrapper has-bottom-gradient">
                    <div class="p-md-5 p-3">
                        <div class="row">
                            <div class="col-12 col-lg-6 fadeInRight animated">
                                <div class="xv-slider-content clearfix color-white">
                                    <h1 class="mt-5 heading-banner">Albums</h1>
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
<main>
        <div class="wrapper">
            <div class="container-fluid relative animatedParent animateOnce">
                <div class="animated fadeInUpShort p-5 ml-lg-5 mr-lg-5">
                    <section>
                        <!--<div class="relative my-5">
                            <h1 class="mb-2 text-primary">Albums</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Architecto atque aut blanditiis
                                consectetur</p>
                        </div>-->
                        <div class="wrapper">
                            <div class="row has-items-overlay">
                                @foreach($data as $key => $value)
                                    <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                                        <figure>
                                            <div class="img-wrapper">
                                                <img src="{{$value->album_pic}}" alt="/">
                                                <div class="img-overlay text-white text-center">
                                                    <a href="album/{{ $value->id}}">
                                                        <div class="figcaption mt-3">
                                                            <i class="icon-link s-48 "></i>
                                                            <h5 class="mt-5 heading-banner">{{$value->album_name}}</h5>
                                                            <span class="heading-banner">{{$value->artists_id}}</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="figure-title text-center p-2">
                                                    <h5 class="heading-banner">{{$value->album_name}}</h5>
                                                    <span class="heading-banner">{{$value->artists_id}}</span>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>

                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main><!--@Page Content-->

    @endsection