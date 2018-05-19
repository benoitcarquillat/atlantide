@extends('templates.app')

@section('content')
<div class="lieuxlist">
    <div class="container_titre">
            <h3>Retrouvez tous les lieux d'intérêt dans cette ville</h3>
    </div>
    <div class="liste_liens">
    @if ($listeLieux->count() !== 0)
        @foreach($listeLieux as $ll)
            <a href="/lieux/{{$ll->nom}}">
                {{$ll->nom}}<br/>
            </a>   
        @endforeach

    @else
        <h2>Il n'y a pas de lieu d'intéret dans cette ville :'(</h2>
    @endif
    </div>
</div>


@endsection