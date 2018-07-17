<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommitteeTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('committees', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->timestamps();
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('committees');
    }
}
