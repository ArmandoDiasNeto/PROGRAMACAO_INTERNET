@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">                   
                    @include('partials._alert')
                    <h3>Trocar a Senha</h3>
                    <form method="POST" action="{{ url('/home/update')}}">
                        {{ csrf_field() }},
                        <div class="form-group">
                            <label for="senha">Nova Senha</label>
                            <input id="senha" type="text" name="senha" class="form-control" maxlength="50" placeholder="Senha">
                        </div>
                        <div class="form-group">
                            <label for="senha2">Nova Senha (novamente)</label>
                            <input id="senha2" type="text" name="senha2" class="form-control" maxlength="50" placeholder="Senha">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Salvar" class="btn btn-primary">                        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
