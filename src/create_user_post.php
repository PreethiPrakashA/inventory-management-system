<?php
	$conn = new mysqli('localhost', 'root', '', 'inventory');
	if($conn->connect_error) {
		die("connection failed" .$connect_error);
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

	$conn->query("INSERT INTO users VALUES(DEFAULT, '$uname', '$pass', '$fname', '$lname', '$value')");
	$conn->close();

 ?>
