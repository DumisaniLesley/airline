<?php
	session_start();
?>
<html>
	<head>
		<title>
			View Available Flights
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

	<div class="container" style="max-width: 720px;">
		<form action="view_flights_form_handler.php" method="post">
		<h2 class="text-center mt-4 mb-4">SEARCH FOR AVAILABLE FLIGHTS</h2>
			<div class="container">
			<div class="row g-5">
				<div class="col">
					<!-- Name input -->
					<div class="form-outline">
						<label class="form-label" for="form9Example3">Departure Airport</label>
						<input list="origins" name="origin" placeholder="From" class="form-control" required>
						<datalist id="origins">
							<option value="bangalore">
						</datalist>
					</div>
				</div>
				<div class="col">
					<!-- Email input -->
					<div class="form-outline">
						<label class="form-label" for="form9Example4">Destination Airport</label>
						<input list="destinations" name="destination" placeholder="To" class="form-control" required>
						<datalist id="destinations">
							<option value="mumbai">
							<option value="mysore">
							<option value="mangalore">
							<option value="chennai">
							<option value="hyderabad">
						</datalist>
					</div>
				</div>
			</div>
			<div class="row g-5 mt-1 mb-2">
				<div class="col">
					<!--  input -->
					<div class="form-outline">
						<label class="form-label" for="form9Example3">Date of Departure</label>
						<input type="date" class="form-control" name="dep_date" min=<?php
																					$todays_date = date('Y-m-d');
																					echo $todays_date;
																					?> max=<?php
																							$max_date = date_create(date('Y-m-d'));
																							date_add($max_date, date_interval_create_from_date_string("90 days"));
																							echo date_format($max_date, "Y-m-d");
																							?> required>
					</div>
				</div>
				<div class="col">
					<!--  input -->
					<div class="form-outline">
						<label class="form-label" for="form9Example4">Number of Passengers</label>
						<input type="number" name="no_of_pass" placeholder="Number of passengers" class="form-control" required>
					</div>
				</div>
			</div>
			<div class="row g-5 mt-1 mb-2">
				<div class="col">
					<div class="form-outline">
						<label class="form-label" for="form9Example3">Choose Class</label>
						<select name="class" class="form-control">
							<option value="economy">Economy Class</option>
							<option value="business">Business Class</option>
							<option value="first">First Class</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row g-5">
				<div class="col">
					<input type="submit" value="Search Flights" name="Search" class="form-control ms-0 btn-block mt-3">
				</div>
			</div>
			</div> <br>
		</form>
	</div>
		<!-- <form action="view_flights_form_handler.php" method="post">
			<h2 class="text-center mt-4 text-uppercase">SEARCH FOR AVAILABLE FLIGHTS</h2>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Enter the Origin</td>
					<td class="fix_table">Enter the Destination</td>
				</tr>
				<tr>
					<td class="fix_table">
						<input list="origins" name="origin" placeholder="From" required>
  						<datalist id="origins">
  						  	<option value="bangalore">
  						</datalist>
						<!-- <input type="text" name="origin" placeholder="From" required> --></td>
					<!-- <td class="fix_table">
						<input list="destinations" name="destination" placeholder="To" required>
  						<datalist id="destinations">
  						  	<option value="mumbai">
  						  	<option value="mysore">
  						  	<option value="mangalore">
  						  	<option value="chennai">
  						  	<option value="hyderabad">
  						</datalist> -->
						<!-- <input type="text" name="destination" placeholder="To" required> --></td>
				<!-- </tr>
			</table>
			<br>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Enter the Departure Date</td>
					<td class="fix_table">Enter the No. of Passengers</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="date" name="dep_date" min=
						<?php 
							//$todays_date=date('Y-m-d'); 
							//echo $todays_date;
						?> 
						max=
						<?php 
							//$max_date=date_create(date('Y-m-d'));
							//date_add($max_date,date_interval_create_from_date_string("90 days")); 
							//echo date_format($max_date,"Y-m-d");
						?> required></td>
					<td class="fix_table"><input type="number" name="no_of_pass" placeholder="Eg. 5" required></td>
				</tr>
			</table>
			<br>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Enter the Class</td>
				</tr>
				<tr>
					<td class="fix_table">
						<select name="class">
  							<option value="economy">Economy</option>
  							<option value="business">Business</option>
  						</select>
  					</td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Search for Available Flights" name="Search">
		</form> --> 
		<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
		-->
	</body>
</html>