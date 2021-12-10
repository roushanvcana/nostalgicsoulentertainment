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
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit-modal" style="background: #45219b;">
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
            
            <table class="table table-hover">
            <thead>
                <tr>
                    <th>Artist Name</th>
                    <th>Artist Pic</th>
                    <th>Description</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach($data as $key => $value)
                <tr>
                    <!-- show the album (uses the show method found at GET /album/{id} -->
                    <td> {{ $value->artist_name}} </td>
                    <td>
                    <a href="{{ URL::to('admin/artist/' . $value->id) }}">
                    <img src="{{ $value->artist_pic}}" alt="/"></a>
                    </td>
                     <td>{{ $value->description }}</td> 
                     <!-- <td></td> -->
                    <td>{{ $value->created_at}}</td>
                    <td>{{ $value->updated_at}}</td>
                    
                    <td>
                        <!-- <a class="btn btn-small btn-success" href="{{ URL::to('artist/' . $value->id.'/tracks/create') }}">Add Track</a> -->
        
                        <!-- edit this shark (uses the edit method found at GET /sharks/{id}/edit -->
                        <button type="button" class="btn btn-small btn-info" data-toggle="modal" data-target="#modal-edit">
                         Edit
                        </button>
                        <!-- <a class="btn btn-small btn-info" href="{{ URL::to('artist/' . $value->id . '/edit') }}">Edit</a> -->
                        <a class="btn btn-small btn-danger" href="#">Delete</a>
        
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        </div>
    </div>

   
<div class="modal fade" id="edit-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="display:inline-block;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title"><b>Add Artist</b></h4>
      </div>

      <div class="modal-body">
        <form role="form" action="">
          <input type="hidden" name="_token" value="">
          <div class="box-body">
            <div class="form-group">
              <label for="">Artist Name</label> 
              <input type="text" class="form-control" name="artist_name" placeholder="Artist Name" >
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
        <form role="form" action="">
          <input type="hidden" name="_token" value="">
          <div class="box-body">
            <div class="form-group">
              <label for="">Artist Name</label> 
              <input type="text" class="form-control" name="artist_name" placeholder="Artist Name" >
            </div>
            <div class="form-group">
              <label for="">Artist Pic</label> 
              <input type="file" class="form-control" name="image" onchange="" >
              <!-- <input type="text" class="form-control" name="username" placeholder="Artist Pic"> -->
            </div>
            <div class="form-group">
              <label for="">Description</label> 
              <textarea id="description" placeholder="Enter Description" name="description" class="form-control"></textarea>
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
@endsection