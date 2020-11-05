<?php

use Illuminate\Database\Seeder;
use App\Movies;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Movies::class, 10)->create();
    }
}
