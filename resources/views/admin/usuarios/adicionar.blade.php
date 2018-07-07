@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Adicionar usuário</h2>
	<div class="row">
	  <nav>
	    <div class="nav-wrapper green">
	      <div class="col s12">
	        <a href="{{route('admin.principal')}}" class="breadcrumb">Início</a>
	        <a href="{{route('admin.usuarios')}}" class="breadcrumb">Lista de usuários</a>
	        <a href="#" class="breadcrumb">Adicionar usuário</a>
	      </div>
	    </div>
      </nav>
	</div>
<div class="row">
	<form action="{{ route('admin.usuarios.salvar')}}" method="post">
		{{ csrf_field() }}
		@include('admin.usuarios._form')
		<button class="btn green" type="submit">Salvar</button>
	</form>
</div>
</div>

@endsection