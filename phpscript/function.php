<?php
function check_login($conn) {
	if (isset($_SESSION['id'])) {
		$id = $_SESSION['id'];
		$query = "SELECT * FROM accounts WHERE id = '$id' limit 1";
        $result = mysqli_query($conn,$query);
		
		if ($result && mysqli_num_rows($result) > 0) {
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}
	//Redirect to login
	header("Location: ../mainpage-en/login.php");
	die;
}

function alert_login_message() {
	echo "<script>alert('Invalid username or password!');</script>";
	echo "<script>window.location.href = '../mainpages-en/login.php';</script>";
}

function alert_timesubmit_message() {
	echo "<script>alert('Check your form again!');</script>";
	echo "<script>window.location.href = '../mainpages-en/registration-em.php';</script>";
}

function successful_message() {
	echo "<script>alert('Successful');</script>";
	echo "<script>window.location.href = '../mainpages-en/registration-em.php';</script>";
}
?>