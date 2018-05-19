@extends('templates.app')

@section('content')
<div class="lieuxlist">
        <div class="container_titre">
                <h3>Retrouvez tous les évenements dans cette ville</h3>
        </div>
        <div class="liste_liens">
        @if ($evenementsList->count() !== 0)
            @foreach($evenementsList as $ll)
                <a href="/evenements/{{$ll->nom}}">
                    {{$ll->nom}}<br/>
                </a>   
            @endforeach
    
        @else
            <h2>Il n'y a pas d'évenement dans cette ville :'(</h2>
        @endif
        </div>
    </div>
@endsection