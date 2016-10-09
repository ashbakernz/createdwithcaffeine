<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscussionRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discussion_replies', function (Blueprint $table) {
               $table->increments('id');
               $table->integer('discussions_id')->unsigned();
               $table->string('user_id');
               $table->string('user_name');
               $table->string('content');
               $table->timestamps();
               $table->foreign('discussion_id')->references('id')->on('discussions');
           });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
