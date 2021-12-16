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
        <div class="btn-group" style="float: right;">
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#add-album" style="background: #45219b;">
               Add a New Album
              </button>
            <!-- <button type="button" class="btn btn-info" style="background: #45219b;">
            <a href="{{ URL::to('admin/albums/create') }}" style="color: #FFFFFF;">Add A New Album</a>
              </button> -->
            </div>
        <!-- <nav class="navbar navbar-inverse">
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('admin/albums/create') }}">Create a new album</a>
            </ul>
        </nav> -->
      </div>
      
    
      
    </div>
    <!-- Page Title Header Ends-->
   
    
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            
            <table class="table table-hover">
            <thead>
                <tr>
                    <th>Music</th>
                    <th>Album</th>
                    <th>Artist</th>
                    <th>Description</th>
                    <th>Added on</th>
                    <th>Updated On</th>
                    <th>Action</th>
                  
                </tr>
            </thead>
            <tbody>
                @foreach($data['tracksCount'] as $key => $value)
               <!-- <?php echo print_r($value);?> -->
                <?php 
                  $alldata='';
                  $alldata="$value->album_name@$value->album_pic@$value->description@$value->music_categories_id@$value->id@$value->artists_id";
                ?>
                <tr>
                    <!-- show the album (uses the show method found at GET /album/{id} -->
                    <td>{{ $value->category}}</td> 
                    <td><a href="{{ URL::to('admin/albums/' . $value->id) }}">
                    <img src="{{ $value->album_pic}}" alt="/">{{ $value->album_name}}</a>
                   </td>
                    <td class="text-primary"> {{ $value->artists_name }}</td>
                    <td>{{ $value->description}}</td> 
                    <!-- <td>{{ $value->artists_id}}</td> -->
                    <td>{{ $value->created_at}}</td>
                    <td>{{ $value->updated_at}}</td>
                    <td>
                    <a href="{{ url('/admin/tractlist/'.$value->id) }}">
                     <button type="button" class="btn btn-small btn-success">  
                         Track
                      </button>
                    </a>
                        <!-- <a class="btn btn-small btn-success" href="{{ URL::to('albums/' . $value->id.'/tracks/create') }}">Add Track</a> -->
                       
                        <!-- edit this shark (uses the edit method found at GET /sharks/{id}/edit -->
                        
                        <button type="button" class="btn btn-small btn-info" onclick="editAlbum('<?php echo $alldata;?>')">
                         Edit
                        </button>
                        <!-- <a class="btn btn-small btn-info" href="{{ URL::to('albums/' . $value->id . '/edit') }}">Edit</a> -->
                        <a class="btn btn-small btn-danger" href="{{url('/album-delete/')}}/{{$value->id}}">Delete</a>
        
                    </td>
                </tr>
                <?php echo $alldata='';?>
                @endforeach
            </tbody>
            </table>
        </div>
        </div>
    </div>

    <div class="modal fade" id="add-album">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="display:inline-block;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title"><b>Add Album</b></h4>
      </div>

      <div class="modal-body">
        <form role="form" action="{{ url('album-save')}}" method="POST">
        @csrf
          <div class="box-body">
          <div class="form-group">
              <label for="">Select Music</label> 
             
              <select class="form-control" name="music_categories_id">
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

            <div class="form-group">
              <label for="">Select Artist</label> 
             
              <select class="form-control" name="artists_id">
                  <?php
                    if(!is_null($data['tracksCount']))
                    {
                      foreach($data['tracksCount'] as $artist)
                      {
                  ?>
                  <option value="<?php echo $artist->id;?>"><?php echo $artist->artists_name;?></option>
                  <?php
                      }
                    }
                  ?>
              </select>
            </div>
            <div class="form-group">
              <label for="">Album Name</label> 
              <input type="text" class="form-control" name="album_name" placeholder="Album Name">
            </div>
            <div class="form-group">
              <label for="">Album Pic</label> 
              <input type="file" class="form-control" name="image" onchange="">
              <!-- <input type="text" class="form-control" name="username" placeholder="Artist Pic"> -->
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
    
<div class="modal fade" id="edit-album">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="display:inline-block;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title"><b>Edit Album Details</b></h4>
      </div>
      
      <div class="modal-body">
      <form role="form" action="{{ url('album-update')}}" method="POST">
        <input type="hidden" name="_token" value="">
          @csrf
          <div class="box-body">
          <div class="form-group">
              <label for="">Select Music</label> 
              <input type="hidden" class="form-control" name="id" id="id" placeholder="">
              <input type="hidden" class="form-control" name="artists_id" id="artist_id">
              <select class="form-control" name="music_categories_id" id="music_categories_id">
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
             <div class="form-group">
              <label for="">Album Name</label> 
              <input type="text" class="form-control" id="album_name" name="album_name" placeholder="Album Name" >
            </div> 

            <div class="form-group">
              <label for="">Album Pic</label> 
              <input type="file" class="form-control" name="image" onchange="">
              <img scr="" id="artist_image" style="width: 50%;">
              <!-- <input type="text" class="form-control" name="username" placeholder="Artist Pic"> -->
            </div>

            <!-- <div class="form-group">
              <label for="">Track Time</label> 
              <input type="text" class="form-control" id="track_time" name="track_time" placeholder="Album Name" >
            </div>  -->
           
            <div class="form-group">
              <label for="">Description</label> 
              <textarea id="description_edit" placeholder="Enter Description" name="description" class="form-control" ></textarea>
            </div>
      
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

</div>

<script>
  function editAlbum(data)
  {
    console.log(data);
    $("#edit-album").modal('show');
    let showData = data;
    const splitData = showData.split("@");
    console.log(splitData);
   $("#album_name").val(splitData[0]);
   $("#artist_image").attr("src",splitData[1]);
   $("#description_edit").html(splitData[2]);
     $("#music_categories_id").val(splitData[3])
     $("#id").val(splitData[4])
     $("#artist_id").val(splitData[5])
    //$("#artist_pic").val(splitData[1]);
   
     
  //  document.getElementById('mcategory').value=splitData[3];
  
  }
</script>
@endsection