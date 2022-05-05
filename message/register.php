<!DOCTYPE html>
<html>
	<head>
		<title>Registration Form</title>
	</head>
	<body>
		<center>
			<h1>Registration Form</h1>
			<form method="post" action="getdata.php">
				<p>
					<label>Name</label>
					<input type="text" name="uname">
				</p>
				<p>
					<label>Email</label>
					<input type="email" name="uemail">
				</p>
				<p>
					<label>Password</label>
					<input type="password" name="upass">
				</p>
				<p>
					<label>Mobile</label>
					<input type="text" name="umobile">
				</p>
				<p>
					<input type="submit" value="Register" name="regSubmit">
					<a href="login.php">Already have credentials</a>
				</p>
			</form>
		</center>
	</body>
</html>