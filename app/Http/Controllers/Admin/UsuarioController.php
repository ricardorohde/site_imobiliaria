<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth; //para usar autentificação do laravel
class UsuarioController extends Controller
{
    public function login(Request $request)
    {
    	$dados = $request->all();
    	// dd($dados); -- var dump do laravel

    	if(Auth::attempt(['email' =>$dados['email'],'password' => 
    		$dados['password']])){

    		\Session::flash('aviso',['msg' =>'Login feito com sucesso!','class' =>'green white-text']);

             return redirect()-> route('admin.principal');
    	}
        \Session::flash('aviso',['msg' =>'Erro ao acessar, verifique e-mail ou senha!','class' =>'red white-text']);
        
    	return redirect()-> route('admin.login');

    }
}