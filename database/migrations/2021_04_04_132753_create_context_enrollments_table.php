<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContextEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('context_enrollments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('context_type');
            $table->unsignedBigInteger('context_id');
            $table->string('role');
            $table->boolean('status')->default(1);
            $table->string('meta_data')->nullable();
            $table->dateTime('enrollment_date')->nullable();
            $table->dateTime('complete_date')->nullable();
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
        Schema::dropIfExists('context_enrollments');
    }
}
