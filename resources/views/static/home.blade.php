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

			<div class="row">
				<div class="col s10 offset-s1">
					<label class="white-text">CPF</label>
		        	<input type="number" class="input-field white-text" >
				</div>

				<div class="col s10 offset-s1">
					<label class="white-text">SENHA</label>
		        	<input type="password" class="input-field white-text" >
				</div>
			</div>

			<div class="row">
				<div class="card-action col s10 offset-s1">
					<a href="{{ route('dashboard.services.create') }}" class="waves-effect green waves-light btn">
						<i class="material-icons right">send</i>ENTRAR  
					</a>
					
					<a href="#" class="waves-effect grey lighten-5 grey-text btn">
						LIMPAR
					</a>
				</div>
			</div>

		</div>
	</div>
</div>
@endsection