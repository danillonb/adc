@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Igrejas</b></div>
                <div class="panel-body">
                    <br>
                    <div class="col-md-8">
                        
                            <div class="panel panel-default">
                                <div class="panel-heading"><b>Nova Igreja</b></div>
                                <div class="panel-body">
                                    <div class="flash-message"><!-- start .flash-message -->
                                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                            @if(Session::has('alert-' . $msg))
                                                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                                            @endif
                                        @endforeach
                                    </div> <!-- end .flash-message -->
                                    <form class="form-horizontal" role="form" method="POST" action="{{ route('cria_igreja') }}">
                                        {{ csrf_field() }}
                
                                        <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                                            <label for="nome" class="col-md-4 control-label">Nome</label>
                
                                            <div class="col-md-6">
                                                <input id="nome" type="text" class="form-control" placeholder="Digite o nome da Igreja" name="nome" value="{{ old('nome') }}" autofocus>
                
                                                @if ($errors->has('nome'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('nome') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('razao_social') ? ' has-error' : '' }}">
                                            <label for="razao_social" class="col-md-4 control-label">Razão Social</label>
                
                                            <div class="col-md-6">
                                                <input id="razao_social" type="text" class="form-control" placeholder="Digite a Razão Social" name="razao_social" value="{{ old('razao_social') }}">
                
                                                @if ($errors->has('razao_social'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('razao_social') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                         <div class="form-group{{ $errors->has('cnpj') ? ' has-error' : '' }}">
                                            <label for="cnpj" class="col-md-4 control-label">CNPJ</label>
                                            <div class="col-md-6">
                                                <input id="cnpj" type="number" class="form-control" placeholder="Digite CNPJ, somente os números" name="cnpj" value="{{ old('cnpj') }}">
                                                @if ($errors->has('cnpj'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('cnpj') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('endereco') ? ' has-error' : '' }}">
                                            <label for="endereco" class="col-md-4 control-label">Endereço</label>
                                            <div class="col-md-6">
                                                <input id="endereco" type="text" class="form-control" placeholder="Digite o Endereço" name="endereco" value="{{ old('endereco') }}">
                                                @if ($errors->has('endereco'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('endereco') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('bairro') ? ' has-error' : '' }}">
                                            <label for="bairro" class="col-md-4 control-label">Bairro</label>
                                            <div class="col-md-6">
                                                <input id="bairro" type="text" class="form-control" placeholder="Digite o Bairro" name="bairro" value="{{ old('bairro') }}">
                                                @if ($errors->has('bairro'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('bairro') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('cidade') ? ' has-error' : '' }}">
                                            <label for="cidade" class="col-md-4 control-label">Cidade</label>
                                            <div class="col-md-6">
                                                <input id="cidade" type="text" class="form-control" placeholder="Digite a Cidade" name="cidade" value="{{ old('cidade') }}">
                                                @if ($errors->has('cidade'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('cidade') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        
                                        <div class="form-group{{ $errors->has('uf') ? ' has-error' : '' }}">
                                            <label for="uf" class="col-md-4 control-label">UF</label>
                                            <div class="col-md-6">
                                                    <select id="uf" type="text" class="form-control" name="uf" value="{{ old('uf') }}" >
                                                        <option value="">Selecione a UF</option>
                                                    @foreach($ufs as $uf)
                                                        <option value=" {{ $uf->uf }} ">{{ $uf->uf }}</option>
                                                    @endforeach
                                                    </select>
                                                    @if ($errors->has('uf'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('uf') }}</strong>
                                                    </span>
                                                    @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('cep') ? ' has-error' : '' }}">
                                            <label for="cep" class="col-md-4 control-label">CEP</label>
                                            <div class="col-md-6">
                                                <input id="cep" type="text" class="form-control" placeholder="Digite o CEP" name="cep" value="{{ old('cep') }}">
                                                @if ($errors->has('cep'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('cep') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
                                            <label for="tel" class="col-md-4 control-label">Telefone</label>
                                            <div class="col-md-6">
                                                <input id="tel" type="text" class="form-control" placeholder="Digite o Telefone da Igreja" name="tel" value="{{ old('tel') }}">
                                                @if ($errors->has('tel'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('tel') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('dirigente') ? ' has-error' : '' }}">
                                            <label for="dirigente" class="col-md-4 control-label">Dirigente</label>
                                            <div class="col-md-6">
                                                    <select id="dirigente" type="text" class="form-control" name="dirigente">
                                                        <option value="">Selecione o Dirigente</option>
                                                    @foreach($pessoas as $pessoa)
                                                        <option value=" {{ $pessoa->nome }} ">{{ $pessoa->nome }}</option>
                                                    @endforeach
                                                    </select>
                                                    @if ($errors->has('dirigente'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('dirigente') }}</strong>
                                                    </span>
                                                    @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('sede') ? ' has-error' : '' }}">
                                            <label for="sede" class="col-md-4 control-label">Sede</label>
                                            <div class="col-md-6">
                                                    <select id="sede" type="text" class="form-control" name="sede" >
                                                        <option value="">Selecione a Igreja Sede</option>
                                                    @foreach($igrejas as $igreja)
                                                        <option value=" {{ $igreja->nome }} ">{{ $igreja->nome }}</option>
                                                    @endforeach
                                                    </select>
                                                    @if ($errors->has('sede'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('sede') }}</strong>
                                                    </span>
                                                    @endif
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-8 col-md-offset-4">
                                                <button title="Salvar" type="submit" class="btn btn-success glyphicon glyphicon-floppy-disk"></button>
                                                <button title="Limpar formulário" type="reset" class="btn btn-danger glyphicon glyphicon-refresh"></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading"><b>Lista de Igrejas</b></div>
                                <div class="panel-body pre-scrollable">
                                    <table class="table table-hover table-striped responsive">
                                        <thead>
                                            <th>Nome</th>
                                            <th>Dirigente</th>
                                            <th>Telefone</th>
                                            <th>Editar</th>
                                            <th>Excluir</th>
                                        </thead>
                                        <tbody>
                                        @foreach($igrejas as $igreja)
                                            <tr>
                                                <td>{{ $igreja->nome }}</td>
                                                <td>{{ $igreja->dirigente }}</td>
                                                <td>{{ $igreja->telefone }}</td>
                                                <td><a href="#"><span title="editar" class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                                                <td><a href="{{ route('deleta_igreja', $igreja->id ) }}" onClick="return confirm('Deseja realmente excluir {{ $igreja->nome }}?');"><span title="Excluir" class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading"><b>Membros por Igreja</b></div>
                            <div class="panel-body pre-scrollable">
                                <ul class="list-group">
                            @foreach($relatorios_rapido as $relatorio_rapido)
                                    <li class="list-group-item">
                                        <b>{{ $relatorio_rapido->igreja }}</b>
                                        <a title="Listar Membros" href="#"><span class="badge">{{ $relatorio_rapido->total }}</span></a>
                                    </li>
                            @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
