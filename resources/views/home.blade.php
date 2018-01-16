@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Menu</div>
                <div class="list-group">
                    <div class="list-group-item"><a href="#" class="active">Painel</a></div>
                    <div class="list-group-item"><a href="{{route('campaign')}}">Campanhha</a></div>
                </div>
            </div>

        </div>

        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
