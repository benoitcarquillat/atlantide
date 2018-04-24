@extends('templates.app')

@section('content')

<div class="homepage">
	{{-- banniere --}}
	<div class="homepage__banner"></div>

	<div class="container">
		<p class="tag">Top destinations</p>
		<h2 class="h2">Découvrez nos destinations coup de coeur</h2>
		<div class="cards">
			<div class="row">

				@foreach ($lieux as $lieu)
					<div class="col-6 col-md-3 mg15">
						<div class="col-md-12 card">
							<p> {{ $lieu->id }} </p>
							<p> {{$lieu->nom}} </p>
						</div>
					</div>
				@endforeach
				
			</div>
		</div>
	</div>
</div>
@endsection


