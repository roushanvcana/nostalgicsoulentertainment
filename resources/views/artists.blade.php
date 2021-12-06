@extends('layouts.sidenav')

@section('innercontent')
<!--Page Content-->
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
                 style="background-image:url('assets/img/demo/artist-bg.jpeg');">
                <div class="wrapper has-bottom-gradient">
                    <div class="p-md-5 p-3">
                        <div class="row">
                            <div class="col-12 col-lg-6 fadeInRight animated">
                                <div class="xv-slider-content clearfix color-white">
                                    <h1 class="mt-5 heading-banner">Artists</h1>
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
<main class="page has-sidebar">
<div class="container-fluid relative animatedParent animateOnce">
    <div class="animated fadeInUpShort p-md-5 p-3 go">
        <div class="relative mb-5">
            <h1 class="mb-2 text-primary">Artists</h1>
            <article id="post-1187" class="post-1187 page type-page status-publish hentry">
                <div class="entry-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>Architecto atque aut blanditiis consectetur </p>
                </div><!-- .entry-content -->
            </article><!-- #post-## -->
            <div class="avatar avatar-md avatar-letter-a my-5 primary-color">
            </div>
            <div class="row"> 
            
                <div class="col-sm-12 col-md-2 mb-5">
                
                    <div class="text-center">
                        <figure class="mt-1">
                            <a href="artist/{{ $artists->id}}">
                            <img width="250" height="250" src="{{ $artists->artist_pic }}" class="img-fluid circle wp-post-image" sizes="(max-width: 250px) 100vw, 250px"></a>
                        </figure>
                        <div>
                            <h6><a href="artist/{{ $artists->id}}">{{ $artists->artist_name }}</a>
                            </h6>
                            <small class="mr-2">1 Albums</small>
                            <small>8 Tracks</small>
                        </div>
                    </div>
               
                </div>
                
            </div>
        </div>
    </div>
</div>
</main><!--@Page Content-->

@endsection