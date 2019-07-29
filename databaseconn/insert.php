<?php
	include('db_connect.php');
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$sql= "INSERT INTO `mytable1`(`id`, `name`, `email`, `phone`) VALUES (null,'$name','$email','$phone')";
	if(mysqli_query($conn,$sql)){
		echo "New Record successfully inserted";
	}else{
		echo "check again";
	}
	mysqli_close($conn);
?>