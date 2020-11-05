<?php

use Illuminate\Database\Seeder;
use App\Episodes;

class EpisodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Episodes::class, 30)->create();
    }
}
