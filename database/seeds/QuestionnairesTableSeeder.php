<?php

use Illuminate\Database\Seeder;

class QuestionnairesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('questionnaires')->insert([
            //gives the highlighted fields specified values
            ['id' => 1, 'made_by' => 1, 'question_id' => 1, 'name' => "Global Warming", 'category' => "Nature"],
        ]);
    }
}
