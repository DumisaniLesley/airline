<?php
session_start();
?>
<html>

<head>
	<title>
		View Booked Tickets
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
			margin: 0px 390px
		}

		table {
			border-collapse: collapse;
			margin-left: 10%;
			margin-right: 10%;
		}

		tr

		/*:nth-child(3)*/
			{
			border: solid thin;
		}

		.set_nice_size {
			font-size: 17pt;
		}
	</style>
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
	<div class="container" style="max-width: 720px">
		<h3 class="text-center"><u>Upcoming Trips</u></h3>
		<?php
		$todays_date = date('Y-m-d');
		$thirty_days_before_date = date_create(date('Y-m-d'));
		date_sub($thirty_days_before_date, date_interval_create_from_date_string("30 days"));
		$thirty_days_before_date = date_format($thirty_days_before_date, "Y-m-d");

		$customer_id = $_SESSION['login_user'];
		require_once('Database Connection file/mysqli_connect.php');
		$query = "SELECT pnr,date_of_reservation,flight_no,journey_date,class,booking_status,no_of_passengers,payment_id FROM Ticket_Details where customer_id=? AND journey_date>=? AND booking_status='CONFIRMED' ORDER BY  journey_date";
		$stmt = mysqli_prepare($dbc, $query);
		mysqli_stmt_bind_param($stmt, "ss", $customer_id, $todays_date);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_bind_result($stmt, $pnr, $date_of_reservation, $flight_no, $journey_date, $class, $booking_status, $no_of_passengers, $payment_id);
		mysqli_stmt_store_result($stmt);
		if (mysqli_stmt_num_rows($stmt) == 0) {
			echo "<h3><center>No upcoming trips!</center></h3>";
		} else {
			echo "<table cellpadding=\"10\"";
			echo "<tr><th>PNR</th>
				<th>Date of Reservation</th>
				<th>Flight No.</th>
				<th>Journey Date</th>
				<th>Class</th>
				<th>Booking Status</th>
				<th>No. of Passengers</th>
				<th>Payment ID</th>
				</tr>";
			while (mysqli_stmt_fetch($stmt)) {
				echo "<tr>
        			<td>" . $pnr . "</td>
        			<td>" . $date_of_reservation . "</td>
					<td>" . $flight_no . "</td>
					<td>" . $journey_date . "</td>
					<td>" . $class . "</td>
					<td>" . $booking_status . "</td>
					<td>" . $no_of_passengers . "</td>
					<td>" . $payment_id . "</td>
        			</tr>";
			}
			echo "</table> <br>";
		}
		echo "<br><h3 class=\"set_nice_size\"><center><u>Completed Trips</u></center></h3>";

		$query = "SELECT pnr,date_of_reservation,flight_no,journey_date,class,booking_status,no_of_passengers,payment_id FROM Ticket_Details where customer_id=? and journey_date<? and journey_date>=? ORDER BY  journey_date";
		$stmt = mysqli_prepare($dbc, $query);
		mysqli_stmt_bind_param($stmt, "sss", $customer_id, $todays_date, $thirty_days_before_date);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_bind_result($stmt, $pnr, $date_of_reservation, $flight_no, $journey_date, $class, $booking_status, $no_of_passengers, $payment_id);
		mysqli_stmt_store_result($stmt);
		if (mysqli_stmt_num_rows($stmt) == 0) {
			echo "<h3><center>No trips completed in the past 30 days!</center></h3>";
		} else {
			echo "<table cellpadding=\"10\"";
			echo "<tr><th>PNR</th>
				<th>Date of Reservation</th>
				<th>Flight No.</th>
				<th>Journey Date</th>
				<th>Class</th>
				<th>Booking Status</th>
				<th>No. of Passengers</th>
				<th>Payment ID</th>
				</tr>";
			while (mysqli_stmt_fetch($stmt)) {
				echo "<tr>
        			<td>" . $pnr . "</td>
        			<td>" . $date_of_reservation . "</td>
					<td>" . $flight_no . "</td>
					<td>" . $journey_date . "</td>
					<td>" . $class . "</td>
					<td>" . $booking_status . "</td>
					<td>" . $no_of_passengers . "</td>
					<td>" . $payment_id . "</td>
        			</tr>";
			}
			echo "</table> <br>";
		}
		mysqli_stmt_close($stmt);
		mysqli_close($dbc);
		?>
	</div>

</body>

</html>