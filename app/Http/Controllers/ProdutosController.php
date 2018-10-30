<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;


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
        Log::info('Carregou controller de produtos');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	Log::info('Carregou o index');
    	//$dono = Auth::user()->email;
    	//$lista = Produto::where('dono', $dono)->orderBy('item', 'desc')->get();
        $lista = Produto::where('dono', Auth::user()->email)->orderBy('item', 'desc')->paginate(3);
    	$array = array('lista'=> $lista);
        
    	//quando entrar aqui em produtos, ele vai gerar
    	//o formulario para insercao de produtos
        
        // para pegar os dados do produto é so usar
        // $produto = Produto::all();
        // com esse comando ele vai no banco e pega todos os produto
        // se quiser selecionar um produto x
        // usar $produto = Produto::where('id', 'o id que voce quer');
       	return view('produtos.produtos', $array);// e depois de produtos vou colocar o array 
       	// com os dados do banco;
    }
    public function add(){
        $array = array(
            'erro' => null
        );
        return view('produtos.produtoAdd', $array);
  		
    	// //return redirect()->route('home');
    }
    public function salvar(Request $request){
            if($request->has('item')){
               $produto = new Produto;
               $produto->item = $request->item;
               $produto->valor = $request->preco;
               $produto->dono = Auth::user()->email;
               $produto->save();
               Session::flash('status','Produto inserido com sucesso');
               return redirect()->route('produtos');
            }else {
                return redirect()->back()->with('alert', 'É necessario preencher todos os campos');
            }
    }
    public function excluir($id){
       $produto = Produto::where('id', $id)->where('dono', Auth::user()->email)->first();
       if($produto){
            $produto->delete();
            Session::flash('status','Produto removido com sucesso'); 

       }
       return redirect()->route('produtos'); 
    }
    public function editar($id){
        $produto = Produto::find($id);
        Log::info($produto);
        if($produto){            
            return view('produtos.produtosEdicao', compact('produto'));
        }
        //return view('produtos.produtosEdicao', compact('produto'));
        return redirect('produtos');
    }
    public function alterar(Request $request, $id){
           if($request->has('item')){
                //$dono = Auth::user()->email;
                $produto = Produto::where('id', $id)
                     ->where('dono', Auth::user()->email)
                     ->update(['item' => $request->item, 'valor' => $request->preco]);
                Session::flash('status','Produto alterado com sucesso');
                return redirect()->route('produtos');            
           }else {
                return redirect()->route('produtos');//aqui dentro posso enviar um erro também, caso nao tenha preenchido tudo.
                //echo "nao entrou";
           }
    }
}
