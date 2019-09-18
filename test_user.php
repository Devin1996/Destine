<?php
include("includes/connection.php");

	if (isset($_POST['sign_up'])) {
		$first_name = htmlentities(mysqli_real_escape_string($con,$_POST['first_name']));
		$last_name = htmlentities(mysqli_real_escape_string($con,$_POST['last_name']));
		$email = htmlentities(mysqli_real_escape_string($con,$_POST['u_email']));
		$pass = htmlentities(mysqli_real_escape_string($con,$_POST['u_pas']));
		$district = htmlentities(mysqli_real_escape_string($con,$_POST['u_district']));
		$gender = htmlentities(mysqli_real_escape_string($con,$_POST['u_gender']));
		$birthday = htmlentities(mysqli_real_escape_string($con,$_POST['u_birthday']));	
		

$insert = "insert into users (u_fname,u_fname,u_email,u_district,u_pwd,u_bday,u_gender) 
								   values('$first_name','$last_name','$email','$district','$pass','$birthday',$gender)";
			$query = mysqli_query($con, $insert);

			// if ($query) {
			// 	echo "<script>alert('Well Done $first_name, you are good to go')</script>";
			// 	echo "<script>window.open('signin.php', '_self')</script>";
			// }
			// else{
			// 	echo "<script>alert('Registration failed,please try again!')</script>";
			// 	echo "<script>window.open('signup.php', '_self')</script>";
			// }



	}