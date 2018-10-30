<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Session;
class HomeController extends Controller
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
        return view('home');
    }
    public function update(Request $request){
        if ($request->has('senha')){ 
             $novaSenha = bcrypt($request->senha);
             $id = Auth::id(); 
             $user = User::where('id', $id)->update(['password' => $novaSenha]);
             Session::flash('status', "Sua senha foi alterada com sucesso");
             return redirect()->route('home');
             //esta mudando normalmente no banco de dados, todavia sempre da um erro
             //: Symfony \ Component \ HttpKernel \ Exception \ MethodNotAllowedHttpException 
             //No message
        }else {
            return redirect()->route('home');//aqui dentro posso enviar um erro também, caso nao tenha preenchido tudo.
        }
       
            //$dono = Auth::user()->email;
            
            return redirect()->route('produtos');            
     }
}

