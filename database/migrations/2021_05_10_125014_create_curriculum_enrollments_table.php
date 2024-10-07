<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurriculumEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculum_enrollments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('enroll_id');
            $table->foreign('enroll_id')->references('id')->on('context_enrollments')->onDelete('cascade');
            $table->unsignedBigInteger('curriculum_id')->unsigned()->nullable();
            $table->foreign('curriculum_id')->references('id')->on('curriculums')->onDelete('cascade');
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
        Schema::dropIfExists('curriculum_enrollments');
    }
}
