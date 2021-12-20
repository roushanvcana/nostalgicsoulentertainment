<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\albums;
use App\Models\artists;
use App\Models\tracks;
use App\Models\music_categories;
use App\Http\Controllers\MusicCategoriesController;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    /**
    * Display a listing of the resource.  
    *
    * @return Response
    */
    

    public function index()
    {
    
       
        return view('welcome');

    // get all the albums 
   // return view('admin/artistlist');
  }
}
