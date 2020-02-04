<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaleriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galerias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->interger('pagina_id')->usigned()->nullable();
            $table->string('nome');
            $table->integer('ordem')->usigned();
            $table->enum('status', ['A', 'I'])->nullable()->default('A')->comment("Ativo e Inativo");
            $table->string('img_capa')->nullable();
            $table->timestamps();

            $table->foreign('pagina_id')->references('id')->on('paginas')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galerias');
    }
}
