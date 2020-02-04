@extends('site.home')
@section('content')
<section id="accomodation">
	<div class="container">
		<h1 style="text-align: center;">Accomodation</h1>
		<div class="row img">
			<div class="col-md-4 delux">
				<img src="{{asset('img/bed.jpg')}}">
				Delux Room<br> 500 per/night
				<a href="{{route('view')}}"><button type="button" class="btn btn-success">view detail</button></a>
			</div>
			<div class="col-md-4 suit">
				<img src="{{asset('img/bed2.jpg')}}">
				Suit Room<br> 1000 per/night
				<a href="{{route('view1')}}"><button type="button" class="btn btn-success">view detail</button></a>
			</div>
			<div class="col-md-4 normal">
				<img src="{{asset('img/bed1.jpg')}}">
				Normal Room<br> 100 per/night
				<a href="{{route('view2')}}"><button type="button" class="btn btn-success">view detail</button></a>
			</div>
		</div>
	</div>
 </div>
	
</section>

@stop
