@extends('templates.app')

@section('content')
<div class="lieuxlistglobal"> 
    <div class="container_titre">
        <h1>Retrouvez ici toutes les villes présentant des lieux d'intérêt</h1>
    </div>
    <div class="liste">
        <div class="container">
            <div class="row cards">
                @foreach($lieuxListGlobal as $llg)
                    <div class="col-6 col-md-3 mg15">
                        <div class="cardWrapper">
                            <div class="col-md-12 card" style="background-image:url(/img/lieux/{{$llg->img}});">
                                <a href="/lieux/{{$llg->nom}}">
                                    <div class="card_content">
                                        <p class="uppercase bold ville"> {{$llg->ville}} </p>
                                        <p class="uppercase bold nom"> {{$llg->nom}} </p>
                                        <p class="description"> {{ str_limit($llg->description,25) }} </p>
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