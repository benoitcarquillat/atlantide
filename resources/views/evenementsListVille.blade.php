@extends('templates.app')

@section('content')
<div class="lieuxlist">
        <div class="container_titre">
                <h3>Retrouvez tous les évenements dans cette ville</h3>
        </div>
        <div class="liste_liens">
        @if ($evenementsList->count() !== 0)
            <div class="container">
                <div class="row cards">
                        @foreach($evenementsList as $ll)
                        <div class="col-6 col-md-3 mg15">
                            <div class="cardWrapper">
                                <div class="col-md-12 card" style="background-image:url(/img/lieux/{{$ll->img}});">
                                    <a href="/evenements/{{$ll->nom}}">
                                        <div class="card_content">
                                            <p class="uppercase bold ville"> {{$ll->ville}} </p>
                                            <p class="uppercase bold nom"> {{$ll->nom}} </p>
                                            <p class="description"> {{ str_limit($ll->description,25) }} </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <h2>Il n'y a pas d'évenement dans cette ville :'(</h2>
        @endif
        </div>
    </div>
@endsection