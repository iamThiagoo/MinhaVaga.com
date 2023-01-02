<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->char('name', 150);
            $table->char('email', 150)->unique();
            $table->char('phone', 20);
            $table->text('bio')->nullable();
            $table->string('user_photo')->nullable();
            $table->string('password');
            $table->char('cpf', 20)->unique();
            $table->date('birthday');
            $table->char('slug', 150);

            $table->unsignedBigInteger('cidade_id');
            $table->foreign('cidade_id')->references('id')->on('cidade');

            $table->unsignedBigInteger('estado_id');
            $table->foreign('estado_id')->references('id')->on('estado');

            $table->boolean('create_profile')->default(false);
            $table->timestamp('email_verified_at')->nullable();

            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('update_at')->default(DB::raw('CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP'));

            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
