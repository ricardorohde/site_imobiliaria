<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth; //para usar autentificação do laravel
use App\User; 
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
    public function sair()
    {
      Auth::logout();
      return redirect()-> route('admin.login');
    }

    public function index()
    {
      $usuarios = User::all();
      return view('admin.usuarios.index',compact('usuarios')); //mandar os dados array

    }
    public function adicionar()
    {
      return view('admin.usuarios.adicionar');
    }

    public function salvar(Request $request)
    {
      $dados = $request->all();
      $usuario = new User();
      $usuario->name = $dados['name'];
      $usuario->email = $dados['email'];
      $usuario->password = bcrypt($dados['password']);
      $usuario->save(); //salva no banco de dados
      \Session::flash('aviso',['msg' =>'Usuário salvo com sucesso!','class' =>'green white-text']);
      return redirect()->route('admin.usuarios');


    }
    public function editar($id)
    {
      $usuario = User::find($id);
      return view('admin.usuarios.editar',compact('usuario')); //envia 

    }
    public function atualizar(Request $request,$id)
    {
      $usuario = User::find($id);
      $dados = $request -> all();
      if(isset($dados['password']) && strlen($dados['password']) > 5)
      {
        $dados['password'] = bcrypt($dados['password']);
      }
      else
      {
        unset($dados['password']); // mantem o mesmo valor 
      }
       $usuario ->update($dados); 
      \Session::flash('aviso',['msg' =>'Usuário alterado com sucesso!','class' =>'green white-text']);
      return redirect()->route('admin.usuarios');
    }
    public function excluir($id)
    {
      User::find($id)->delete();
      \Session::flash('aviso',['msg' =>'Usuário excluído com sucesso!','class' =>'green white-text']);
       return redirect()->route('admin.usuarios');

    }
}
