<?php

use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('answers')->insert([
        //gives id field a value of 1 and the answer field a value of yes
            ['id' => 1, 'answer' => "yes"],
        ]);
    }
}
