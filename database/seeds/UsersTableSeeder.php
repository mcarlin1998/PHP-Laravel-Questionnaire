<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        //gives the highlighted fields the specified values
            ['id' => 1, 'name' => "John Smith", 'email' => "michael34@gmail.com", 'password' => "web", 'role' => "Admin"],
        ]);
    }
}
