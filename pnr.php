<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "airline_reservation");
if (!isset($con)) {
    die("Database Not Found");
}


if (isset($_REQUEST["u_sub"])) {

    $id = $_POST['pnr'];

    if ($id != '') {
        $query = mysqli_query($con, "select * from passengers where pnr='" . $id . "'");
        $res = mysqli_fetch_row($query);
        $query0 = mysqli_query($con, "select * from ticket_details where pnr='" . $id . "'");
        $res0 = mysqli_fetch_row($query0);
        $query1 = mysqli_query($con, "select * from payment_details where pnr='" . $id . "'");
        $res1 = mysqli_fetch_row($query1);

        if ($res) {
            $_SESSION['user'] = $id;
            header('location:pnrcheck.php');
        } else {

            echo '<script>';
            echo 'alert("Invalid username or password")';
            echo '</script>';
        }
        if ($res0) {
            $_SESSION['user'] = $id;
            header('location:pnrcheck.php');
        } else {

            echo '<script>';
            echo 'alert("Invalid username or password")';
            echo '</script>';
        }



        if ($res1) {
            $_SESSION['user'] = $id;
            header('location:pnrcheck.php');
        } else {

            echo '<script>';
            echo 'alert("Invalid username or password")';
            echo '</script>';
        }
    } else {
        echo '<script>';
        echo 'alert("Enter both username and password")';
        echo '</script>';
    }
}
?>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link type="text/css" rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>

    <title>Print Ticket | Online </title>

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
	<h2 class="text-center mt-4 mb-4">PRINT TICKET</h2>
    <div class="container" style="max-width: 480px;">
        <form id="index" action="pnr.php" method="post">
            <input type="text" id="u_id" name="pnr" class="form-control" style="width:300px; margin-left: 66px;" placeholder="Enter Your PNR Number" required><br>

            <input type="submit" id="u_sub" name="u_sub" value="Print" class="toggle btn btn-primary" style="width:100px; margin-left: 70px;">
            <button type="button" onclick="location.href = './customer_homepage.php';" class="toggle btn btn-primary" style="width:100px; margin-left: 90px;">Home</button>
            <br>
        </form>
    </div>
</body>

</html>