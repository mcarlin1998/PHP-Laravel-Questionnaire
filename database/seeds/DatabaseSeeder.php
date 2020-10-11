<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       //runsthe following seeders
        $this->call(UsersTableSeeder::class);
        $this->call(AnswersTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
        $this->call(QuestionnairesTableSeeder::class);
    }
}
