<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
   
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
            $table->string('name_ar');
            $table->string('code');
            $table->string('slug');
            $table->string('sharable_link');
            $table->string('image');
            $table->integer('students_numbers');
            $table->integer('weeks_numbers');
            $table->text('description_en');
            $table->text('description_ar');
            $table->uuid('uuid')->default(DB::raw('(UUID())'));
            $table->unsignedBigInteger('created_by');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('subject_id');
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
            $table->unsignedBigInteger('level_id');
            $table->foreign('level_id')->references('id')->on('grades')->onDelete('cascade');
            $table->unsignedBigInteger('term_id');
            $table->foreign('term_id')->references('id')->on('terms')->onDelete('cascade');
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
             
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
        Schema::dropIfExists('groups');
    }
}
