<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\music_categories;

class MusicCategoriesController extends Controller
{
    /**
        * Display a listing of the resource.
        *
        * @return Response
        */
        // public function genre()
        // {
        //      // get all the genre 
        //    $data =  music_categories::all();

        //     // load the view and pass the sharks
        //     return view('genre', ['genre'=>$data]);
        // }

        public function music()
        {
            // get all the artist
            $music =  music_categories::all();
            $id = 2;
            $music = music_categories::find($id);
            
            return view('music_categories', compact('music_categories'));
            
            
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
                $data['music_category']= music_categories::all();
                // $data['tracksCount']=artists::all();
               
                // load the view and pass the data
                return view('admin.musiclist', ['data'=>$data]);
        
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

           /*for edit
           $artist=::artists where('id',$request->input('member_id'))->first();
           */ 
           $music = new music_categories;
          //  $music->music_categories_id = $request->mcategory
           $music->category = $request->music_category;
           $music->save();
           
           return redirect('/admin/music-category')->with('Successfully Added', 'Data Saved');
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
                $artist= music_categories::where('id',$id)->first();
                //
            }
        
            /**
                * Update the specified resource in storage.
                *
                * @param  int  $id
                * @return Response
                */
            public function update(Request $request)
            {
              
               /*for edit
               $artist=::artists where('id',$request->input('member_id'))->first();
               */ 
            //    $artist = new artists;
               $music = music_categories::where('id',$request->input('id'))->first();
               $music->category = $request->music_category;
               $music->save();
               
               return redirect('/admin/music-category')->with('Successfully Updated', 'Data Saved');
            }
        
            /**
                * Remove the specified resource from storage.
                *
                * @param  int  $id
                * @return Response
                */
            public function destroy($id)
            {
             
              music_categories::find($id)->delete();
                return redirect()->back();
            }
    
    
}


