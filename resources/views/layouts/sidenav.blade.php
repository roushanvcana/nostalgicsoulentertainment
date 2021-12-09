@extends('layouts.home_app')

@section('content')

<!-- Right Sidebar -->

<!-- Right Sidebar -->
<aside class="control-sidebar fixed ">
    <div class="slimScroll">
        <div class="sidebar-header">
            <h4>PlayList</h4>
            <p>Awesome Collection for you</p>
            <a href="#" data-toggle="control-sidebar" class="paper-nav-toggle  active"><i></i></a>
        </div>
        <div class="p-3">
            <ul id="playlist" class="playlist list-group">
                <li class="list-group-item my-1">
                    <a class="no-ajaxy media-url" href="assets/media/track1.mp3" data-wave="assets/media/track1.json">
                        <div class="d-flex justify-content-between align-items-center">
                            <i class="icon-play s-28"></i>
                            <figure class="avatar-md float-left mr-3 mt-1">
                                <img class="r-5" src="{{ asset('public/assets/img/demo/a1.jpg')}}" alt="">
                            </figure>
                            <div>
                                <h6>alexander Pierce</h6>Atif Aslam
                            </div>
                            <span class="badge badge-primary badge-pill"> 5:03</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item my-1">
                    <a class="no-ajaxy media-url" href="assets/media/track2.mp3" data-wave="assets/media/track2.json">
                        <div class="d-flex justify-content-between align-items-center">
                            <i class="icon-play s-28"></i>
                            <figure class="avatar-md float-left mr-3 mt-1">
                                <img class="r-5" src="{{ asset('public/assets/img/demo/a2.jpg')}}" alt="">
                            </figure>
                            <div>
                                <h6>alexander Pierce</h6>Atif Aslam
                            </div>
                            <span class="badge badge-primary badge-pill"> 5:03</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item my-1">
                    <a class="no-ajaxy media-url" href="assets/media/track3.mp3" data-wave="assets/media/track3.json">
                        <div class="d-flex justify-content-between align-items-center">
                            <i class="icon-play s-28"></i>
                            <figure class="avatar-md float-left mr-3 mt-1">
                                <img class="r-5" src="{{ asset('public/assets/img/demo/a4.jpg')}}" alt="">
                            </figure>
                            <div>
                                <h6>alexander Pierce</h6>Atif Aslam
                            </div>
                            <span class="badge badge-primary badge-pill"> 5:03</span>
                        </div>
                    </a>
                </li>

                <li class="list-group-item my-1">
                    <a class="no-ajaxy media-url" href="assets/media/track1.mp3"  data-wave="assets/media/track1.json">
                        <div class="d-flex justify-content-between align-items-center">
                            <i class="icon-play s-28"></i>
                            <figure class="avatar-md float-left mr-3 mt-1">
                                <img class="r-5" src="assets/img/demo/a5.jpg" alt="">
                            </figure>
                            <div>
                                <h6>alexander Pierce</h6>Atif Aslam
                            </div>
                            <span class="badge badge-primary badge-pill"> 5:03</span>
                        </div>
                    </a>
                </li>

                <li class="list-group-item my-1">
                    <a class="no-ajaxy media-url" href="assets/media/track2.mp3" data-wave="assets/media/track2.json">
                        <div class="d-flex justify-content-between align-items-center">
                            <i class="icon-play s-28"></i>
                            <figure class="avatar-md float-left mr-3 mt-1">
                                <img class="r-5" src="{{ asset('public/assets/img/demo/a6.jpg')}}" alt="">
                            </figure>
                            <div>
                                <h6>alexander Pierce</h6>Atif Aslam
                            </div>
                            <span class="badge badge-primary badge-pill"> 5:03</span>
                        </div>
                    </a>
                </li>


            </ul>

        </div>
    </div>
</aside>
<!-- /.right-sidebar -->
<!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
<div class="control-sidebar-bg shadow  fixed"></div>


<svg class="d-none">
    <defs>
        <symbol id="icon-cross" viewBox="0 0 24 24">
            <title>cross</title>
            <path
                    d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"
            />
        </symbol>
    </defs>
</svg>
<div class="searchOverlay page">
    <button
            id="btn-searchOverlay-close"
            class="btn btn--searchOverlay-close"
            aria-label="Close searchOverlay form"
    >
        <svg class="icon icon--cross">
            <use xlink:href="#icon-cross"></use>
        </svg>
    </button>
    <div class="searchOverlay__inner  searchOverlay__inner--up">
        <form class="searchOverlay__form" action="index.html">
            <input
                    class="searchOverlay__input"
                    name="searchOverlay"
                    type="text"
                    placeholder="Search"
                    autocomplete="off"
                    spellcheck="false"
            />
            <span class="searchOverlay__info">Hit enter to searchOverlay or ESC to close</span>
        </form>
    </div>
    <div class="searchOverlay__inner searchOverlay__inner--down">
        <div class="searchOverlay__related">
            <div class="searchOverlay__suggestion">
                <div class="card mb-3">
                    <div class="card-header transparent b-b">
                        <strong>New Artists</strong>
                    </div>
                    <ul class="playlist list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex align-items-center">
                                <div class="col-10">
                                    <figure class="avatar avatar-md float-left  mr-3 mt-1">
                                        <img src="{{ asset('public/assets/img/demo/u1.jpg')}}" alt="">
                                    </figure>
                                    <h6>Zoe Foe</h6>
                                    <small>5 Albums - 50 Songs</small>
                                </div>
                                <a href="#" class="ml-auto"><i class="icon-more"></i></a>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex align-items-center">
                                <div class="col-10">
                                    <figure class="avatar avatar-md float-left  mr-3 mt-1">
                                        <img src="{{ asset('public/assets/img/demo/u2.jpg')}}" alt="">
                                    </figure>
                                    <h6>Zoe Foe</h6>
                                    <small>5 Albums - 50 Songs</small>
                                </div>
                                <a href="#" class="ml-auto"><i class="icon-more"></i></a>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex align-items-center">
                                <div class="col-10">
                                    <figure class="avatar avatar-md float-left  mr-3 mt-1">
                                        <img src="{{ asset('public/assets/img/demo/u3.jpg')}}" alt="">
                                    </figure>
                                    <h6>Zoe Foe</h6>
                                    <small>5 Albums - 50 Songs</small>
                                </div>
                                <a href="#" class="ml-auto"><i class="icon-more"></i></a>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex align-items-center">
                                <div class="col-10">
                                    <figure class="avatar avatar-md float-left  mr-3 mt-1">
                                        <img src="{{ asset('public/assets/img/demo/u6.jpg')}}" alt="">
                                    </figure>
                                    <h6>Zoe Foe</h6>
                                    <small>5 Albums - 50 Songs</small>
                                </div>
                                <a href="#" class="ml-auto"><i class="icon-more"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="searchOverlay__suggestion">
                <div class="card mb-3">
                    <div class="card-header transparent b-b">
                        <strong>Events</strong>
                    </div>
                    <ul class="playlist list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex align-items-center ">
                                <div class="col-8 ">
                                    <a href="video-single.html">
                                        <h6>Battal of Bands</h6>
                                    </a>
                                    <small class="mt-1"><i class="icon-placeholder-3 mr-1 "></i> London Music Hall
                                    </small>
                                </div>
                                <div class="ml-auto">
                                    <div class="text-lg-center  bg-primary r-10 p-2 text-white primary-bg">
                                        <div class="s-18">24</div>
                                        <small>July, 2019</small>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex align-items-center ">
                                <div class="col-8 ">
                                    <a href="video-single.html">
                                        <h6>Battal of Bands</h6>
                                    </a>
                                    <small class="mt-1"><i class="icon-placeholder-3 mr-1 "></i> London Music Hall
                                    </small>
                                </div>
                                <div class="ml-auto">
                                    <div class="text-lg-center  bg-primary r-10 p-2 text-white primary-bg">
                                        <div class="s-18">08</div>
                                        <small>July, 2019</small>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex align-items-center ">
                                <div class="col-8 ">
                                    <a href="video-single.html">
                                        <h6>Battal of Bands</h6>
                                    </a>
                                    <small class="mt-1"><i class="icon-placeholder-3 mr-1 "></i> London Music Hall
                                    </small>
                                </div>
                                <div class="ml-auto">
                                    <div class="text-lg-center  bg-primary r-10 p-2 text-white primary-bg">
                                        <div class="s-18">12</div>
                                        <small>July, 2019</small>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--header start-->
<nav class="mainnav navbar navbar-default justify-content-between">
    <!--to center logo replace classess by:  navbar-center -->
    <div class="container relative  px-md-5 ">
    
        <a class="offcanvas dl-trigger paper-nav-toggle" type="button" data-toggle="offcanvas"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i></i>
    </a>
    <!-- <a class="navbar-brand" href="index.html"> -->
        <div class="d-flex align-items-center s-14 l-s-2">
            <span style="color:#FF1744;">Nostalgic Soul Entertainment</span>
        </div>
    {{-- </a> --}}
    <div class="paper_menu ml-auto">
        <div id="dl-menu" class="xv-menuwrapper responsive-menu">
            <ul class="dl-menu navmenu align-items-center">
                <!-- <li class="ajaxifyPage"><a href="/">Home</a> -->
				<li>
					<a href="{{ url('/') }}"><i class="fa fa-home"></i><span>Home</span></a>
                </li>
                 <li><!-- <a class="ajaxifyPage" href="categories.html"> -->
                    <a href="{{ url('genre') }}"><i class="icon icon-layers-1"></i><span>Genre</span></a>
                </li>
    
                <li><!-- <a class="ajaxifyPage" href="albums.html"> -->
                    <a href="{{ url('albums') }}"><i class="icon icon-windows"></i><span>Albums</span></a>
                </li>
                 <li><!--<a class="ajaxifyPage" href="videos.html"> -->
                    <a href="{{ url('videos') }}"><i class="icon icon-video-player-2"></i><span>Videos</span></a>
                </li>
                <li><!-- <a class="ajaxifyPage" href="events.html"> -->
                    <a href="{{ url('about') }}"><i class="fa fa-user"></i><span>About</span></a>
                </li>
    
                <li><!-- <a class="ajaxifyPage" href="contact.html"> -->
                    <a href="{{ url('contact') }}"><i class="fa fa-mobile"></i><span>Contact</span></a>
                </li>
                <!-- <li><a class="ajaxifyPage" href="blog.html"> -->
                    <!-- <i class="icon icon-newspaper "></i> <span>Blog</span> 
                </li>-->
    
                 <li>
                    <a href="{{ url('artists') }}"><i class="icon icon-users"></i><span>Artists</span></a>
                </li>
                <!-- <li><a href="#modalSignUp" class="btn btn-primary nav-btn" data-toggle="modal" 
                       data-target="#modalSignUp">Sign
                    Up</a> -->
              
				 <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a href="{{route('login')}}"><span  class="btn btn-primary nav-btn">{{ __('Login') }}</span></a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{route('register')}}"><span  class="btn btn-primary nav-btn">{{ __('Register') }}</span></a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
            </ul>

        </div>
        <!-- Login modal -->
    </div>


</div>


</nav>

<!--navbar-->
<!--header ends-->
<nav class="navbar-wrapper shadow navbar-bottom-fixed">
    <div class="navbar navbar-expand player-header justify-content-between  bd-navbar">
        <div class="d-flex align-items-center">
                        <div class="ml-2 mr-2">
                <a href="#" data-toggle="push-menu" class="paper-nav-toggle pp-nav-toggle paper-nav-toggle-sidenav d-xl-none">
                    <i></i>
                </a>
            </div>
            
            
    <a class="navbar-brand d-none d-lg-block" href="/nostalgicSoulEntertainment/" title="NOSTALGIC" rel="home">

    
    <div class="align-items-center s-14 l-s-2">
        <span>Nostalgic</span>
    </div>

    
</a>
        </div>

        <!--Player-->


   

<video id="track-video" width="300" controls="" type="video/mpeg" src="http://radio4.pro-fhi.net/radio/9151/stream" style="display: none;"></video>
   
<div id="mediaPlayer" class="player-bar col-lg-9 col-md-5" data-auto="true" data-snackbar-duration="">
     
       <div class="row align-items-center grid">

    <div class="col-2 active-track" style="">
          <div class="d-flex">
            <div class="float-left">
              <!--a href="{{ asset('/assets/media/track1.json') }}">   
        <div class="avatar-md mr-3">
        <img id="artwork" class="r-3" width="65" height="65" src="{{ asset('/assets/img/demo/a5.jpg') }}" alt="artist">
        </div>
        </a-->
            </div>
            <div>
              <h6 class="text-truncate d-none d-xl-block" style="max-width: 150px;">
              <a href="http://xvelopers.com/wp/themes/rekord-light/track/live-radio-stream/">avec Jean Michel Graveron en direct</a></h6>
              <small class="d-none d-xl-block">MATINALE  JEUDI 13 MAI STUDIO LMR</small>
            </div>
          </div></div>
        <div class="col">
            <div class="d-flex align-items-center">
                <div class="d-flex align-items-center mt-1">
                            <button id="previousTrack" class="btn btn-link disabled">
          <i class="icon-back s-18"></i>
      </button>
<button class="btn btn-link" id="playPause">
        <span id="play" style="display: none;"><i class="icon-play s-36"></i></span>
        <span id="pause" style=""><i class="icon-pause s-36 text-primary"></i></span>
    </button>
      <button id="nextTrack" class="btn btn-link">
          <i class="icon-next s-18"></i>
      </button>
                </div>
            </div>
        </div>


        <div class="col-6 d-none d-lg-block">
            <div id="waveform" data-bar-width="3" data-progress-color="#ff1744" class="d-none">
            <wave class="custom-style" style="display: block; position: inherit !important; user-select: none; height: 50px; width: 100%; overflow: auto hidden;">
                <wave class="custom-style" style="position: inherit !important; z-index: 3; left: 0px; top: 0px; bottom: 0px; overflow: hidden; width: 0px; display: none; box-sizing: border-box; border-right: 1px solid rgb(51, 51, 51); pointer-events: none; ">
                    <canvas  class="custom-style" style="position: inherit !important; left: 0px; top: 0px; bottom: 0px; height: 100%;"></canvas>
                </wave>
                    <canvas  class="custom-style" style="position: inherit !important; z-index: 2; left: 0px; top: 0px; bottom: 0px; height: 100%; pointer-events: none;"></canvas>
            </wave>
                    <audio preload="auto" src="http://radio4.pro-fhi.net/radio/9151/stream" style="width: 100%;"></audio>
            </div>
            <div class="music_pseudo_bars" style="display: block;">
                                <div class="music_pseudo_bar"></div>
                                <div class="music_pseudo_bar"></div>
                                <div class="music_pseudo_bar"></div>
                                <div class="music_pseudo_bar"></div>
                                <div class="music_pseudo_bar"></div>
                                <div class="music_pseudo_bar"></div>
                                <div class="music_pseudo_bar"></div>
                                <div class="music_pseudo_bar"></div>
                                <div class="music_pseudo_bar"></div>
                                <div class="music_pseudo_bar"></div>
                                <div class="music_pseudo_bar"></div>
                                <div class="music_pseudo_bar"></div>
                                <div class="music_pseudo_bar"></div>
                                <div class="music_pseudo_bar"></div>
                                <div class="music_pseudo_bar"></div>
                                <div class="music_pseudo_bar"></div>
                                <div class="music_pseudo_bar"></div>
                                <div class="music_pseudo_bar"></div>
                                <div class="music_pseudo_bar"></div>
                                <div class="music_pseudo_bar"></div>
                                <div class="music_pseudo_bar"></div>
                            </div>
        </div>


        <div class="col player-mini">
            <small id="mediaPlayer-time" class="track-time mr-2 text-primary align-middle">0:11</small>
                        <!-- Volume button -->
            <div class="btn-group dropup">
                <div data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-speaker-6 s-18 align-middle mr-2"></i>
                </div>
                <div class="dropdown-menu volume-dropdown-menu ">
                    <div class="slidecontainer">
                        <input type="range" min="0" max="1" value="1" step="0.1" class="form-control-range slider" id="volume">
                    </div>
                </div>
            </div>
                        <a class="no-ajaxy" data-toggle="control-sidebar">
                <i class="icon icon-menu-3 s-18 align-middle"></i>
            </a>
        </div>
    </div>
</div>
<!--@Player-->
        <!--Top Menu Start -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <!-- Right Sidebar Toggle Button -->
                                <li class="searchOverlay-wrap">
                    <a href="#" id="btn-searchOverlay" class="nav-link mr-3 btn--searchOverlay no-ajaxy">
                        <i class="icon icon-search s-18"></i>
                    </a>
                </li>
                            </ul>
        </div>
    </div>

</nav>
@yield('innercontent')
@endsection