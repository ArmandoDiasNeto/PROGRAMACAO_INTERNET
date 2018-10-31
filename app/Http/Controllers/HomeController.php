<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Validator;
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
        $input = $request->all();
        $validator = Validator::make($input, [
            'senha'  => 'required|min:10|max:22',
            'senha2' => 'required|min:10|max:22', 

        ], [
             'required' => 'O campo :attribute precisa ser preenchido',
             'min' => 'O campo :attribute precisa ter no mínimo :min caracteres',
             'max' => 'O campo :attribute precisa ter no máximo :max caracteres',

        ]);
        if($validator->fails()){
            return redirect('home')
                 ->withErrors($validator)
                 ->withInput();
        }else {
            $senha1 = $request->senha;
            $senha2 = $request->senha2;
            if($senha1 == $senha2){
                $id = Auth::id();
                $user = User::where('id', $id);
                if($user){
                //$user->password = bcrypt($request->senha);
                $user->update(['password' => bcrypt($senha1)]);
                $request->session()->flash('status', 'Senha alterada com sucesso');
                return redirect('home');
            }
            
        }else {
            $errors = array(
               'erro' => 'A duas senhas precisam ser iguais'
            );
            return redirect('home')
                 ->withErrors($errors)
                 ->withInput();
        }
     }            
  }
}

