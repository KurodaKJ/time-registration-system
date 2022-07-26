<?php
session_start();
include("connection.php");
include("function.php");

//If something is submit
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$accounts = $_SESSION['id'];
    $project_name = $_POST["project_name"];
    $date = $_POST["date"];
    $amount_hours = $_POST["amount_hours"];

    if (!empty($accounts) && !empty($project_name) && !empty($date) && !empty($amount_hours) && $amount_hours<24 && $amount_hours>0) {
        //Read the data from the database
		$query = "INSERT INTO hour_data(accounts, project_name, date, amount_hours) VALUES ('{$accounts}','{$project_name}','{$date}','{$amount_hours}')";
		$result = mysqli_query($conn, $query);

		if ($result) {
            successful_message();
		}
		alert_timesubmit_message();
	} else {
		alert_timesubmit_message();
	}
	}
?>