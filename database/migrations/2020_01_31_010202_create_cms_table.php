<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('categoria_id')->nullable();
            $table->string('nome');
            $table->text('conteudo');
            $table->text('link');            
            $table->longText('google_maps')->nullable();
            $table->enum('status', ['A', 'I'])->default(['A']);
            $table->integer('ordem');
            $table->string('imagem')->nullable();
            $table->timestamps();

            $table->foreign('categoria_id')
                  ->references('id')
                  ->on('categorias')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cms');
    }
}
