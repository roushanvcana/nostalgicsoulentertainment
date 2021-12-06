<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\albums;
use App\Models\tracks;
use App\Models\artists;

class TracksController extends Controller
{
    /**
        * Display a listing of the resource.
        *
        * @return Response
        */
        public function album($id)
        {
          
            // get all the album 
            $track_lists= tracks::where('albums_id',$id)->get();
            $album = albums::where('id',$id)->get();
            //$data = albums::where('id',$id)->addSelect(['artists_id' => artists::select('artist_name')->whereColumn('artists_id', 'artists.id')])->get();
        
            // load the view and pass the data
            return view('album', ['track_lists'=>$track_lists, 'album'=> $album]);
        }
        public function artist($id)
        {
          $track_lists= tracks::where('artists_id',$id)->get();
          $album= albums::where('artists_id',$id)->get();
          $artist = artists::where('id',$id)->get();
        
            // load the view and pass the data
            return view('artist', ['track_lists'=>$track_lists, 'album'=> $album, 'artist'=> $artist]);
            
        }

    /**
        * Display a listing of the resource.
        *
        * @return Response
        */
        public function index()
        {
            
        }
    
        /**
            * Show the form for creating a new resource.
            *
            * @return Response
            */
        public function create()
        {
            //
        }
    
        /**
            * Store a newly created resource in storage.
            *
            * @return Response
            */
        public function store()
        {
            //
        }
    
        /**
            * Display the specified resource.
            *
            * @param  int  $id
            * @return Response
            */
        public function show($id)
        {
            //
        }
    
        /**
            * Show the form for editing the specified resource.
            *
            * @param  int  $id
            * @return Response
            */
        public function edit($id)
        {
            //
        }
    
        /**
            * Update the specified resource in storage.
            *
            * @param  int  $id
            * @return Response
            */
        public function update($id)
        {
            //
        }
    
        /**
            * Remove the specified resource from storage.
            *
            * @param  int  $id
            * @return Response
            */
        public function destroy($id)
        {
            //
        }
    
}
