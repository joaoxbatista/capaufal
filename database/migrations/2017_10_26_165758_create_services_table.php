<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); // Nome do Serviço
            $table->text('description'); // Descrição do Serviço
            $table->string('target_public')->nullable(); // Público Alvo
            $table->string('requirements'); // Requisitos
            $table->text('quick_help')->nullable(); // Ajuda Rápida
            $table->integer('slt_id')->unsigned(); // ID da SLT
            $table->integer('sector_id')->unsigned(); // Chave Estrangeira do Setor Responsável
            $table->foreign('sector_id')->references('id')->on('sectors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
