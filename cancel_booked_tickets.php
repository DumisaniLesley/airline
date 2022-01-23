<?php
session_start();
?>
<html>

<head>
	<title>
		Cancel Booked Tickets
	</title>
	<!-- <style>
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
    			margin: 0px 68px
			}
		</style> -->
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
	<h2 class="text-center mt-4 mb-4">VIEW BOOKED FLIGHT TICKETS</h2>
	<div class="container" style="max-width: 480px;">
		<form action="cancel_booked_tickets_form_handler.php" method="post">
			<?php
			if (isset($_GET['msg']) && $_GET['msg'] == 'failed') {
				echo "<strong style='color: red'>*Invalid PNR, please enter PNR again</strong>
				<br>
				<br>";
			}
			?>
			<input type="text" name="pnr" class="form-control" style="width:300px; margin-left: 66px;" placeholder="Enter Your PNR Number" required><br>

			<input type="submit" value="Cancel Ticket" name="Cancel_Ticket" class="toggle btn btn-primary" style="width: 200px; margin-left: 120px;">
		</form>
	</div>

</body>

</html>