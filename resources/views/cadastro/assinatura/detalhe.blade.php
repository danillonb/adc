@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Assinatura</b></div>
                <div class="panel-body">
                    <br>
                    <div class="col-md-8">
                        
                            <div class="panel panel-default">
                                <div class="panel-heading"><b>Editar Assinatura</b></div>
                                <div class="panel-body">
                                    <div class="flash-message"><!-- start .flash-message -->
                                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                            @if(Session::has('alert-' . $msg))
                                                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                                            @endif
                                        @endforeach
                                    </div> <!-- end .flash-message -->
                                    <form class="form-horizontal" role="form" method="POST" action="{{ route('atualiza_assinatura') }}">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{ $ass->id }}">
                                        <div class="form-group{{ $errors->has('assinatura') ? ' has-error' : '' }}">
                                            <label for="assinatura" class="col-md-4 control-label">Assinatura</label>
                
                                            <div class="col-md-6">
                                                <select id="assinatura" type="text" class="form-control" name="assinatura" >
                                                    <option value="{{ $ass->assinatura }}">{{ $ass->assinatura }}</option>
                                                @foreach($pessoas as $pessoa)
                                                    <option value=" {{ $pessoa->nome }} ">{{ $pessoa->nome }}</option>
                                                @endforeach
                                                </select>
                                                @if ($errors->has('assinatura'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('assinatura') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('cargo') ? ' has-error' : '' }}">
                                            <label for="cargo" class="col-md-4 control-label">Cargo</label>
                
                                            <div class="col-md-6">
                                                <select id="cargo" type="text" class="form-control" name="cargo" >
                                                    <option value="{{ $ass->cargo }}">{{ $ass->cargo }}</option>
                                                @foreach($ministerials as $ministerial)
                                                    <option value=" {{ $ministerial->funcao }} ">{{ $ministerial->funcao }}</option>
                                                @endforeach
                                                </select>
                                                @if ($errors->has('cargo'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('cargo') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('registro') ? ' has-error' : '' }}">
                                            <label for="Registro" class="col-md-4 control-label">Registro</label>
                
                                            <div class="col-md-6">
                                                <input id="registro" type="text" class="form-control" placeholder="Digite a número do registro" name="registro" value="{{ $ass->registro }}" autofocus>
                
                                                @if ($errors->has('registro'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('registro') }}</strong>
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
                                <div class="panel-heading"><b>Lista de Assinaturas</b></div>
                                <div class="panel-body pre-scrollable">
                                    <table class="table table-hover table-striped responsive">
                                        <thead>
                                            <th>Assinatura</th>
                                            <th>Cargo</th>
                                            <th>Registro</th>
                                            <th>Editar</th>
                                            <th>Excluir</th>
                                        </thead>
                                        <tbody>
                                        @foreach($assinaturas as $assinatura)
                                            <tr>
                                                <td>{{ $assinatura->assinatura }}</a></td>
                                                <td>{{ $assinatura->cargo }}</td>
                                                <td>{{ $assinatura->registro }}</td>
                                                <td><a href="{{ route('consulta_assinatura', $assinatura->id ) }}"><span title="Editar" class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                                                <td><a href="{{ route('deleta_assinatura', $assinatura->id ) }}" onClick="return confirm('Deseja realmente excluir {{ $assinatura->assinatura }}?');"><span title="Excluir" class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading"><b> - </b></div>
                            <div class="panel-body pre-scrollable">
                                <ul class="list-group">
                                
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
