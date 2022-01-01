<?php
	$Name = $_POST['name'];
	$Password = $_POST['password'];
	$Phone = $_POST['phone'];
	$Email = $_POST['email'];

	// Database connection
	$con = new mysqli('localhost','root','','logs');
	if($con->connect_error){
		die("Connection Failed : ".$con->connect_error);
	} else {
		$stmt = $con->prepare("select * from registration where email = ?");
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt_result = $stmt->get_result();
		if ($stmt_result->num_rows > 0) {
			$data = $stmt_result->fetch_assoc();
			if ($data['password'] === $password) {
				echo "Login was successful";
			}
		}else{
			echo "Invalid email or password";
		}
	}
?>