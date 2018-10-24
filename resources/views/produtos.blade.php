@extends('layouts.app')
<style type="text/css">
		.separaDiv{
			width:100%;
			height:2px;
			background-color:#CCC;
		}
</style>
@section('content')
	<div class="container">
		<h1>Novo Produto</h1>
		<form method="POST" action="{{ route('produtos')}}">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="item">Produto</label>
				<input id="item" type="text" name="item" class="form-control" maxlength="50">
			</div>
			<div class="form-group">
				<label for="preco">Preço</label>
				<input id="preco" type="text" name="preco" class="form-control" maxlength="10">
			</div>
			<div class="form-group">
				<input type="submit" value="Cadastrar">
			</div>	
		</form>
		<div class="separaDiv"></div>
		<h3>Lista Produtos:</h3>
		@if(count($lista) > 0)
		<table class="table">
			<tr>
				<th>Produto</th>
				<th>Valor</th>
				<th>Editar</th>
				<th>Excluir</th>
			</tr>
			@foreach($lista as $item)
			<tr>
				<td>{{ $item->item }}</td>
				<td>{{ $item->valor }}</td>
				<td><a href="#">Editar</a></td>
				<td><a href="#">Excluir</a></td>
			</tr>			    
			@endforeach
		</table>
		@endif
	</div>
@endsection