<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
          //creates primary key id
          $table->increments('id');
          //creates a specfied string
          $table->string('name');
          //creates a specfied string, which has to be unique to the database
          $table->string('email')->unique();
          //creates a specfied string
          $table->string('password');
          //creates a specfied string
          $table->string('role');
          $table->rememberToken();
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
