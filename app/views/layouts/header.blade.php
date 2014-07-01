<header class="clearfix">
	<!-- Static navbar -->
	<div class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button> 
				<a class="navbar-brand" href="/"><img alt="" src="/images/logo.png"></a>
			</div>
			<div class="navbar-collapse collapse">
				
			<ul class="nav navbar-nav navbar-right">
				<?php 
					$index = $letras ='';
					if(isset($type) && $type == 'index')
						$index = 'active';
					else
						$letras = 'active';
				?>

				<li><a class="{{ $index }}" href="/">Inicio</a></li>

				<li class="drop"><a class="{{ $letras }}" href="#">Categorias</a>
					<ul class="dropdown">
						<li><a href="/all">Todas</a></li>

						@foreach([3,4,5,6,7,8,9,10,11] as $key)
						<li><a href="/letras/{{ $key }}">{{ $key }} letras</a></li>
						@endforeach
						
					</ul> 
				</li>


				{{-- <li><a href="about.html">About</a></li>
				<li><a href="blog.html">Blog</a></li>
				<li class="drop"><a href="home3.html#">Other</a>
					<ul class="dropdown">
						<li><a href="single-post.html">Single Post</a></li>
						<li><a href="single-project.html">Single Project</a></li>
					</ul>
				</li> 
				<li><a href="contact.html">Contact</a></li>--}}
			</ul>
			</div>
		</div>
	</div>
</header>
