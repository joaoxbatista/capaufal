@extends('layouts.simple')

@section('content')

<!-- Catálogo de Serviços -->
<div class="container">
    
    <div class="col s12 m12">

        <div class="row" style="margin-top: 50px">
        
            <a href="#" class="btn blue">Setor + </a>
            <a href="{{ route('dashboard.sector.categories.create') }}" class="btn blue darken-2">Divisão do setor + </a>
            <a href="{{ route('dashboard.services.create') }}" class="btn blue darken-4">Serviço + </a>
        
        </div>
        
        <div class="row" style="margin-bottom: 50px">
            
            @foreach($sectors as $sector)
                <div class="col m12">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">{{ $sector->name }}</span>
                            
                            @foreach($sector->sector_categories as $category)
                                
                                <div class="">
                                    @if(count($category->services) > 0)
                                    <div class="chip">
                                        @if(!empty($category->icon))
                                            <img src="{{$category->icon}}">
                                        @endif
                                        {{$category->name}}
                                    </div>
                                    
                                    <ul class="collapsible" data-collapsible="accordion">
                                    @foreach($category->services as $service)
                                        <li>
                                            <div class="collapsible-header"><strong>{{ $service->name }}</strong></div>
                                            <div class="collapsible-body">

                                                <div>
                                                    <span class="service-title"><i class="material-icons">announcement</i>  Descrição: </span>
                                                    <div class="service-content">
                                                    <p>{{ $service->description }}</p>
                                                    </div>
                                                </div>

                                                @if($service->requeriments != null)
                                                    <div>
                                                        <span class="service-title"><i class="material-icons">attach_file</i>  Requisitos: </span>
                                                        <div class="service-content">
                                                            <p>{{ $service->requeriments }}</p>
                                                        </div>
                                                    </div>
                                                @endif
                                                
                                                @if($service->quick_help != null)
                                                <div>
                                                    <span class="service-title"><i class="material-icons">av_timer</i>  Ajuda rápida: </span>
                                                    <i class="material-icons"></i>
                                                    <div class="service-content">
                                                        <p>{{ $service->quick_help }}</p>
                                                    </div>
                                                </div>
                                                @endif

                                                @if($service->target_public != null)
                                                <div>
                                                    <span class="service-title"><i class="material-icons">person_pin</i>  Público alvo: </span>
                                                    <div class="service-content">
                                                        <p>{{ $service->target_public }}</p>
                                                    </div>
                                                </div>
                                                @endif
                                                
                                                <div class="service-buttons">
                                                    <a href="{{ route('dashboard.services.view', ['id' => $service->id]) }}" class="waves-effect blue lighten-2 btn">Detalhes</a>

                                                    <a href="#" class="waves-effect green lighten-2 btn">Criar chamado</a>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                    </ul>                         

                                    @endif
                                    
                                </div>

                            @endforeach
                            
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>
@endsection