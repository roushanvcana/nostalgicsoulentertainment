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
          <h4 class="page-title">Generic - Track List</h4>
        </div>
        <!-- <nav class="navbar navbar-inverse" style="float: right;">
            <ul class="nav navbar-nav" id="edit-modal">
                <li>Create a new album
            </ul> -->

            <div class="btn-group" style="float: right;">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#add-track" style="background: #45219b;">
               Add Track List
              </button>
            </div>
        <!-- </nav> -->
      </div>
      
    
      
    </div>
    <!-- Page Title Header Ends-->
   
    
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <div class="table_box" style="overflow-x: scroll; width:1120px;">
            <table class="table table-hover">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Track Pic</th>
                    <th>Track Name</th>
                     <th>Track</th> 
                    <th>Track Time</th>
                    <th>Description</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            
            <tbody>
            @foreach($data['tracksCount'] as $key => $value)
                <?php $alldata="$value->artist_name- $value->artist_pic-$value->description-$value->music_categories_id-$value->id-$value->artists_id";?>
                <tr>
                    <!-- show the album (uses the show method found at GET /album/{id} -->
                    <td>{{ $value->category}}</td>
                    <td>
                    <a href="{{ URL::to('admin/tractlist' . $value->id) }}">
                    <img src="{{ $value->track_pic}}" alt="/"></a>
                    </td>
                    <td> {{ $value->track_name}} </td>
                      <td>
                        <a href="{{ $value->track}}" target="_blank" download>
                        <i class="bi bi-cloud-arrow-down-fill" style="font-size: 22px; color: #45219B;"></i>
                        </a>
                      </td> 
                     <td>{{ $value->track_time}}</td> 
                     <td>{{ $value->description}}</td> 
                    <td>{{ $value->created_at}}</td>
                    <td>{{ $value->updated_at}}</td>
                    
                    <td>
                        <!-- <a class="btn btn-small btn-success" href="{{ URL::to('artist/' . $value->id.'/tracks/create') }}">Add Track</a> -->
        
                        <!-- edit this shark (uses the edit method found at GET /sharks/{id}/edit -->
                        <button type="button" class="btn btn-small btn-info" data-toggle="modal" data-target="#modal-edit">
                         Edit
                        </button>
                        <!-- <a class="btn btn-small btn-info" href="{{ URL::to('artist/' . $value->id . '/edit') }}">Edit</a> -->
                        <a class="btn btn-small btn-danger" href="{{url('/tractlist/')}}/{{$value->id}}">Delete</a>
        
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>

   
<div class="modal fade" id="add-track">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="display:inline-block;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title"><b>Add Track Details</b></h4>
      </div>

      <div class="modal-body">
      <form role="form" action="{{ url('tractlist-save')}}" method="POST">
        @csrf
        <div class="form-group">
              <label for="">Select Music</label> 
              <input type="hidden" value="<?php echo $data['album_id'];?>" id="album_id" name="album_id"> 
             
              <select class="form-control" name="mcategory">
                  <?php
                    if(!is_null($data['music_category']))
                    {
                      foreach($data['music_category'] as $music)
                      {
                  ?>
                  <option value="<?php echo $music->id;?>"><?php echo $music->category;?></option>
                  <?php
                      }
                    }
                  ?>
              </select>
            </div>
          <div class="box-body">  
            <div class="form-group">
              <label for="">Track Name</label> 
              <input type="text" class="form-control" name="track_name" placeholder="Enter Name" >
            </div>
            <div class="form-group">
              <label for="">Track Pic</label> 
              <input type="file" class="form-control" name="track_pic" onchange="" >
              <!-- <input type="text" class="form-control" name="username" placeholder="Artist Pic"> -->
            </div>
            <div class="form-group">
              <label for="">Track</label> 
              <input type="file" class="form-control" name="track" accept="audio/*">
              <!-- <input type="text" class="form-control" name="track" placeholder="Upload Track" > -->
            </div>
            <div class="form-group">
              <label for="">Track Time</label> 
              <input type="time" class="form-control" name="track_time" placeholder="Enter Track Time" >
            </div>  
            <div class="form-group">
              <label for="">Description</label> 
           <textarea id="description" placeholder="Enter Description" name="description" class="form-control"></textarea>
                      
              <!-- <input type="text" class="form-control" name="description" placeholder="Enter Description"> -->
            </div>


          </div>
          <div class="modal-footer">
           
            <button type="submit" class="btn btn-primary">Submit</button>
             <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


</div>
@endsection