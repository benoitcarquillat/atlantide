@extends('templates.app')

@section('content')
    <p>Je suis la page globale des lieux d'intérets
        Voici la liste des activités 
    </p>

    @foreach($activities as $a)
        {{$a->pays}} {{$a->ville}} {{$a->type}} {{$a->nom}}<br/>
    @endforeach
@endsection