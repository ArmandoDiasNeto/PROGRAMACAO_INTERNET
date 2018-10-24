@extends('layouts.app')

@section('content')
	<div class="container">
		<h1>Novo Produto</h1>
		<form method="POST">
			<div class="form-group">
				<label for="produto">Produto</label>
				<input id="produto" type="text" name="produto" class="form-control" maxlength="50">
			</div>
			<div class="form-group">
				<label for="preco">Preço</label>
				<input id="preco" type="text" name="preco" class="form-control" maxlength="10">
			</div>
		</form>
	</div>
@endsection