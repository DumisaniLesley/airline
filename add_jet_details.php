<?php
session_start();
?>
<html>

<head>
	<title>
		Add Aircrafts Details
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
			margin: 0px 60px
		}
	</style>
	<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

	<h2 class="text-center m-4">ENTER THE AIRCRAFTS DETAILS</h2>
	<div class="container mt-4" style="max-width: 550px;">
		<form action="add_jet_details_form_handler.php" method="post">
			<?php
			if (isset($_GET['msg']) && $_GET['msg'] == 'success') {
				echo "<strong style='color: green; text-align: center'>The Aircraft has been successfully added.</strong>
						<br><br>";
			} else if (isset($_GET['msg']) && $_GET['msg'] == 'failed') {
				echo "<strong style='color:red'>*Jet ID already exists, please enter a new Jet ID.</strong>
						<br><br>";
			}
			?>
			<!-- Email input -->
			<div class="form-outline mb-3">
				<label class="form-label" for="">Enter a Jet ID</label>
				<input type="text" name="jet_id" class="form-control" required />
			</div>

			<!-- Password input -->
			<div class="form-outline mb-3">
				<label class="form-label" for="">Enter Jet Type/Model</label>
				<input type="text" name="jet_type" class="form-control" required />
			</div>

			<div class="form-outline mb-3">
				<label class="form-label" for="">Enter Jet Capacity</label>
				<input type="number" name="jet_capacity" class="form-control" required />
			</div>

			<!-- Submit button -->

			<div class="d-grid gap-2">
				<input type="submit" value="Add" name="Submit" class="btn btn-primary" />
			</div>
		</form>
	</div>

</body>

</html>