<?php
session_start();
?>
<html>

<head>
	<title>
		Activate Aircraft
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
			margin: 0px 67px
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
	<h2 class="text-center m-4">ENTER THE AIRCRAFT TO BE ACTIVATED</h2>
	<div class="container mt-4" style="max-width: 550px;">
		<form action="activate_jet_details_form_handler.php" method="post">
			<div class="container">
				<?php
				if (isset($_GET['msg']) && $_GET['msg'] == 'success') {
					echo "<strong style='color: green'>The Aircraft has been successfully activated.</strong>
					<br>
					<br>";
				} else if (isset($_GET['msg']) && $_GET['msg'] == 'failed') {
					echo "<strong style='color:red'>*Invalid Jet ID entered, please enter again.</strong>
					<br>
					<br>";
				}
				?>

				<div class="form-outline mb-3">
					<label class="form-label" for="">Enter a valid Jet ID</label>
					<input type="text" name="jet_id" class="form-control" required />
				</div>
			</div>
			<div class="d-grid gap-2">
				<input type="submit" value="Activate" name="Activate" class="btn btn-primary" />
			</div>
		</form>
	</div>
</body>

</html>