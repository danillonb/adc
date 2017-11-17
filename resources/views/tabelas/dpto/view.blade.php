@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Departamentos</b></div>
                <div class="panel-body">
                    <br>
                    <div class="col-md-8">
                        
                            <div class="panel panel-default">
                                <div class="panel-heading"><b>Novo Departamento</b></div>
                                <div class="panel-body">
                                    <div class="flash-message"><!-- start .flash-message -->
                                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                            @if(Session::has('alert-' . $msg))
                                                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                                            @endif
                                        @endforeach
                                    </div> <!-- end .flash-message -->
                                    <form class="form-horizontal" role="form" method="POST"     >
                                        {{ csrf_field() }}
                
                                        <div class="form-group{{ $errors->has('departamento') ? ' has-error' : '' }}">
                                            <label for="Departamento" class="col-md-4 control-label">Departamento</label>
                
                                            <div class="col-md-6">
                                                <input id="departamento" type="text" class="form-control" placeholder="Digite o nome do  departamento" name="departamento" value="{{ old('departamento') }}" autofocus>
                
                                                @if ($errors->has('departamento'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('departamento') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('igreja') ? ' has-error' : '' }}">
                                            <label for="Igreja" class="col-md-4 control-label">Igreja</label>
                
                                            <div class="col-md-6">
                                                <select id="igreja" type="text" class="form-control" name="igreja" value="{{ old('igreja') }}" >
                                                    <option value="">Selecione a Igreja</option>
                                                @foreach($igrejas as $igreja)
                                                    <option value=" {{ $igreja->razao_social }} ">{{ $igreja->razao_social }}</option>
                                                @endforeach
                                                </select>
                                                @if ($errors->has('igreja'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('igreja') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('lider') ? ' has-error' : '' }}">
                                            <label for="Lider" class="col-md-4 control-label">Lider</label>
                
                                            <div class="col-md-6">
                                                    <select id="lider" type="text" class="form-control" name="lider" value="{{ old('lider') }}" >
                                                        <option value="">Selecione o Lider</option>
                                                    @foreach($lideres as $lider)
                                                        <option value=" {{ $lider->nome }} ">{{ $lider->nome }}</option>
                                                    @endforeach
                                                    </select>
                                                    @if ($errors->has('lider'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('lider') }}</strong>
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
                                <div class="panel-heading"><b>Lista de Departamentos</b></div>
                                <div class="panel-body pre-scrollable">
                                    <table class="table table-hover table-striped responsive">
                                        <thead>
                                            <th>Departamento</th>
                                            <th>Igreja</th>
                                            <th>Lider</th>
                                            <th>Excluir</th>
                                        </thead>
                                        <tbody>
                                        @foreach($dptos as $dpto)
                                            <tr>
                                                <td>{{ $dpto->departamento }}</td>
                                                <td>{{ $dpto->igreja }}</td>
                                                <td>{{ $dpto->lider }}</td>
                                                <td><a href="{{ route('deleta_dpto', $dpto->id ) }}" onClick="return confirm('Deseja realmente excluir {{ $dpto->departamento }}?');"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading"><b>Membros por Departamento</b></div>
                            <div class="panel-body pre-scrollable">
                                <ul class="list-group">
                            @foreach($relatorios_rapido as $relatorio_rapido)
                                    <li class="list-group-item">
                                        <b>{{ $relatorio_rapido->departamento }}</b>
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
