<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

// GET ROUTES

	Route::get('/', 'HomeController@index')->name('home');

	// Rotas de Formulário

		//Cadastro

			Route::get('/novo_pessoa', 'PessoaController@novo')->name('novo_pessoa');
		
			Route::get('/novo_igreja', 'IgrejaController@novo')->name('novo_igreja');

			Route::get('/novo_assinatura', 'AssinaturaController@novo')->name('novo_assinatura');

			Route::get('/novo_missionario', 'MissionarioController@novo')->name('novo_missionario');

		//Tabelas

			Route::get('/novo_eclese', 'EcleseController@novo')->name('novo_eclese');
			
			Route::get('/novo_dpto', 'DptoController@novo')->name('novo_dpto');
			
			Route::get('/novo_entrada', 'EntradaController@novo')->name('novo_entrada');
			
			Route::get('/novo_ministerial', 'MinisterialController@novo')->name('novo_ministerial');
			
			Route::get('/novo_parentesco', 'ParentescoController@novo')->name('novo_parentesco');
			
			Route::get('/novo_profissao', 'ProfissaoController@novo')->name('novo_profissao');
			
			Route::get('/novo_saida', 'SaidaController@novo')->name('novo_saida');
			
			Route::get('/novo_arquivom', 'ArquivomController@novo')->name('novo_arquivom');
		
	// Rotas de Consulta
		
		//Cadastro

			Route::get('/consulta_pessoa_{id}', 'PessoaController@consulta')->name('consulta_pessoa');
		
			Route::get('/consulta_igreja_{id}', 'IgrejaController@consulta')->name('consulta_igreja');

			Route::get('/consulta_assinatura_{id}', 'AssinaturaController@consulta')->name('consulta_assinatura');

			Route::get('/consulta_missionario_{id}', 'MissionarioController@consulta')->name('consulta_missionario');

		//Tabelas
		
			Route::get('/consulta_eclese_{id}', 'EcleseController@consulta')->name('consulta_eclese');
			
			Route::get('/consulta_dpto_{id}', 'DptoController@consulta')->name('consulta_dpto');
			
			Route::get('/consulta_entrada_{id}', 'EntradaController@consulta')->name('consulta_entrada');
			
			Route::get('/consulta_ministerial_{id}', 'MinisterialController@consulta')->name('consulta_ministerial');
			
			Route::get('/consulta_parentesco_{id}', 'ParentescoController@consulta')->name('consulta_parentesco');
			
			Route::get('/consulta_profissao_{id}', 'ProfissaoController@consulta')->name('consulta_profissao');
			
			Route::get('/consulta_saida_{id}', 'SaidaController@consulta')->name('consulta_saida');
			
			Route::get('/consulta_arquivom_{id}', 'ArquivomController@consulta')->name('consulta_arquivom');
		
	// Rotas de Remoção
		
		//Cadastro

			Route::get('/deleta_pessoa_{id}', 'PessoaController@deleta')->name('deleta_pessoa');
		
			Route::get('/deleta_igreja_{id}', 'IgrejaController@deleta')->name('deleta_igreja');

			Route::get('/deleta_assinatura_{id}', 'AssinaturaController@deleta')->name('deleta_assinatura');

			Route::get('/deleta_missionario_{id}', 'MissionarioController@deleta')->name('deleta_missionario');

		//Tabelas
		
			Route::get('/deleta_eclese_{id}', 'EcleseController@deleta')->name('deleta_eclese');
			
			Route::get('/deleta_dpto_{id}', 'DptoController@deleta')->name('deleta_dpto');
			
			Route::get('/deleta_entrada_{id}', 'EntradaController@deleta')->name('deleta_entrada');
			
			Route::get('/deleta_ministerial_{id}', 'MinisterialController@deleta')->name('deleta_ministerial');
			
			Route::get('/deleta_parentesco_{id}', 'ParentescoController@deleta')->name('deleta_parentesco');
			
			Route::get('/deleta_profissao_{id}', 'ProfissaoController@deleta')->name('deleta_profissao');
			
			Route::get('/deleta_saida_{id}', 'SaidaController@deleta')->name('deleta_saida');
			
			Route::get('/deleta_arquivom_{id}', 'ArquivomController@deleta')->name('deleta_arquivom');
		
	// Rotas de Navegação
		
		//Cadastro

			Route::get('/pessoa', 'PessoaController@view')->name('pessoa');
		
			Route::get('/igreja', 'IgrejaController@view')->name('igreja');

			Route::get('/assinatura', 'AssinaturaController@view')->name('assinatura');

			Route::get('/missionario', 'MissionarioController@view')->name('missionario');

		//Tabelas
		
			Route::get('/eclese', 'EcleseController@view')->name('eclese');
			
			Route::get('/dpto', 'DptoController@view')->name('dpto');
			
			Route::get('/entrada', 'EntradaController@view')->name('entrada');
			
			Route::get('/ministerial', 'MinisterialController@view')->name('ministerial');
			
			Route::get('/parentesco', 'ParentescoController@view')->name('parentesco');
			
			Route::get('/profissao', 'ProfissaoController@view')->name('profissao');
			
			Route::get('/saida', 'SaidaController@view')->name('saida');
			
			Route::get('/arquivom', 'ArquivomController@view')->name('arquivom');
		
// POST ROUTES

	// Rotas de Criação

		//Cadastro

			Route::post('/cria_pessoa', 'PessoaController@cria')->name('cria_pessoa');
		
			Route::post('/cria_igreja', 'IgrejaController@cria')->name('cria_igreja');

			Route::post('/cria_assinatura', 'AssinaturaController@cria')->name('cria_assinatura');

			Route::post('/cria_missionario', 'MissionarioController@cria')->name('cria_missionario');

		//Tabelas

			Route::post('/cria_eclese', 'EcleseController@cria')->name('cria_eclese');
			
			Route::post('/cria_dpto', 'DptoController@cria')->name('cria_dpto');
			
			Route::post('/cria_entrada', 'EntradaController@cria')->name('cria_entrada');
			
			Route::post('/cria_ministerial', 'MinisterialController@cria')->name('cria_ministerial');
			
			Route::post('/cria_parentesco', 'ParentescoController@cria')->name('cria_parentesco');
			
			Route::post('/cria_profissao', 'ProfissaoController@cria')->name('cria_profissao');
			
			Route::post('/cria_saida', 'SaidaController@cria')->name('cria_saida');
			
			Route::post('/cria_arquivom', 'ArquivomController@cria')->name('cria_arquivom');

	// Rotas de Atualização

		//Cadastro

			Route::post('/atualiza_pessoa', 'PessoaController@atualiza')->name('atualiza_pessoa');
		
			Route::post('/atualiza_igreja', 'IgrejaController@atualiza')->name('atualiza_igreja');

			Route::post('/atualiza_assinatura', 'AssinaturaController@atualiza')->name('atualiza_assinatura');

			Route::post('/atualiza_missionario', 'MissionarioController@atualiza')->name('atualiza_missionario');

		//Tabelas

			Route::post('/atualiza_eclese', 'EcleseController@atualiza')->name('atualiza_eclese');
			
			Route::post('/atualiza_dpto', 'DptoController@atualiza')->name('atualiza_dpto');
			
			Route::post('/atualiza_entrada', 'EntradaController@atualiza')->name('atualiza_entrada');
			
			Route::post('/atualiza_ministerial', 'MinisterialController@atualiza')->name('atualiza_ministerial');
			
			Route::post('/atualiza_parentesco', 'ParentescoController@atualiza')->name('atualiza_parentesco');
			
			Route::post('/atualiza_profissao', 'ProfissaoController@atualiza')->name('atualiza_profissao');
			
			Route::post('/atualiza_saida', 'SaidaController@atualiza')->name('atualiza_saida');
			
			Route::post('/atualiza_arquivom', 'ArquivomController@atualiza')->name('atualiza_arquivom');
