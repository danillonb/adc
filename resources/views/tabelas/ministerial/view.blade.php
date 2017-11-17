@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Função Ministerial</b></div>
                <div class="panel-body">
                    <br>
                    <div class="col-md-8">
                        
                            <div class="panel panel-default">
                                <div class="panel-heading"><b>Nova Função</b></div>
                                <div class="panel-body">
                                    <div class="flash-message"><!-- start .flash-message -->
                                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                            @if(Session::has('alert-' . $msg))
                                                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                                            @endif
                                        @endforeach
                                    </div> <!-- end .flash-message -->
                                    <form class="form-horizontal" role="form" method="POST" action="{{ route('cria_ministerial') }}">
                                        {{ csrf_field() }}
                
                                        <div class="form-group{{ $errors->has('funcao') ? ' has-error' : '' }}">
                                            <label for="Função" class="col-md-4 control-label">Função</label>
                
                                            <div class="col-md-6">
                                                <input id="funcao" type="text" class="form-control" placeholder="Digite o nome da função ministerial" name="funcao" value="{{ old('funcao') }}" autofocus>
                
                                                @if ($errors->has('funcao'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('funcao') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('descricao') ? ' has-error' : '' }}">
                                            <label for="Descrição" class="col-md-4 control-label">Descrição</label>
                
                                            <div class="col-md-6">
                                                <textarea id="descricao" class="form-control" placeholder="Digite uma descrição para a função" name="descricao" value="{{ old('descricao') }}" ></textarea>
                
                                                @if ($errors->has('descricao'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('descricao') }}</strong>
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
                                <div class="panel-heading"><b>Lista de Funções Ministeriais</b></div>
                                <div class="panel-body pre-scrollable">
                                    <table class="table table-hover table-striped responsive">
                                        <thead>
                                            <th>Função Ministerial</th>
                                            <th>Descrição</th>
                                            <th>Excluir</th>
                                        </thead>
                                        <tbody>
                                        @foreach($funcao_ministerial as $funcao)
                                            <tr>
                                                <td>{{ $funcao->funcao }}</td>
                                                <td>{{ $funcao->descricao }}</td>
                                                <td><a href="{{ route('deleta_ministerial', $funcao->id ) }}" onClick="return confirm('Deseja realmente excluir {{ $funcao->funcao }}?');"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading"><b>Membros por Função Ministerial</b></div>
                            <div class="panel-body pre-scrollable">
                                <ul class="list-group">
                            @foreach($relatorios_rapido as $relatorio_rapido)
                                    <li class="list-group-item">
                                        <b>{{ $relatorio_rapido->funcao_ministerial }}</b>
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
