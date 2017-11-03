<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title')</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="{{ asset('css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
	<!-- Menu -->
	<nav class="blue darken-4" role="navigation">
		<div class="nav-wrapper container ufal">
			<img src="img/logoufal.png" class="responsive-img logoufal">
			<a id="logo-container" href="http://www.ufal.edu.br/arapiraca" class="brand-logo hide-on-med-and-down">UFAL - Arapiraca</a>
			<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
		</div>
	</nav>
	<div id="content" style="min-height: 50vh">
		@yield('content')
	</div>
	<!-- Rodapé -->
	<footer class="page-footer blue darken-4">
		<div class="container"> 
			<div class="row">
				<div class="col l4 s12">
					<h5 class="white-text">Campus de Arapiraca</h5>
					<p class="grey-text text-lighten-4"> 
					<ul>
						<li>Av. Manoel Severino Barbosa</li>
						<li>Bom Sucesso</li>
						<li>CEP:57309-005</li>
						<li>Arapiraca - AL</li>
					</ul>
				</div>
					
				<div class="col l4 s12">
					<h5 class="white-text">Contatos</h5>
					<ul>
						<li>Coordenação: 3414-1838</li>
						<li>Sistemas: 3414-1846</li>
						<li>Manutenção: 3414-1828</li>
						<li>Redes: 3414-1808</li>
						<li>NTI Palmeira dos Índios: 3414-8000</li>
					</ul>
				</div>
			</div>
			
			<div class="row"  style="margin-bottom: 0px">
				<div class="col s12">
					<div class="footer-copyright">
						© 2017 NTI Arapiraca, All rights reserved.
					</div>
				</div>
			</div>
		</div>
	</footer>
	
	
	<!--  Scripts-->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="{{ asset('js/materialize.js') }}"></script>
	<script src="{{ asset('js/init.js') }}"></script>
	<script>
		$(document).ready(function(){
			$('.collapsible').collapsible();
			$('select').material_select();
		});
	</script>
</body>
</html>
