@extends('layouts.app')
@section('content')
	    <link rel="stylesheet" type="text/css" href="{{mix('css/produto.css')}}">
        <div class="container">
        	<span><h1>Editar Produto</h1></span><br/>
        	@include('partials._alert')            	 
			<div class="separaDiv"></div><br/>
			<form method="post" action="{{ url('/produtos/alterar/'.$produto->id)}}">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="item">Item</label>
					<input id="item" type="text" name="item" class="form-control" placeholder="Produto" value="{{old('item',$produto->item)}}" >
				</div>
				<div class="form-group">
					<label for="preco">Preço</label>
					<input id="preco" type="text" name="preco" class="form-control"placeholder="Preço" value="{{old('preco',$produto->valor)}}" >
				</div>
				<div class="form-group">
					<input type="submit" value="Salvar" class="btn btn-primary">
					<a href="{{ url('/produtos')}}" class="btn btn-primary">Voltar</a>
				</div>							
			</form>
        </div>	
@endsection	