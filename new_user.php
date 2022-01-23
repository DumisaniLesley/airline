<html>

<head>
	<title>
		Create New User Account
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
			margin: 0px 135px
		}
	</style>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
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
					<a class="nav-link " aria-current="page" href="home_page.php">Home</a>
				</div>
			</div>
		</div>
	</nav>

	<div class="container" style="max-width: 480px;">
		<h3 class="text-center mt-4 mb-4">User Registration</h3>
		<form action="new_user_form_handler.php" method="POST">
			<div class="form-outline mb-4">
				<label class="form-label" for="">Name</label>
				<input type="text" id="form3Example3" class="form-control" name="name" required />
			</div>
			<div class="form-outline mb-4">
				<label class="form-label" for="">Email address</label>
				<input type="email" id="form3Example3" class="form-control" name="email" required/>
			</div>
			<div class="form-outline mb-4">
				<label class="form-label" for="">Phone Number</label>
				<input type="text" id="form3Example4" class="form-control" name="phone_no" required/>
			</div>
			<div class="form-outline mb-4">
				<label class="form-label" for="">Address</label>
				<input type="text" id="form3Example3" class="form-control" name="address" required/>
			</div>
			<div class="form-outline mb-4">
				<label class="form-label" for="">Username</label>
				<input type="text" id="form3Example3" class="form-control" name="username" required/>
			</div>
			<div class="form-outline mb-4">
				<label class="form-label" for="">Password</label>
				<input type="password" id="form3Example4" class="form-control" name="password" required/>
			</div>
			<input type="submit" value="Submit" name="Submit" class="btn btn-primary mb-4">
			<div class="text-center">
				<p>or sign up with:</p>
				<button type="button" class="btn btn-primary btn-floating mx-1">
					<i class="fa fa-facebook-f"></i>
				</button>
				<button type="button" class="btn btn-primary btn-floating mx-1">
					<i class="fa fa-google"></i>
				</button>
				<button type="button" class="btn btn-primary btn-floating mx-1">
					<i class="fa fa-twitter"></i>
				</button>
				<button type="button" class="btn btn-primary btn-floating mx-1">
					<i class="fa fa-github"></i>
				</button>
			</div>
		</form>
	</div>


	<form class="center_form" action="new_user_form_handler.php" method="POST" id="new_user_from">
		<h2><i class="fa fa-user-plus" aria-hidden="true"></i> CREATE NEW USER ACCOUNT</h2>
		<br>
		<table cellpadding='10'>
			<strong>ENTER LOGIN DETAILS</strong>
			<tr>
				<td>Enter a valid username </td>
				<td><input type="text" name="username" required><br><br></td>
			</tr>
			<tr>
				<td>Enter your desired password </td>
				<td><input type="password" name="password" required><br><br></td>
			</tr>
			<tr>
				<td>Enter your email ID</td>
				<td><input type="text" name="email" required><br><br></td>
			</tr>
		</table>
		<br>
		<table cellpadding='10'>
			<strong>ENTER CUSTOMER'S PERSONAL DETAILS</strong>
			<tr>
				<td>Enter your name </td>
				<td><input type="text" name="name" required><br><br></td>
			</tr>
			<tr>
				<td>Enter your phone no.</td>
				<td><input type="text" name="phone_no" required><br><br></td>
			</tr>
			<tr>
				<td>Enter your address</td>
				<td><input type="text" name="address" required><br><br></td>
			</tr>
		</table>
		<br>
		<input type="submit" value="Submit" name="Submit">
		<br>
	</form>
</body>

</html>