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
        Schema::create('galleries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('page_id');
            $table->string('name');
            $table->integer('order')->usigned();
            $table->enum('status', ['A', 'I'])->nullable()->default('A')->comment("Ativo e Inativo");
            $table->string('image')->nullable();
            $table->string('slug');
            $table->timestamps();

            $table->foreign('page_id')->references('id')->on('page')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galleries');
    }
}
