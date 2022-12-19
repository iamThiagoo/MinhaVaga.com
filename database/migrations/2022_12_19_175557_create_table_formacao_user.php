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
        Schema::create('table_formacao_user', function (Blueprint $table) {
            $table->id();
            $table->char('name', 200);
            $table->text('descricao');

            $table->unsignedBigInteger('instituicao_id');
            $table->foreign('instituicao_id')->references('id')->on('instituicoes');

            $table->date('initial_date');
            $table->date('final_date');

            $table->float('nota');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('formacao_status_id');
            $table->foreign('formacao_status_id')->references('id')->on('formacao_status');

            $table->boolean('status');
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
        Schema::dropIfExists('table_formacao_user');
    }
};
