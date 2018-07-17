<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBoardmembersTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('boardmembers', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('board_id');
            $table->unsignedInteger('committee_id');
            $table->unsignedInteger('member_id');
            $table->foreign('board_id') ->references('id')
                ->on('boards');
            $table->foreign('committee_id') ->references('id')
                ->on('committees');
            $table->foreign('member_id') ->references('id')
                ->on('members');
            $table->timestamps();
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('boardmembers');
    }
}
