<?php
if(isset($_POST['submit'])){
		include_once 'dbh.php';

		$fname=mysqli_real_escape_string($conn,$_POST['firstname']);
		$lname=mysqli_real_escape_string($conn,$_POST['lastname']);
		$email=mysqli_real_escape_string($conn,$_POST['email']);
		$username=mysqli_real_escape_string($conn,$_POST['username']);
		$password=mysqli_real_escape_string($conn,$_POST['psw']);
		$fullname=$fname." ".$lname;

		$query = mysqli_query($conn,"insert into users(username,fullname,email,pwd) values ('$username', '$fullname', '$email', '$password')");
		echo "Succesfuel";
	}
	
?>