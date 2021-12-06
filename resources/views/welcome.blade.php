@extends('layouts.sidenav')

@section('innercontent')
        <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div> -->


<!--Page Content-->
<main>

<div class="container-fluid relative animatedParent animateOnce no-p">
    <div class="animated fadeInUpShort">
        <!--Banner Slider-->
        <section>
            <div class="text-white">
                <div class="lightSlider"
                     data-item="1"
                     data-controls="true"
                     data-slide-margin="0"
                     data-gallery="false"
                     data-pause="8000"
                     data-pauseonhover="true"
                     data-auto="false"
                     data-pager="false"
                     data-loop="true">
                    <div class="xv-slide" data-bg-possition="top"
                         style="background-image:url('assets/img/demo/b21.jpg');">
                        <div class="wrapper has-bottom-gradient">
                            <div class="p-md-5 p-3">
                                <div class="row">
                                    <div class="col-12 col-lg-6 fadeInRight animated">
                                        <div class="xv-slider-content clearfix color-white">
                                            <h1 class="s-64 mt-5 font-weight-lighter">Nostalgic Soul Entertainment</h1>
                                            <p class="s-24 font-weight-lighter">Sed eget orci eleifend enim mattis
                                                suscipit. <br>Suspendisse
                                                potenti non ipsum.</p>
                                            <div class="pt-3">
                                                <a href="#" class="btn btn-primary btn-lg">Listen Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-gradient"></div>
                    </div>
                    <div class="xv-slide" data-bg-possition="top"
                         style="background-image:url('assets/img/demo/gg.jpg');">
                        <div class="wrapper has-bottom-gradient">
                            <div class="p-md-5 p-3">
                                <div class="row">
                                    <div class="col-12 col-lg-6 fadeInRight animated">
                                        <div class="xv-slider-content clearfix color-white">
                                            <h1 class="s-64 mt-5 font-weight-lighter">Nostalgic Soul Entertainment</h1>
                                            <p class="s-24 font-weight-lighter">Sed eget orci eleifend enim mattis
                                                suscipit. <br>Suspendisse
                                                potenti non ipsum.</p>
                                            <div class="pt-3">
                                                <a href="#" class="btn btn-primary btn-lg">Listen Now</a>
                                            </div>
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
        <!--@Banner Slider-->
		
        <div class="wrapper p-md-5 p-3  ">
            <!-- james section start -->
            <div class="James">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                            <div class="Worthy">
                                <h4></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="dolor">
                                <img  src="assets/img/demo/Cecil-Jones-Photo.JPG" alt="b22" width="250px">
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>
            <!-- james section end -->
            <!--New Releases-->
            <section class="section">
                <div class="d-flex relative align-items-center justify-content-between">
                    <div class="mb-4">
                        <h4>New Releases For You</h4>
                        <p>Enjoy some new awesome music</p>
                    </div>
                    <!-- <a href="albums.html">View Albums<i class="icon-angle-right ml-3"></i></a> -->
                </div>
                <div class="lightSlider has-items-overlay playlist"
                     data-item="6"
                     data-item-lg="3"
                     data-item-md="3"
                     data-item-sm="2"
                     data-auto="false"
                     data-pager="false"
                     data-controls="true"
                     data-loop="true">
                    <div>
                        <figure>
                            <div class="img-wrapper">
                                <img src="{{ asset('assets/img/demo/a8.jpg') }}" alt="/">
                                <div class="img-overlay text-white">
                                    <div class="figcaption">
                                        <ul class="list-inline d-flex align-items-center justify-content-between">
                                            <li class="list-inline-item">
                                                <a href="#" class="snackbar" data-text="Added to favourites"
                                                   data-pos="top-right"
                                                   data-showAction="true"
                                                   data-actionText="ok"
                                                   data-actionTextColor="#fff"
                                                   data-backgroundColor="#0c101b">
                                                     <i class="icon-heart-o s-18"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item ">
                                                <a class="no-ajaxy media-url" href="assets/media/track2.mp3" data-wave="assets/media/track2.json">
                                                    <i class="icon-play s-48"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="album-single.html"></a>
                                                      <!-- <i  class="icon-more s-18 pt-3"></i></li> -->
                                        </ul>
                                        <div class="text-center mt-5">
                                            <h5>To Phir Ao</h5>
                                            <span>Lorem Ipsum</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="figure-title text-center p-2">
                                    <h5>To Phir Ao</h5>
                                    <span>Lorem Ipsum</span>
                                </div>
                            </div>
                        </figure>
                    </div>
                    <div>
                        <figure>
                            <div class="img-wrapper">
                                <img src="{{ asset('assets/img/demo/a1.jpg') }}" alt="/">
                                <div class="img-overlay text-white">
                                    <div class="figcaption">
                                        <ul class="list-inline d-flex align-items-center justify-content-between">
                                            <li class="list-inline-item">
                                                <a href="#" class="snackbar" data-text="Added to favourites"
                                                   data-pos="top-right"
                                                   data-showAction="true"
                                                   data-actionText="ok"
                                                   data-actionTextColor="#fff"
                                                   data-backgroundColor="#0c101b">
                                                    <i class="icon-heart-o s-18"></i> 
                                                </a></li>
                                            <li class="list-inline-item ">
                                                <a class="no-ajaxy media-url" href="assets/media/track2.mp3" data-wave="assets/media/track2.json">
                                                    <i class="icon-play s-48"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="album-single.html"></a>
                                                        <!-- <i class="icon-more s-18 pt-3"></i> -->
														</li>
                                        </ul>
                                        <div class="text-center mt-5">
                                            <h5>To Phir Ao</h5>
                                            <span>Lorem Ipsum</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="figure-title text-center p-2">
                                    <h5>To Phir Ao</h5>
                                    <span>Lorem Ipsum</span>
                                </div>
                            </div>
                        </figure>
                    </div>
                    <div>
                        <figure>
                            <div class="img-wrapper">
                                <img src="{{ asset('assets/img/demo/a2.jpg') }}" alt="/">
                                <div class="img-overlay text-white">
                                    <div class="figcaption">
                                        <ul class="list-inline d-flex align-items-center justify-content-between">
                                            <li class="list-inline-item">
                                                <a href="#" class="snackbar" data-text="Added to favourites"
                                                   data-pos="top-right"
                                                   data-showAction="true"
                                                   data-actionText="ok"
                                                   data-actionTextColor="#fff"
                                                   data-backgroundColor="#0c101b">
                                                    <i class="icon-heart-o s-18"></i>
                                                </a></li>
                                            <li class="list-inline-item ">
                                                <a class="no-ajaxy media-url" href="assets/media/track2.mp3" data-wave="assets/media/track2.json">
                                                    <i class="icon-play s-48"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="album-single.html"></a>
                                                      <!-- <i  class="icon-more s-18 pt-3"></i></li> -->
                                        </ul>
                                        <div class="text-center mt-5">
                                            <h5>To Phir Ao</h5>
                                            <span>Lorem Ipsum</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="figure-title text-center p-2">
                                    <h5>To Phir Ao</h5>
                                    <span>Lorem Ipsum</span>
                                </div>
                            </div>
                        </figure>
                    </div>
                    <div>
                        <figure>
                            <div class="img-wrapper">
                                <img src="{{ asset('assets/img/demo/a4.jpg') }}" alt="/">
                                <div class="img-overlay text-white">
                                    <div class="figcaption">
                                        <ul class="list-inline d-flex align-items-center justify-content-between">
                                            <li class="list-inline-item">
                                                <a href="#" class="snackbar" data-text="Added to favourites"
                                                   data-pos="top-right"
                                                   data-showAction="true"
                                                   data-actionText="ok"
                                                   data-actionTextColor="#fff"
                                                   data-backgroundColor="#0c101b">
                                                    <i class="icon-heart-o s-18"></i>
                                                </a></li>
                                            <li class="list-inline-item ">
                                                <a class="no-ajaxy media-url" href="assets/media/track2.mp3" data-wave="assets/media/track2.json">
                                                    <i class="icon-play s-48"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="album-single.html"></a>
                                                    <!-- <i class="icon-more s-18 pt-3"></i></li> -->
                                        </ul>
                                        <div class="text-center mt-5">
                                            <h5>To Phir Ao</h5>
                                            <span>Lorem Ipsum</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="figure-title text-center p-2">
                                    <h5>To Phir Ao</h5>
                                    <span>Lorem Ipsum</span>
                                </div>
                            </div>
                        </figure>
                    </div>
                    <div>
                        <figure>
                            <div class="img-wrapper">
                                <img src="{{ asset('assets/img/demo/a5.jpg') }}" alt="/">
                                <div class="img-overlay text-white">
                                    <div class="figcaption">
                                        <ul class="list-inline d-flex align-items-center justify-content-between">
                                            <li class="list-inline-item">
                                                <a href="#" class="snackbar" data-text="Added to favourites"
                                                   data-pos="top-right"
                                                   data-showAction="true"
                                                   data-actionText="ok"
                                                   data-actionTextColor="#fff"
                                                   data-backgroundColor="#0c101b">
                                                    <i class="icon-heart-o s-18"></i>
                                                </a></li>
                                            <li class="list-inline-item ">
                                                <a class="no-ajaxy media-url" href="assets/media/track2.mp3" data-wave="assets/media/track2.json">
                                                    <i class="icon-play s-48"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="album-single.html"></a>
                                                      <!-- <i  class="icon-more s-18 pt-3"></i> -->
													  </li>
                                        </ul>
                                        <div class="text-center mt-5">
                                            <h5>To Phir Ao</h5>
                                            <span>Lorem Ipsum</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="figure-title text-center p-2">
                                    <h5>To Phir Ao</h5>
                                    <span>Lorem Ipsum</span>
                                </div>
                            </div>
                        </figure>
                    </div>
                    <div>
                        <figure>
                            <div class="img-wrapper">
                                <img src="{{ asset('assets/img/demo/a6.jpg') }}" alt="/">
                                <div class="img-overlay text-white">
                                    <div class="figcaption">
                                        <ul class="list-inline d-flex align-items-center justify-content-between">
                                            <li class="list-inline-item">
                                                <a href="#" class="snackbar" data-text="Added to favourites"
                                                   data-pos="top-right"
                                                   data-showAction="true"
                                                   data-actionText="ok"
                                                   data-actionTextColor="#fff"
                                                   data-backgroundColor="#0c101b">
                                                    <i class="icon-heart-o s-18"></i>
                                                </a></li>
                                            <li class="list-inline-item ">
                                                <a class="no-ajaxy media-url" href="assets/media/track2.mp3" data-wave="assets/media/track2.json">
                                                    <i class="icon-play s-48"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="album-single.html"></a>
                                                   <!-- <i class="icon-more s-18 pt-3"></i> -->
												   </li>
                                        </ul>
                                        <div class="text-center mt-5">
                                            <h5>To Phir Ao</h5>
                                            <span>Lorem Ipsum</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="figure-title text-center p-2">
                                    <h5>To Phir Ao</h5>
                                    <span>Lorem Ipsum</span>
                                </div>
                            </div>
                        </figure>
                    </div>
                    <div>
                        <figure>
                            <div class="img-wrapper">
                                <img src="{{ asset('assets/img/demo/a7.jpg') }}" alt="/">
                                <div class="img-overlay text-white">
                                    <div class="figcaption">
                                        <ul class="list-inline d-flex align-items-center justify-content-between">
                                            <li class="list-inline-item">
                                                <a href="#" class="snackbar" data-text="Added to favourites"
                                                   data-pos="top-right"
                                                   data-showAction="true"
                                                   data-actionText="ok"
                                                   data-actionTextColor="#fff"
                                                   data-backgroundColor="#0c101b">
                                                    <i class="icon-heart-o s-18"></i>
                                                </a></li>
                                            <li class="list-inline-item ">
                                                <a class="no-ajaxy media-url" href="{{asset('assets/media/track2.mp3')}}" data-wave="assets/media/track2.json">
                                                    <i class="icon-play s-48"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="album-single.html"></a>
                                                     <!-- <i class="icon-more s-18 pt-3"></i> -->
													 </li>

										</ul>
                                        <div class="text-center mt-5">
                                            <h5>To Phir Ao</h5>
                                            <span>Lorem Ipsum</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="figure-title text-center p-2">
                                    <h5>To Phir Ao</h5>
                                    <span>Lorem Ipsum</span>
                                </div>
                            </div>
                        </figure>
                    </div>

                </div>
            </section>
            <!--@New Releases-->

            <!--Latest Posts-->
            <section class="section">
                <div class="d-flex relative">
                    <div class="mb-4">
                        <h4>Latest Posts</h4>
                        <p>Checkout What's new at our blog</p>
                    </div>
                </div>
                <div class="lightSlider has-items-overlay"
                     data-item="3"
                     data-item-lg="2"
                     data-item-md="1"
                     data-item-sm="1"
                     data-auto="false"
                     data-pager="false"
                     data-controls="true"
                     data-loop="true">
                    <div class="card">
                        <figure class="card-img figure">
                            <div class="img-wrapper">
                                <img src="assets/img/demo/v51.jpg" alt="Card image">
                            </div>
                            <div class="img-overlay"></div>
                            <!--<div class="has-bottom-gradient">-->
                                <div class="d-flex">
                                    <div class="card-img-overlay">
                                        <div class="pt-3 pb-3">
                                            <a href="#">
                                                <figure class="float-left mr-3 mt-1">
                                                    <i class="icon-play s-36"></i>
                                                </figure>
                                                <div>
                                                    <h5 class="custom-post">Lorem Ipsum</h5>
                                                    <small class="custom-post"> Latest Video Released</small>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <!--</div>-->
                        </figure>
                        <!--<div class="bottom-gradient bottom-gradient-thumbnail"></div>-->
                    </div>
                    <div class="card">
                        <figure class="card-img figure">
                            <div class="img-wrapper">
                                <img src="assets/img/demo/v81.jpg" alt="Card image">
                            </div>
                            <div class="img-overlay text-white">
                                <div class="figcaption">

                                </div>
                            </div>
                            <!--<div class="has-bottom-gradient">-->
                                <div class="d-flex">
                                    <div class="card-img-overlay">
                                        <div class="pt-3 pb-3">
                                            <a href="#">
                                                <figure class="float-left mr-3 mt-1">
                                                    <i class="icon-play s-36"></i>
                                                </figure>
                                                <div>
                                                    <h5 class="custom-post">Lorem Ipsum</h5>
                                                    <small class="custom-post"> Latest Video Released</small>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <!--</div>-->
                        </figure>
                        <!--<div class="bottom-gradient bottom-gradient-thumbnail"></div>-->
                    </div>
                    <div class="card">
                        <figure class="card-img figure">
                            <div class="img-wrapper">
                                <img src="assets/img/demo/v11.jpg" alt="Card image" class="same-size-img">
                            </div>
                            <div class="img-overlay text-white">
                                <div class="figcaption">

                                </div>
                            </div>
                            <!--<div class="has-bottom-gradient">-->
                                <div class="d-flex">
                                    <div class="card-img-overlay">
                                        <div class="pt-3 pb-3">
                                            <a href="#">
                                                <figure class="float-left mr-3 mt-1">
                                                    <i class="icon-play s-36"></i>
                                                </figure>
                                                <div>
                                                    <h5 class="custom-post">Lorem Ipsum</h5>
                                                    <small class="custom-post"> Latest Video Released</small>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <!--</div>-->
                        </figure>
                        <!--<div class="bottom-gradient bottom-gradient-thumbnail"></div>-->
                    </div>
                    <div class="card">
                        <figure class="card-img figure">
                            <div class="img-wrapper">
                                <img src="assets/img/demo/v9 (1).jpg" alt="Card image" class="same-size-img">
                            </div>
                            <div class="img-overlay text-white">
                                <div class="figcaption">

                                </div>
                            </div>
                            <!--<div class="has-bottom-gradient">-->
                                <div class="d-flex">
                                    <div class="card-img-overlay">
                                        <div class="pt-3 pb-3">
                                            <a href="#">
                                                <figure class="float-left mr-3 mt-1">
                                                    <i class="icon-play s-36"></i>
                                                </figure>
                                                <div>
                                                    <h5 class="custom-post">Lorem Ipsum</h5>
                                                    <small class="custom-post"> Latest Video Released</small>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <!--</div>-->
                        </figure>
                        <!--<div class="bottom-gradient bottom-gradient-thumbnail"></div>-->
                    </div>
                </div>
            </section>
            <!--@New Releases-->

            <!--PlayList & Events-->
            <section class="section mt-4">
                <div class="row row-eq-height">
                    <div class="col-lg-8">
                        <div class="card no-b mb-md-3 p-2">
                            <div class="card-header no-bg transparent">
                                <div class="d-flex justify-content-between">
                                    <div class="align-self-center">
                                        <div class="d-flex">
                                            <!--<i class="icon-music s-36 mr-3  mt-2"></i>-->
                                            <div>
                                                <h4>Most Popular This Week</h4>
                                                <p>Checkout What's new at our blog</p>
                                                <div class="mt-3">
                                                    <ul class="nav nav-tabs card-header-tabs nav-material responsive-tab mb-1"
                                                        role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active show" id="w2--tab1"
                                                               data-toggle="tab" href="#w2-tab1"
                                                               role="tab"
                                                               aria-selected="true">Rock</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="w3--tab1" data-toggle="tab"
                                                               href="#w2-tab1"
                                                               role="tab"
                                                               aria-selected="false">Jazz</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="w4--tab3" data-toggle="tab"
                                                               href="#w2-tab3" role="tab"

                                                               aria-selected="false">Classic</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="w5--tab1" data-toggle="tab"
                                                               href="#w2-tab1" role="tab"

                                                               aria-selected="false">Jazz</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="w6--tab3" data-toggle="tab"
                                                               href="#w2-tab3" role="tab"

                                                               aria-selected="false">Classic</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="card-body no-p">
                                <div class="tab-content" id="v-pills-tabContent1">
                                    <div class="tab-pane fade show active" id="w2-tab1" role="tabpanel"
                                         aria-labelledby="w2-tab1">
                                       <div class="playlist pl-lg-3 pr-lg-3">
                                           <div class="m-1 my-4">
                                               <div class="d-flex align-items-center">
                                                   <div class="col-1">
                                                       <a class="no-ajaxy media-url" href="assets/media/track1.mp3" data-wave="assets/media/track1.json">
                                                           <i class="icon-play s-28"></i>
                                                       </a>
                                                   </div>
                                                   <div class="col-md-6">
                                                       <figure class="avatar-md float-left  mr-3 mt-1">
                                                           <img class="r-3" src="assets/img/demo/a1.jpg" alt="">
                                                       </figure>
                                                       <h6>Dance with me tonight</h6>Lorem Ipsum
                                                   </div>
                                                   <div class="col-md-5 d-none d-lg-block">
                                                       <div class="d-flex">
                                                           <span class="ml-auto"> 5:03</span>
                                                           <a href="#" class="ml-auto"><i class="icon-share-1"></i></a>
                                                           <div class="ml-auto">
                                                               <a href="#" class="btn btn-outline-primary btn-sm">Buy at iTunes</a>
                                                           </div>
                                                       </div>
                                                   </div>
                                                   <div class="col-1 ml-auto d-lg-none">
                                                       <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                                           <i class="icon-more-1"></i></a>
                                                       <div class="dropdown-menu dropdown-menu-right">
                                                               <a  class="dropdown-item" href="#"><i class="icon-share-1 mr-3"></i> Share</a>
                                                               <a  class="dropdown-item" href="#"><i class="icon-shopping-bag mr-3"></i>Buy at iTunes</a>
                                                           </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="m-1 my-4">
                                               <div class="d-flex align-items-center">
                                                   <div class="col-1">
                                                       <a class="no-ajaxy media-url" href="assets/media/track2.mp3" data-wave="assets/media/track2.json">
                                                           <i class="icon-play s-28"></i>
                                                       </a>
                                                   </div>
                                                   <div class="col-md-6">
                                                       <figure class="avatar-md float-left  mr-3 mt-1">
                                                           <img class="r-3" src="assets/img/demo/a2.jpg" alt="">
                                                       </figure>
                                                       <h6>Dance with me tonight</h6>Lorem Ipsum
                                                   </div>
                                                   <div class="col-md-5 d-none d-lg-block">
                                                       <div class="d-flex">
                                                           <span class="ml-auto"> 5:03</span>
                                                           <a href="#" class="ml-auto"><i class="icon-share-1"></i></a>
                                                           <div class="ml-auto">
                                                               <a href="#" class="btn btn-outline-primary btn-sm">Buy at iTunes</a>
                                                           </div>
                                                       </div>
                                                   </div>
                                                   <div class="col-1 ml-auto d-lg-none">
                                                       <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                                           <i class="icon-more-1"></i></a>
                                                       <div class="dropdown-menu dropdown-menu-right">
                                                           <a  class="dropdown-item" href="#"><i class="icon-share-1 mr-3"></i> Share</a>
                                                           <a  class="dropdown-item" href="#"><i class="icon-shopping-bag mr-3"></i>Buy at iTunes</a>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="m-1 my-4">
                                               <div class="d-flex align-items-center">
                                                   <div class="col-1">
                                                       <a class="no-ajaxy media-url" href="assets/media/track3.mp3" data-wave="assets/media/track3.json">
                                                           <i class="icon-play s-28"></i>
                                                       </a>
                                                   </div>
                                                   <div class="col-md-6">
                                                       <figure class="avatar-md float-left  mr-3 mt-1">
                                                           <img class="r-3" src="assets/img/demo/a3.jpg" alt="">
                                                       </figure>
                                                       <h6>Dance with me tonight</h6>Lorem Ipsum
                                                   </div>
                                                   <div class="col-md-5 d-none d-lg-block">
                                                       <div class="d-flex">
                                                           <span class="ml-auto"> 5:03</span>
                                                           <a href="#" class="ml-auto"><i class="icon-share-1"></i></a>
                                                           <div class="ml-auto">
                                                               <a href="#" class="btn btn-outline-primary btn-sm">Buy at iTunes</a>
                                                           </div>
                                                       </div>
                                                   </div>
                                                   <div class="col-1 ml-auto d-lg-none">
                                                       <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                                           <i class="icon-more-1"></i></a>
                                                       <div class="dropdown-menu dropdown-menu-right">
                                                           <a  class="dropdown-item" href="#"><i class="icon-share-1 mr-3"></i> Share</a>
                                                           <a  class="dropdown-item" href="#"><i class="icon-shopping-bag mr-3"></i>Buy at iTunes</a>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="m-1 my-4">
                                               <div class="d-flex align-items-center">
                                                   <div class="col-1">
                                                       <a class="no-ajaxy media-url" href="assets/media/track1.mp3" data-wave="assets/media/track1.json">
                                                           <i class="icon-play s-28"></i>
                                                       </a>
                                                   </div>
                                                   <div class="col-md-6">
                                                       <figure class="avatar-md float-left  mr-3 mt-1">
                                                           <img class="r-3" src="assets/img/demo/a4.jpg" alt="">
                                                       </figure>
                                                       <h6>Dance with me tonight</h6>Lorem Ipsum
                                                   </div>
                                                   <div class="col-md-5 d-none d-lg-block">
                                                       <div class="d-flex">
                                                           <span class="ml-auto"> 5:03</span>
                                                           <a href="#" class="ml-auto"><i class="icon-share-1"></i></a>
                                                           <div class="ml-auto">
                                                               <a href="#" class="btn btn-outline-primary btn-sm">Buy at iTunes</a>
                                                           </div>
                                                       </div>
                                                   </div>
                                                   <div class="col-1 ml-auto d-lg-none">
                                                       <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                                           <i class="icon-more-1"></i></a>
                                                       <div class="dropdown-menu dropdown-menu-right">
                                                           <a  class="dropdown-item" href="#"><i class="icon-share-1 mr-3"></i> Share</a>
                                                           <a  class="dropdown-item" href="#"><i class="icon-shopping-bag mr-3"></i>Buy at iTunes</a>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="m-1 my-4">
                                               <div class="d-flex align-items-center">
                                                   <div class="col-1">
                                                       <a class="no-ajaxy media-url" href="assets/media/track2.mp3" data-wave="assets/media/track2.json">
                                                           <i class="icon-play s-28"></i>
                                                       </a>
                                                   </div>
                                                   <div class="col-md-6">
                                                       <figure class="avatar-md float-left  mr-3 mt-1">
                                                           <img class="r-3" src="assets/img/demo/a5.jpg" alt="">
                                                       </figure>
                                                       <h6>Dance with me tonight</h6>Lorem Ipsum
                                                   </div>
                                                   <div class="col-md-5 d-none d-lg-block">
                                                       <div class="d-flex">
                                                           <span class="ml-auto"> 5:03</span>
                                                           <a href="#" class="ml-auto"><i class="icon-share-1"></i></a>
                                                           <div class="ml-auto">
                                                               <a href="#" class="btn btn-outline-primary btn-sm">Buy at iTunes</a>
                                                           </div>
                                                       </div>
                                                   </div>
                                                   <div class="col-1 ml-auto d-lg-none">
                                                       <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                                           <i class="icon-more-1"></i></a>
                                                       <div class="dropdown-menu dropdown-menu-right">
                                                           <a  class="dropdown-item" href="#"><i class="icon-share-1 mr-3"></i> Share</a>
                                                           <a  class="dropdown-item" href="#"><i class="icon-shopping-bag mr-3"></i>Buy at iTunes</a>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="m-1 my-4">
                                               <div class="d-flex align-items-center">
                                                   <div class="col-1">
                                                       <a class="no-ajaxy media-url" href="assets/media/track2.mp3" data-wave="assets/media/track2.json">
                                                           <i class="icon-play s-28"></i>
                                                       </a>
                                                   </div>
                                                   <div class="col-md-6">
                                                       <figure class="avatar-md float-left  mr-3 mt-1">
                                                           <img class="r-3" src="assets/img/demo/a8.jpg" alt="">
                                                       </figure>
                                                       <h6>Dance with me tonight</h6>Lorem Ipsum
                                                   </div>
                                                   <div class="col-md-5 d-none d-lg-block">
                                                       <div class="d-flex">
                                                           <span class="ml-auto"> 5:03</span>
                                                           <a href="#" class="ml-auto"><i class="icon-share-1"></i></a>
                                                           <div class="ml-auto">
                                                               <a href="#" class="btn btn-outline-primary btn-sm">Buy at iTunes</a>
                                                           </div>
                                                       </div>
                                                   </div>
                                                   <div class="col-1 ml-auto d-lg-none">
                                                       <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                                           <i class="icon-more-1"></i></a>
                                                       <div class="dropdown-menu dropdown-menu-right">
                                                           <a  class="dropdown-item" href="#"><i class="icon-share-1 mr-3"></i> Share</a>
                                                           <a  class="dropdown-item" href="#"><i class="icon-shopping-bag mr-3"></i>Buy at iTunes</a>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade" id="w2-tab3" role="tabpanel"
                                         aria-labelledby="w2-tab3">
                                        <div class="card-body has-items-overlay playlist p-5">
                                            <div class="row">
                                                <div class="col-md-3 mb-3">
                                                    <figure class="mb-2">
                                                        <div class="img-wrapper r-10">
                                                            <img class=" r-10" src="assets/img/demo/a7.jpg"
                                                                 alt="/">
                                                            <div class="img-overlay text-white p-5">
                                                                <div class="center-center">
                                                                    <a class="no-ajaxy media-url"
                                                                       href="assets/media/track2.mp3" data-wave="assets/media/track2.json">
                                                                        <i class="icon-play s-48"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                    <div class="figure-title">
                                                        <h6>To Phir Ao</h6>
                                                        <small>Atif Aslam</small>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <figure class="mb-2">
                                                        <div class="img-wrapper r-10">
                                                            <img class=" r-10" src="assets/img/demo/a6.jpg"
                                                                 alt="/">
                                                            <div class="img-overlay text-white p-5">
                                                                <div class="center-center">
                                                                    <a class="no-ajaxy media-url"
                                                                       href="assets/media/track2.mp3" data-wave="assets/media/track2.json">
                                                                        <i class="icon-play s-48"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                    <div class="figure-title">
                                                        <h6>To Phir Ao</h6>
                                                        <small>Atif Aslam</small>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <figure class="mb-2">
                                                        <div class="img-wrapper r-10">
                                                            <img class=" r-10" src="assets/img/demo/a5.jpg"
                                                                 alt="/">
                                                            <div class="img-overlay text-white p-5">
                                                                <div class="center-center">
                                                                    <a class="no-ajaxy media-url"
                                                                       href="assets/media/track2.mp3" data-wave="assets/media/track2.json">
                                                                        <i class="icon-play s-48"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                    <div class="figure-title">
                                                        <h6>To Phir Ao</h6>
                                                        <small>Atif Aslam</small>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <figure class="mb-2">
                                                        <div class="img-wrapper r-10">
                                                            <img class=" r-10" src="assets/img/demo/a4.jpg"
                                                                 alt="/">
                                                            <div class="img-overlay text-white p-5">
                                                                <div class="center-center">
                                                                    <a class="no-ajaxy media-url"
                                                                       href="assets/media/track2.mp3" data-wave="assets/media/track2.json">
                                                                        <i class="icon-play s-48"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                    <div class="figure-title">
                                                        <h6>To Phir Ao</h6>
                                                        <small>Atif Aslam</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 mb-3">
                                                    <figure class="mb-2">
                                                        <div class="img-wrapper r-10">
                                                            <img class=" r-10" src="assets/img/demo/a3.jpg"
                                                                 alt="/">
                                                            <div class="img-overlay text-white p-5">
                                                                <div class="center-center">
                                                                    <a class="no-ajaxy media-url"
                                                                       href="assets/media/track2.mp3" data-wave="assets/media/track2.json">
                                                                        <i class="icon-play s-48"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                    <div class="figure-title">
                                                        <h6>To Phir Ao</h6>
                                                        <small>Atif Aslam</small>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <figure class="mb-2">
                                                        <div class="img-wrapper r-10">
                                                            <img class=" r-10" src="assets/img/demo/a2.jpg"
                                                                 alt="/">
                                                            <div class="img-overlay text-white p-5">
                                                                <div class="center-center">
                                                                    <a class="no-ajaxy media-url"
                                                                       href="assets/media/track2.mp3" data-wave="assets/media/track2.json">
                                                                        <i class="icon-play s-48"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                    <div class="figure-title">
                                                        <h6>To Phir Ao</h6>
                                                        <small>Atif Aslam</small>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <figure class="mb-2">
                                                        <div class="img-wrapper r-10">
                                                            <img class=" r-10" src="assets/img/demo/a1.jpg"
                                                                 alt="/">
                                                            <div class="img-overlay text-white p-5">
                                                                <div class="center-center">
                                                                    <a class="no-ajaxy media-url"
                                                                       href="assets/media/track2.mp3" data-wave="assets/media/track2.json">
                                                                        <i class="icon-play s-48"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                    <div class="figure-title">
                                                        <h6>To Phir Ao</h6>
                                                        <small>Atif Aslam</small>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <figure class="mb-2">
                                                        <div class="img-wrapper r-10">
                                                            <img class=" r-10" src="assets/img/demo/a8.jpg"
                                                                 alt="/">
                                                            <div class="img-overlay text-white p-5">
                                                                <div class="center-center">
                                                                    <a class="no-ajaxy media-url"
                                                                       href="assets/media/track2.mp3" data-wave="assets/media/track2.json">
                                                                        <i class="icon-play s-48"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                    <div class="figure-title">
                                                        <h6>To Phir Ao</h6>
                                                        <small>Atif Aslam</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3 card p-3">
                            <div>
                                <div class="mr-3 float-left text-center">
                                    <div class="s-36">09</div>
                                    <span>July</span>
                                </div>
                                <div>
                                    <div>
                                        <a href="#">
                                            <h4 class="text-primary">New York park live</h4>
                                        </a>
                                    </div>
                                    <small> 33 Cliveden Close, Melbourne VIC 3000, Australia</small>
                                    <div class="mt-2">
                                        <i class="icon-clock-o mr-1"> </i> 7:00 PM - 11:00 PM
                                    </div>
                                </div>

                            </div>

                            <small class="my-3">Artist Performing</small>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="avatar-group">
                                    <figure class="avatar no-shadow">
                                        <img src="assets/img/demo/u4.jpg" alt=""></figure>
                                    <figure class="avatar no-shadow">
                                        <img src="assets/img/demo/u5.jpg" alt=""></figure>
                                    <figure class="avatar no-shadow">
                                        <img src="assets/img/demo/u6.jpg" alt=""></figure>
                                </div>
                                <div>
                                    <!-- <a href="events-single.html">Buy Tickets</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 card p-3">
                            <div>
                                <div class="mr-3 float-left text-center">
                                    <div class="s-36">09</div>
                                    <span>March</span>
                                </div>
                                <div>
                                    <div>
                                        <a href="#">
                                            <h4 class="text-primary">Linkin park live</h4>
                                        </a>
                                    </div>
                                    <small> 33 Cliveden Close, Melbourne VIC 3000, Australia</small>
                                    <div class="mt-2">
                                        <i class="icon-clock-o mr-1"> </i> 7:00 PM - 11:00 PM
                                    </div>
                                </div>
                            </div>

                            <small class="my-3">Artist Performing</small>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="avatar-group">
                                    <figure class="avatar no-shadow">
                                        <img src="assets/img/demo/u4.jpg" alt=""></figure>
                                    <figure class="avatar no-shadow">
                                        <img src="assets/img/demo/u5.jpg" alt=""></figure>
                                    <figure class="avatar no-shadow">
                                        <img src="assets/img/demo/u6.jpg" alt=""></figure>
                                </div>
                                <div>
                                    <!-- <a href="events-single.html">Buy Tickets</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 card">
                            <figure class="card-img figure">
                                <div class="img-wrapper">
                                    <img class="r-3" src="assets/img/demo/v11.jpg" alt="Card image">
                                </div>
                                <div class="img-overlay text-white">
                                    <div class="figcaption">
                                    </div>
                                </div>
                                <!--<div class="has-bottom-gradient">-->
                                    <div class="d-flex">
                                        <div class="card-img-overlay">
                                            <div>
                                                <div class="mr-3 float-left text-center">
                                                    <div class="s-36">24</div>
                                                    <span>July</span>
                                                </div>
                                                <div>
                                                    <div>
                                                        <a href="#">
                                                            <h4 class="text-primary">Linkin park live</h4>
                                                        </a>
                                                    </div>
                                                    <small> 33 Cliveden Close, Melbourne VIC 3000, Australia</small>
                                                    <div class="mt-2">
                                                        <i class="icon-clock-o mr-1"> </i> 7:00 PM - 11:00 PM
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                <!--</div>-->
                            </figure>
                            <!--<div class="bottom-gradient"></div>-->
                        </div>
                    </div>
                </div>
            </section>
            <!--@PlayLIst & Events-->

            
            <!--@Recommend-->
                <!-- faq and contact section start -->
            <div class="faq">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                            <div class="wrapper p-md-5 p-3  ">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <h4>FAQ's</h4>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <i class="more-less glyphicon glyphicon-plus"></i>
                                                    <h4>Lorem ipsum dolor sit ame</h4>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    <i class="more-less glyphicon glyphicon-plus"></i>
                                                    <h4>Lorem ipsum dolor sit ame</h4>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    <i class="more-less glyphicon glyphicon-plus"></i>
                                                    <h4>Lorem ipsum dolor sit ame</h4>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                            </div>
                                        </div>
                                    </div>
            
                                </div><!-- panel-group -->
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="wrapper p-md-5 p-3  ">
                                <div class="contact">
                                    <h4>Signup Now</h4>
                                        <form action="action_page.php">
                                            <div class="container-form">
                                            <input type="text" placeholder="Email address" name="mail" required>
                                            </div>
                                        
                                            <div class="container-form">
                                            <input type="submit" value="Subscribe">
                                            </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
</div>
</main><!--@Page Content-->

@endsection


