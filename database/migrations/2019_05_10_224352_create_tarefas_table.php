<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarefasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarefas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->bigInteger('id_usuario')->unsigned()->nullable();
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->bigInteger('id_tipo')->unsigned()->nullable();
            $table->foreign('id_tipo')->references('id')->on('tipos');
            $table->string('privacidade');
            $table->string('descricao');            
            $table->string('status');
            $table->string('data_conclusao');
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
        Schema::dropIfExists('tarefas');
    }
}
