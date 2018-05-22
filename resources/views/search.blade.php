@extends('templates.app')

@section('content')

<div class="search">
    <div class="container">
        <h1>Résultat de votre recherche</h1>
    </div>
    <div class="container_search">
        <div class="container">
            @if ($results->count() !== 0)
            <h2 class="h2"> Les lieux d'interet :</h2>
            <div class="row cards">
                @foreach ($results as $result)
                    <div class="col-6 col-md-3 mg15">
                        <div class="cardWrapper">
                            <div class="col-md-12 card" style="background-image:url(/img/lieux/{{$result->img}});">
                                <a href="/lieux/{{$result->nom}}">
                                    <div class="card_content">
                                        <p class="uppercase bold ville"> {{$result->ville}} </p>
                                        <p class="uppercase bold nom"> {{$result->nom}} </p>
                                        <p class="description"> {{ str_limit($result->description,25) }} </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @endif

        @if ($results_event ->count() !== 0)
            <h2 class="h2"> Les évenements :</h2>
            <div class="row cards">
                @foreach ($results_event as $result_event)
                    <div class="col-6 col-md-3 mg15">
                        <div class="cardWrapper">
                            <div class="col-md-12 card" style="background-image:url(/img/lieux/{{$result_event->img}});">
                                <a href="/evenements/{{$result_event->nom}}">
                                    <div class="card_content">
                                        <p class="uppercase bold ville"> {{$result_event->ville}} </p>
                                        <p class="uppercase bold nom"> {{$result_event->nom}} </p>
                                        <p class="description"> {{ str_limit($result_event->description,25) }} </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</div>

@endsection