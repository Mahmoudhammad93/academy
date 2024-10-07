<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('title');
            $table->integer('mark');
            $table->json('options');
            $table->string('answer');
            $table->string('image')->nullable();
            $table->string('audio_src')->nullable();
            $table->boolean('has_image')->default(false);
            $table->enum('level', array('easy', 'medium', 'hard'))->default('easy');
            $table->enum('type', array('choice', 'truefalse','audio','arrange'));
            $table->bigInteger('unit_id')->unsigned()->nullable();
            $table->bigInteger('bank_id')->unsigned()->nullable();
            $table->foreign('bank_id')->references('id')->on('banks')->onDelete('cascade');
            $table->foreign('unit_id')->references('id')->on('units')->onDelete('cascade');
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
        Schema::dropIfExists('questions');
    }
}
