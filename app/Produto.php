<?php

namespace App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public function pegarProdutos($id = ''){
        //aqui é caso não envie nenhum id, nesse caso ele esta vindo da pagina
        //produtos/index
        // ele carrega os produtos que este usuario tem no banco e lista eles.
    	if($id == ''){
    		$lista = Produto::where('dono', Auth::user()->email)->orderBy('updated_at', 'desc')->paginate(3);
    		return $lista;
    	}else {
        //dentro desse else é quando entra na parte de edicão de produtos
        // ele pega os dados do produto aqui e devolve eles caso seja a pessoa
        //logada.    
    		$produto = Produto::find($id);
            $dono = Auth::user()->email;
            //caso ache algum resultado
            if($produto){
                //caso o dono nao seja o logado
                if($produto->dono != $dono){
                    return false;
                }else {
                    return $produto;
                //aqui é caso o dono seja o logado e exista esse produto
                }
            }
            
    		
    	}
    	
    }
}
