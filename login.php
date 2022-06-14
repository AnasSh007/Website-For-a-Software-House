<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="loginstyle.css" />
  </head>
  <body>
    <div id="container">
      <form id="form" action="login.php" method="POST">
        <div>
          <span id="text">LOG IN</span>
        </div>

        <br /><br />

        <div>
          <label>Name: </label>
        </div>

        <div>
          <input type="text" id="name" name="name" required />
        </div>

        <br /><br />
        <div>
          <label>Password: </label>
        </div>

        <div>
          <input type="password" id="pass" name="pass" required />
        </div>

        <br /><br />
        <div>
          <button type="submit" class="btn" name="login">Log In</button>
          <button class="btn" id="signUpBtn">
            <a href="signup.php">Sign Up</a>
          </button>
        </div>
      </form>
    </div>
  </body>
</html>

<?php

  include('connection.php');
	$user=0;

	if(isset($_POST["login"]))
	{

		
	$name = $_POST['name'];
	$password = $_POST['pass'];

  if(empty($_POST['name']) || empty($_POST['pass'])){
          echo "<script>
              alert('Fill all fields');
            </script>";
  }


  $qry = "SELECT * FROM admin where name='$name' and PASSWORD = '$password'";

  $result = mysqli_query($con,$qry);
  
  foreach($result as $var)
  {
    if($var['name']==$name && $var['PASSWORD']==$password)
    {
      $user=1;
      break;
    }

  }

  if($user==1)
  {
    $_SESSION['name'] = $name;
    header("Location:upload.php");
  }
  else
  {
    echo "<script>
          alert('You Are Not Registered');
          </script>";
  }

	}

?>
