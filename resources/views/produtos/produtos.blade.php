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
		@include('partials._alert')	
		<a href="{{url('/produtos/add')}}" class="btn btn-primary">Adicionar Produto</a>
		@if(count($lista) > 0)
		<h3><strong>Lista de Produtos</strong></h3><br/>
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
				<td><a href="{{url('/produtos/excluir/'.$item->id)}}" class="btn btn-info btn-lg" onClick="return confirm('Tem certeza que deseja excluir?')">Excluir</a></td>
			</tr>					   
			@endforeach
		</table>
		{{$lista->links()}}
		@endif	
	</div>
@endsection
 