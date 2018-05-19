@extends('templates.app')

@section('content')
<div class="lieuinteret">
    @foreach($evenement as $l)
    <div class="lieu_banner" style="background-image:url(/img/lieux/{{$l->img}});">
        <h1>{{$l->nom}}</h1>       
    </div>

  
    <div class="container">
        <p class="tag">{{$l->type}}</p>
        <h2 class="h2black">A tester à {{$l->ville}}</h2>
        <div class ="row card">
            <div class="col-md-5 col-sm-12 card_left" style="background-image:url(/img/lieux/{{$l->img}});"></div>
            <div class="col-md-7 col-sm-12 card_right">
                <div class="description">
                    <h3>{{$l->nom}}</h3>
                    <p>{{$l->description}}</p>
                    <p>Début: {{$l->dateDebut}}</p>
                    <p>Fin: {{$l->dateFin}}</p>
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
    <div class="container_buttons container">
            
        <div class="wrap_bouton col-lg-4 col-12"><button type="button" class="btn"><a href="/">Accueil</a></button></div>
            <div class="wrap_bouton col-lg-4 col-12"><button type="button" class="btn"><a href="/evenements">Liste des villes</a></button></div>
                <div class="wrap_bouton col-lg-4 col-12"><button type="button" class="btn"><a href="/{{$l->ville}}/evenements">Liste des évenements à {{$l->ville}}</a></button></div>
    </div>
    @endforeach


</div>

@endsection