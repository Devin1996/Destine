<?php
 session_start();

 include("includes/connection.php");

 	if(isset($_POST['login'])){
 		$email = htmlentities(mysqli_real_escape_string($con, $_POST['email']));
 		$pass = htmlentities(mysqli_real_escape_string($con, $_POST['pass']));

 		$select_user = "select * from company where c_email='$email' AND c_pass='$pass' AND cstatus='status'";
 		$query = mysqli_query($con, $select_user);
 		$check_user = mysqli_num_rows($query);

 		if($check_user ==1){
 			$_SESSION['c_email'] = $email;
             echo "<script>alert('Your Email or Password is correct')</script>";
 			echo "<script>window.open('uforc.php', '_self')</script>";
 		}
 		else
 		{
 			echo "<script>alert('Your Email or Password is incorrect')</script>";
 		} 	
 	}
?>