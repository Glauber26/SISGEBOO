<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcorrenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ocorrencias', function (Blueprint $table) {

            //atributos genéricos
            $table->bigIncrements('id');
            $table->text('descricao_suspeito')->nullable();
            $table->string('rua')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->text('descricao_ocorrencia')->nullable();
            $table->string('tipo')->nullable();
            $table->string('recuperado')->nullable();
            $table->enum('ameaca', ['Sim', 'Não'])->nullable();
            $table->enum('publico', ['Sim', 'Não'])->nullable();
            $table->enum('furto_ou_perda', ['Furto Veiculo', 'Furto Objeto(s)', 'Furto Documento(s)', 'Perda Objeto(s)', 'Perda Documento(s)'])->nullable();
            $table->string('nascimento')->nullable();
            $table->string('nome')->nullable();
            $table->string('cpf')->nullable();
            $table->string('rg')->nullable();
            $table->string('ufrg')->nullable();
            $table->string('telefone')->nullable();
            $table->softDeletes();
            $table->timestamps();


            //furto de veículos
            $table->string('chassi')->nullable();
            $table->string('renavam')->nullable();
            $table->string('placa')->nullable();
            $table->string('anofabricacao')->nullable();
            $table->enum('categoria', ['Particular', 'Aluguel', 'Serviço'])->nullable();
            $table->string('marca')->nullable();
            $table->date('dataRoubo')->nullable();
            $table->time('horaRoubo')->nullable();
            $table->string('rua_roubo')->nullable();
            $table->string('bairro_roubo')->nullable();
            $table->string('cidade_roubo')->nullable();
            $table->string('estado_roubo')->nullable();
            $table->string('cep_local_roubo')->nullable();


           // Ocorrência Perda ou Furtos de Objetos
            $table->string('objeto_nome')->nullable();
            $table->string('objeto_descricao')->nullable();
            $table->string('objeto_quantidade')->nullable();
            $table->string('objeto_cor')->nullable();
            $table->enum('objeto_marca', ['Particular', 'Aluguel', 'Serviço'])->nullable();
            $table->string('objeto_valor')->nullable();


            //Ocorrência Perda / Furtos de Documentos
            $table->string('doc_nome')->nullable();
            $table->string('doc_numero')->nullable();

            //Ocorrência de trânsito
            $table->string('vitimas')->nullable();
            $table->string('quant_vitimas')->nullable();
            $table->string('descricao_local')->nullable();

            //Ocorrência de Pessoas Desaparecidas
            $table->string('ultima_localizacao_rua')->nullable();
            $table->string('ultima_localizacao_cidade')->nullable();
            $table->string('ultima_localizacao_estado')->nullable();
            $table->string('ultima_localizacao_bairro')->nullable();
            $table->string('ultima_localizacao_descricao')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ocorrencias');
    }
}
