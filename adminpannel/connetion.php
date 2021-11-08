<?php
error_reporting(0);
ob_start();
$con=mysqli_connect("localhost:3306","root","","student1") or die("Error in Connection");
echo "conncted";
?>