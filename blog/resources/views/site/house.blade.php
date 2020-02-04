@extends('site.home')
@section('content')






<section id="slider">
	<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="1000">
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('img/hht.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/hotel1.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/hotel3.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
</div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>

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

<section id="accomodation">
	<div class="container">
		<h1 style="text-align: center;">Accomodation</h1>
		<div class="row img">
			<div class="col-md-4 delux">
				<img src="{{asset('img/bed.jpg')}}">
				Delux Room<br> 500 per/night
			</div>
			<div class="col-md-4 suit">
				<img src="{{asset('img/bed2.jpg')}}">
				Suit Room<br> 1000 per/night
			</div>
			<div class="col-md-4 normal">
				<img src="{{asset('img/bed1.jpg')}}">
				Normal Room<br> 100 per/night
			</div>
		</div>
	</div>
 </div>
	
</section>

@stop