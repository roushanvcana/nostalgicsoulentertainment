<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\artists;
use Carbon\Carbon;

class ArtistsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        artists::truncate();

        $artists =  [
            [
                'artist_pic' =>'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/img/demo/1 (1).jpg',
                'artist_name' =>'James Worthy',
                'music_categories_id' => 1,
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Architecto atque aut blanditiis consectetur',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now(),
            ],
            [
                'artist_pic' =>'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/img/demo/3 (1).jpg',
                'artist_name' =>'Jamaal Marvel',
                'music_categories_id' => 2,
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Architecto atque aut blanditiis consectetur',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now(),
            ],
            [
                'artist_pic' =>'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/img/demo/2 (1).jpg',
                'artist_name' =>'Sydney',
                'music_categories_id' => 3,
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Architecto atque aut blanditiis consectetur',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now(),
            ],
            [
                'artist_pic' =>'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/img/demo/u7.jpg',
                'artist_name' =>'JXXIII',
                'music_categories_id' => 3,
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Architecto atque aut blanditiis consectetur',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now(),
            ],            
            [
                'artist_pic' =>'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/img/demo/u4.jpg',
                'artist_name' =>'Nyce Jewel',
                'music_categories_id' => 5,
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Architecto atque aut blanditiis consectetur',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now(),
            ],
            [
                'artist_pic' =>'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/img/demo/u5.jpg',
                'artist_name' =>'Cocil Jones',
                'music_categories_id' => 6,
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Architecto atque aut blanditiis consectetur',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now(),
            ],
            [
                'artist_pic' =>'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/img/demo/1 (1).jpg',
                'artist_name' =>'Nyce Jewel Avery',
                'music_categories_id' => 7,
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Architecto atque aut blanditiis consectetur',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now(),
            ],
            
            [
                'artist_pic' =>'http://vcanaglobal.ga/nostalgicSoulEntertainment/assets/img/demo/1 (1).jpg',
                'artist_name' =>'Crisis',
                'music_categories_id' => 7,
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Architecto atque aut blanditiis consectetur',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now(),
            ],
        ];
      
        artists::insert($artists);
    }
}
