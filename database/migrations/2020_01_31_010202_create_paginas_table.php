<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaginasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id')->unsigned()->default(0);
            $table->string('name');
            $table->text('content');
            $table->text('link');            
            $table->longText('google_maps')->nullable();
            $table->enum('status', ['A', 'I'])->default('A')->comment('Ativo ou Inativo');
            $table->integer('order')->unsigned();
            $table->string('image')->nullable();
            $table->string('slug');
            $table->timestamps();

            // $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('page');
    }
}
