<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $games     = \App\Models\Game::factory(10)->create();
         $genres    = \App\Models\Genre::factory(3)->create();

         foreach ($games as $game) {
             $game->genres()->sync($genres->random(rand(1,3))->pluck('id'));
         }
    }
}
