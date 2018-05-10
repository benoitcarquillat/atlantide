@extends('templates.app')

@section('content')

<div class="homepage">
	{{-- banniere --}}

	<header class="parralaxContainer">
		

		<div class="homepage__banner rellax" data-rellax-speed="-20">
			<div class="rellax layer img" data-rellax-speed="20">
				<img src="{{ asset('img/layer1.png') }}" alt="">
			</div>

			<div class="rellax layer birds" data-rellax-speed="10">
				<img src="{{ asset('img/birds.png') }}" alt="">
			</div>
	
			<div class="rellax layer txt" data-rellax-speed="-2"> 
				<h1>Atlantide</h1>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
			</div>
		
			<div class="rellax boxShadow" data-rellax-speed="20"></div>
		</div>
	</header>

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
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, itaque! Lorem ipsum dolor sit amet.</p>
							</a>
						</div>
					</div>
				@endforeach
				
			</div>
		</div>
	</div>
</div>
@endsection


