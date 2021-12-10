@extends('layouts.dashboard')

@section('content')

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">
      <div class="col-12">
        <div class="page-header">
          <h4 class="page-title">Albums</h4>
        </div>
        <nav class="navbar navbar-inverse">
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('admin/albums/create') }}">Create a new album</a></li>
               
            </ul>
        </nav>
      </div>
      
    {{-- {{$data[0]}} --}}
      
    </div>
    <!-- Page Title Header Ends-->


           <div class="row">
               <div class="col">
                   <img src="{{$data[0]['album_pic']}}" alt="/">
               </div>
               <div class="col">
                   <div class="d-md-flex">
                       <h1 class="my-3">{{$data[0]['album_name']}}</h1>
                      
                   </div>

                   <div class=" my-2">
                       <p class="heading-banner">{{$data[0]['description']}}</p>
                       <p><a class="btn btn-small btn-success" href="{{ URL::to('admin/albums/' . $data[0]['id'].'/tracks/create') }}">Add Track</a></p>
                   </div>
                  
               </div>
           </div>



<!--@Banner-->
           @if ($data[0]['tracksCount'] > 0)
               
          
     
            <div class="col-lg-12 grid-margin stretch-card mt-5">
                <div class="card">
                <div class="card-body">
                    
                    <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Track</th>
                            
                            <th>Artist</th>
                            <th>Time</th>
                            <th>Action</th>
                        
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($data[0]['tracksLists'] as $key => $value)
                        <tr>
                            <!-- show the album (uses the show method found at GET /album/{id} -->
                            <td><a href="{{ URL::to('admin/albums/' . $value->id) }}">
                            <img src="{{ $value->track_pic}}" alt="/"> {{ $value->track_name}}</a></td>
                            <td class="text-primary"> {{ $value->artists_id }}</td>
                            <td>{{ $value->track_time}}</td>
                            
                            
                            <td>
                                        
                                <!-- edit this shark (uses the edit method found at GET /sharks/{id}/edit -->
                                <a class="btn btn-small btn-primary no-ajaxy media-url" href="{{$value->track}}" data-wave="/assets/media/track1.json">
                                    <i class="icon-play s-28"></i>
                                </a>
                                <a class="btn btn-small btn-danger" href="{{ URL::to('albums/' . $value->id . '/edit') }}">Delete</a>
                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>

                    
                </div>
                </div>
            </div>
        @endif
</div>
@endsection


