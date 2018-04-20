@extends('templates.app')

@section('content')
    <p>Je suis la page qui recense la liste de tous les lieux de la BDD pour une Ville donnée
    </p>

    @foreach($listeLieux as $ll)
        <a href="/lieux/{{$ll->nom}}">
            {{$ll->nom}}<br/>
        </a>
    @endforeach
@endsection