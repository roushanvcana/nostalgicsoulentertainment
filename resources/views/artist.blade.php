@extends('layouts.sidenav')

@section('innercontent')
<main>
    <div class="container-fluid relative animatedParent animateOnce pb-5">
        <div class="animated fadeInUpShort">
    
           <!--Banner-->
            <section class="relative" data-bg-possition="center" style="background-image:url('assets/img/demo/Cecil-Album-Photo2.JPG');">
                <div class="has-bottom-gradient">
                    <div class="container">
                        <div class="pt-5 pb-5">
                            <div class="row my-5 pt-5">
                                <div class="col-md-2">
                                    <img width="250" height="250" src="{{$artist[0]['artist_pic']}}" class="img-fluid circle wp-post-image" alt="" sizes="(max-width: 250px) 100vw, 250px">                                
                                </div>
                                <div class="col-md-10">
                                    <div class="d-md-flex align-items-center justify-content-between">
                                        <div>
                                            <h1 class="mt-4 mb-3">{{$artist[0]['artist_name']}}</h1>
                                            <small class="mr-2">8 Albums</small>
                                            <small>3 Tracks</small>
                                            
                                        </div>
                                        <div class="ml-auto mb-2">
                                            <div class="ml-auto s-plugins">
                                                <a href="#" class="snackbar fav-snackbar relative" data-text="Added to favourites" data-text2="Removed from favourites" data-pos="top-right" data-showaction="true" data-actiontext="Ok" data-actiontextcolor="#fff" data-backgroundcolor="#0c101b">
                                                    <span class="simplefavorite-button" data-postid="1137" data-siteid="63" data-groupid="1" data-favoritecount="15" style=""><i class="icon-heart-o s-icon"></i></span>    <span class="fav-count"><span data-favorites-post-count-id="1137" data-siteid="63">15</span></span>
                                                </a>
    
                                                     <!--Share Icons-->
                                                <a href="#" class="ml-3 sharer"> <i class="icon-share-1 s-18"></i></a>
                                                <div class="sharer-bar d-flex justify-content-around">
                                                    <a href="#" class="social_share no-ajaxy" data-title="Asma Doe" data-text="" data-url="#" data-image="#" data-type="fb">
                                                            <i class=""></i>
                                                    </a>
                                                    <a href="#" class="social_share no-ajaxy" data-title="Asma Doe" data-text="" data-url="#" data-image="#" data-type="tw">
                                                            <i class=""></i>
                                                    </a>
                                                </div>
                                            </div>                                        
                                        </div>
                                        
                                    </div>
                                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-white my-2">
                                                <p>{{$artist[0]['description']}}</p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-gradient "></div>
            </section>
            
            <div class="card">
               <div class="container card-header">
                    <div class="mt-3">
                        <ul class=" nav nav-tabs ml-2 card-header-tabs nav-material responsive-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link show active" id="tabx-0" data-toggle="tab" href="#tab-0" role="tab" aria-selected="true">
                                    <span class="text-capitalize">tracks</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tabx-1" data-toggle="tab" href="#tab-1" role="tab" aria-selected="false">
                                    <span class="text-capitalize">albums</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">           
                <div class="tab-content mt-5" id="v-pills-tabContent1">
                    <div class="tab-pane fade active show" id="tab-0" role="tabpanel" aria-labelledby="tab-0">
                        <div class="playlist">
                            <ul class="list-group">
                               @foreach($track_lists as $key => $value)
                                <li class="track post m-1 list-group-item">
                                    
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <a data-title="Upon A Time" data-time="{{$value->track_time}}" href="{{$value->track}}"> 
                                                <i class="icon-play play-btn-icon s-16" aria-hidden="true"></i>        
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center col-md-6">
                                            <figure class="avatar-md mr-3 ml-3 track-fiqure">
                                                <img width="265" height="265" src="{{ $value->track_pic }}" class="img-fluid r-3 track-image" alt="" loading="lazy" sizes="(max-width: 265px) 100vw, 265px">            
                                                </figure>
                                                <div>
                                                    <a data-toggle="collapse" href="#collapse-1227">
                                                        <h6 class="track-title">{{ $value->track_name}}</h6>
                                                    </a>
                                                </div>
                                        </div>
                                        <div class="col-md-6 d-none d-lg-block">
                                            <div class="d-flex">  
                                                <div class="d-flex align-items-center ">
                                                    <span class="col mr-2 track-time">{{$value->track_time}}</span>
                                                    <div class="col">
                                                        <!--Share Icons-->
                                                        <a href="#" class="ml-3 sharer"> <i class="icon-share-1 s-14"></i></a>
                                                        <div class="sharer-bar d-flex justify-content-around">
                                                            <a href="#" class="social_share no-ajaxy" data-title="Upon A Time" data-url="" data-image="" data-type="fb">
                                                                <i class=""></i>
                                                            </a>
                                                            <a href="" class="social_share no-ajaxy" data-title="Upon A Time" data-url="" data-image="" data-type="tw">
                                                                <i class=""></i>
                                                            </a>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <a class="no-ajaxy" href="{{$value->track}}" download=""><i class="icon-download"></i></a>
                                                    </div>
                                                     <div class="col">
                                                        <a data-toggle="collapse" href="#collapse-1227">
                                                            <i class="icon-edit-1"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="ml-auto">
                                                    <div class="ml-3 relative">
                                                        <a href="https://www.apple.com/lae/itunes/" class="btn btn-outline-primary btn-sm">Buy At iTunes</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ml-auto d-xl-none">
                                            <a data-toggle="collapse" href="#collapsex-1227" role="button" aria-expanded="false" aria-controls="collapseTrack">
                                                <i class="icon-more"> </i>     
                                            </a>
                                        </div>
                                    </div>
                                    
                                </li>
                                @endforeach
                                
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                        <div class="row has-items-overlay playlist">
                            @foreach($album as $key => $value)
                            <div class="col-lg-3 col-md-4 col-sm-6 my-2"> 
                                <figure>
                                    <div class="img-wrapper">
                                        <img width="265" height="265" src="{{$value->album_pic}}" class="img-fluid wp-post-image" alt="" loading="lazy" sizes="(max-width: 265px) 100vw, 265px">        
                                        <div class="img-overlay text-white text-center">
                                            <a href="../album/{{$value->id}}">
                                                <div class="figcaption mt-3">
                                                    <i class="icon-link s-48"></i>
                                                    <h5 class="heading-banner mt-5">{{$value->album_name}}</h5>
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="figure-title text-center p-2">
                                            <h5 class="heading-banner">{{$value->album_name}}</h5>
                                            <span></span>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                             @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>                                                
                                                
@endsection                                                