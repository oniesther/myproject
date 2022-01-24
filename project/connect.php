<?php

$host = "localhost";
$username = "root";
$password ="";
$db = "istore";

$conn = mysqli_connect("$host","$username","$password","$db");
if(!$conn)
{
     header("Location: error.php");
     die();
}
     
     
 ?>