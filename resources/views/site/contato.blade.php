@extends('layouts.site')

@section('content')
<div class="container">
     <section>
   	  <div class="row">
		<h3 align="center">Contato</h3>
		<div class="divider"></div>
      </div>
   </section>
   <section>
   	  <div class="row">
		<div class="col s12 m12 l7">
			<img src="{{asset('img/img1.jpg')}}" class="responsive-img">
		</div>
		<div class="col s12 m12 l5">
			<form class="col s12">
				<div class="input-field">
					<input type="text" name="nome" class="validate">
					<label>Nome</label>
				</div>
				<div class="input-field">
					<input type="text" name="e-mail" class="validate">
					<label>E-mail</label>
				</div>
				<div class="input-field">
					<textarea class="materialize-textarea"></textarea>
					<label>Mensagem</label>
				</div>
				<button class="btn blue">Enviar</button>
			</form>
		</div>
      </div>
   </section>
</div>
@endsection
