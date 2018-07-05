@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Lista de usuários</h2>
	<div class="row">
	  <nav>
	    <div class="nav-wrapper green">
	      <div class="col s12">
	        <a href="{{route('admin.principal')}}" class="breadcrumb">Início</a>
	        <a href="#!" class="breadcrumb">Lista de usuários</a>
	      </div>
	    </div>
      </nav>
	</div>
	<div class="row">
		<table>
		 <thead>
		 	<tr>
		 		<th>Id</th>
		 		<th>Nome</th>
		 		<th>E-mail</th>
		 	    <th>Ação</th>
		 	</tr>
		 </thead>
		 <tbody>
		 	@foreach($usuarios as $usuario)
		 	<tr>
		 		<td>{{ $usuario->id}}</td>
		 	    <td>{{ $usuario->name}}</td>
		 	    <td>{{ $usuario->email}}</td>
		 	    <td>
		 	    	<a href="#" class="btn orange">Editar</a>
		 	    	<a href="#" class="btn red">Deletar</a>
		 	    </td>
		 	</tr>
		 	@endforeach
		 </tbody>
		</table>
	</div>
</div>
@endsection