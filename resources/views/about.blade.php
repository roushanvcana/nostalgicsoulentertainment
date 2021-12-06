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
                 style="background-image:url('assets/img/demo/about-bg.jpg');">
                <div class="wrapper has-bottom-gradient">
                    <div class="p-md-5 p-3">
                        <div class="row">
                            <div class="col-12 col-lg-6 fadeInRight animated">
                                <div class="xv-slider-content clearfix color-white">
                                    <h1 class="mt-5 heading-banner">About Us</h1>
                                    <!--<p class="heading-banner">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Architecto atque aut blanditiis consectetur
                                    </p>-->
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
        <div class="wrapper">
            <div class="container-fluid relative animatedParent animateOnce">
                <div class="animated fadeInUpShort p-5 ml-lg-5 mr-lg-5">
                    <!--<section>
                        <div class="James">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                        <div class="Worthy">
                                            <h4>James Worthy</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                        <div class="dolor">
                                            <img  src="{{asset('assets/img/demo/b22.jpg')}}" alt="b22">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
            
                        </div>
                    </section>-->
                    <section>
                        <div class="ourstory mt-5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 position">
                                        <div class="story">
                                            <!--<img  src="{{ asset('assets/img/demo/ourstory.jpeg')}}" alt="b22">-->
                                            <img  src="{{ asset('assets/img/demo/Cecil-Jones-Photo.JPG')}}" alt="b22" width="300px">
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 pt-5">
                                        <div class="story-text ml-4 mr-4">
                                            <h4>Our Story</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
            
                        </div>
                    </section>
                    <section class="section m-5">
                        <div class="align-items-center">
                            <div class=" story-text mb-4 text-center">
                                <h4 class="text-center">Latest Artists</h4>
                            </div>
                            <!-- <a href="albums.html">View Albums<i class="icon-angle-right ml-3"></i></a> -->
                        </div>
                        <div class="lightSlider playlist ml-5 mt-3"
                             data-item="4"
                             data-item-lg="3"
                             data-item-md="3"
                             data-item-sm="2"
                             data-auto="false"
                             data-pager="false"
                             data-controls="true"
                             data-loop="true">
                            <div>
                                <figure>
                                    <div class="w-50 text-center">
                                        <figure class="mt-1">
                                            <a href="#">
                                            <img width="250" height="250" src="assets/img/demo/u4.jpg" class="img-fluid circle wp-post-image" sizes="(max-width: 250px) 100vw, 250px"></a>
                                        </figure>
                                        <div>
                                            <h6><a href="#">Asrar Khan</a>
                                            </h6>
                                            <small class="mr-2">8 Albums</small>
                                            <small>9 Tracks</small>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                            <div>
                                <figure>
                                    <div class="w-50 text-center">
                                        <figure class="mt-1">
                                            <a href="#">
                                            <img width="250" height="250" src="assets/img/demo/u5.jpg" class="img-fluid circle wp-post-image" sizes="(max-width: 250px) 100vw, 250px"></a>
                                        </figure>
                                        <div>
                                            <h6><a href="#">Asrar Khan</a>
                                            </h6>
                                            <small class="mr-2">8 Albums</small>
                                            <small>9 Tracks</small>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                            <div>
                                <figure>
                                    <div class="w-50 text-center">
                                        <figure class="mt-1">
                                            <a href="#">
                                            <img width="250" height="250" src="assets/img/demo/u7.jpg" class="img-fluid circle wp-post-image" sizes="(max-width: 250px) 100vw, 250px"></a>
                                        </figure>
                                        <div>
                                            <h6><a href="#">Asrar Khan</a>
                                            </h6>
                                            <small class="mr-2">8 Albums</small>
                                            <small>9 Tracks</small>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                            <div>
                                <figure>
                                    <div class="w-50 text-center">
                                        <figure class="mt-1">
                                            <a href="#">
                                            <img width="250" height="250" src="assets/img/demo/u4.jpg" class="img-fluid circle wp-post-image" sizes="(max-width: 250px) 100vw, 250px"></a>
                                        </figure>
                                        <div>
                                            <h6><a href="#">Asrar Khan</a>
                                            </h6>
                                            <small class="mr-2">8 Albums</small>
                                            <small>9 Tracks</small>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                            <div>
                                <figure>
                                    <div class="w-50 text-center">
                                        <figure class="mt-1">
                                            <a href="#">
                                            <img width="250" height="250" src="assets/img/demo/u5.jpg" class="img-fluid circle wp-post-image" sizes="(max-width: 250px) 100vw, 250px"></a>
                                        </figure>
                                        <div>
                                            <h6><a href="#">Asrar Khan</a>
                                            </h6>
                                            <small class="mr-2">8 Albums</small>
                                            <small>9 Tracks</small>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main><!--@Page Content-->
    @endsection