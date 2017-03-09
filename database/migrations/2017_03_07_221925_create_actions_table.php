<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actions', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title')->unique();
            $table->longText('description');
            $table->boolean('create_p');
            $table->boolean('debate_p');
            $table->boolean('support_p');
            $table->boolean('opt_p');
            $table->boolean('audit');
            $table->string('admin_email');
            $table->integer('admin_id')->unsigned();
            $table->foreign('admin_id')->references('id')->on('users');

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
        Schema::drop('actions');
    }
}