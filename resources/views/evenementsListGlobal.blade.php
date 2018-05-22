@extends('templates.app')

@section('content')
<div class="lieuxlistglobal">
    <div class="container_titre">
        <h1>Retrouvez ici toutes les villes présentant des évenements</h1>
    </div>
    <div class="liste">
        <div class="container">
            <div class="row cards">
                @foreach($evenementsListGlobal as $elg)
                    <div class="col-6 col-md-3 mg15">
                        <div class="cardWrapper">
                            <div class="col-md-12 card" style="background-image:url(/img/lieux/{{$elg->img}});">
                                <a href="/evenements/{{$elg->nom}}">
                                    <div class="card_content">
                                        <p class="uppercase bold ville"> {{$elg->ville}} </p>
                                        <p class="uppercase bold nom"> {{$elg->nom}} </p>
                                        <p class="description"> {{ str_limit($elg->description,25) }} </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection