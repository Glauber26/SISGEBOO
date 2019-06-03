<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDenunciaAnonimasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('denuncia_anonimas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('tipo', ['Agressão', 'Violência doméstica', 'Homicídio','Tráfico de drogas','Porte ilegal de armas','Sequestro','Estupro', 'Outros'])->default($value = 'Outros');
            $table->text('descricao_suspeito');
            $table->string('rua');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->text('descricao_ocorrencia');
            $table->softDeletes();
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
        Schema::dropIfExists('denuncia_anonimas');
    }
}
