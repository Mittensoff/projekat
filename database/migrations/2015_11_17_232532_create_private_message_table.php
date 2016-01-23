<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivateMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('private_message', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('conversation_id')->unsigned()->index(); //!!!

            $table->string('message');
            $table->boolean('read');

            $table->foreign('conversation_id')->references('id')->on('conversation')->onDelete('cascade');
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
        Schema::drop('private_message');
    }
}
