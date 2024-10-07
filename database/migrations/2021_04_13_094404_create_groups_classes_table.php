<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * 

     */

    public function up()
    {
        Schema::create('groups_classes', function (Blueprint $table) {
            $table->id();
            $table->enum('week_day',['Saturday', 'Sunday','Monday','Tuesday','Wednesday','Thursday','Friday']);
            $table->dateTime('from');
            $table->dateTime('to');
            $table->unsignedBigInteger('group_id');
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
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
        Schema::dropIfExists('groups_classes');
    }
}
