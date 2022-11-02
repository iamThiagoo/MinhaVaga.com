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
            $table->char('name', 150);
            $table->text('description');
            $table->float('salary');

            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('type_job');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->delete('cascade');

            $table->unsignedBigInteger('cidade_id');
            $table->foreign('cidade_id')->references('id')->on('cidade');

            $table->unsignedBigInteger('estado_id');
            $table->foreign('estado_id')->references('id')->on('estado');

            $table->boolean('status')->default(TRUE);
            $table->timestampsTz();
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
