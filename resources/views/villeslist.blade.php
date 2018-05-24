@extends('templates.app')
@section('content')
@foreach ($lieux as $l)
@endforeach
<div class="listvilles">
    <div class="container_titre">
    <h3>Retrouvez ici  ici tous les évenements puis les lieux d'interet dans la ville : {{$l->ville}}!</h3>
    </div>
    <div class="liste">
        <div class="container">
            <h2 class="h2"> Les évenements :</h2>
            <div class="row cards">
                @foreach ($evenements as $evenement)
						<div class="col-6 col-md-3 mg15">
							<div class="cardWrapper">
								<div class="col-md-12 card" style="background-image:url(/img/lieux/{{$evenement->img}});">
									<a href="/evenements/{{$evenement->nom}}">
										<div class="card_content">
											<p class="uppercase bold ville"> {{$evenement->ville}} </p>
											<p class="uppercase bold nom"> {{$evenement->nom}} </p>
											<p class="description"> {{ str_limit($evenement->description,25) }} </p>
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
                @foreach ($lieux as $l)
                    <div class="col-6 col-md-3 mg15">
                        <div class="cardWrapper">
                            <div class="col-md-12 card" style="background-image:url(/img/lieux/{{$l->img}});">
                                <a href="/lieux/{{$l->nom}}">
                                    <div class="card_content">
                                        <p class="uppercase bold ville"> {{$l->ville}} </p>
                                        <p class="uppercase bold nom"> {{$l->nom}} </p>
                                        <p class="description"> {{ str_limit($l->description,25) }} </p>
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