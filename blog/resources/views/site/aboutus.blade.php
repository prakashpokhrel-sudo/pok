@extends('site.home')
@section('content')

<section id="contain">
	<div class="container">
		<h1>About Us</h1>
		<div class="row">
			<div class="col-md-4 welcome-img">
				<img src="{{asset('img/hotel3.jpg')}}">
			</div>
			<div class="col-md-8">
				<h2>Welcome to my hotel..</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</div>
</section>
@stop