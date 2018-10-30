@extends('layouts.app')
<style type="text/css">
		.separaDiv{
			width:100%;
			height:2px;
			background-color:#CCC;
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
        	<span><h1>Adicionar Produto</h1></span><br/>
        	@if (session('status'))
   	        <div class="alert alert-danger">
   	        	{{ session('status') }}
   	        	<button class="close" data-dismiss="alert" >
   	        		<span aria-hidden="true">&times;</span>
   	        	</button>   	        
   	        </div>
			@endif        	
			<div class="separaDiv"></div><br/>
			<form method="POST" action="{{ url('/produtos/add')}}">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="item">Produto</label>
					<input id="item" type="text" name="item" class="form-control" maxlength="50" placeholder="Produto">
				</div>
				<div class="form-group">
					<label for="preco">Preço</label>
					<input id="preco" type="text" name="preco" class="form-control" maxlength="10" placeholder="Preço">
				</div>
				<div class="form-group">
					<input type="submit" value="Salvar" class="btn btn-primary">
					<a href="{{ url('/produtos')}}" class="btn btn-primary">Voltar</a>
				</div>							
			</form>
        </div>	
@endsection		