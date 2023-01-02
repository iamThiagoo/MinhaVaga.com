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
        Schema::create('experiencias', function (Blueprint $table) {
            $table->id();

            $table->char('name', 200);
            $table->date('initial_date');
            $table->date('final_date');
            $table->boolean('current_work');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->char('empresa', 200);

            $table->unsignedBigInteger('type_job_id');
            $table->foreign('type_job_id')->references('id')->on('type_job');

            // $table->unsignedBigInteger('cidade_id');
            // $table->foreign('cidade_id')->references('id')->on('cidade');

            // $table->unsignedBigInteger('estado_id');
            // $table->foreign('estado_id')->references('id')->on('estado');

            $table->text('funcao')->nullable();
            $table->boolean('status')->default(true);

            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('update_at')->default(DB::raw('CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experiencias');
    }
};
