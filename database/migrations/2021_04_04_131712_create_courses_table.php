<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
            $table->string('name_ar');
            $table->string('code');
            $table->text('description_en');
            $table->text('description_ar');
            $table->string('image');
            $table->float('price');
            $table->uuid('uuid')->default(DB::raw('(UUID())'));
            $table->string('slug');
            $table->string('meta_data')->nullable();
            $table->unsignedBigInteger('subject_id');
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
            $table->unsignedBigInteger('term_id');
            $table->foreign('term_id')->references('id')->on('terms')->onDelete('cascade');
            $table->unsignedBigInteger('grade_id');
            $table->foreign('grade_id')->references('id')->on('grades')->onDelete('cascade');            
            $table->unsignedBigInteger('level_id');
            $table->foreign('level_id')->references('id')->on('grades')->onDelete('cascade');            
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
        Schema::dropIfExists('courses');
    }
}
