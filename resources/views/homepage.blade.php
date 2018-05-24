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
	
			<div class="rellax layer txt" data-rellax-speed="2"> 
				<h1>Atlantide</h1>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
			</div>
		
			<div class="rellax boxShadow" data-rellax-speed="20"></div>
		</div>
	</header>

	<div class="container">
		<div class="section_four_items">
			<p class="tag">Top destinations</p>
			<h2 class="h2">Découvrez nos dernieres destinations</h2>
			<div class="cards">
				<div class="row">

					@foreach ($lieux as $lieu)
						<div class="col-6 col-md-3 mg15">
							<div class="cardWrapper">
								<div class="col-md-12 card" style="background-image:url(/img/lieux/{{$lieu->img}});">
									<a href="/lieux/{{$lieu->nom}}">
										<div class="card_content">
											<p class="uppercase bold ville"> {{$lieu->ville}} </p>
											<p class="uppercase bold nom"> {{$lieu->nom}} </p>
											<p class="description"> {{ str_limit($lieu->description, 25) }} </p>
										</div>
									</a>
								</div>
							</div>
						</div>
					@endforeach
					
				</div>
			</div>
		</div>

		<div class="section_four_items">
			<p class="tag">Top évenenements</p>
			<h2 class="h2">Découvrez nos derniers évenements</h2>
			<div class="cards">
				<div class="row">
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
		</div>

		<div class="txt_wrapper">
			<h2 class="h2">Explore the world</h2>
			<p>Lorem ipsum Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur provident minus est molestias mollitia ipsum in quis eum voluptates reiciendis! dolor, sit amet consectetur Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque voluptatibus sit accusamus maxime dolor, eaque iste! Dignissimos commodi consectetur distinctio! adipisicing elit. Placeat beatae aliquam facilis numquam quisquam ut consequatur distinctio culpa! Dolor, quo?</p>
		</div>
	</div>
</div>
@endsection



