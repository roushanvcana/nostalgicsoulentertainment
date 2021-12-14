<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\albums;
use App\Models\artists;
use App\Models\tracks;
use Illuminate\Support\Facades\DB;

class AlbumsController extends Controller
{
    /**
    * Display a listing of the resource.  
    *
    * @return Response
    */
    public function albums()
    {
        // get all the albums 
        $data = albums::addSelect(['artists_id' => artists::select('artist_name')->whereColumn('artists_id', 'artists.id')])->where('artists_id',2)->get();
       //whereColumn('artists_id', 'artists.id')])
        // load the view and pass the data
        return view('albums', ['data'=>$data]);
    }

    /**
        * Display a listing of the resource.
        *
        * @return Response
        */
        public function index()
        {
            // get all the albums 
             $data = albums::addSelect(['artists_id' => artists::select('artist_name')->whereColumn('artists_id', 'artists.id')])->get();

            if($data){

                foreach($data as $album)
                {
                    $tracks = tracks::select(DB::raw('count(*) as tracksCount, albums_id'))->where('albums_id', $album->id)->groupBy('albums_id')->first();
                    if($tracks)
                    {
                        $album['tracksCount']=$tracks->tracksCount;
                        // echo $tracks->albums_id;
                    }
                    else{
                        $album['tracksCount']=0;
                    }
                } 
            }
           
            // load the view and pass the data
            return view('admin.index', ['data'=>$data]);
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
            if($request->hasFile('image'))
            {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();  
            
            // $request->image->move(public_path('images'), $imageName);
            $request->image->move(public_path('assets/media/NSM_Photos'), $imageName);

            $album_pic = "http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Photos/".$imageName;
            }
            else
            $album_pic =''; 
           // validate

           /*for edit
           $artist=::artists where('id',$request->input('member_id'))->first();
           */ 
           $album = new albums;
           $album->album_name     = $request->album_name;
           $album->album_pic      = $album_pic;
           $album->artists_id     = $request->artists_id;
           $album->music_categories_id =  $request->music_categories_id;
           $album->description = $request->description;
           $album->save();
           
           return redirect('admin/albums')->with('success','You have successfully registered. Please login again.');;
        }
        // {

        //    // validate
        
        //    $validated = $request->validate([
        //         'album_name'          => 'bail|required|unique:albums|max:255',
        //         'artists_id'          => 'required',
        //         'music_categories_id' => 'required',
        //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //         'description'=>'required',
                
        //     ]);

        //     $imageName = time().'.'.$request->image->extension();  
            
        //     // $request->image->move(public_path('images'), $imageName);
        //     $request->image->move(public_path('assets/media/NSM_Photos'), $imageName);

        //     $album_pic = "http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/media/NSM_Photos/".$imageName;

        //     $album = new albums;
        //     $album->album_name     = $request->album_name;
        //     $album->album_pic      = $album_pic;
        //     $album->artists_id     = $request->artists_id;
        //     $album->music_categories_id =  $request->music_categories_id;
        //     $album->description = $request->description;
        //     $album->save();

        //     // redirect
        //     return redirect('admin/albums')->with('success','You have successfully registered. Please login again.');
     
        // }
    
        /**
            * Display the specified resource.
            *
            * @param  int  $id
            * @return Response
            */
        public function show($id)
        {
            // get all the albums 
            $data = albums::find($id)->addSelect(['artists_id' => artists::select('artist_name')->whereColumn('artists_id', 'artists.id')])->get();

            if($data){

                foreach($data as $album)
                {
                    $tracks = tracks::select(DB::raw('count(*) as tracksCount, albums_id'))->where('albums_id', $id)->groupBy('albums_id')->first();
                    if($tracks)
                    {
                        $trackLists = tracks::where('albums_id', $id)->orderBy('track_name')->get();
                        $album['tracksCount']=$tracks->tracksCount;
                        // echo $tracks->albums_id;
                        $album['tracksLists']=$trackLists;
                    }
                    else{
                        $album['tracksLists']=0;
                    }
                } 
            }
           
         
            // load the view and pass the data
            return view('admin.show', ['data'=>$data]);
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
