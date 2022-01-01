<? php
$host = "localhost";
$user = "root";
$pass = "";
$db = "logs";

// Database connection
	$con = new mysqli($host, $user, $pass, $db);
	//if error
	if(!con){
		echo "There occurred a problem in your connection to the Database";
	}
	//if no error
	$name = $_POST['name'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	//now the form data is collected
	$sql = "INSERT INTO 'registration'('id', Name', 'Password', 'Phone', 'Email') VALUES ('$''$name', '$password', '$phone', '$email')";
	$insert = mysqli_query($con, $qry);
	if (!insert) {
		echo "There was a problem uploading your data to the database";
		else{
			echo "Data was successfully updated";
		}
	}
?> 