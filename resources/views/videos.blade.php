@extends('layouts.sidenav')

@section('innercontent')
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
                    style="background-image:url('assets/img/demo/video-bg.jpg');">
                    <div class="wrapper has-bottom-gradient">
                        <div class="p-md-5 p-3">
                            <div class="row">
                                <div class="col-12 col-lg-6 fadeInRight animated">
                                    <div class="xv-slider-content clearfix color-white">
                                        <h1 class="mt-5 heading-banner">Video Music</h1>
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
<!--Page Content-->
<main class="page has-sidebar">
<div class="container-fluid relative animatedParent animateOnce">
    <div class="wrapper animated fadeInUpShort p-md-5 p-3">
        <!--<section class="section">
            <h1 class="my-5 text-primary">Videos</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Architecto atque aut blanditiis consectetur
            </p>
        </section>-->
        <section class="section">
            <div class="d-flex">
                <div class="mb-4">
                    <h4>Recommend For You</h4>
                </div>
            </div>
            <div class="row has-items-overlay">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <figure class="card-img figure">
                            <div class="img-wrapper">
                                <img src="{{ asset('public/assets/img/demo/v51.jpg')}}" alt="Card image">
                            </div>
                            <div class="img-overlay"></div>
                                <div class="d-flex">
                                    <div class="card-img-overlay">
                                        <div class="pt-3 pb-3">
                                            <a href="/video">
                                                <figure class="float-left mr-3 mt-1">
                                                    <i class="icon-play s-36"></i>
                                                </figure>
                                                <div>
                                                    <h4 class="heading-banner">Loream Ipsum</h4>
                                                    <small> Latest Video Released</small>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <figure class="card-img figure">
                            <div class="img-wrapper">
                                <img src="{{ asset('public/assets/img/demo/v81.jpg')}}" alt="Card image">
                            </div>
                            <div class="img-overlay"></div>
                                <div class="d-flex">
                                    <div class="card-img-overlay">
                                        <div class="pt-3 pb-3">
                                            <a href="/video">
                                                <figure class="float-left mr-3 mt-1">
                                                    <i class="icon-play s-36"></i>
                                                </figure>
                                                <div>
                                                    <h4 class="heading-banner">Loream Ipsum</h4>
                                                    <small> Latest Video Released</small>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <figure class="card-img figure">
                            <div class="img-wrapper">
                                <img src="{{ asset('public/assets/img/demo/v11.jpg')}}" alt="Card image">
                            </div>
                            <div class="img-overlay"></div>
                                <div class="d-flex">
                                    <div class="card-img-overlay">
                                        <div class="pt-3 pb-3">
                                            <a href="/video">
                                                <figure class="float-left mr-3 mt-1">
                                                    <i class="icon-play s-36"></i>
                                                </figure>
                                                <div>
                                                    <h4 class="heading-banner">Loream Ipsum</h4>
                                                    <small> Latest Video Released</small>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                        </figure>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="d-flex">
                <div class="mb-2">
                    <h4>You May Like</h4>
                    <p>Checkout new recommended videos</p>
                </div>
            </div>
            <div class="card no-b r-0">
                <div class="my-3">
                    <div class="lightSlider"
                         data-item="3"
                         data-item-lg="2"
                         data-item-md="1"
                         data-item-sm="1"
                         data-auto="false"
                         data-pager="false"
                         data-controls="true"
                         data-loop="false">
                        <div class="d-flex align-items-center ">
                            <div class="col-5">
                                <img src="{{ asset('public/assets/img/demo/v51.jpg')}}" alt="Card image">
                            </div>
                            <div class="ml-3">
                                <a href="/video">
                                    <h6>Ilallah, Sounds of Kolachi, Record Studio Season</h6>
                                </a>
                                <small class="mt-1">Record Studio</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center ">
                            <div class="col-5">
                                <img src="{{ asset('public/assets/img/demo/v81.jpg')}}" alt="Card image">
                            </div>
                            <div class="ml-3">
                                <a href="/video">
                                    <h6>Ilallah, Sounds of Kolachi, Record Studio Season</h6>
                                </a>
                                <small class="mt-1">Record Studio</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center ">
                            <div class="col-5">
                                <img src="{{ asset('public/assets/img/demo/v11.jpg')}}" alt="Card image">
                            </div>
                            <div class="ml-3">
                                <a href="/video">
                                    <h6>Ilallah, Sounds of Kolachi, Record Studio Season</h6>
                                </a>
                                <small class="mt-1">Record Studio</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center ">
                            <div class="col-5">
                                <img src="{{ asset('public/assets/img/demo/v81.jpg')}}" alt="Card image">
                            </div>
                            <div class="ml-3">
                                <a href="/video">
                                    <h6>Ilallah, Sounds of Kolachi, Record Studio Season</h6>
                                </a>
                                <small class="mt-1">Record Studio</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center ">
                            <div class="col-5">
                                <img src="{{ asset('public/assets/img/demo/v51.jpg')}}" alt="Card image">
                            </div>
                            <div class="ml-3">
                                <a href="/video">
                                    <h6>Ilallah, Sounds of Kolachi, Record Studio Season</h6>
                                </a>
                                <small class="mt-1">Record Studio</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       <section class="section">
           <div class="d-flex">
               <div class="mb-4">
                   <h4>Latest For You</h4>
               </div>
           </div>
           <div class="row">
               <div class="col-lg-3 col-md-6 mb-4">
                   <div class="card no-b">
                       <img src="{{ asset('public/assets/img/demo/v11.jpg')}}" alt="">
                       <div class="p-3">
                           <div class="mb-1">
                               <a href="/video">
                                   <h4>Ilallah, Sounds of Kolachi, Record Studio Season</h4>
                               </a>
                           </div>
                           <small>Record Studio</small>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-md-6 mb-4">
                   <div class="card no-b">
                       <img src="{{ asset('public/assets/img/demo/v51.jpg')}}" alt="">
                       <div class="p-3">
                           <div class="mb-1">
                               <a href="/video">
                                   <h4>Ilallah, Sounds of Kolachi, Record Studio Season</h4>
                               </a>
                           </div>
                           <small>Record Studio</small>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-md-6 mb-4">
                   <div class="card no-b">
                       <img src="{{ asset('public/assets/img/demo/v9 (1).jpg')}}" alt="">
                       <div class="p-3">
                           <div class="mb-1">
                               <a href="/video">
                                   <h4>Ilallah, Sounds of Kolachi, Record Studio Season</h4>
                               </a>
                           </div>
                           <small>Record Studio</small>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-md-6 mb-4">
                   <div class="card no-b">
                       <img src="{{ asset('public/assets/img/demo/v11.jpg')}}" alt="">
                       <div class="p-3">
                           <div class="mb-1">
                               <a href="/video">
                                   <h4>Ilallah, Sounds of Kolachi, Record Studio Season</h4>
                               </a>
                           </div>
                           <small>Record Studio</small>
                       </div>
                   </div>
               </div>
           </div>
           <div class="row mt-4">
               <div class="col-lg-3 col-md-6 mb-4">
                   <div class="card no-b">
                       <img src="{{ asset('public/assets/img/demo/v81.jpg')}}" alt="">
                       <div class="p-3">
                           <div class="mb-1">
                               <a href="/video">
                                   <h4>Ilallah, Sounds of Kolachi, Record Studio Season</h4>
                               </a>
                           </div>
                           <small>Record Studio</small>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-md-6 mb-4">
                   <div class="card no-b">
                       <img src="{{ asset('public/assets/img/demo/v9 (1).jpg')}}" alt="">
                       <div class="p-3">
                           <div class="mb-1">
                               <a href="/video">
                                   <h4>Ilallah, Sounds of Kolachi, Record Studio Season</h4>
                               </a>
                           </div>
                           <small>Record Studio</small>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-md-6 mb-4">
                   <div class="card no-b">
                       <img src="{{ asset('public/assets/img/demo/v51.jpg')}}" alt="">
                       <div class="p-3">
                           <div class="mb-1">
                               <a href="/video">
                                   <h4>Ilallah, Sounds of Kolachi, Record Studio Season</h4>
                               </a>
                           </div>
                           <small>Record Studio</small>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-md-6 mb-4">
                   <div class="card no-b">
                       <img src="{{ asset('public/assets/img/demo/v81.jpg')}}" alt="">
                       <div class="p-3">
                           <div class="mb-1">
                               <a href="/video">
                                   <h4>Ilallah, Sounds of Kolachi, Record Studio Season</h4>
                               </a>
                           </div>
                           <small>Record Studio</small>
                       </div>
                   </div>
               </div>
           </div>
       </section>

        

    </div>
</div>
</main><!--@Page Content-->
@endsection