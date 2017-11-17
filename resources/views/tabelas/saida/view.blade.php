@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Saídas</b></div>
                <div class="panel-body">
                    <br>
                    <div class="col-md-8">
                        
                            <div class="panel panel-default">
                                <div class="panel-heading"><b>Nova Saída</b></div>
                                <div class="panel-body">
                                    <div class="flash-message"><!-- start .flash-message -->
                                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                            @if(Session::has('alert-' . $msg))
                                                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                                            @endif
                                        @endforeach
                                    </div> <!-- end .flash-message -->
                                    <form class="form-horizontal" role="form" method="POST" action="{{ route('cria_saida') }}">
                                        {{ csrf_field() }}
                
                                        <div class="form-group{{ $errors->has('saida') ? ' has-error' : '' }}">
                                            <label for="saida" class="col-md-4 control-label">Saída</label>
                
                                            <div class="col-md-6">
                                                <input id="saida" type="text" class="form-control" placeholder="Digite a Saída" name="saida" value="{{ old('saida') }}" autofocus>
                
                                                @if ($errors->has('saida'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('saida') }}</strong>
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
                                <div class="panel-heading"><b>Lista de Saídas</b></div>
                                <div class="panel-body pre-scrollable">
                                    <table class="table table-hover table-striped responsive">
                                        <thead>
                                            <th>Saída</th>
                                            <th>Excluir</th>
                                        </thead>
                                        <tbody>
                                        @foreach($saidas as $saida)
                                            <tr>
                                                <td>{{ $saida->saida }}</td>
                                                <td><a href="{{ route('deleta_saida', $saida->id ) }}" onClick="return confirm('Deseja realmente excluir {{ $saida->saida }}?');"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading"><b>Membros por Saída</b></div>
                            <div class="panel-body pre-scrollable">
                                <ul class="list-group">
                            @foreach($relatorios_rapido as $relatorio_rapido)
                                    <li class="list-group-item">
                                        <b>{{ $relatorio_rapido->destino }}</b>
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
