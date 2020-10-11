<<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionnairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionnaires', function (Blueprint $table) {
            //creates a primary key id
            $table->increments('id');
            //creates a specified integer which is unsigned
            $table->integer('made_by')->unsigned();
            //creates a specified integer which is unsigned and can be null
            $table->integer('question_id')->unsigned()->nullable();
            //creates a specified string
            $table->string('name');
            //creates a specfied string
            $table->string('category');
            $table->timestamps();
            //creates a foreign key to a specific field in a seperate table
            $table->foreign('made_by')->references('id')->on('users')->onDelete('cascade');
            //creates a foreign key to a specific field in a seperate table
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questionnaires');
    }
}
