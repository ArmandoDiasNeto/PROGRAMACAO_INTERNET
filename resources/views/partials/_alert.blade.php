@if (session('status'))
    <div class="alert alert-success alert-dismissible">
        {{ session('status') }}
        <button class="close" data-dismiss="alert" >
   	        <span aria-hidden="true">&times;</span>
   	    </button>
    </div>   
@endif