@extends('layouts.master')

@section('content')

<!-- portfolio section -->
<div class="section-content portfolio-section">
	<div class="container">
		@if(isset($type) && $type == 'index')
		<h1>Soluciones más utiles</h1>
		@elseif(isset($type) && $type == 'letras')
		<h1>Soluciones de {{ $soluciones[0]->cantidad }} letras </h1>
		@elseif(isset($type) && $type == 'all')
		<h1>Todas las soluciones</h1>
		@endif
		<hr/>
		<div class="portfolio-box">
			@foreach ($soluciones as $key => $solucion) 
			<div class="project-post {{ $solucion->cantidad }}">
				<img class="unveil" data-src="{{ $solucion->getThumb() }}" src="/images/loader.gif" alt="">
				<div class="hover-box">
					<div class="inner-hover">
						<h2>{{ $solucion->solucion }}</h2>
						<p>{{ $solucion->cantidad }} letras - <span>{{ count($solucion->getHelps) }}</span> ayudas</p>
						<a class="zoom" href="{{ $solucion->imagen }}" title="Expandir"><i class="fa fa-search"></i></a>
						<a class="help-me" data-id="{{ $solucion->id }}" href="#" title="Me ayudo"><i class="fa fa-heart"></i></a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@stop

@section('javascript')
<script src=" {{ asset('/js/jquery.unveil.js') }} "></script>
<script>

$(document).ready(function() {
	$("img.unveil").unveil(200, function() {
		$(this).load(function() {
			this.style.opacity = 1;
		});
	});
});

$(".help-me").on("click", function(event){
	event.preventDefault();
	$(this).addClass('help-click');
	var id = $(this).data("id");
	//alert(id);
	var c = $(this).parent('div').children('p').children('span').text();
	$(this).parent('div').children('p').children('span').text( (c*1) + 1 );
	
	$.post('/help-me/' + id, function(data, textStatus, xhr) {
		
	});

});

</script>
@stop