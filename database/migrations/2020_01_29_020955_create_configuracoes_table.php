<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfiguracoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracoes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('url')->nullable();
            $table->text('descricao');
            $table->text('palavra_chave')->nullable();
            $table->text('endereco');
            $table->text('google_maps')->nullable();
            $table->string('fone')->nullable();
            $table->string('celular')->nullable();
            $table->enum('whatsapp', ['S', 'N'])->default('N');
            $table->string('logotipo')->nullable();
            $table->string('icone')->nullable();
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
        Schema::dropIfExists('configuracoes');
    }
}
