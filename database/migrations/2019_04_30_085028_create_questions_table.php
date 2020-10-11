<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            //creates a primary key id
            $table->increments('id');
            //creates a specfied integer which can be unsigned and can be null
            $table->integer('answer_id')->unsigned()->nullable();
            //creates a specified string
            $table->string('question');
            $table->timestamps();
            //sets specified field as a foregin to a specified field in a seperate table
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
        Schema::dropIfExists('questions');
    }
}
