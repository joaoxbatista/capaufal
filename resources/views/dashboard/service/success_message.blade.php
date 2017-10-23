@extends('layouts.dashboard')

@section('content')

<div class="row" style="margin-top: 50px;">
	<div class="col m12">
		<div class="card cyan lighten-4">
			<div class="card-content black-text">
				<span class="card-title">Chamado criado com sucesso!</span>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
				<div class="card-action">
					<a href="{{ route('dashboard.services.create') }}" class="waves-effect waves-light cyan accent-4 btn">
						<i class="material-icons left">add</i>
						Criar outro
					</a>
					
					<a href="{{ route('dashboard.services.create') }}" class="waves-effect cyan accent-4 btn">
						<i class="material-icons left">home</i>
						<span>Início</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection