<?php

include 'dbh.php';

if (isset($_POST['login-button'])) {

	$username=mysqli_real_escape_string($conn,$_POST['uname']);
	$password=mysqli_real_escape_string($conn,$_POST['psw']);

	//echo $username.','.$password;

	// $hash=password_hash($password,PASSWORD_DEFAULT);
	// echo $hash;
	
	$sql="SELECT uid,pwd FROM users WHERE username='$username'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);

	// echo $row['pwd'];

	// echo '~'.password_verify($password,$row['pwd']).'~';

	if(mysqli_num_rows($result)>0 && password_verify ( $password , $row['pwd'] )){
		
		$_SESSION['id']=$row['uid'];
		$_SESSION['username']=$username;
		echo $_SESSION['id'];
		echo $_SESSION['username'];

		
	}
	else{
		echo "Invalid";
	}
}
?>