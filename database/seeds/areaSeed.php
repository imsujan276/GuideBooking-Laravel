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
            'title' => 'tourist_area',
            'description' => 'This is the description',
            'city' => 'Kathmandu',
            'country' => 'Nepal',
            'user_id' => '2',
        ]);
        DB::table('tourist_area')->insert([
            'title' => 'tourist_area 2',
            'description' => 'This is the description',
            'city' => 'Pokhara',
            'country' => 'Nepal',
            'user_id' => '2',
        ]);
        DB::table('tourist_area')->insert([
            'title' => 'tourist_area 3',
            'description' => 'This is the description',
            'city' => 'Bhaktapur',
            'country' => 'Nepal',
            'user_id' => '3',
        ]);
        $this->command->info('tourist_area created');
    }
}
