@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"> <b>Parentesco</b></div>
                <div class="panel-body">
                    <br>
                    <div class="col-md-8">
                        
                            <div class="panel panel-default">
                                <div class="panel-heading"><b>Novo Parentesco</b></div>
                                <div class="panel-body">
                                    <div class="flash-message"><!-- start .flash-message -->
                                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                            @if(Session::has('alert-' . $msg))
                                                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                                            @endif
                                        @endforeach
                                    </div> <!-- end .flash-message -->
                                    <form class="form-horizontal" role="form" method="POST" action="{{ route('cria_parentesco') }}">
                                        {{ csrf_field() }}
                
                                        <div class="form-group{{ $errors->has('parentesco') ? ' has-error' : '' }}">
                                            <label for="Parentesco" class="col-md-4 control-label">Parentesco</label>
                
                                            <div class="col-md-6">
                                                <input id="parentesco" type="text" class="form-control" placeholder="Digite o Parentesco" name="parentesco" value="{{ old('parentesco') }}" autofocus>
                
                                                @if ($errors->has('parentesco'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('parentesco') }}</strong>
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
                                <div class="panel-heading"><b>Lista de Parentescos</b></div>
                                <div class="panel-body pre-scrollable">
                                    <table class="table table-hover table-striped responsive">
                                        <thead>
                                            <th>Parentesco</th>
                                            <th>Excluir</th>
                                        </thead>
                                        <tbody>
                                        @foreach($parentescos as $parentesco)
                                            <tr>
                                                <td>{{ $parentesco->parentesco }}</td>
                                                <td><a href="{{ route('deleta_parentesco', $parentesco->id ) }}" onClick="return confirm('Deseja realmente excluir {{ $parentesco->parentesco }}?');"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading"><b>Membros por Parentesco</b></div>
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
