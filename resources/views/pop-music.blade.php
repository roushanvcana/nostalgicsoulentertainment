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
                                        <h1 class="mt-5 heading-banner">English Music</h1>
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
    <main id="pageContent" class="page has-sidebar">
        <div class="container-fluid relative animatedParent animateOnce">
            <div class="animated fadeInUpShort p-md-5 p-3">
            
            <div class="wrapper">
                <section class="section">
                    <div class="mb-4 ml-3">
                        <h2>Pop Music</h2>
                    </div>
                    <div class="card-body no-p">
                        <div class="tab-content" id="v-pills-tabContent1">
                            <div class="tab-pane fade show active" id="w2-tab1" role="tabpanel" aria-labelledby="w2-tab1">
                               <div class="playlist pl-lg-3 pr-lg-3">
                                   <div class="m-1 my-4 card p-3">
                                       <div class="d-flex align-items-center">
                                           <div class="col-1">
                                               <a class="no-ajaxy media-url" href="assets/media/track1.mp3" data-wave="assets/media/track1.json">
                                                   <i class="icon-play s-28"></i>
                                               </a>
                                           </div>
                                           <div class="col-md-6 pt-2">
                                               <figure class="avatar-md float-left  mr-3 mt-1">
                                                   <img class="r-3" src="{{ asset('public/assets/img/demo/a1.jpg')}}" alt="">
                                               </figure>
                                               <h6>Dance with me tonight</h6>Joe Doe
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
                                               <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <i class="icon-more-1"></i></a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                       <a class="dropdown-item" href="#"><i class="icon-share-1 mr-3"></i> Share</a>
                                                       <a class="dropdown-item" href="#"><i class="icon-shopping-bag mr-3"></i>Buy at iTunes</a>
                                                   </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="m-1 my-4 card p-3">
                                       <div class="d-flex align-items-center">
                                           <div class="col-1">
                                               <a class="no-ajaxy media-url" href="assets/media/track2.mp3" data-wave="assets/media/track2.json">
                                                   <i class="icon-play s-28"></i>
                                               </a>
                                           </div>
                                           <div class="col-md-6 pt-2">
                                               <figure class="avatar-md float-left  mr-3 mt-1">
                                                   <img class="r-3" src="{{ asset('public/assets/img/demo/a2.jpg')}}" alt="">
                                               </figure>
                                               <h6>Dance with me tonight</h6>Joe Doe
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
                                               <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <i class="icon-more-1"></i></a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#"><i class="icon-share-1 mr-3"></i> Share</a>
                                                   <a class="dropdown-item" href="#"><i class="icon-shopping-bag mr-3"></i>Buy at iTunes</a>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="m-1 my-4 card p-3">
                                       <div class="d-flex align-items-center">
                                           <div class="col-1">
                                               <a class="no-ajaxy media-url" href="assets/media/track3.mp3" data-wave="assets/media/track3.json">
                                                   <i class="icon-play s-28"></i>
                                               </a>
                                           </div>
                                           <div class="col-md-6 pt-2">
                                               <figure class="avatar-md float-left  mr-3 mt-1">
                                                   <img class="r-3" src="{{ asset('public/assets/img/demo/a3.jpg')}}" alt="">
                                               </figure>
                                               <h6>Dance with me tonight</h6>Joe Doe
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
                                               <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <i class="icon-more-1"></i></a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#"><i class="icon-share-1 mr-3"></i> Share</a>
                                                   <a class="dropdown-item" href="#"><i class="icon-shopping-bag mr-3"></i>Buy at iTunes</a>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="m-1 my-4 card p-3">
                                       <div class="d-flex align-items-center">
                                           <div class="col-1">
                                               <a class="no-ajaxy media-url" href="assets/media/track1.mp3" data-wave="assets/media/track1.json">
                                                   <i class="icon-play s-28"></i>
                                               </a>
                                           </div>
                                           <div class="col-md-6 pt-2">
                                               <figure class="avatar-md float-left  mr-3 mt-1">
                                                   <img class="r-3" src="{{ asset('public/assets/img/demo/a4.jpg')}}" alt="">
                                               </figure>
                                               <h6>Dance with me tonight</h6>Joe Doe
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
                                               <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <i class="icon-more-1"></i></a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#"><i class="icon-share-1 mr-3"></i> Share</a>
                                                   <a class="dropdown-item" href="#"><i class="icon-shopping-bag mr-3"></i>Buy at iTunes</a>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="m-1 my-4 card p-3">
                                       <div class="d-flex align-items-center">
                                           <div class="col-1">
                                               <a class="no-ajaxy media-url" href="assets/media/track2.mp3" data-wave="assets/media/track2.json">
                                                   <i class="icon-play s-28"></i>
                                               </a>
                                           </div>
                                           <div class="col-md-6 pt-2">
                                               <figure class="avatar-md float-left  mr-3 mt-1">
                                                   <img class="r-3" src="{{ asset('public/assets/img/demo/a5.jpg')}}" alt="">
                                               </figure>
                                               <h6>Dance with me tonight</h6>Joe Doe
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
                                               <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <i class="icon-more-1"></i></a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#"><i class="icon-share-1 mr-3"></i> Share</a>
                                                   <a class="dropdown-item" href="#"><i class="icon-shopping-bag mr-3"></i>Buy at iTunes</a>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="m-1 my-4 card p-3">
                                       <div class="d-flex align-items-center">
                                           <div class="col-1">
                                               <a class="no-ajaxy media-url" href="assets/media/track2.mp3" data-wave="assets/media/track2.json">
                                                   <i class="icon-play s-28"></i>
                                               </a>
                                           </div>
                                           <div class="col-md-6 pt-2">
                                               <figure class="avatar-md float-left  mr-3 mt-1">
                                                   <img class="r-3" src="{{ asset('public/assets/img/demo/a8.jpg')}}" alt="">
                                               </figure>
                                               <h6>Dance with me tonight</h6>Joe Doe
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
                                               <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <i class="icon-more-1"></i></a>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#"><i class="icon-share-1 mr-3"></i> Share</a>
                                                   <a class="dropdown-item" href="#"><i class="icon-shopping-bag mr-3"></i>Buy at iTunes</a>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                            </div>
                            <div class="tab-pane fade" id="w2-tab3" role="tabpanel" aria-labelledby="w2-tab3">
                                <div class="card-body has-items-overlay playlist p-5">
                                    <div class="row">
                                        <div class="col-md-3 mb-3">
                                            <figure class="mb-2">
                                                <div class="img-wrapper r-10">
                                                    <img class=" r-10" src="{{ asset('public/assets/img/demo/a7.jpg')}}" alt="/">
                                                    <div class="img-overlay text-white p-5">
                                                        <div class="center-center">
                                                            <a class="no-ajaxy media-url" href="assets/media/track2.mp3" data-wave="assets/media/track2.json">
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
                                                    <img class=" r-10" src="{{ asset('public/assets/img/demo/a6.jpg')}}" alt="/">
                                                    <div class="img-overlay text-white p-5">
                                                        <div class="center-center">
                                                            <a class="no-ajaxy media-url" href="assets/media/track2.mp3" data-wave="assets/media/track2.json">
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
                                                    <img class=" r-10" src="{{ asset('public/assets/img/demo/a5.jpg')}}" alt="/">
                                                    <div class="img-overlay text-white p-5">
                                                        <div class="center-center">
                                                            <a class="no-ajaxy media-url" href="assets/media/track2.mp3" data-wave="assets/media/track2.json">
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
                                                    <img class=" r-10" src="{{ asset('public/assets/img/demo/a4.jpg')}}" alt="/">
                                                    <div class="img-overlay text-white p-5">
                                                        <div class="center-center">
                                                            <a class="no-ajaxy media-url" href="assets/media/track2.mp3" data-wave="assets/media/track2.json">
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
                                                    <img class=" r-10" src="{{ asset('public/assets/img/demo/a3.jpg')}}" alt="/">
                                                    <div class="img-overlay text-white p-5">
                                                        <div class="center-center">
                                                            <a class="no-ajaxy media-url" href="assets/media/track2.mp3" data-wave="assets/media/track2.json">
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
                                                    <img class=" r-10" src="{{ asset('public/assets/img/demo/a2.jpg')}}" alt="/">
                                                    <div class="img-overlay text-white p-5">
                                                        <div class="center-center">
                                                            <a class="no-ajaxy media-url" href="assets/media/track2.mp3" data-wave="assets/media/track2.json">
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
                                                    <img class=" r-10" src="{{ asset('public/assets/img/demo/a1.jpg')}}" alt="/">
                                                    <div class="img-overlay text-white p-5">
                                                        <div class="center-center">
                                                            <a class="no-ajaxy media-url" href="assets/media/track2.mp3" data-wave="assets/media/track2.json">
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
                                                    <img class=" r-10" src="{{ asset('public/assets/img/demo/a8.jpg')}}" alt="/">
                                                    <div class="img-overlay text-white p-5">
                                                        <div class="center-center">
                                                            <a class="no-ajaxy media-url" href="assets/media/track2.mp3" data-wave="assets/media/track2.json">
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
                </section>
            </div>
            </div>
        </div>
    </main><!--@Page Content-->
    @endsection