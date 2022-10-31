<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaga', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->float('salary');

            $table->integer('type_id');
            $table->foreign('type_id')->references('id')->on('type_job');

            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->integer('cidade_id');
            $table->foreign('cidade_id')->references('id')->on('cidade');

            $table->integer('estado_id');
            $table->foreign('estado_id')->references('id')->on('estado');

            $table->boolean('vaga_status');
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
        Schema::dropIfExists('vaga');
    }
};
