<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAdditionalAtrributesToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar')->nullable();
            $table->string('passport_no')->unique();
            $table->string('gender')->nullable();
            $table->string('birthday')->nullable();
            $table->integer('phone')->nullable();
            $table->text('address')->nullable();
            $table->string('sid')->unique();
            $table->string('class');
            $table->string('group')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar');
            $table->string('passport_no');
            $table->string('gender');
            $table->string('birthday');
            $table->integer('phone');
            $table->text('address');
            $table->string('sid');
            $table->string('class');
            $table->string('group');
        });
    }
}
