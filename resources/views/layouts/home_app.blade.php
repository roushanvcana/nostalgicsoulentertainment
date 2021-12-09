<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="icon" href="{{ asset('public/assets/img/basic/pin.png') }}" type="image/x-icon"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Nostalgic Soul Entertainment') }}</title>

    <!-- Scripts -->
<!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('public/assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/style.css') }}" rel="stylesheet">
    <style>
        .avatar-md , .active-track h6 a, .active-track small{
    display: none !important;
}
    </style>
</head>
<body class="sidebar-mini sidebar-collapse theme-light  sidebar-expanded-on-hover has-preloader">
<!-- Pre loader
  To disable preloader remove 'has-preloader' from body
 -->

 <div id="loader" class="loader">
    <div class="loader-container">
        <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>
        </div>
    </div>
</div>

<!-- @Pre loader-->
    <div id="app">
        

        <!-- <main> -->
            @yield('content')
        <!-- </main> -->
    </div><!--@#app-->
<!--/#app -->

<!--footer start-->
<div class="footer">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="wrapper p-md-5 p-3">
                    <h2 class="footer-title">Nostalgic Soul Entertainment</h2>
                    <p class="footer-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <h2 class="footer-title">Follow Us</h2>
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-instagram"></i>
                    <i class="fa fa-Youtube"></i>
                    <i class="fa fa-spotify"></i>
                    <i class="fa fa-apple"></i>
                        
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                <div class="wrapper p-md-5 p-3">
                    <div class="contact">
                        <h2 class="footer-title">Quick Links</h2>
                           <ul class="quick-links">
                               
                               <li class="links-li">
                               <a href="{{ url('/') }}">
                                <i class="fa fa-angle-double-right"></i>Home
                                </a>
                            </li>

                               <li class="links-li">
                               <a href="{{ url('about') }}"> 
                                <i class="fa fa-angle-double-right"></i>About
                               </a>
                            </li>

                               <li class="links-li">
                               <a href="{{ url('artists') }}">    
                              <i class="fa fa-angle-double-right">
                               </i>Artist
                               </a>
                               </li>

                               <li class="links-li">
                               <a href="{{ url('albums') }}"> 
                               <i class="fa fa-angle-double-right">
                               </i>Albums
                               </a>   
                            </li>

                               <li class="links-li">
                               <a href="{{ url('videos') }}"> 
                                <i class="fa fa-angle-double-right"></i>Videos
                               </a>
                            </li>
                           </ul> 
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                <div class="wrapper p-md-5 p-3">
                    <div class="contact">
                        <h2 class="footer-title">Reach Us Now</h2>
                        <ul class="quick-links">
                            <li class="links-li"><i class="fa fa-home"></i>113 Lorem Ipsum Street, USA</li>
                            <li class="links-li"><i class="fa fa-phone"></i>(00) 000 000 0000</li>
                            <li class="links-li"><i class="fa fa-envelope"></i>example@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <p class="footer-para">© 2021 Nostalgic Soul Entertainment All Rights Reserved | Designed by <a href="https://vcanaglobal.com/" target="_blank">Vcana Global, Inc.</a></p>
            </div>
        </div>
</div>
<!--footer ends-->


<!-- <script src="function toggleIcon(e) {
    $(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .toggleClass('glyphicon-plus glyphicon-minus');
}
$('.panel-group').on('hidden.bs.collapse', toggleIcon);
$('.panel-group').on('shown.bs.collapse', toggleIcon);"></script> -->
 <script src="https://maps.googleapis.com/maps/api/js?&key=AIzaSyC3YkZNNySdyR87o83QEHWglHfHD_PZqiw&libraries=places"></script>
    <script src="{{ asset('public/assets/js/app.js') }}"></script>
</body>
</html>


