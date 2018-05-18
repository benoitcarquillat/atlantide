@extends('templates.app')

@section('content')
    <p>Je suis la page qui recense la liste de tous les evenements de la BDD pour une Ville donnée
    </p>

    @if ($evenementsList->count() !== 0)
        @foreach($evenementsList as $ll)
            <a href="/evenements/{{$ll->nom}}">
                {{$ll->nom}}<br/>
            </a>   
        @endforeach

    @else
        <h2>Il n'y a pas d'evenements dans cette ville :'(</h2>
    @endif
@endsection