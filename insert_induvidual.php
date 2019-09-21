<?php
include("includes/connection.php");

	if (isset($_POST['sign_up'])) {
		$first_name = htmlentities(mysqli_real_escape_string($con,$_POST['first_name']));
		$last_name = htmlentities(mysqli_real_escape_string($con,$_POST['last_name']));
		$pass = htmlentities(mysqli_real_escape_string($con,$_POST['u_pass']));
		$email = htmlentities(mysqli_real_escape_string($con,$_POST['u_email']));
		$area = htmlentities(mysqli_real_escape_string($con,$_POST['u_district']));
		$cat = htmlentities(mysqli_real_escape_string($con,$_POST['i_category']));
		$gender = htmlentities(mysqli_real_escape_string($con,$_POST['u_gender']));
		$birthday = htmlentities(mysqli_real_escape_string($con,$_POST['u_birthday']));	
		$status = "verified";
		$posts = "no";
		$newgid = sprintf('%05d', rand(0, 999999));
		$username = strtolower($first_name . "_" . $last_name . "_" . $newgid);
		$check_username_query = "select iuser_name from ind where i_email='$email'";
		$run_username = mysqli_query($con,$check_username_query);

		if(strlen($pass) <9 ){
			echo "<script>alert('Password should be minimum 9 characters!')</script>";
			exit();
		}
		$check_email = "select * from ind where i_email='$email'";
		$run_email = mysqli_query($check_email);
		$check = mysqli_num_rows($run_email);

		if ($check == 1) {
			echo "<script>alert('Email already exist, Please try using another email')</script>";
			echo "<script>window.open('induvidual_reg', '_self')</script>";
			exit();
		}
	
		$profile_pic = "images.png";


			$insert = "insert into ind (if_name,il_name,iuser_name,idescribe_user,i_pass,i_email,i_gender,i_birthday,i_image,i_cover,i_reg_date,istatus,iposts,irecovery_account,i_area,i_cat) 
				values('$first_name','$last_name','$username','Hello.This is my default status!','$pass','$email','$gender','$birthday','$profile_pic','download.jpg',NOW(),'status','$posts','DCMA.','$area','$cat')";
			$query = mysqli_query($con, $insert);

			if ($query) {
				echo "<script>alert('Well Done $first_name, you are good to go')</script>";
				echo "<script>window.open('in_log.php', '_self')</script>";
			}
			else{
				echo "<script>alert('Registration failed,please try again!')</script>";
				echo "<script>window.open('induvidual_reg', '_self')</script>";
			}



	}
?>