<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\User;
use Illuminate\Support\Facades\Auth;
class WelcomeController extends Controller
{
    public function index(){
        // o primeiro if é para o caso de nao ter usuario logado.
    	if(empty(Auth::user()->email)){
    		$users = User::all();
    		$lista = Produto::all();    		
    		return view('welcome', compact('lista','users'));
        //o else é no caso de ter algum usuario logado.
    	}else {
    		$dono = Auth::user()->email;
    		$lista = Produto::where('dono', $dono)->get();
    		return view('welcome', compact('lista'));
    	}
    }
}
