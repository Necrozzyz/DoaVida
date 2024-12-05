<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacoes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');  // A coluna de chave estrangeira
            $table->unsignedBigInteger('orgao_id');
            $table->string('tipo');  // Tipo: Doador ou Receptor
            $table->timestamps();
        
            // Alteração para fazer referência à tabela 'usuario'
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('orgao_id')->references('id')->on('orgaos')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relacoes');
    }

};
