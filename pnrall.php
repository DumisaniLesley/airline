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
            header('location:pnrcheckall.php');
        } else {

            echo '<script>';
            echo 'alert("Wrong PNR Number")';
            echo '</script>';
        }
        if ($res0) {
            $_SESSION['user'] = $id;
            header('location:pnrcheckall.php');
        } else {

            echo '<script>';
            echo 'alert("Wrong PNR Number")';
            echo '</script>';
        }



        if ($res1) {
            $_SESSION['user'] = $id;
            header('location:pnrcheckall.php');
        } else {

            echo '<script>';
            echo 'alert("Wrong PNR Number")';
            echo '</script>';
        }
    } else {
        echo '<script>';
        echo 'alert("Wrong PNR Number")';
        echo '</script>';
    }
}
?>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link type="text/css" rel="stylesheet" href="css/logiccn.css">
    </link>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>


    <title>Check PNR</title>



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
                    <a class="nav-link" aria-current="page" href="home_page.php">Home</a>
                    <a class="nav-link" href="search_flight.php">Search Flights</a>
                    <a class="nav-link active" href="pnrall.php">Check PNR</a>
                    <li>
                        <?php
                        if (isset($_SESSION['login_user']) && $_SESSION['user_type'] == 'Customer') {
                            echo "<a class='nav-link' href=\"customer_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
                        } else if (isset($_SESSION['login_user']) && $_SESSION['user_type'] == 'Administrator') {
                            echo "<a class='nav-link' href=\"admin_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
                        } else {
                            echo "<a class='nav-link' href=\"login_page.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
                        }
                        ?>
                    </li>
                </div>
            </div>
        </div>
    </nav>
    <form id="index" action="pnrall.php" method="post">
        <div class="container mt-4 p-4" style="max-width: 480px;">
            <div class="form-group">
                <h4 class="text-center mt-4 mb-4">Check Your PNR</h4>
                <input type="text" id="u_id" name="pnr" class="form-control" style="width:300px; margin-left: 66px;" placeholder="Enter Your PNR Number" required><br>

                <input type="submit" id="u_sub" name="u_sub" value="Check" class="form-control toggle btn btn-primary" style="width: 295; margin-left: 70px;">
            </div>
        </div>
    </form>
</body>

</html>