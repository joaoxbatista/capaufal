@extends('layouts.simple')

@section('content')
<div class="container">
	<div class="row" style="margin-top: 50px">
		<div class="card-panel blue darken-1 col s6 offset-s3">
			<div class="row">
				<div class="white-text col s10 offset-s1">
					<p>FORMULÁRIO DE LOGIN</p>
				</div>
			</div>

			<form method="post" action="{{route('glpi.login')}}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="row">
					<div class="col s10 offset-s1">
						<label class="white-text">NOME DO USUÁRIO</label>
			        	<input type="text" class="input-field white-text" name="username">
					</div>

					<div class="col s10 offset-s1">
						<label class="white-text">SENHA</label>
			        	<input type="password" class="input-field white-text" name="password">
					</div>
				</div>

				<div class="row">
					<div class="card-action col s10 offset-s1">
						<button type="submit" class="waves-effect green waves-light btn">
							<i class="material-icons right">send</i>ENTRAR  
						</button>
						
						<a href="#" class="waves-effect grey lighten-5 grey-text btn">
							LIMPAR
						</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection