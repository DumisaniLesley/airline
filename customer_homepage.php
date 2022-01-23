<?php
	session_start();
	// if($_SESSION['login_user']==null){
	// 	header('location:home_page.php');
	// }
?>
<html>
	<head>
		<title>
			Welcome Customer
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 127px
			}
			input[type=date] {
				border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 5.5px 44.5px;
			}
			select {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 6.5px 75.5px;
			}

			h5 a {
				text-decoration: none;
			}
		</style>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	</head>
	<body>
	<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="customer_homepage.php">Airline</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ms-auto">
					<a class="nav-link active" aria-current="page" href="customer_homepage.php">Home</a>
					<a class="nav-link" href="pnr.php">Print Ticket</a>
					<a class="nav-link" href="logout_handler.php">Logout</a>
				</div>
			</div>
		</div>
	</nav>
		
		<?php
			echo "<h2 class='text-center mt-4 text-uppercase'>Welcome ".$_SESSION['login_user']."</h2>";
		?>

<div class="container px-4 py-5" id="featured-3">
		<div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
			<div class="feature col-md-3 col-sm-12 text-center">
				<div class="feature-icon text-center fa-5x mb-4">
					<i class="fa fa-plane" aria-hidden="true"></i>
				</div>
				<h5><a href="book_tickets.php">Book Flight Ticket</a></h5>
			</div>
			<div class="feature col-md-3 col-sm-12 text-center">
				<div class="feature-icon text-center fa-5x mb-4">
					<i class="fa fa-plane" aria-hidden="true"></i>
				</div>
				<h5><a href="view_booked_tickets.php">View Booked Tickets</a></h5>
			</div>
			<div class="feature col-md-3 col-sm-12 text-center">
				<div class="feature-icon text-center fa-5x mb-4">
					<i class="fa fa-plane" aria-hidden="true"></i>
				</div>
				<h5><a href="pnr.php">Print Booked tickets</a></h5>
			</div>
			<div class="feature col-md-3 col-sm-12 text-center">
				<div class="feature-icon text-center fa-5x mb-4">
					<i class="fa fa-plane" aria-hidden="true"></i>
				</div>
				<h5><a href="cancel_booked_tickets.php">Cancel Booked Flight Tickets</a></h5>
			</div>
		</div>
	</div>
	</body>
</html>