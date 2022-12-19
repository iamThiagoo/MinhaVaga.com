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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->char('name', 200);
            $table->text('bio')->nullable();
            $table->char('cnpj/cpf', 25);
            $table->char('phone', 20);
            $table->string('empresa_photo')->nullable();;

            $table->string('email');
            $table->string('password');

            $table->char('empresa_slug', 150);

            $table->unsignedBigInteger('cidade_id');
            $table->foreign('cidade_id')->references('id')->on('cidade');

            $table->unsignedBigInteger('estado_id');
            $table->foreign('estado_id')->references('id')->on('estado');

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
        Schema::dropIfExists('table_empresas');
    }
};
