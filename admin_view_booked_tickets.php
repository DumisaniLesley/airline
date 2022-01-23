<?php
	session_start();
	require_once('Database Connection file/mysqli_connect.php');
?>
<html>

<head>
    <title>
        Booked Tickets | Admin
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

    <h2 class="text-center mt-4 mb-4 text-uppercase">All Booked Tickets</h2>
	<div class="container">
        <table class="table table-striped table-hover mt-4">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">PNR No.</th>
                    <th scope="col">Date</th>
                    <th scope="col">Flight No,</th>
                    <th scope="col">Travel Date</th>
                    <th scope="col">Class</th>
                    <th scope="col">Passengers</th>
                    <th scope="col">Insurance</th>
                    <th scope="col">Payment Id</th>
                    <th scope="col">Customer Id</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $query = "SELECT * FROM ticket_details";
                $result = mysqli_query($dbc, $query);
                $count = 1;
                while ($row = mysqli_fetch_array($result)) {
                    $pnr = $row['pnr'];
                    $date_of_reservation = $row['date_of_reservation'];
                    $flight_no = $row['flight_no'];
                    $journey_date = $row['journey_date'];
                    $class = $row['class'];
                    $no_of_passengers = $row['no_of_passengers'];
                    $insurance = $row['insurance'];
                    $payment_id = $row['payment_id'];
                    $customer_id = $row['customer_id'];
                    $booking_status = $row['booking_status'];

                    echo "<tr>
                        <td>$count</td>
                        <td>$pnr</td>
                        <td>$date_of_reservation</td>
                        <td>$flight_no</td>
                        <td>$journey_date</td>
                        <td>$class</td>
                        <td class='text-center'>$no_of_passengers</td>
                        <td>$insurance</td>
                        <td>$payment_id</td>
                        <td>$customer_id</td>
                        <td>$booking_status</td>
                        <td>					
                            <a href='#' class='btn btn-primary'>Action</a>
                        </td>
                      </tr>";
                    $count++;
                }

                ?>
            </tbody>
        </table>
    </div>

		<!-- <form action="admin_view_booked_tickets_form_handler.php" method="post">
			<h2>VIEW LIST OF BOOKED TICKETS FOR A FLIGHT</h2>
			<div>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Enter the Flight No.</td>
					<td class="fix_table">Enter the Departure Date</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="text" name="flight_no" required></td>
					<td class="fix_table"><input type="date" name="departure_date" required></td>
				</tr>
			</table>
			<br>
			<br>
			<input type="submit" value="Submit" name="Submit">
			</div>
		</form> -->
	</body>
</html>