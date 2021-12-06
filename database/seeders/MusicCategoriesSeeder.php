<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\music_categories;
use Carbon\Carbon;

class MusicCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        music_categories::truncate();

        $categories =  [
            [
               'category' => 'rock',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),
            ],
            [
                'category' => 'classic',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category' => 'jazz',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category' => 'hip hop',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category' => 'pop',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
          ];

          music_categories::insert($categories);
    }
}
