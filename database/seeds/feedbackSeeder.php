<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class feedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('guide_feedback')->insert([
            'from' => '3',
            'to' => '2',
            'rate' => '1',
            'feedback' => 'Test Feedback',
            'created_at' => date("Y-m-d H:i:s") ,
        ]);
        DB::table('guide_feedback')->insert([
            'from' => '3',
            'to' => '2',
            'rate' => '4',
            'feedback' => 'Test Feedback',
            'created_at' => date("Y-m-d H:i:s") ,
        ]);
        DB::table('guide_feedback')->insert([
            'from' => '3',
            'to' => '2',
            'rate' => '1',
            'feedback' => 'Test Feedback',
            'created_at' => date("Y-m-d H:i:s") ,
        ]);
        DB::table('guide_feedback')->insert([
            'from' => '3',
            'to' => '3',
            'rate' => '3',
            'feedback' => 'Test Feedback',
            'created_at' => date("Y-m-d H:i:s") ,
        ]);
        DB::table('guide_feedback')->insert([
            'from' => '3',
            'to' => '2',
            'rate' => '4',
            'feedback' => 'Test Feedback',
            'created_at' => date("Y-m-d H:i:s") ,
        ]);
        $this->command->info('Feedbacks created');
    }
}
