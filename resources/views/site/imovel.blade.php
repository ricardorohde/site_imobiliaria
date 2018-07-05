@extends('layouts.site')

@section('content')
<div class="container">
   <section>
   	  <div class="row">
		<h3 align="center">Imóvel</h3>
		<div class="divider"></div>
      </div>
   </section>
   <section>
   	  <div class="row">
		<div class="col s12 m12 l8">
			<div class="row">
				<div class="slider">
					<ul class="slides">
					   <li>
					   	 <img src="{{ asset('img/img1.jpg')}}">
					   	 <div class="caption center-align">
							<h3>Título da imagem</h3>
							<h5>Descrição do slide</h5>
						</div>
					   </li>
					   <li>
					   	 <img src="{{ asset('img/img2.png')}}">
					   	 <div class="caption left-align">
							<h3>Título da imagem</h3>
							<h5>Descrição do slide</h5>
						</div>
					   </li>
					   <li>
					   	 <img src="{{ asset('img/img3.jpg')}}">
					   	 <div class="caption center-align">
							<h3>Título da imagem</h3>
							<h5>Descrição do slide</h5>
						</div>
					   </li>
					</ul>
				</div>
			</div>
			<div class="row" align="center">
				<button class="btn blue" onclick="sliderPrev()">Anterior</button>
				<button class="btn blue" onclick="sliderNext()">Próxima</button>
			</div>
		</div>
		<div class="col s12 m12 l4">
			<h4>Título do imóvel</h4>
			<blockquote>
				Descrição sobre o imóvel
			</blockquote>
			<p><b>Código:</b> 245</p>
			<p><b>Status:</b> Aluga</p>
			<p><b>Tipo:</b>Alvenaria</p>
			<p><b>Endereço:</b> Centro</p>
			<p><b>Cep:</b> 18143621</p>
			<p><b>Cidade:</b> São Roque</p>
			<p><b>Valor:</b> 300.000,00</p>
			<a class="btn deep-orange darken-1" href="{{route('site.contato')}}">Entrar em contato</a>
		</div>
      </div>
   </section>
</div>
@endsection
