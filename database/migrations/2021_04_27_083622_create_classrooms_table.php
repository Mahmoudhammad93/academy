<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classrooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_id');
            $table->string('name_en');
            $table->string('name_ar');
            $table->string('slug');
            $table->text('description_en')->nullable();
            $table->text('description_ar')->nullable();
            $table->boolean('launched')->default(0);
            $table->string('recored_id');
            $table->string('link');
            $table->string('attendence_code');
            $table->string('metadata')->nullable();
            $table->timestamp('from')->nullable();
            $table->timestamp('to')->nullable();
            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->unsignedBigInteger('unit_id');
            $table->foreign('unit_id')->references('id')->on('units')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classrooms');
    }
}
