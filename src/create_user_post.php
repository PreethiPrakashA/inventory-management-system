<?php
	session_start();
	if(!isset($_SESSION['logged_in'])) {
        header("Location: index.php");
    }
	elseif($_SESSION['logged_in'] !== 0) {
		die("ERROR : You do not have sufficient
		 privelege to access this");
	}

	$conn = new mysqli('localhost', 'root', '', 'inventory');
	if($conn->connect_error) {
		die("connection failed" . $connect_error);
	}
	echo "User created successfully";

	$uname	=	$_POST['uname'];
	$pass	=	$_POST['pass'];
	$fname	=	$_POST['fname'];
	$lname	=	$_POST['lname'];
	$role	=	$_POST['role'];
	if($role === 'Administrator')
	{
		$value  =  0;
	}
	else if($role === 'Producer')
	{
		$value	=	1;
	}
	else
 	{
		$value	=	2;
	}

	$result = $conn->query("SELECT * FROM users WHERE username = '$uname'");
	if($result->num_rows > 0) {
		echo "The username already exists";
	}
	else {
		$conn->query("INSERT INTO users VALUES(DEFAULT, '$uname', '$pass', '$fname', '$lname', '$value')");
	}
	$result->close();
	$conn->close();

 ?>
