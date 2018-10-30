<?php

namespace App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public function pegarProdutos(){
    	$lista = Produto::where('dono', Auth::user()->email)->orderBy('item', 'desc')->paginate(3);
    	return $lista;
    }
}
