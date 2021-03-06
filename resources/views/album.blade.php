@extends('layouts.sidenav')

@section('innercontent')
<!--Page Content-->
<main>
    <div class="container-fluid relative animatedParent animateOnce p-0">
        <div class="animated fadeInUpShort">
            <!--Banner-->
            <section class="relative" data-bg-possition="center"
                     style="background-image:url('../assets/img/demo/album-bg.jpg');">
                <div class="wrapper has-bottom-gradient">
                    <div class="row pt-5 ml-lg-5 mr-lg-5">
                        <div class="col-md-10 offset-1">
                            <div class="row my-5 pt-5">
                                <div class="col-md-3">
                                    <img src="{{$album[0]['album_pic']}}" alt="/">
                                </div>
                                <div class="col-md-9">
                                    <div class="d-md-flex align-items-center justify-content-between">
                                        <h1 class="my-3 text-white ">{{$album[0]['album_name']}}</h1>
                                        <div class="ml-auto mb-2">
                                            <a href="#" class="snackbar" data-text="Bookmark clicked"
                                               data-pos="top-right"
                                               data-showAction="true"
                                               data-actionText="ok"
                                               data-actionTextColor="#fff"
                                               data-backgroundColor="#0c101b"><i class="icon-bookmark s-24"></i></a>
                                            <a href="#" class="snackbar ml-3" data-text="You like this song"
                                               data-pos="top-right"
                                               data-showAction="true"
                                               data-actionText="ok"
                                               data-actionTextColor="#fff"
                                               data-backgroundColor="#0c101b"><i class="icon-heart s-24"></i></a>
                                            <a href="#" class="snackbar ml-3" data-text="Thanks for sharing"
                                               data-pos="top-right"
                                               data-showAction="true"
                                               data-actionText="ok"
                                               data-actionTextColor="#fff"
                                               data-backgroundColor="#0c101b"><i class="icon-share-1 s-24"></i></a>
                                        </div>
                                    </div>
    
                                    <div class="text-white my-2">
                                        <p class="heading-banner">{{$album[0]['description']}}</p>
                                    </div>
                                    <div class="pt-3">
                                        <a href="#" class="btn btn-primary btn-lg">Buy Now At iTunes</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-gradient "></div>
            </section>
            <!--@Banner-->
    
            <div class="wrapper p-3 p-lg-5">
                <!--New Releases-->
                <section>
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="playlist">
                                        <ul class="list-group">
                                            @foreach($track_lists as $key => $value)
                                                <li class="list-group-item my-1">
                                                    <div class="d-flex align-items-center">
                                                        <div class="col-1">
                                                            <a class="no-ajaxy media-url" href="{{$value->track}}" data-wave="/assets/media/track1.json">
                                                                <i class="icon-play s-28"></i>
                                                            </a>
                                                        </div>
                                                        <div class="col-6">
                                                            <h6>{{$value->track_name}}</h6>
                                                        </div>
                                                        <span class=" ml-auto">{{$value->track_time}}</span>
                                                        <a href="#" class="ml-auto"><i class="icon-share-1"></i></a>
                                                        <div class="ml-auto">
                                                            <a href="#" class="btn btn-outline-primary btn-sm d-none d-lg-block">Buy at
                                                                iTunes</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                            {{-- <li class="list-group-item my-1">
                                                <div class="d-flex align-items-center">
                                                    <div class="col-1">
                                                        <a class="no-ajaxy media-url" href="assets/media/track2.mp3" data-wave="assets/media/track2.json">
                                                            <i class="icon-play s-28"></i>
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        <h6>Dance with me tonight</h6>
                                                    </div>
                                                    <span class=" ml-auto"> 5:03</span>
                                                    <a href="#" class="ml-auto"><i class="icon-share-1"></i></a>
                                                    <div class="ml-auto">
                                                        <a href="#" class="btn btn-outline-primary btn-sm d-none d-lg-block">Buy at
                                                            iTunes</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item my-1">
                                                <div class="d-flex align-items-center">
                                                    <div class="col-1">
                                                        <a class="no-ajaxy media-url" href="assets/media/track1.mp3" data-wave="assets/media/track1.json">
                                                            <i class="icon-play s-28"></i>
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        <h6>Dance with me tonight</h6>
                                                    </div>
                                                    <span class=" ml-auto"> 5:03</span>
                                                    <a href="#" class="ml-auto"><i class="icon-share-1"></i></a>
                                                    <div class="ml-auto">
                                                        <a href="#" class="btn btn-outline-primary btn-sm d-none d-lg-block">Buy at
                                                            iTunes</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item my-1">
                                                <div class="d-flex align-items-center">
                                                    <div class="col-1">
                                                        <a class="no-ajaxy media-url" href="assets/media/track1.mp3" data-wave="assets/media/track1.json">
                                                            <i class="icon-play s-28"></i>
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        <h6>Dance with me tonight</h6>
                                                    </div>
                                                    <span class=" ml-auto"> 5:03</span>
                                                    <a href="#" class="ml-auto"><i class="icon-share-1"></i></a>
                                                    <div class="ml-auto">
                                                        <a href="#" class="btn btn-outline-primary btn-sm d-none d-lg-block">Buy at
                                                            iTunes</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item my-1">
                                                <div class="d-flex align-items-center">
                                                    <div class="col-1">
                                                        <a class="no-ajaxy media-url" href="assets/media/track1.mp3" data-wave="assets/media/track1.json">
                                                            <i class="icon-play s-28"></i>
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        <h6>Dance with me tonight</h6>
                                                    </div>
                                                    <span class=" ml-auto"> 5:03</span>
                                                    <a href="#" class="ml-auto"><i class="icon-share-1"></i></a>
                                                    <div class="ml-auto">
                                                        <a href="#" class="btn btn-outline-primary btn-sm d-none d-lg-block">Buy at
                                                            iTunes</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item my-1">
                                                <div class="d-flex align-items-center">
                                                    <div class="col-1">
                                                        <a class="no-ajaxy media-url" href="assets/media/track1.mp3" data-wave="assets/media/track1.json">
                                                            <i class="icon-play s-28"></i>
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        <h6>Dance with me tonight</h6>
                                                    </div>
                                                    <span class=" ml-auto"> 5:03</span>
                                                    <a href="#" class="ml-auto"><i class="icon-share-1"></i></a>
                                                    <div class="ml-auto">
                                                        <a href="#" class="btn btn-outline-primary btn-sm d-none d-lg-block">Buy at
                                                            iTunes</a>
                                                    </div>
                                                </div>
                                            </li> --}}
                                        </ul>
    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--@New Releases-->
    
            </div>
    
        </div>
    </div>
</main><!--@Page Content-->

@endsection