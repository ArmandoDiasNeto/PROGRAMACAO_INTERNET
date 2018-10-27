<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\User;
use Illuminate\Support\Facades\Auth;
class WelcomeController extends Controller
{
    public function index(){
    	if(empty(Auth::user()->email)){
    		$users = User::all();
    		$lista = Produto::all();
    		$array = array('lista'=> $lista, 'users' => $users);
    		return view('welcome', $array);
    	}else {
    		$dono = Auth::user()->email;
    		$lista = Produto::where('dono', $dono)->get();
    		$array = array('lista' => $lista);
    		return view('welcome', $array);
    	}
    }
}
