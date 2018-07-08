@extends('layouts.site')

@section('content')
<div class="container">
   <section>
   	  <div class="row">
		<h3 align="center">Sobre nós</h3>
		<div class="divider"></div>
      </div>
   </section>
   <section>
   	  <div class="row">
		<div class="col s12 m12 l6">
		 @if(isset($pagina->mapa))
           <div class="video-container">
           	 {!! $pagina->mapa !!}
           </div>
		 @else
		   	<img src="{{asset($pagina->imagem)}}" class="responsive-img">
		 @endif
		</div>
		<div class="col s12 m12 l6">
			<h4>{{$pagina->titulo}}</h4>
			<blockquote>
				{{$pagina->descricao}}
			</blockquote>
			<p>{{$pagina->texto}}</p>
		</div>
      </div>
   </section>
</div>
@endsection
