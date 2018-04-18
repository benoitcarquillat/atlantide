@extends('templates.app')

@section('content')
    <p>Je suis la page qui recense la liste de tous les lieux de la BDD pour une Ville donnée
    </p>

    @foreach($lieux as $l)
        <a href="{{$l->ville}}/lieux/{{$l->id}}">
            {{$l->ville}} {{$l->type}} {{$l->nom}}<br/>
        </a>
    @endforeach
@endsection