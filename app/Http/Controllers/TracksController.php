<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\albums;
use App\Models\tracks;
use App\Models\artists;
use App\Models\music_categories;
use App\Http\Controllers\MusicCategoriesController;
use Illuminate\Support\Facades\DB;

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
        public function index($id)
        {

            // get all the albums 
            $data['album_id']=$id;
            $data['albumData']=albums::where('id',$id)->first();
            $data['music_category']=music_categories::all();
            // $data['tracksCount']=artists::all();
            $data['tracksCount'] = tracks::join('music_categories', 'music_categories.id', '=', 'tracks.music_categories_id')->where('albums_id',$id)->get();
           
            // load the view and pass the data
            return view('admin.tracklist', ['data'=>$data]);
    
        // get all the albums 
       // return view('admin/artistlist');
         }
       // {
           
           // $data['tracks']= tracks::all();
              // get all the albums 
            //   $data = tracks::addSelect(['artists_id' => tracks::select('track_name')->whereColumn('id', 'artists_id')])->get();
    
            //   if($data){
  
            //       foreach($data as $artist)
            //       {
            //           $tracks = tracks::select(DB::raw('count(*) as tracksCount, artists_id'))->where('artists_id', $artist->id)->groupBy('artists_id')->first();
            //           if($tracks)
            //           {
            //               $artist['tracksCount']=$tracks->tracksCount;
            //               // echo $tracks->albums_id;
            //           }
            //           else{
            //               $artist['tracksCount']=0;
            //           }
            //       } 
            //   }
             
              // load the view and pass the data
            //  return view('admin.tracklist', ['data'=>$data]);

           // return view('admin/tracklist');
       // }
    
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
        public function store(Request $request)
        {
            if($request->hasFile('image'))
            {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();  
            
            // $request->image->move(public_path('images'), $imageName);
            $request->image->move(public_path('assets/media/NSM_Photos'), $imageName);

            $track_pic = "http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Photos/".$imageName;
            }
            else
            $track_pic =''; 
           // validate

           /*for edit
           $artist=::artists where('id',$request->input('member_id'))->first();
           */ 
           $track = new tracks;
           $track->albums_id = $request->album_id;
           $track->artists_id = $request->artists_id;
           $track->music_categories_id = $request->mcategory;
           $track->track_name = $request->track_name;
           $track->track_pic = $request->$track_pic;
           $track->track_time = $request->track_time;
           $track->track = $request->track;
           $track->id = $request->id;
           $track->description = $request->description;
           $track->save();
           
           return redirect('/admin/tractlist/'.$request->album_id)->with('Successfully Added', 'Data Saved');
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
        public function update(Request $request)
        {
            if($request->hasFile('image'))
            {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();  
            
            // $request->image->move(public_path('images'), $imageName);
            $request->image->move(public_path('assets/media/NSM_Photos'), $imageName);

            $track_pic = "http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Photos/".$imageName;
            }
            else
            $track_pic =''; 
           // validate

           /*for edit
           $artist=::artists where('id',$request->input('member_id'))->first();
           */ 
           $track=tracks::where('id',$request->input('id'))->first();
           $track->albums_id = $request->album_id;
           $track->artists_id = $request->artists_id;
           $track->music_categories_id = $request->mcategory;
           $track->track_name = $request->track_name;
           $track->track_pic = $request->$track_pic;
           $track->track_time = $request->track_time;
           $track->track = $request->track;
           $track->id = $request->id;
           $track->description = $request->description;
           $track->save();
           
           return redirect('/admin/tractlist/'.$request->album_id)->with('Successfully Added', 'Data Saved');
        }
    
        /**
            * Remove the specified resource from storage.
            *
            * @param  int  $id
            * @return Response
            */
        public function destroy($id)
        {
            tracks::find($id)->delete();
            return redirect()->back();
        }
    
}
