<?php
namespace App\Http\Controllers;

use Validator;
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
        $lista = new Produto();
        $lista = $lista->pegarProdutos();
       	return view('produtos.produtos', compact('lista'));
    }
    public function add(){
        $array = array(
            'erro' => null
        );
        return view('produtos.produtoAdd', $array);
  		
    	// //return redirect()->route('home');
    }
    public function salvar(Request $request){
      //o bail serve para ele executar somente a primeira opcao, neste caso o 'item', caso ela não funcione, ele ja retorna o erro. Caso funcione ele verifica os outros.
      //primeiro usei essa tentantiva, funcionou, todavia dessa maneira nao consigo mostrar todos os erros que deram, apenas um erro específico que é o do flash.
      //$request->session()->flash('status', "É necessario preencher todos os campos");
      $this->validate($request, [
              'item' => 'bail|required|max:50',
              'preco' => 'required',
        ]);
        $produto = new Produto;
        $produto->item = $request->item;
        $produto->valor = $request->preco;
        $produto->dono = Auth::user()->email;
        $produto->save();
        $request->session()->flash('status', 'Produto foi inserido no sistema');
        return redirect()->route('produtos');
     
      // $validator = Validator::make($request->all(), [
      //     'item' => 'required|max:50|min:5',
      //     'preco' => 'required',

      // ]);
      // if($validator->fails()){
      //    return redirect('/produtos/add')
      //      ->withErrors($validator)
      //      ->withInput();
      // }else {
      //    $produto = new Produto;
      //    $produto->item = $request->item;
      //    $produto->valor = $request->preco;
      //    $produto->dono = Auth::user()->email;
      //    $produto->save();
      //    $request->session()->flash('status', 'Produto foi inserido no sistema');
      //    return redirect()->route('produtos');
      // } 
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
        $produto = new Produto();
        $produto = $produto->pegarProdutos($id);

        //$produto = Produto::find($id);
        Log::info($produto);
        if($produto){            
            return view('produtos.produtosEdicao', compact('produto'));
        }
        //return view('produtos.produtosEdicao', compact('produto'));
        return redirect('produtos');
    }
    public function alterar(Request $request, $id){
       $validator = Validator::make($request->all(), [
            'item' => 'required|max:50',
            'preco' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/produtos')
              ->withErrors($validator)
              ->withInput();
        }else {
          $produto = Produto::where('id', $id)
                     ->where('dono', Auth::user()->email)
                     ->update(['item' => $request->item, 'valor' => $request->preco]);
          $request->session()->flash('status', 'Produto Alterado com sucesso');//Session::flash('status','Produto alterado com sucesso');
          return redirect()->route('produtos');  
        }  
    }
}
