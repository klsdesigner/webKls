<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('categoria_noticia_id');
            $table->string('titulo');
            $table->longText('descricao');
            $table->longText('materia');
            $table->string('fonte')->comment('Origem da noticia');
            $table->interger('ordem');
            $table->enum('status', ['A', 'I'])->nullable()->default(['A'])->comment('Ativo ou Inativo');
            $table->string('imagem');
            $table->timestamps();

            $table->foreign('categoria_noticia_id')->references('id')->on('noticia_categorias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('noticias');
    }
}
