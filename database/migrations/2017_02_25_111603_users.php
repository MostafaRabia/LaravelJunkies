<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_email')->unique();
            $table->string('user_password');
            $table->string('user_name');
            $table->string('user_addres');
            $table->string('user_country');
	        $table->string('user_city');
            $table->integer('user_phone_number');
	        $table->integer('user_prices');
            $table->integer('user_admin');
            $table->integer('user_confirmation');
	        $table->integer('user_banned');
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
