<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('questions')->insert([
        //gives highlighted fields the specified values
            ['id' => 1, 'answer_id' => 1, 'question' => "do you like food?"],
        ]);
    }
}
