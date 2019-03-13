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
            'from' => 'Test User',
            'to' => '2',
            'rate' => '1',
            'feedback' => 'Test Feedback',
        ]);
        DB::table('guide_feedback')->insert([
            'from' => 'Test User',
            'to' => '2',
            'rate' => '4',
            'feedback' => 'Test Feedback',
        ]);
        DB::table('guide_feedback')->insert([
            'from' => 'Test User',
            'to' => '2',
            'rate' => '1',
            'feedback' => 'Test Feedback',
        ]);
        DB::table('guide_feedback')->insert([
            'from' => 'Test User',
            'to' => '3',
            'rate' => '3',
            'feedback' => 'Test Feedback',
        ]);
        DB::table('guide_feedback')->insert([
            'from' => 'Test User',
            'to' => '2',
            'rate' => '4',
            'feedback' => 'Test Feedback',
        ]);
        $this->command->info('Feedbacks created');
    }
}
