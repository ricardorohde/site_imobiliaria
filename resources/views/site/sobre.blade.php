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
			<img src="{{asset('img/img1.jpg')}}" class="responsive-img">
		</div>
		<div class="col s12 m12 l6">
			<h4>A empresa</h4>
			<blockquote>
				Descrição breve sobre a empresa.
			</blockquote>
			<p>Texto sobre a empresa.</p>
		</div>
      </div>
   </section>
</div>
@endsection
