@extends('layouts.sidenav')

@section('innercontent')
<div id="app">
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
                     style="background-image:url('assets/img/demo/contact-bg.jpg');">
                    <div class="wrapper has-bottom-gradient">
                        <div class="p-md-5 p-3">
                            <div class="row">
                                <div class="col-12 col-lg-6 fadeInRight animated">
                                    <div class="xv-slider-content clearfix color-white">
                                        <h1 class="mt-5 heading-banner">Contact Us</h1>
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
                        <section>
                            <div class="wrapper p-md-5 p-3">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 text-center pt-5 mt-3">
                                            <div class="contact mb-5">
                                                <h4>Contact Us</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            </div>
                                            <div class="card p-5 text-center">
                                                <h4 class="mb-3">Follow Us</h4>
                                                <div class="pt-3">
                                                    <i class="fa fa-facebook"></i>
                                                    <i class="fa fa-twitter"></i>
                                                    <i class="fa fa-instagram"></i>
                                                    <i class="fa fa-Youtube"></i>
                                                    <i class="fa fa-spotify"></i>
                                                    <i class="fa fa-apple"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <div class="card mt-1 mb-5">
                                                <div class="card-body">
                                                    <div id="comments" class="comments-area">
                                                        <div class="post-comments my-5 form-material">
                                                            <div id="respond" class="comment-respond">
                                                                <!--<h3 id="reply-title" class="comment-reply-title ml-3 mb-5">
                                                                     <small>
                                                                         <a rel="nofollow" id="cancel-comment-reply-link" href="/wp/themes/rekord-light/vidoes/vintage-culture-bruno-be-ownboss-2/#respond" style="display:none;">Cancel reply</a>
                                                                    </small>
                                                                </h3>-->
                                                                <form action="#" method="post" id="contactform" class="contact-form">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input class="form-control" type="text" placeholder="Name" name="author" id="author" value="" size="60" required="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input class="form-control" type="email" placeholder="Email" name="email" id="email" value="" size="30" required="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input class="form-control" type="text" placeholder="Subject" name="url" id="subject" value="" size="30">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <textarea id="message" placeholder="Write Something..." class="form-control r-0" name="message" cols="45" rows="5" required=""></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit btn btn-primary" value="Submit">
                                                                        <input type="hidden" name="submit" id="submit" value="0">
                                                                    </p>
                                                                </form>
                                                            </div>	
                                                        </div><!-- #respond -->
                                                    </div>
                                                </div><!-- #comments -->                 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section>
                            <div class="contact-outer text-center">
                                <div class="container">
                                    <div class="row">
                                        <div class="card p-3 mr-2 address-block">
                                            <h4><b>Address</b></h4>
                                            <p>123 Lorem Ipsum Street<br>USA, 80979</p>
                                        </div>
                                        <div class="card p-3 mr-2 address-block">
                                            <h4><b>Phone</b></h4>
                                            <p>(00)000 000 0000</p>
                                            <p>(00)000 000 0000</p>
                                        </div>
                                        <div class="card p-3 mr-2 address-block">
                                            <h4><b>Email</b></h4>
                                            <p>example@gmail.com</p>
                                            <p>example@gmail.com</p>
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