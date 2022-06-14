<?php

$con = mysqli_connect('127.0.0.1','root','','hurricandev');

if($con)
{
    echo "<script>console.log('OK');</script>";
}
else
{
    echo "<script>alert('CONNECTION NOT OK');</script>";
}

?>