@extends('templates.app')

@section('content')
<div class="listvilles">
    <div class="container_titre">
    <h3>Retrouvez ici  ici tous les évenements et Lieux d'Interet dans cette ville !</h3>
    </div>
    <div class="liste">
        <div class="container">
            <div class="row cards">
                @foreach($villesListAll as $vl)
                    <div class="col-6 col-md-3 mg15">
                        <div class="cardWrapper">
                            <div class="col-md-12 card" style="background-image:url(/img/lieux/{{$vl->img}});">
                                <a href="/ville/{{$vl->ville}}">
                                    <div class="card_content">
                                        <p class="uppercase bold ville"> {{$vl->ville}} </p>
                                        <p class="uppercase bold nom"> {{$vl->codeP}} </p>
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