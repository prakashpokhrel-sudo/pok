<!DOCTYPE html>
<html>
<head>
	<title>Rajesh Dai</title>
	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('fontawesome/css/all.css')}}">

</head>
<body>
<section id="topheader">
	<div class="container">
		<div class="row">
		<div class="col-md-3">Enquiry: 9846630870</div>
		<div class="col-md-9 socialicon">
			<a href="www.google.com"><i class="fab fa-facebook-f"></i></a>
			<a href="">	<i class="fab fa-facebook-f"></i></a>
			<a href=""> <i class="fab fa-facebook-f"></i></a>
		</div>
		</div>
	</div>

</section>

<section id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<img src="{{asset('img/logo1.png')}}" width="180">
			</div>
		</div>
	</div>
</section>

<section id="menu">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<ul>
					<li><a href="{{route('home')}}">Home</a></li>
					<li><a href="{{route('aboutus')}}">AboutUs</a></li>
					<li><a href="{{route('accomodation')}}">Accomodation</a></li>
					<li><a href="">Facilities</a></li>
					<li><a href="">Gallery</a></li>
					<li><a href="{{route('contactus')}}">ConatctUs</a></li>
				</ul>
			</div>
			<div class="col-md-3 booknowbtn">
				<a href=""><i class="fas fa-user"></i>Login</a>
				<a href=""><i class="fas fa-user"></i>Sign Up</a>
			</div>
		</div>

	</div>
</section>

@yield('content')

<section id="footer">
	<div class="container">
	<div class="row ">
		<div class="col-md-2">
			<img src="{{asset('img/logo1.png')}}" width="180">
		</div>
	<div class="col-md-3 foter">
		<h3>NEED HELP</h3>
		<li><a href="#">Terms &amp; Conditions</a></li>
		<li><a href="#">Privacy</a></li>
	</div>
	<div class="col-md-4 foter2">
		<h3>MORE</h3>
		<li><a href="">Brochures</a></li>
		<li><a href="">Donates</a></li>
		
	</div>	
	<div class="col-md-3 foter3">
		<h3>FOLLOW US</h3>
		<a href="">	<i class="fab fa-facebook-f"></i></a>
		<a href="">	<i class="fab fa-youtube-f"></i></a>
		<a href="">	<i class="fab fa-twitter-square"></i></a>
		<a href="">	<i class="fab fa-instagram"></i></a>
	</div>
	
	</div>
 </div>


</section>



<script type="text/javascript" src = "{{asset('jquery/jquery.js')}}"></script>
<script type="text/javascript" src = "{{asset('fontawesome/js/all.js')}}"></script>
<script type="text/javascript" src = "{{asset('bootstrap/js/bootstrap.js')}}"></script>
</body>
</html>