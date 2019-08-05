<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
<<<<<<< HEAD:database/migrations/2019_08_04_140431_create_users_table.php
            //$table->timestamp('email_verified_at')->nullable();
=======

            $table->timestamp('email_verified_at')->nullable();
>>>>>>> feed0d3a25c661675abbd6db82005efdf012b4d4:database/migrations/2014_10_12_000000_create_users_table.php
            $table->string('password');
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
