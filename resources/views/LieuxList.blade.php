@extends('templates.app')

@section('content')
    <p>Je suis la page qui recense la liste de tous les lieux de la BDD pour une Ville donnée
    </p>

    @if ($listeLieux->count() !== 0)
        @foreach($listeLieux as $ll)
            <a href="/lieux/{{$ll->nom}}">
                {{$ll->nom}}<br/>
            </a>   
        @endforeach

    @else
        <h2>Il n'y a pas de lieux d'intéret dans cette ville :'(</h2>
    @endif
@endsection