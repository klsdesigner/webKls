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
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('news_category_id');
            $table->string('title');
            $table->longText('description');
            $table->longText('content');
            $table->string('source')->comment('Origem da noticia');
            $table->integer('order')->unsigned();
            $table->enum('status', ['A', 'I'])->nullable()->default('A')->comment('Ativo ou Inativo');
            $table->string('image');
            $table->string('slug');
            $table->timestamps();

            $table->foreign('news_category_id')->references('id')->on('news_category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
