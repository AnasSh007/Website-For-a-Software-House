<?php

$id = $_GET['id'];

include('connection.php');
$qry = "SELECT * FROM admin_request where id='$id'";
$result = mysqli_query($con,$qry);

if($result)
{
    foreach ($result as $var)
	$qry = "insert into admin(name,PASSWORD,email,dob)VALUES('$var[name]','$var[pass]','$var[email]','$var[dob]')";
	$result=mysqli_query($con,$qry);
}

?>