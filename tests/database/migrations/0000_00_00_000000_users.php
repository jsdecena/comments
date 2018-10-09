<?php

use Illuminate\Support\Facades\Schema;

class Users extends \Illuminate\Database\Migrations\Migration
{
    public function up()
    {
        Schema::create('users', function ($table) {
            $table->increments('id');
            $table->string('name', 100);
        });
    }

    public function down()
    {
        Schema::drop('users');
    }
}