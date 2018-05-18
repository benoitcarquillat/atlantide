@extends('templates.app')

@section('content')
<div class="listvilles">
    <div class="container_titre">
    <h3>Retrouvez ici les lieux d'intérêt et les évenements classés par villes</h3>
    </div>
    <div class="container">
        <div class="liste_liens">
            <div class="row">
                <div class="col-lg-6 col-sm-12 liste_left">
                    <h3>Lieux d'intéret</h3>
                    @foreach($villesList as $vl)
                        <a href="{{$vl->ville}}/lieux">
                            {{$vl->ville}}<br/>
                        </a>
                    @endforeach
                </div>
                <div class="col-lg-6 col-sm-12 list_right">
                    <h3>Evenements</h3>
                    @foreach($villesList as $vl)
                        <a href="{{$vl->ville}}/evenements">
                            {{$vl->ville}}<br/>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection