<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\albums;
use Carbon\Carbon;

class AlbumsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        albums::truncate();

        $albums =  [
            [
                'album_pic' =>'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/img/demo/current-state-art.jpeg',
                'album_name' =>'Current State Art',
                'artists_id' => 4,
                'music_categories_id' =>1,
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Architecto atque aut blanditiis consectetur',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now(),
            ],
            [
                'album_pic' =>'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/img/demo/sucker.jpg',
                'album_name' =>'Sucker',
                'artists_id' => 2,
                'music_categories_id' => 2,
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Architecto atque aut blanditiis consectetur',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now(),
            ],
            [
                'album_pic' =>'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/img/demo/Vintage1.jpg',
                'album_name' =>'Vintage',
                'artists_id' => 3,
                'music_categories_id' => 3,
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Architecto atque aut blanditiis consectetur',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now(),
            ],
            [
                'album_pic' =>'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/img/demo/dont-judge-me.jpg',
                'album_name' =>'Don\'t Jugde Me',
                'artists_id' =>1,
                'music_categories_id' =>1,
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Architecto atque aut blanditiis consectetur',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now(),
            ],
            [
                'album_pic' =>'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/img/demo/feel-da-vibes.png',
                'album_name' =>'Feel Da Vibes',
                'artists_id' => 5,
                'music_categories_id' => 5,
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Architecto atque aut blanditiis consectetur',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now(),
            ],
            [
                'album_pic' =>'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/img/demo/hell-of-a-night.jpeg',
                'album_name' =>'Hell of a Night',
                'artists_id' => 6,
                'music_categories_id' => 4,
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Architecto atque aut blanditiis consectetur',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now(),
            ],
            [
                'album_pic' =>'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/img/demo/crisis.jpeg',
                'album_name' =>'Beautiful',
                'artists_id' => 8,
                'music_categories_id' => 7,
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Architecto atque aut blanditiis consectetur',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now(),
            ],
            [
                'album_pic' =>'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/img/demo/what-we-doing.png',
                'album_name' =>'What we Doing',
                'artists_id' => 7,
                'music_categories_id' => 6,
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Architecto atque aut blanditiis consectetur',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now(),
            ]

        ];

        albums::insert($albums);
    }
}
