<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('pai');
            $table->string('mae');
            $table->string('endereco');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('cep');
            $table->string('uf');
            $table->string('tel1');
            $table->string('tel2')->nullable();
            $table->string('cel')->nullable();
            $table->string('email')->nullable();
            $table->date('dta_nasc');
            $table->string('cpf')->unique();
            $table->string('rg')->unique();
            $table->string('orgao_exp');
            $table->string('igreja');
            $table->integer('idade');
            $table->date('dta_desligamento')->nullable();
            $table->string('motivo_desligamento')->nullable();
            $table->date('dta_batismo_es')->nullable();
            $table->date('dta_batismo_aguas')->nullable();
            $table->string('procedencia');
            $table->string('funcao_eclesiastica')->nullable();
            $table->string('funcao_ministerial')->nullable();
            $table->string('tipo_sanguineo');
            $table->string('fator_rh');
            $table->string('naturalidade');
            $table->string('nacionalidade');
            $table->string('estado_civil');
            $table->string('cor');
            $table->string('profissao');
            $table->string('departamento')->nullable();
            $table->string('destino')->nullable();
            $table->string('sexo');
            $table->text('obs')->nullable();
            $table->string('foto_id')->default('foto');
            $table->boolean('ativo');
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
        Schema::dropIfExists('pessoas');
    }
}
