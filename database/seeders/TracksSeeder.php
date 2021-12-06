<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tracks;
use Carbon\Carbon;

class TracksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tracks::truncate();

        $tracks =  [
            [
                'track_pic' =>'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/img/demo/current-state-art.jpeg',
                'track_name' =>'Current State Art',
                'track'=> '/assets/media/NSM_Music/Dont-Judge-Me-feat.-James-Worthy.mp3',
                'track_time'=> '00:03:04',
                'albums_id' => 4,
                'artists_id' => 1,
                'music_categories_id' =>1,
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Architecto atque aut blanditiis consectetur',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now(),
            ],
        ];

        tracks::insert($tracks);
    }
}
