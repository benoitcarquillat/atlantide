@extends('templates.app')

@section('content')
    <p>Je suis la page qui recense la liste de tous les evenements de la BDD pour une Ville donnée
    </p>

    @foreach($evenementsList as $ll)
        <a href="/evenements/{{$ll->nom}}">
            {{$ll->nom}}<br/>
        </a>
    @endforeach
@endsection