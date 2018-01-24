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
                @if (count($errors) > 0)
                <div class="panel-body danger">
                    <ul>
                        <li>O Arquivo enviado é inválido. Escolha um arquivo csv ou txt com até 5 mb</li>
                    </ul>
                </div>
                @endif
                <div class="panel-body">
                    @include('campaign.partials.import')
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Mensagem</div>
                <div class="panel-body">
                    <small>Digite a mensagem á ser enviada. Você pode usar as variáveis #NOME e #NUMERO no texto, e elas serão substituídas automaticamente na mensagem final.</small>
                </div>
                @if (count($errors) > 0)
                <div class="panel-body danger">
                    <ul>
                        <li>Digite uma mensagem válida com pelo menos dois caracteres</li>
                    </ul>
                </div>
                @endif
                <div class="panel-body">
                    @include('campaign.partials.message')
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Campanha</div>
                <div class="panel-body">
                    <small>Digite os dados da campanha, como a data e horário para o início do envio</small>
                </div>
                @if (count($errors) > 0)
                <div class="panel-body danger">
                    <ul>
                        <li>Digite uma mensagem válida com pelo menos dois caracteres</li>
                    </ul>
                </div>
                @endif
                <div class="panel-body">
                    @include('campaign.partials.campaign-data')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
