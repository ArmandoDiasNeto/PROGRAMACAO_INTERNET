@extends('layouts.app')
<style type="text/css">
		.separaDiv{
			width:100%;
			height:2px;
			background-color:#CCC;
		}
		table tr th{
			color:#FF0000;
		}
		.container h1, h3{
			text-align:center;
		}
		span {
			color: green;
		}
</style>
@section('content')
	<div class="container">		
		<!-- <span><h1>Adicionar Produto</h1></span><br/>
		<div class="separaDiv"></div><br/>
		<form method="POST" action="{{ url('/produtos/add')}}"> -->
			<!-- {{ csrf_field() }} -->
			<!-- <div class="form-group">
				<label for="item">Produto</label>
				<input id="item" type="text" name="item" class="form-control" maxlength="50" placeholder="Produto">
			</div>
			<div class="form-group">
				<label for="preco">Preço</label>
				<input id="preco" type="text" name="preco" class="form-control" maxlength="10" placeholder="Preço">
			</div>
			<div class="form-group">
				<input type="submit" value="Salvar">
			</div>	
		</form> -->
		<!-- <div class="separaDiv"></div> -->
		<a href="{{url('/produtos/add')}}" class="btn btn-primary">Adicionar Produto</a>
		<h3><strong>Lista de Produtos</strong></h3><br/>
		@if(count($lista) > 0)
		<table class="table table-bordered">
			<tr>
				<th>Produto</th>
				<th>Valor</th>
				<th>Editar</th>
				<th>Excluir</th>
			</tr>
			@foreach($lista as $item)
			<tr>
				<td><strong>{{ $item->item }}</strong></td>
				<td>{{ $item->valor }}</td>
				<td><a href="{{url('/produtos/editar/'.$item->id)}}" class="btn btn-default btn-lg">Editar</a></td>
				<td><a href="{{url('/produtos/excluir/'.$item->id)}}" class="btn btn-info btn-lg">Excluir</a></td>
			</tr>					   
			@endforeach
		</table>
		@endif	
	</div>
@endsection
 