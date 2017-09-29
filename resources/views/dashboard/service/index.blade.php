@extends('layouts.dashboard')

@section('content')
<div class="card-panel" style="margin-top: 30px">
	<form action="{{ route('dashboard.services.store') }}" method="post" enctype="multipart/form-data">
		<h5>Formulário para criação de requisições</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi autem distinctio eum excepturi facilis fugit, nostrum officiis quisquam quo.</p>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="row">
            <div class="col m4">
                <div class="input-field">
                    <label for="titulo">Título</label>
                    <input type="text" id="titulo" name="titulo" placeholder="Insira o título da requisição" class="validate">
                </div>
            </div>

            <div class="input-field col s4">
                <select id="servicos" name="servico_id">
                    <option value="" disabled selected>Selecione um serviço</option>
                    @foreach($services as $service)
                        <option value="{{ $service['id'] }}">{{ $service['nome'] }}</option>
                    @endforeach

                </select>
                <label for="servicos">Serviços</label>
            </div>
        </div>

		<div class="input-field">
			<label>Descrição</label>
			<textarea style="height: 100px;" class="materialize-textarea validate" name="descricao" placeholder="Insira uma descrição sobre a requisição"></textarea>
		</div>

		<div class="file-field input-field">
			<div class="btn blue">
				<span><i class="material-icons left">attach_file</i> Anexo</span>
				<input type="file" name="anexo">
			</div>
			<div class="file-path-wrapper">
				<input class="file-path validate" type="text" placeholder="Selecione um arquivo para expor o problema (imagem, pdf com imagens)">
			</div>
		</div>

        <button type="submit" class="btn green waves-effect">
            Enviar <i class="material-icons right">send</i>
        </button>
	</form>
</div>
@endsection