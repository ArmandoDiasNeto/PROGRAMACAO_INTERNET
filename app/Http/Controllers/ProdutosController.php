<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use Illuminate\Support\Facades\Auth;

class ProdutosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	
    	$dono = Auth::user()->email;
    	$lista = Produto::where('dono', $dono)->orderBy('item', 'desc')->get();
    	$array = array('lista'=> $lista);
    	//quando entrar aqui em produtos, ele vai gerar
    	//o formulario para insercao de produtos
        
        // para pegar os dados do produto é so usar
        // $produto = Produto::all();
        // com esse comando ele vai no banco e pega todos os produto
        // se quiser selecionar um produto x
        // usar $produto = Produto::where('id', 'o id que voce quer');
       	return view('produtos', $array);// e depois de produtos vou colocar o array 
       	// com os dados do banco;
    }
    public function add(){
    	if(!empty($_POST['item']) && !empty($_POST['preco'])){
    		$item = $_POST['item'];
    		$valor = $_POST['preco'];
            $dono = Auth::user()->email;           
            $produto = new Produto;
            $produto->item = $item;
            $produto->valor = $valor;
            $produto->dono = $dono;
            $produto->save();
            return redirect()->route('produtos');
    	}else{
    		// aqui posso fazer ele voltar pra pagina 
    		// e dar uma alerta de que esta errado alguma coisa
    		echo "Nao mandou ambos";
    	}
    	
    	//primeiro pego os dados
    	// depois vou inserir no model
    	//e depois inserir no banco de dados.
    	//por ultimo redireciono para a pagina home.
    	//enviando os dados que inseri no model.
  		
    	//return redirect()->route('home');
    }
}
