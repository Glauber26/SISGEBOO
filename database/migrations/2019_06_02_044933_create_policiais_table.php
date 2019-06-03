<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoliciaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policials', function (Blueprint $table) {
         $table->bigIncrements('id');
         $table->string('name');
         $table->string('email',100)->unique();
         $table->timestamp('email_verified_at')->nullable();
         $table->string('password');
         $table->string('cpf');
         $table->string('rg');
         $table->string('ufrg');
         $table->date('nascimento');
         $table->enum('funcao', ['Policial'])->default($value = 'Policial');
         $table->string('rua');
         $table->string('bairro');
         $table->string('cidade');
         $table->string('estado');
         $table->string('telefone');
         $table->softDeletes();
         $table->rememberToken();
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
        Schema::dropIfExists('policiais');
    }
}
