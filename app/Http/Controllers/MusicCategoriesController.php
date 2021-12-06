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
        public function genre()
        {
             // get all the genre 
           $data =  music_categories::all();

            // load the view and pass the sharks
            return view('genre', ['genre'=>$data]);
            }
}
