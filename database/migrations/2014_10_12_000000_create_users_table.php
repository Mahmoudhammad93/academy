<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('image')->nullable();
            $table->boolean('active')->default(0);
            $table->string('slug');
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('gender')->nullable();
            $table->string('school')->nullable();
            $table->string('phone')->nullable();
            $table->string('language')->nullable();
            $table->text('about')->nullable();
            $table->string('address')->nullable();
            $table->string('account_type')->default('student');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
