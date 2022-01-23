<?php
session_start();
?>
<html>

<head>
	<title>
		Welcome Administrator
	</title>
	<link rel="stylesheet" type="text/css" href="css/styzle.css" />
	<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<style>
		h5 a {
			text-decoration: none;
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="admin_homepage.php">Airline</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ms-auto">
					<a class="nav-link active" aria-current="page" href="admin_homepage.php">Home</a>
					<a class="nav-link" href="logout_handler.php">Logout</a>
				</div>
			</div>
		</div>
	</nav>
	<h2 class="text-center mt-4 mb-2">Welcome Administrator!</h2>
	<div class="container px-4 py-5" id="featured-3">
		<div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
			<div class="feature col text-center">
				<div class="feature-icon text-center fa-5x mb-4">
					<i class="fa fa-plane" aria-hidden="true"></i>
				</div>
				<h5><a href="admin_view_booked_tickets.php">Booked Tickets</a></h5>
			</div>
			<div class="feature col text-center">
				<div class="feature-icon text-center fa-5x mb-4">
					<i class="fa fa-plane" aria-hidden="true"></i>
				</div>
				<h5><a href="add_flight_details.php">Add Flight Details</a></h5>
			</div>
			<div class="feature col text-center">
				<div class="feature-icon text-center fa-5x mb-4">
					<i class="fa fa-plane" aria-hidden="true"></i>
				</div>
				<h5><a href="all_flights.php">All Flights</a></h5>
			</div>
			<div class="feature col text-center">
				<div class="feature-icon text-center fa-5x mb-4">
					<i class="fa fa-plane" aria-hidden="true"></i>
				</div>
				<h5><a href="delete_flight_details.php">Delete Flight Details</a></h5>
			</div>
			<div class="feature col text-center">
				<div class="feature-icon text-center fa-5x mb-4">
					<i class="fa fa-plane" aria-hidden="true"></i>
				</div>
				<h5><a href="add_jet_details.php">Add Aircrafts Details</a></h5>
			</div>
			<div class="feature col text-center">
				<div class="feature-icon text-center fa-5x mb-4">
					<i class="fa fa-plane" aria-hidden="true"></i>
				</div>
				<h5><a href="activate_jet_details.php">Activate Jet</a></h5>
			</div>
			<div class="feature col text-center">
				<div class="feature-icon text-center fa-5x mb-4">
					<i class="fa fa-plane" aria-hidden="true"></i>
				</div>
				<h5><a href="deactivate_jet_details.php">Deactivate Jet</a></h5>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>