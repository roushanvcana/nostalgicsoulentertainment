<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\artists;
use App\Models\music_categories;
use App\Http\Controllers\MusicCategoriesController;
use Illuminate\Support\Facades\DB;

class ArtistsController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return Response
    */
    public function artists()
    {
        // get all the artist
        $artists = artists::all();
        
        $artistsID = 2;
        $artists = artists::find($artistsID);
        
        return view('artists', compact('artists'));
        
        
        //$artists = artists::addSelect(['music_categories_id' =>music_categories::select('category')->whereColumn('music_categories_id', 'music_categories.id')])->get();
        //return view('artists', ['artists'=>$artists]);
    }

    /**
        * Display a listing of the resource.
        *
        * @return Response
        */
        public function index()
        {
        
                // get all the albums 
                $data = artists::addSelect(['music_categories_id' => music_categories::select('artist_name')->whereColumn('id', 'music_categories_id')])->get();
    
                if($data){
    
                    foreach($data as $artist)
                    {
                        $tracks = artists::select(DB::raw('count(*) as tracksCount, music_categories_id'))->where('music_categories_id', $artist->id)->groupBy('music_categories_id')->first();
                        if($tracks)
                        {
                            $artist['tracksCount']=$tracks->tracksCount;
                            // echo $tracks->albums_id;
                        }
                        else{
                            $artist['tracksCount']=0;
                        }
                    } 
                }
               
                // load the view and pass the data
                return view('admin.artistlist', ['data'=>$data]);
        
            // get all the albums 
           // return view('admin/artistlist');
        }
    
        /**
            * Show the form for creating a new resource.
            *
            * @return Response
            */
        public function create()
        {
            return view('admin/create');
        }
    
        /**
            * Store a newly created resource in storage.
            *
            * @return Response
            */    
        public function store(Request $request)
        {

           // validate
        
           
     
        }
    
        /**
            * Display the specified resource.
            *
            * @param  int  $id
            * @return Response
            */
        public function show($id)
        {
            // get all the albums 
            
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
