@extends('templates.app')

@section('content')

<div class="homepage">
	{{-- banniere --}}
	<div class="homepage__banner">
		<img src="{{ asset('img/layer1.png') }}" alt="">
		<div class="layer">
		</div>
	</div>

	<div class="container">
		<p class="tag">Top destinations</p>
		<h2 class="h2">Découvrez nos destinations coup de coeur</h2>
		<div class="cards">
			<div class="row">

				@foreach ($lieux as $lieu)
					<div class="col-6 col-md-3 mg15">
						<div class="col-md-12 card" style="background-image:url(/img/lieux/{{$lieu->img}});">
							<a href="/lieux/{{$lieu->nom}}">
								<p> {{$lieu->id }} </p>
								<p> {{$lieu->nom}} </p>
							</a>
						</div>
					</div>
				@endforeach
				
			</div>
		</div>
	</div>
</div>
@endsection


