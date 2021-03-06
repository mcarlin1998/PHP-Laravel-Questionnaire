<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responses', function (Blueprint $table) {
          //creates a primary key id
            $table->increments('id');
            //creates a specfied integer which can be unsigned
            $table->integer('question_id')->unsigned();
            //creates a specfied integer which can be unsigned
            $table->integer('answer_id')->unsigned();
            $table->timestamps();
            //creates a foreign key to a specific field in a seperate table
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
            //creates a foreign key to a specific field in a seperate table
            $table->foreign('answer_id')->references('id')->on('answers')->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('responses');
    }
}
