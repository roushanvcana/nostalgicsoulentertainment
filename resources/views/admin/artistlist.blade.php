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
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit-modal" style="background: #5768f3;">
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
                  
                </tr>
            </thead>
            <tbody>
              
          

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
              <input type="text" class="form-control" name="description" placeholder="Enter Description">
            </div>
            <div class="form-group">
              <label for="">Created At</label> 
              <input type="text" class="form-control" name="created-at" placeholder="Created At">
            </div>
            <div class="form-group">
              <label for="">Updated At</label> 
              <input type="text" class="form-control" name="updated_at" placeholder="Updated At">
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
@endsection