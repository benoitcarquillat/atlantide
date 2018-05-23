@extends('templates.app')

@section('content')
<div class="listvilles">
    <div class="container_titre">
    <h3>Retrouvez ici  ici tous les évenements puis les lieux d'interet dans la ville : !</h3>
    </div>

    <div class="liste">
        <div class="container">
            <h2 class="h2"> Les évenements :</h2>
            <div class="row cards">
                @foreach ($villesList as $vl)
                    <div class="col-6 col-md-3 mg15">
                        <div class="cardWrapper">
                            <div class="col-md-12 card" style="background-image:url(/img/lieux/{{$vl->img}});">
                                <a href="/evenements/{{$vl->nom}}">
                                    <div class="card_content">
                                        <p class="uppercase bold ville"> {{$vl->ville}} </p>
                                        <p class="uppercase bold nom"> {{$vl->nom}} </p>
                                        <p class="description"> {{ str_limit($vl->description,25) }} </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="container">
            <h2 class="h2"> Les lieux d'interet :</h2>
            <div class="row cards">
                @foreach ($villesList as $vl)
                    <div class="col-6 col-md-3 mg15">
                        <div class="cardWrapper">
                            <div class="col-md-12 card" style="background-image:url(/img/lieux/{{$vl->img}});">
                                <a href="/lieux/{{$vl->nom}}">
                                    <div class="card_content">
                                        <p class="uppercase bold ville"> {{$vl->ville}} </p>
                                        <p class="uppercase bold nom"> {{$vl->nom}} </p>
                                        <p class="description"> {{ str_limit($vl->description,25) }} </p>
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