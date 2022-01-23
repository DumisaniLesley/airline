<?php
session_start();
?>
<html>

<head>
	<title>
		Welcome to Airlines
	</title>
	<link rel="stylesheet" type="text/css" href="css/stylev.css" />
	<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
	<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="home_page.php">Airline</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ms-auto">
					<a class="nav-link active" aria-current="page" href="#">Home</a>
					<a class="nav-link" href="search_flight.php">Search Flights</a>
					<li>
						<?php
						if (isset($_SESSION['login_user']) && $_SESSION['user_type'] == 'Customer') {
							echo "<a class='nav-link' href=\"customer_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						} else if (isset($_SESSION['login_user']) && $_SESSION['user_type'] == 'Administrator') {
							echo "<a class='nav-link' href=\"admin_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						} else {
							echo "<a class='nav-link' href=\"login_page.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						?>
					</li>
				</div>
			</div>
		</div>
	</nav>

	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner" style="max-height: 100vh;">
			<div class="carousel-item active">
				<img src="images/airport.png" class="d-block w-100" alt="..." style="height: 90vh;">
				<div class="carousel-caption d-none d-md-block" style="margin-bottom: 100px;">
					<h1 class="mb-4 text-dark" style="font-size: 90px">Welcome to Airlines</h1>
					<p class="mb-4 text-dark" style="font-size: 40px">The Best Online Flight reservation system for all.</p>
					<a href="search_flight.php" class="btn btn-outline-dark">Search Flights</a>
				</div>
			</div>
		</div>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>