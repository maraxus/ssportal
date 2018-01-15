@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Criar Campanha</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Importação de Dados</div>
                <div class="panel-body">
                    <small>Selecione o arquivo csv que contém os números a serem importados para a campanha.</small>
                </div>
                <div class="panel-body">
                    @include('campanha.partials.import')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
