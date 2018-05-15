@extends('templates.app')

@section('content')

<div class="container">
    <h1>Résultat de votre recherche</h1>


    @if ($results->count() !== 0)
        <h2> Les lieux d'interet :</h2>
        <ul>   
            @foreach ($results as $result)
            <a href="/lieux/{{$result->nom}}">
                <li> {{$result->nom}} </li>
            </a>
            @endforeach
        </ul>
    @endif


    
    @if ($results_event ->count() !== 0)
        <h2> Les évenements :</h2>
        <ul>
            @foreach ($results_event as $result_event)
                <a href="/evenement/{{$result_event->nom}}">
                    <li> {{$result_event->nom}} </li>
                </a>
            @endforeach
        </ul>
    @endif
</div>

@endsection