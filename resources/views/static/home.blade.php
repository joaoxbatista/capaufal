@extends('layouts.simple')

@section('content')
<!-- Banner
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br><br>
        <div class="row center">
            <img src="img/logonti.png" class="responsive-img">
        </div>
        <h3 class="header center light-blue-text hide-on-med-and-down">Núcleo de Tecnologia da Informação - Arapiraca</h3>
        <br><br>

    </div>
</div> -->

<!-- Serviços -->
<div class="container">
    <div class="section">
    
        
        
        <!-- <div class="row">
            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><i class="material-icons">build</i></h2>
                    <h5 class="center"><a class="orange-text" href="desenvolvimento">Manutenção</a></h5>
                    <p class="light" align="justify">Realiza manutenções de equipamentos de informática, realizar manutenção preventiva, instalação de antivírus e suporte técnico.</p>
                </div>

            </div>
            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><i class="material-icons">device_hub</i></h2>
                    <h5 class="center"><a class="orange-text" href="redes">Redes</a></h5>
                    <p class="light" align="justify">Responde por toda a estrutura de cabeamento e equipamentos de rede, bem como os servidores de rede das sub-redes distribuídas pelo Campus</p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><i class="material-icons">computer</i></h2>
                    <h5 class="center "><a class="orange-text" href="desenvolvimento">Sistemas</a></h5>
                    <p class="light" align="justify">Setor responsável pelo desenvolvimento e manutenção web e de softwares relevantes para a comunidade acadêmica da UFAL.</p>
                </div>
            </div>

        </div> -->
        
        
    </div>
    
</div>

<!-- Catálogo de Serviços -->
<div class="container">
    
    <div class="col s12 m12">
        

        
        @if(Auth::check())
            <a href="{{ route('dashboard.services.create') }}" class="waves-effect waves-light btn">Novo Serviço</a>
        @endif

        <div class="row">
            <div class="col s12">
                <h5>Servíços disponibilizados</h5>
            </div>
        </div>
        
        <div class="row" style="margin-bottom: 50px">
            
            @foreach($sectors as $sector)
                <div class="col s4 m4">
                    <div class="card">
                        
                        <div class="card-content">
                            <span class="card-title">{{ $sector->name }}</span>
                            @if(count($sector->services) > 0)
                                <div class="collection">
                                    @foreach($sector->services as $service)
                                        <a class="collection-item" href="{{ route('dashboard.services.view',['id' => $service->id]) }}">{{ $service->name }}</a>
                                    @endforeach
                                </div>
                            @else
                                <p> O setor não possui serviços cadastrados </p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>
@endsection