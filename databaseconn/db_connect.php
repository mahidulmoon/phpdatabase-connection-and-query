<?php
	$server="localhost";
	$user="root";
	$password="";
	$db="practice";

	$conn=mysqli_connect($server,$user,$password,$db);
	if(!$conn){
		die("Could not connect".mysqli_connect_error());
	}
?>