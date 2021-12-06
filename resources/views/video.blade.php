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
                                    <h1 class="mt-5 heading-banner">Video Single</h1>
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
    <div class="wrapper animated fadeInUpShort p-4 mt-2">
        <div class="row">
            <div class="col-lg-8">
                <div class="video-responsive">
                    <div class="no-b r-0">
                        <div class="card-body p-4">
                            <div class="d-lg-flex align-items-center">
                                <h1 class="my-3 h4">Ilallah, Sounds of Kolachi, Record Studio Season | Alexander Pierce</h1>
                                <div class="ml-auto">
                                    <a href="#" class="snackbar" data-text="Added to favourites"
                                       data-pos="top-right"
                                       data-showAction="true"
                                       data-actionText="ok"
                                       data-actionTextColor="#fff"
                                       data-backgroundColor="#0c101b"><i class="icon-bookmark s-24"></i></a>
                                    <a href="#" class="snackbar ml-3" data-text="Added to favourites"
                                       data-pos="top-right"
                                       data-showAction="true"
                                       data-actionText="ok"
                                       data-actionTextColor="#fff"
                                       data-backgroundColor="#0c101b"><i class="icon-heart s-24"></i></a>
                                    <a href="#" class="snackbar ml-3" data-text="Added to favourites"
                                       data-pos="top-right"
                                       data-showAction="true"
                                       data-actionText="ok"
                                       data-actionTextColor="#fff"
                                       data-backgroundColor="#0c101b"><i class="icon-share-1 s-24"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"
                                src="https://www.youtube.com/embed/GhifGWqFgMU?controls=0"
                                height="540"
                                allowfullscreen></iframe>
                    </div>

                </div>
                <div class="card">
                    <div class="card-body p-0">
                        <div class="lightSlider has-items-overlay playlist"
                             data-item="3"
                             data-item-xl="3"
                             data-item-lg="3"
                             data-item-md="3"
                             data-item-sm="1"
                             data-auto="false"
                             data-pager="false"
                             data-controls="true"
                             data-loop="false">
                            <div>
                                <div class="p-5 bg-primary text-white">
                                    <h5 class="font-weight-normal s-14 heading-banner">Views</h5>
                                    <span class="s-48 font-weight-lighter heading-banner text-primary">140</span>
                                    <div> Likes
                                        <span class="text-primary heading-banner">
                                            <i class="icon icon-arrow_downward"></i> 67%</span>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="p-5">
                                    <h5 class="font-weight-normal s-14">Share</h5>
                                    <span class="s-48 font-weight-lighter amber-text">700</span>
                                    <div>
                                            <span class="amber-text">
                                            <i class="icon icon-arrow_downward"></i> 34</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="p-5 light">
                                    <h5 class="font-weight-normal s-14">Comments</h5>
                                    <span class="s-48 font-weight-lighter text-indigo">411</span>
                                    <div> Iron
                                        <span class="text-indigo">
                                            <i class="icon icon-arrow_downward"></i> 89%</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="p-5">
                                    <h5 class="font-weight-normal s-14">Likes</h5>
                                    <span class="s-48 font-weight-lighter pink-text">224</span>
                                    <div> Sodium
                                        <span class="pink-text">
                                            <i class="icon icon-arrow_downward"></i> 47%</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card mt-1 mb-5">
                    <div class="card-body">
                        <div class="media my-5 ">
                            <div class="avatar avatar-md mr-3 mt-1">
                                <img src="assets/img/demo/u7.png" alt="user">
                            </div>
                            <div class="media-body">
                                <h6 class="mt-0">Ami Fro</h6>
                                Cras sit amet nibh libero, in gravida nulla.
                            </div>
                        </div>
                        <div class="media my-5 ">
                            <div class="avatar avatar-md mr-3 mt-1">
                                <img src="assets/img/demo/u6.png" alt="user">
                            </div>
                            <div class="media-body">
                                <h6 class="mt-0">Sara Kamzoon</h6>
                                vestibulum in vulputate at, tempus viverra turpis.
                                <div class="media p-2 my-4">
                                    <a href="#">
                                        <div class="avatar avatar-md mr-3 mt-1">
                                            <img src="assets/img/demo/u8.png" alt="user">
                                        </div>
                                    </a>
                                    <div class="media-body">
                                        <h6 class="mt-0">Joe Doe</h6>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                        sollicitudin.
                                    </div>
                                </div>
                                <div class="media p-2 my-4">
                                    <a href="#">
                                        <div class="avatar avatar-md mr-3 mt-1">
                                            <img src="assets/img/demo/u7.png" alt="user">
                                        </div>
                                    </a>
                                    <div class="media-body">
                                        <h6 class="mt-0">Find Doe

                                        </h6>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                        sollicitudin.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media my-5 ">
                            <div class="avatar avatar-md mr-3 mt-1">
                                <img src="assets/img/demo/u9.png" alt="user">
                            </div>

                            <div class="media-body">
                                <h6 class="mt-0">Ami Fro</h6>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                sollicitudin. Cras purus odio, vestibulum in
                                vulputate at, tempus viverra turpis.
                            </div>
                        </div>
                        <div class="media my-5 ">
                            <div class="avatar avatar-md mr-3 mt-1">
                                <img src="assets/img/demo/u10.png" alt="user">
                            </div>
                            <div class="media-body">
                                <h6 class="mt-0">Ami Fro </h6>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                sollicitudin. Cras purus odio, vestibulum in
                                vulputate at, tempus viverra turpis.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-1 mb-5">
                    <div class="card-body">
                        <div id="comments" class="comments-area">
                            <div class="post-comments my-5 form-material">
                                <div id="respond" class="comment-respond">
                                    <h3 id="reply-title" class="comment-reply-title ml-3 mb-5">Comment
                                         <small>
                                             <a rel="nofollow" id="cancel-comment-reply-link" href="/wp/themes/rekord-light/vidoes/vintage-culture-bruno-be-ownboss-2/#respond" style="display:none;">Cancel reply</a>
                                        </small>
                                    </h3>
                                    <form action="#" method="post" id="commentform" class="comment-form">
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
                                                        <input class="form-control" type="text" placeholder="Website" name="url" id="url" value="" size="30">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea id="comment" placeholder="Write Something..." class="form-control r-0" name="comment" cols="45" rows="5" required=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"> <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
                                        </p>
                                        <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit btn btn-primary" value="Post Comment"> <input type="hidden" name="comment_post_ID" value="1235" id="comment_post_ID">
                                            <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                        </p>
                                    </form>
                                </div>	
                            </div><!-- #respond -->
                        </div>
                    </div><!-- #comments -->                 
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card pt-3">
                    <div class="card-header">
                        <h6>You May Also like</h6>
                    </div>
                   <div class="card-body">
                       <div class="d-flex align-items-center mb-4 ">
                           <div class="col-5">
                               <img src="assets/img/demo/v51.jpg" alt="Card image">
                           </div>
                           <div class="ml-3">
                               <a href="video-single.html">
                                   <h6>Ilallah, Sounds of Kolachi, Record Studio Season</h6>
                               </a>
                               <small class="mt-1">Record Studio</small>
                           </div>
                       </div>
                       <div class="d-flex align-items-center mb-4 ">
                           <div class="col-5">
                               <img src="assets/img/demo/v81.jpg" alt="Card image">
                           </div>
                           <div class="ml-3">
                               <a href="video-single.html">
                                   <h6>Ilallah, Sounds of Kolachi, Record Studio Season</h6>
                               </a>
                               <small class="mt-1">Record Studio</small>
                           </div>
                       </div>
                       <div class="d-flex align-items-center mb-4 ">
                           <div class="col-5">
                               <img src="assets/img/demo/v11.jpg" alt="Card image">
                           </div>
                           <div class="ml-3">
                               <a href="video-single.html">
                                   <h6>Ilallah, Sounds of Kolachi, Record Studio Season</h6>
                               </a>
                               <small class="mt-1">Record Studio</small>
                           </div>
                       </div>
                       <div class="d-flex align-items-center mb-4 ">
                           <div class="col-5">
                               <img src="assets/img/demo/v9 (1).jpg" alt="Card image">
                           </div>
                           <div class="ml-3">
                               <a href="video-single.html">
                                   <h6>Ilallah, Sounds of Kolachi, Record Studio Season</h6>
                               </a>
                               <small class="mt-1">Record Studio</small>
                           </div>
                       </div>
                   </div>
                </div>

                <div class="card p-4 my-4">
                    <div class="d-flex align-items-center mb-4 ">
                        <div class="col-5">
                            <img src="assets/img/demo/v51.jpg" alt="Card image">
                        </div>
                        <div class="ml-3">
                            <a href="video-single.html">
                                <h6>Ilallah, Sounds of Kolachi, Record Studio Season</h6>
                            </a>
                            <small class="mt-1">Record Studio</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 ">
                        <div class="col-5">
                            <img src="assets/img/demo/v11.jpg" alt="Card image">
                        </div>
                        <div class="ml-3">
                            <a href="video-single.html">
                                <h6>Ilallah, Sounds of Kolachi, Record Studio Season</h6>
                            </a>
                            <small class="mt-1">Record Studio</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 ">
                        <div class="col-5">
                            <img src="assets/img/demo/v81.jpg" alt="Card image">
                        </div>
                        <div class="ml-3">
                            <a href="video-single.html">
                                <h6>Ilallah, Sounds of Kolachi, Record Studio Season</h6>
                            </a>
                            <small class="mt-1">Record Studio</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 ">
                        <div class="col-5">
                            <img src="assets/img/demo/v9 (1).jpg" alt="Card image">
                        </div>
                        <div class="ml-3">
                            <a href="video-single.html">
                                <h6>Ilallah, Sounds of Kolachi, Record Studio Season</h6>
                            </a>
                            <small class="mt-1">Record Studio</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 ">
                        <div class="col-5">
                            <img src="assets/img/demo/v81.jpg" alt="Card image">
                        </div>
                        <div class="ml-3">
                            <a href="video-single.html">
                                <h6>Ilallah, Sounds of Kolachi, Record Studio Season</h6>
                            </a>
                            <small class="mt-1">Record Studio</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 ">
                        <div class="col-5">
                            <img src="assets/img/demo/v9 (1).jpg" alt="Card image">
                        </div>
                        <div class="ml-3">
                            <a href="video-single.html">
                                <h6>Ilallah, Sounds of Kolachi, Record Studio Season</h6>
                            </a>
                            <small class="mt-1">Record Studio</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 ">
                        <div class="col-5">
                            <img src="assets/img/demo/v51.jpg" alt="Card image">
                        </div>
                        <div class="ml-3">
                            <a href="video-single.html">
                                <h6>Ilallah, Sounds of Kolachi, Record Studio Season</h6>
                            </a>
                            <small class="mt-1">Record Studio</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 ">
                        <div class="col-5">
                            <img src="assets/img/demo/v11.jpg" alt="Card image">
                        </div>
                        <div class="ml-3">
                            <a href="video-single.html">
                                <h6>Ilallah, Sounds of Kolachi, Record Studio Season</h6>
                            </a>
                            <small class="mt-1">Record Studio</small>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>
</div>
</main><!--@Page Content-->
@endsection