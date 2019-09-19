<?php
 session_start();

 include("includes/connection.php");

 	if(isset($_POST['login'])){
 		$email = htmlentities(mysqli_real_escape_string($con, $_POST['email']));
 		$pass = htmlentities(mysqli_real_escape_string($con, $_POST['pass']));

 		$select_user = "select * from ind where i_email='$email' AND i_pass='$pass' AND istatus='status'";
 		$query = mysqli_query($con, $select_user);
 		$check_user = mysqli_num_rows($query);

 		if($check_user ==1){
 			$_SESSION['i_email'] = $email;
              			echo "<script>window.open('ufori.php', '_self')</script>";
 		}
 		else
 		{
 			echo "<script>alert('Your Email or Password is incorrect')</script>";
 		} 	
 	}
?>