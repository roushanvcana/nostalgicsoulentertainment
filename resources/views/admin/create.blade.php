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
            <a href="{{ URL::to('admin/albums') }}" style="color: #FFFFFF;">View All Albums</a>
              </button>
            </div>
        <nav class="navbar navbar-inverse">
            {{-- <div class="navbar-header">
                <a class="navbar-brand" href="{{ URL::to('admin/albums') }}">shark Alert</a>
            </div> --}}
            <ul class="nav navbar-nav">
                <!-- <li><a href="{{ URL::to('admin/albums') }}">View All Albums</a></li> -->
                {{-- <li><a href="{{ URL::to('admin/albums/create') }}">Create a new album</a> --}}
            </ul>
        </nav>
      </div>
      
    
      
    </div>
    <!-- Page Title Header Ends-->
   
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="card" style="width: 80%;">
           <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ URL::to('admin/albums/')}}" enctype="multipart/form-data">
                    @csrf
                    {{-- <input id="user_id" type="hidden" name="user_id" value="{{Auth::user()->id}}"> --}}
                    <div class="form-group row">
                        <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Album Pic') }}</label>
    
                        <div class="col-md-6">
                            <img id="previewImg" src="{{ asset('dashboard_assets/images/dashboard/dp-clipart.png')}}" height="200" width="200"/><br/>
                            <input type="file" name="image" onchange="previewFile(this);" >
                        </div>
                
                    </div>

                    <div class="form-group row">
                        <label for="album_name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="album_name" type="text" class="form-control @error('album_name') is-invalid @enderror" name="album_name" value="{{ old('album_name') }}" required autocomplete="album_name" autofocus>

                            @error('album_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="artists_id" class="col-md-4 col-form-label text-md-right">{{ __('Artist') }}</label>

                        <div class="col-md-6">
                            <select id="artists_id" class="form-control" name="artists_id">
                                <option value="" disabled>Select Artist</option>
                                <option value="1" selected>Canada</option>
                                
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="music_categories_id" class="col-md-4 col-form-label text-md-right">{{ __('Genre') }}</label>

                        <div class="col-md-6">
                            <select id="music_categories_id" name="music_categories_id" class="form-control">
                                <option value="" disabled>Select Genre</option>
                                <option value="1" selected>Canada</option>
                            
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                        <div class="col-md-6">
                           <textarea id="description" name="description" class="form-control"></textarea>
                        </div>
                    </div>
                                
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Submit') }}
                            </button>
                        </div>
                    </div>
                </form>
                
            </div> 
        </div>
        </div>
        </div>
       </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>

    function previewFile(input){
        var file = $("input[type=file]").get(0).files[0];
 
        if(file){
            var reader = new FileReader();
 
            reader.onload = function(){
                $("#previewImg").attr("src", reader.result);
            }
 
            reader.readAsDataURL(file);
        }
    }
</script>
@endsection