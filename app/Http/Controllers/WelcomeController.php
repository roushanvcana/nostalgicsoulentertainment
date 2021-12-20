<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\tracks;
use App\Models\albums;
use App\Models\artists;
use App\Models\music_categories;
use Illuminate\Support\Facades\DB;
class WelcomeController extends Controller
{
    public function index($id){
       
        $data['album_id']=$id;
        $data['albumData']=albums::where('id',$id)->first();
       $category = music_categories::all();
       $data['tracksCount'] = albums::get([
        DB::raw("id,album_pic,album_name,artists_id,(select artist_name from artists where id=artists_id) as artists_name,music_categories_id,(select category from music_categories where id=music_categories_id) as category,description,created_at,updated_at")]);
       return view('welcome',['category'=>$category]);
    }
}
