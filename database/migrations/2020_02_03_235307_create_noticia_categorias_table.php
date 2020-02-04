<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticiaCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticia_categorias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('descricao')->nullable();
            $table->integer('posicao')->unsigned();
            $table->enum('status', ['A', 'I'])->nullable()->default('A')->comment('Ativo ou Inativo');
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
        Schema::dropIfExists('noticia_categorias');
    }
}
