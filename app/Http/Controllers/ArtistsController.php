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
                $data['music_category']=music_categories::all();
                // $data['tracksCount']=artists::all();
                $data['tracksCount'] = artists::join('music_categories', 'music_categories.id', '=', 'artists.music_categories_id')->get();
               
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
            
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();  
                $request->image->move(public_path('images'), $imageName);
                //$request->image->move(public_path('assets/media/NSM_Photos'), $imageName);

                $artist_pic = "http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Photos/".$imageName;
            
           // validate

           /*for edit
           $artist=::artists where('id',$request->input('member_id'))->first();
           */ 
           $artist = new artists;
           $artist->music_categories_id     = $request->mcategory;
           $artist->artist_name     = $request->artist_name;
           $artist->artist_pic      = $artist_pic;
           $artist->id     = $request->id;
           $artist->description = $request->description;
           $artist->save();
           
           return redirect('/admin/artist')->with('Successfully Inserted', 'Data Saved');
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
            $artist= artists::where('id',$id)->first();
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
            if($request->hasFile('image'))
            {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();  
            
            // $request->image->move(public_path('images'), $imageName);
            $request->image->move(public_path('assets/media/NSM_Photos'), $imageName);

            $artist_pic = "http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Photos/".$imageName;
            }
            else
            $artist_pic =''; 
           // validate

           /*for edit
           $artist=::artists where('id',$request->input('member_id'))->first();
           */ 
        //    $artist = new artists;
           $artist=artists::where('id',$request->input('id'))->first();
           $artist->music_categories_id = $request->mcategory;
           $artist->artist_name = $request->artist_name;
           $artist->artist_pic = $artist_pic;
           $artist->id = $request->id;
           $artist->description = $request->description;
           $artist->save();
           
           return redirect('/admin/artist')->with('Successfully Updated', 'Data Saved');
        }
    
        /**
            * Remove the specified resource from storage.
            *
            * @param  int  $id
            * @return Response
            */
        public function destroy($id)
        {
         
            artists::find($id)->delete();
            return redirect()->back();
        }


}
