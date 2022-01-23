<?php
session_start();
?>
<html>

<head>
	<title>
		Account Login
	</title>
	<link rel="stylesheet" type="text/css" href="css/stylme.css" />
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
		<h3 class="text-center mt-4 mb-4">User Login</h3>
		<form action="login_handler.php" method="POST">
			<!-- Email input -->
			<div class="form-outline mb-4">
				<label class="form-label" for="form2Example1">Username</label>
				<input ttype="text" name="username" placeholder="Enter your Username" class="form-control" required />
			</div>
			<div class="form-outline mb-4">
				<label class="form-label" for="form2Example2">Password</label>
				<input type="password" name="password" placeholder="Enter your password" class="form-control" required />
			</div>
			<div class="form-outline mb-4">
				<strong>User Type:</strong><br>
				Customer <input type='radio' name='user_type' value='Customer' checked /> Administrator <input type='radio' name='user_type' value='Administrator' />
				<br>
			</div>
			<?php
			if (isset($_GET['msg']) && $_GET['msg'] == 'failed') {
				echo "<br>
						<strong style='color:red'>Invalid Username/Password</strong>
						<br><br>";
			}
			?>

			<input type="submit" name="Login" value="Login" class="btn btn-primary btn-block mb-2" style="width: 200px; margin-left: 130px;" />
			<hr>
			<div class="row mb-4">
				<div class="col text-center">
					<a href="#!">Forgot password?</a>
				</div>
			</div>
			<!-- Register buttons -->
			<div class="text-center">
				<p>Dont Have an Account? <a href="new_user.php">Register</a></p>
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
</body>

</html>