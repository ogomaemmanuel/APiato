<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMembersTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {

            $table->increments('id');
            $table->string('first_name');
            $table->string('second_name');
            $table->string('id_no');
            $table->string('phone_no');
            $table->string('department');


            $table->timestamps();
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('members');
    }
}
