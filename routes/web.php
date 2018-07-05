<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',['as' => 'site.home',function(){
	return view('site.home');
}]);

Route::get('/sobre',['as' => 'site.sobre',function(){
	return view('site.sobre');
}]);

Route::get('/contato',['as' => 'site.contato',function(){
	return view('site.contato');
}]);

Route::get('/imovel/{id}/{titulo?}',['as' => 'site.imovel',function(){
	return view('site.imovel');
}]);


//Auth::routes(); - Login automático
Route::get('/admin/login',['as' => 'admin.login',function(){
   return view('admin.login.index');
}]);

Route::post('/admin/login',['as' => 'admin.login','uses' => 'Admin\UsuarioController@login']);

/* protegendo a rota para não entrar na principal semm logar */
Route::group(['middleware'=>'auth'], function(){
  Route::get('/admin/login/sair',['as' => 'admin.login.sair','uses' => 'Admin\UsuarioController@sair']);

  Route::get('/admin',['as' => 'admin.principal',function(){
   return view('admin.principal.index');
  }]);

  Route::get('/admin/usuarios',['as' => 'admin.usuarios','uses' => 'Admin\UsuarioController@index']); //puxando o metódo
});


