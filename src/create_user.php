<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
		<body>
		 <link rel ="stylesheet" href = "css_inven/styles.css">

		<form action ="create_user_post.php" method = "POST">
			<label>Username</label>
			<input type ="text" name ="uname" size = "25" placeholder="enter your username  here" />
			<br>
			<br>

			<label>Password</label>
			<input type ="password" name ="pass" size="25" placeholder ="enter your password here" />
			<br>
			<br>

			<label>First name</label>
			<input type ="text" name ="fname" size="25" placeholder ="enter your first name" />
			<br>
			<br>

			<label>Last name </label>
			<input type ="text" name ="lname" size ="25" placeholder ="enter your last name" />
			<br>
			<br>

			<label>Role</label>
			<select name ="role" >
				<option>Administrator</option>
				<option>Producer</option>
				<option>Salesman</option>
			</select>
			<br>
			<br>
			<input type ="submit" value ="submit" />
			<br>

		</form>

	</body>
</html>
