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
          <h4 class="page-title">Artist List</h4>
        </div>
        <!-- <nav class="navbar navbar-inverse" style="float: right;">
            <ul class="nav navbar-nav" id="edit-modal">
                <li>Create a new album
            </ul> -->

            <div class="btn-group" style="float: right;">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#add-modal" style="background: #45219b;">
               Add Artist
              </button>
            </div>
        <!-- </nav> -->
      </div>
      
    
      
    </div>
    <!-- Page Title Header Ends-->
   
    
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
        <div class="table_box" style="overflow-x: scroll;">
            <table class="table table-hover">
            <thead>
                <tr>
                  <th>Category</th>
                    <th>Artist Name</th>
                    <th>Artist Pic</th>
                    <th>Description</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                   
                </tr>
            </thead>
            
            <tbody>
             
                @foreach($data['tracksCount'] as $key => $value)
                <?php $alldata="$value->artist_name- $value->artist_pic-$value->description-$value->music_categories_id-$value->id";?>
                <tr>
                    <!-- show the album (uses the show method found at GET /album/{id} -->
                    <td>{{ $value->category}}</td>
                    <td> {{ $value->artist_name}} </td>
                    <td>
                    <a href="{{ URL::to('public/assets/media/artist/' . $value->artist_pic) }}">
                    <img src="{{ URL::to('public/assets/media/artist/' . $value->artist_pic) }}" alt="/"></a>
                    </td>
                     <td>{{ $value->description }}</td> 
                     <!-- <td></td> -->
                    <td>{{ $value->created_at}}</td>
                    <td>{{ $value->updated_at}}</td>

                    
                    <td>
                        <!-- <a class="btn btn-small btn-success" href="{{ URL::to('artist/' . $value->id.'/tracks/create') }}">Add Track</a> -->
        
                        <!-- edit this shark (uses the edit method found at GET /sharks/{id}/edit -->
                        <button type="button" class="btn btn-small btn-info" onclick="editArtist('<?php echo $alldata;?>')">
                         Edit
                        </button>
                        <!-- <a class="btn btn-small btn-info" href="{{ URL::to('artist/' . $value->id . '/edit') }}">Edit</a> -->
                        <a class="btn btn-small btn-danger" href="{{url('/artist-delete/')}}/{{$value->id}}">Delete</a>
        
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        </div>
        </div>
    </div>

   
<div class="modal fade" id="add-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="display:inline-block;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title"><b>Add Artist</b></h4>
      </div>

      <div class="modal-body">
        <form role="form" action="{{ url('artist-save')}}" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="box-body">
            <div class="form-group">
              <label for="">Select Music</label> 
             
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
            <div class="form-group">
              <label for="">Artist Name</label> 
              <input type="text" class="form-control" name="artist_name" placeholder="Artist Name">
            </div>
            <div class="form-group">
              <label for="">Artist Pic</label> 
              <input type="file" class="form-control" name="image" onchange="" >
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


<div class="modal fade" id="modal-edit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="display:inline-block;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title"><b>Edit Details</b></h4>
      </div>

      <div class="modal-body">
        <form role="form" action="{{ url('artist-update')}}" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="">
          @csrf
          <div class="box-body">
          <div class="form-group">
              <label for="">Select Music</label> 
              <input type="hidden" class="form-control" name="id" id="id" placeholder="Artist Name">
              <select class="form-control" name="mcategory" id="mcategory">
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
              <label for="">Artist Name</label> 
              <input type="text" class="form-control" name="artist_name" id="artist_name" placeholder="Artist Name" >
            </div>
            <div class="form-group">
              <label for="">Artist Pic</label> 
              <input type="file" class="form-control" name="artist_pic" id="artist_pic" onchange="">
              <img scr="" id="artist_image" style="width: 50%;">
              <!-- <input type="text" class="form-control" name="username" placeholder="Artist Pic"> -->
            </div>
            <div class="form-group">
              <label for="">Description</label> 
              <textarea id="description_edit" placeholder="Enter Description" name="description" class="form-control" ></textarea>
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
  function editArtist(data)
  {
    console.log(data)
    $("#modal-edit").modal('show');
    let showData = data;
    const splitData = showData.split("-");
    console.log(splitData);
    $("#artist_name").val(splitData[0]);
    $("#artist_image").attr("src",'../public/assets/media/artist/'+splitData[1].trim())
    //$("#artist_pic").val(splitData[1]);
    $("#description_edit").html(splitData[2]);
    $("#mcategory").val(splitData[3])
    $("#id").val(splitData[4])
    document.getElementById('mcategory').value=splitData[3];
  
  }
</script>
@endsection