@extends('templates.app')

@section('content')
    <div class="lieuxlistglobal">
    <div class="container_titre">
    <h3>Retrouvez ici toutes les villes présentant des évenements
    </h3>
    </div>
    <div class="liste_liens">
        @foreach($evenementsListGlobal as $elg)
        <div class="lien">
            <a href="/evenements/{{$elg->nom}}">
                {{$elg->nom}} 
            </a>
            à
            <a href="/{{$elg->ville}}/evenements">
                {{$elg->ville}} 
            </a><br/>
        </div>
    @endforeach
    </div>
    </div>
@endsection