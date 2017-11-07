@extends('layouts.simple')

@section('content')
<div class="container">
    <div class="row" style="margin-top: 50px">
        <div class="col m12">
            
            <h4>[ CHAMADO ] {{ $service->name }}</h4>
            <form method="post" action="{{route('dashboard.calls.store')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="service_id" value="{{ $service->id }}">
                
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="description" name="description" style="height: 100px" class="materialize-textarea"></textarea>
                        <label for="description">Descrição do problema</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col s12">
                        <button class="waves-effect waves-light btn" type="submit">Salvar</button>
                   </div>
                </div>

            </form>
            
        </div>
    </div>
</div>

@endsection