<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            [
                'name' => "Drama"
            ],
            [
                'name' => "Kids"
            ],
            [
                'name' => "TV Show"
            ]
        ]);
        // $this->call(UserSeeder::class);
    }
}
