<?php

use Illuminate\Support\Facades\Schema;

class Posts extends \Illuminate\Database\Migrations\Migration
{
    public function up()
    {
        Schema::create('posts', function ($table) {
            $table->increments('id');
            $table->string('title');
        });
    }

    public function down()
    {
        Schema::drop('posts');
    }
}