<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class areaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tourist_area')->insert([
            'title' => 'tourist area',
            'description' => 'This is the description',
            'city' => 'Kathmandu',
            'country' => 'Nepal',
            'user_id' => '2',
            'slug' => 'tourist_area'
        ]);
        DB::table('tourist_area')->insert([
            'title' => 'tourist area 2',
            'description' => 'This is the description',
            'city' => 'Pokhara',
            'country' => 'Nepal',
            'user_id' => '2',
            'slug' => 'tourist_area_2'
        ]);
        DB::table('tourist_area')->insert([
            'title' => 'tourist area 3',
            'description' => 'This is the description',
            'city' => 'Bhaktapur',
            'country' => 'Nepal',
            'user_id' => '3',
            'slug' => 'tourist_area_3'
        ]);
        $this->command->info('tourist_area created');
    }
}
