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
                <li><a href="{{ URL::to('admin/albums/create') }}">Create a new album</a>
            </ul>
        </nav>
      </div>
      
    
      
    </div>
    <!-- Page Title Header Ends-->
   
    
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            
            <table class="table table-hover">
            <thead>
                <tr>
                    <th>Album</th>
                    <th>Tracks</th>
                    <th>Artist</th>
                    <th>Added on</th>
                    <th>Action</th>
                  
                </tr>
            </thead>
            <tbody>
                @foreach($data as $key => $value)
                <tr>
                    <!-- show the album (uses the show method found at GET /album/{id} -->
                    <td><a href="{{ URL::to('admin/albums/' . $value->id) }}"><img src="{{ $value->album_pic}}" alt="/"> {{ $value->album_name}}</a></td>
                    <td class="text-primary"> {{ $value->tracksCount }}</td>
                    <td>{{ $value->artists_id}}</td>
                    <td>{{ $value->created_at}}</td>
                    
                    <td>
                        <a class="btn btn-small btn-success" href="{{ URL::to('albums/' . $value->id.'/tracks/create') }}">Add Track</a>
        
                        <!-- edit this shark (uses the edit method found at GET /sharks/{id}/edit -->
                        <a class="btn btn-small btn-info" href="{{ URL::to('albums/' . $value->id . '/edit') }}">Edit</a>
                        <a class="btn btn-small btn-danger" href="{{ URL::to('albums/' . $value->id . '/edit') }}">Delete</a>
        
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        </div>
    </div>
</div>
@endsection