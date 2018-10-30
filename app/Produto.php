<?php

namespace App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public function pegarProdutos($id = ''){
    	if($id == ''){
    		$lista = Produto::where('dono', Auth::user()->email)->orderBy('updated_at', 'desc')->paginate(3);
    		return $lista;
    	}else {
    		$produto = Produto::find($id);
    		return $produto;
    	}
    	
    }
}
