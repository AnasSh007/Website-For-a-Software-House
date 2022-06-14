<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="signupStyle.css">
	<link rel="shortcut icon" type="image" href="assets/logo.png">
</head>
<body>
	<div id="container">
		<form id="form" action="signup.php" method="POST" onsubmit="return validate()">

			<div>
				<span id="text">SIGN UP</span>
			</div>

			<br><br>

			<div>
				<label>Name: </label>
			</div>

			<div>	
				<input type="text" id="name" name="name" required>
			</div>	

			<br><br>

			<div>
			<label>Password: </label>
			</div>

			<div>	
				<input type="password" id="pass" name="pass" required>
			</div>

			<br><br>

			<div>
				<label>Email: </label>
			</div>

			<div>	
				<input type="email" id="email" name="email"  required>
			</div>

			<br><br>

			<div>
				<label>Date Of Birth: </label>
			</div>

			<div>
				<input type="date" id="date" name="dob">
			</div>

			<div>		
				<br><br>
				<button name="btn" class="btn">Sign Up</button>
			</div>

			<br><br>

		</form>
	</div>
<script>
	function validate()
	{
		if (document.getElementById('name').value == "")
		{
			alert("Fill All Fields");
			return false;
		}
		else if (document.getElementById('pass').value == "")
		{
			alert("Fill All Fields");
			return false;
		}
		else if (document.getElementById('email').value == "")
		{
			alert("Fill All Fields");
			return false;
		}
		else if (document.getElementById('date').value == "")
		{
			alert("Fill All Fields");
			return false;
		}
	}
</script>
</body>
</html>

<?php

if (isset($_POST['btn'])){

	if(empty($_POST['name']) || empty($_POST['pass']) || empty($_POST['email']) || empty($_POST['dob']))
	{
		echo "<script>
		alert('FILL ALL FIELDS');
		</script>";
	}

	else{

	include("connection.php");

	$name = $_POST['name'];
	$pass = $_POST['pass'];
	$email = $_POST['email'];
	$dob = $_POST['dob'];

	$qry = "insert into admin_request(name,PASSWORD,email,dob)VALUES('$name','$pass','$email','$dob')";

	$result=mysqli_query($con,$qry);

	if($result)
	{
		echo "<script>
		alert('Request Submitted');
		</script>";
	}

	}

}

?>