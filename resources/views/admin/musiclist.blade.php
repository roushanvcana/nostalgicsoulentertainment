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
          <h4 class="page-title">Music Category</h4>
        </div>
        <!-- <nav class="navbar navbar-inverse" style="float: right;">
            <ul class="nav navbar-nav" id="edit-modal">
                <li>Create a new album
            </ul> -->

            <div class="btn-group" style="float: right;">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#add-music" style="background: #45219b;">
               Add Category
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
                    <th>Music Category</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>

            <tbody>
             
             @foreach($data['music_category'] as $key => $value)
           <?php $alldata="$value->category";?>
             <tr>
                 <!-- show the album (uses the show method found at GET /album/{id} -->
                 <td>{{ $value->category}}</td>
                 <td>{{ $value->created_at}}</td>
                           
                 <td>
                     <!-- <a class="btn btn-small btn-success" href="{{ URL::to('artist/' . $value->id.'/tracks/create') }}">Add Track</a> -->
     
                     <!-- edit this shark (uses the edit method found at GET /sharks/{id}/edit -->
                     <button type="button" class="btn btn-small btn-info" onclick="editMusic('<?php echo $alldata;?>')">
                         Edit
                        </button>
                     <!-- <a class="btn btn-small btn-info" href="{{ URL::to('artist/' . $value->id . '/edit') }}">Edit</a> -->
                     <a class="btn btn-small btn-danger" href="{{url('/category-delete/')}}/{{$value->id}}">Delete</a>
     
                 </td>
                 
             </tr>
             @endforeach
         </tbody>
              
            
            </table>
        </div>
        </div>
    </div>

   
<div class="modal fade" id="add-music">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="display:inline-block;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title"><b>Add Music Category</b></h4>
      </div>

      <div class="modal-body">
      <form role="form" action="{{ url('category-save')}}" method="POST">
        @csrf
          <div class="box-body">
          <div class="form-group">
              <label for="">Category Name</label> 
              <input type="text" class="form-control" name="music_category" placeholder="Add Music Category">
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


 <div class="modal fade" id="edit-music">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="display:inline-block;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title"><b>Edit Music Category</b></h4>
      </div>

      <div class="modal-body">
      <form role="form" action="{{ url('category-update')}}" method="POST">
          @csrf
          <div class="box-body">
          <div class="form-group">
              <label for="">Music Category</label> 
              <input type="text" class="form-control" id="music_category" name="music_category" placeholder="Edit Music Category">
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

<script>
  function editMusic(data)
  {
    console.log(data)
    $("#edit-music").modal('show');

    let showData = data;
    const splitData = showData.split("-");
    console.log(splitData);
    $("#music_category").val(splitData[0]);
   // $("#artist_image").attr("src",splitData[1])
    //$("#artist_pic").val(splitData[1]);
   // $("#description_edit").html(splitData[2]);
   // $("#mcategory").val(splitData[3])
   // $("#id").val(splitData[4])
    //document.getElementById('mcategory').value=splitData[3];
  
  }
</script>
@endsection