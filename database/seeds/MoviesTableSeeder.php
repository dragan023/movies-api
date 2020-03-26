<?php

use Illuminate\Database\Seeder;
use \App\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Movie', 50)->create();
    }
}
