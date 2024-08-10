<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('atendimentos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_cliente');
            $table->string('whatsapp');
            $table->string('contacto2')->nullable();
            $table->string('cpf');
            $table->string('cep');
            $table->enum('como_nos_conheceu',['Facebook','Linkedin','Google','Outro'])->default('Outro');
            $table->text('descricao');
            $table->text('obs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atendimentos');
    }
};
