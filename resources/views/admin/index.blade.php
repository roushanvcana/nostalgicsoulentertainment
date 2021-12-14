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
            <button type="button" class="btn btn-info" style="background: #45219b;">
            <a href="{{ URL::to('admin/albums/create') }}" style="color: #FFFFFF;">Create a new Album</a>
              </button>
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
                    <th>Album</th>
                    <th>Tracks</th>
                    <th>Artist</th>
                    <th>Added on</th>
                    <th>Action</th>
                  
                </tr>
            </thead>
            <tbody>
                @foreach($data as $key => $value)
                <?php $alldata="$value->album_name- $value->tracksCount-$value->artists_id";?>
                <tr>
                    <!-- show the album (uses the show method found at GET /album/{id} -->
                    <td><a href="{{ URL::to('admin/albums/' . $value->id) }}">
                    <img src="{{ $value->album_pic}}" alt="/"> {{ $value->album_name}}</a>
                   </td>
                    <td class="text-primary"> {{ $value->tracksCount }}</td>
                    <td>{{ $value->artists_id}}</td>
                    <td>{{ $value->created_at}}</td>
                    
                    <td>
                     <button type="button" class="btn btn-small btn-success" onclick="addAlbum('<?php echo $alldata;?>')" data-toggle="modal" data-target="#album-modal">
                         Track
                      </button>
                        <!-- <a class="btn btn-small btn-success" href="{{ URL::to('albums/' . $value->id.'/tracks/create') }}">Add Track</a> -->
                       
                        <!-- edit this shark (uses the edit method found at GET /sharks/{id}/edit -->
                        <button type="button" class="btn btn-small btn-info" data-toggle="modal" data-target="#edit-album">
                         Edit
                        </button>
                        <!-- <a class="btn btn-small btn-info" href="{{ URL::to('albums/' . $value->id . '/edit') }}">Edit</a> -->
                        <a class="btn btn-small btn-danger" href="#">Delete</a>
        
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        </div>
    </div>

    <div class="modal fade" id="album-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="display:inline-block;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title"><b>Add Track</b></h4>
      </div>

      <div class="modal-body">
        <form role="form" action="{{ url('album-save')}}" method="POST">
        <input type="hidden" name="_token" value="">
           @csrf
          <div class="box-body">
     
          <div class="form-group">
              <label for="">Album Pic</label> 
              <input type="file" class="form-control" name="image" onchange="" >
              <!-- <input type="text" class="form-control" name="username" placeholder="Artist Pic"> -->
            </div>

            <div class="form-group">
              <label for="">Album Name</label> 
              <input type="text" class="form-control" name="album_name" placeholder="Album Name" >
            </div>
           
            <div class="form-group">
              <label for="">Track</label> 
              <input type="number" class="form-control" name="track" placeholder="Enter Track No.">
            </div>

            <div class="form-group">
              <label for="">Artist Name</label> 
              <input type="text" class="form-control" name="artist_name" placeholder="Artist Name">
            </div>

            <!-- <div class="form-group">
              <label for="">Created At</label> 
              <input class="form-control" type="datetime-local" id="Test_DatetimeLocal" name="created_at">
               <input type="text" class="form-control" name="created-at" placeholder="Created At"> 
            </div> -->
            
            <!-- <div class="form-group">
              <label for="">Updated At</label> 
              <input class="form-control" type="datetime-local" id="Test_DatetimeLocal" name="updated_at">
               <input type="text" class="form-control" name="updated_at" placeholder="Updated At"> 
            </div> -->

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

<div class="modal fade" id="edit-album">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="display:inline-block;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title"><b>Edit Track Details</b></h4>
      </div>

      <div class="modal-body">
        <form role="form" action="">
          <input type="hidden" name="_token" value="">
          <div class="box-body">
            <div class="form-group">
              <label for="">Album Name</label> 
              <input type="text" class="form-control" name="album_name" placeholder="Album Name" >
            </div>
           
            <div class="form-group">
              <label for="">Track</label> 
              <input type="number" class="form-control" name="track" placeholder="Enter Track No.">
            </div>

            <div class="form-group">
              <label for="">Artist Name</label> 
              <input type="text" class="form-control" name="artist_name" placeholder="Artist Name">
            </div>

            <!-- <div class="form-group">
              <label for="">Created At</label> 
              <input class="form-control" type="datetime-local" id="Test_DatetimeLocal" name="created_at">
               <input type="text" class="form-control" name="created-at" placeholder="Created At"> 
            </div> -->
            
            <!-- <div class="form-group">
              <label for="">Updated At</label> 
              <input class="form-control" type="datetime-local" id="Test_DatetimeLocal" name="updated_at">
               <input type="text" class="form-control" name="updated_at" placeholder="Updated At"> 
            </div> -->

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
  function addAlbum(data)
  {
    console.log(data);
    $("#album-modal").modal('show');
    //let showData = data;
    //const splitData = showData.split("-");
    //console.log(splitData);
   // $("#artist_name").val(splitData[0]);
   // $("#artist_image").attr("src",splitData[1])
    //$("#artist_pic").val(splitData[1]);
   // $("#description_edit").html(splitData[2]);
   // $("#mcategory").val(splitData[3])
   // $("#id").val(splitData[4])
  //  document.getElementById('mcategory').value=splitData[3];
  
  }
</script>
@endsection