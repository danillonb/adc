@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Profissões</b></div>
                <div class="panel-body">
                    <br>
                    <div class="col-md-8">
                        
                            <div class="panel panel-default">
                                <div class="panel-heading"><b>Nova Profissão</b></div>
                                <div class="panel-body">
                                    <div class="flash-message"><!-- start .flash-message -->
                                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                            @if(Session::has('alert-' . $msg))
                                                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                                            @endif
                                        @endforeach
                                    </div> <!-- end .flash-message -->
                                    <form class="form-horizontal" role="form" method="POST" action="{{ route('cria_profissao') }}">
                                        {{ csrf_field() }}
                
                                        <div class="form-group{{ $errors->has('profissao') ? ' has-error' : '' }}">
                                            <label for="profissao" class="col-md-4 control-label">Profissão</label>
                
                                            <div class="col-md-6">
                                                <input id="profissao" type="text" class="form-control" placeholder="Digite a Profissão" name="profissao" value="{{ old('profissao') }}" autofocus>
                
                                                @if ($errors->has('profissao'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('profissao') }}</strong>
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
                                <div class="panel-heading"><b>Lista de Profissões</b></div>
                                <div class="panel-body pre-scrollable">
                                    <table class="table table-hover table-striped responsive">
                                        <thead>
                                            <th>Profissão</th>
                                            <th>Excluir</th>
                                        </thead>
                                        <tbody>
                                        @foreach($profissaos as $profissao)
                                            <tr>
                                                <td>{{ $profissao->profissao }}</td>
                                                <td><a href="{{ route('deleta_profissao', $profissao->id ) }}" onClick="return confirm('Deseja realmente excluir {{ $profissao->profissao }}?');"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading"><b>Membros por Profissão</b></div>
                            <div class="panel-body pre-scrollable">
                                <ul class="list-group">
                            @foreach($relatorios_rapido as $relatorio_rapido)
                                    <li class="list-group-item">
                                        <b>{{ $relatorio_rapido->profissao }}</b>
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
