<!-- nessa primeira parte é no caso de erro na validação -->
@if ($errors->any())
  <div class="alert alert-danger">
  	<button class="close" data-dismiss="alert" >
    	<span aria-hidden="true">&times;</span>
	</button>
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
<!-- nessa segunda parte é no caso de nao ter nenhum erro na requisição -->
@if (session('status'))
    <div class="alert alert-success alert-dismissible">
        {{ session('status') }}
        <button class="close" data-dismiss="alert" >
   	        <span aria-hidden="true">&times;</span>
   	    </button>
    </div>   
@endif