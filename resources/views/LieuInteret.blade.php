@extends('templates.app')

@section('content')
<div class="lieuinteret">
    @foreach($lieu as $l)
    <div class="lieu_banner" style="background-image:url(/img/lieux/{{$l->img}});">
        <h1>{{$l->nom}}</h1>       
    </div>

  
    <div class="container">
        <p class="tag">{{$l->type}}</p>
        <h2 class="h2black">Il faut trouver du texte</h2>
        <div class ="row card">
            <div class="col-md-5 col-sm-12 card_left" style="background-image:url(/img/lieux/{{$l->img}});"></div>
            <div class="col-md-7 col-sm-12 card_right">
                <div class="description">
                    <h3>{{$l->nom}}</h3>
                    <p>{{$l->description}}</p>
                </div>
                <div class="adresse">
                    <h3>Adresse</h3>
                    <p>{{$l->adresse}}<br/>
                    {{$l->codeP}}<br/>
                    {{$l->ville}}</p>
                </div>
            </div>

        </div>
    </div>
    @endforeach

    @foreach($lieu as $l)

    @endforeach
</div>

@endsection