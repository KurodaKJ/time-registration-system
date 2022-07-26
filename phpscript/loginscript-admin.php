<?php
session_start();

include("connection.php");
include("function.php");

//If something is submit
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$email = $_POST['email'];
	$password = $_POST['password'];

    if (!empty($email) && !empty($password) && !is_numeric($email)) {
        //Read the data from the database
		$query = "SELECT * FROM accounts WHERE email = '$email' AND permission = 'admin' limit 1";
		$result = mysqli_query($conn, $query);

		if ($result) {
			//If the result exist
			if ($result && mysqli_num_rows($result) > 0) {
				//Save the result data into an array
                $user_data = mysqli_fetch_assoc($result);
				
				//Check input password if it's the same as the password in the database
				if ($user_data['password'] === $password) {
                    $_SESSION['id'] = $user_data['id'];
					header("Location: ../mainpages-en/dashboard-am.php");
					die;
				}
			}
		}
		alert_login_message();
	} else {
		alert_login_message();
	}
	}
?>