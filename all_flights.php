<?php
session_start();
require_once('Database Connection file/mysqli_connect.php');
?>
<html>

<head>
    <title>
        Welcome Administrator
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

    <h2 class="text-center mt-4 mb-4 text-uppercase">All Flights</h2>
    <div class="container">
        <table class="table table-striped table-hover mt-4">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Flight No.</th>
                    <th scope="col">Jet ID</th>
                    <th scope="col">From Destination</th>
                    <th scope="col">To Destination</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">Arrive Date</th>
                    <th scope="col">Start Time</th>
                    <th scope="col">Arrive Tine</th>
                    <th scope="col">Seat Economy</th>
                    <th scope="col">Seat Business</th>
                    <th scope="col">Price Economy</th>
                    <th scope="col">Price Business</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $query = "SELECT * FROM Flight_Details";
                $result = mysqli_query($dbc, $query);
                $count = 1;
                while ($row = mysqli_fetch_array($result)) {
                    $flight_no = $row['flight_no'];
                    $jet_id = $row['jet_id'];
                    $from_city = $row['from_city'];
                    $to_city = $row['to_city'];
                    $departure_date = $row['departure_date'];
                    $arrival_date = $row['arrival_date'];
                    $departure_time = $row['departure_time'];
                    $arrival_time = $row['arrival_time'];
                    $seats_economy = $row['seats_economy'];
                    $seats_business = $row['seats_business'];
                    $price_economy = $row['price_economy'];
                    $price_business = $row['price_business'];

                    echo "<tr>
                        <td>$count</td>
                        <td>$flight_no</td>
                        <td>$jet_id</td>
                        <td>$from_city</td>
                        <td>$to_city</td>
                        <td>$departure_date</td>
                        <td>$arrival_date</td>
                        <td>$departure_time</td>
                        <td>$arrival_time</td>
                        <td>$seats_economy</td>
                        <td>$seats_business</td>
                        <td>$price_economy</td>
                        <td>$price_business</td>
                        <td>					
                            <a href='#' class='btn btn-danger'>Delete</a>
                        </td>
                      </tr>";
                    $count++;
                }

                ?>
            </tbody>
        </table>
    </div>