<?php
include("includes/connection.php");

	if (isset($_POST['sign_up'])) {
		$c_name = htmlentities(mysqli_real_escape_string($con,$_POST['company_name']));
		$email = htmlentities(mysqli_real_escape_string($con,$_POST['c_email']));
		$tel = htmlentities(mysqli_real_escape_string($con,$_POST['c_tel']));
		$add = htmlentities(mysqli_real_escape_string($con,$_POST['c_add']));
		$cat = htmlentities(mysqli_real_escape_string($con,$_POST['c_category']));
		$reg = htmlentities(mysqli_real_escape_string($con,$_POST['c_regno']));
		$area = htmlentities(mysqli_real_escape_string($con,$_POST['c_area']));
		$pass = htmlentities(mysqli_real_escape_string($con,$_POST['c_pass']));
		
		// $country = htmlentities(mysqli_real_escape_string($con,$_POST['u_district']));
		// $gender = htmlentities(mysqli_real_escape_string($con,$_POST['u_gender']));
		// $birthday = htmlentities(mysqli_real_escape_string($con,$_POST['u_birthday']));	
		
		$status = "verified";
		$posts = "no";
		$newgid = sprintf('%05d', rand(0, 999999));
		$username = strtolower($c_name . "_" . $newgid);
		$check_username_query = "select cuser_name from company where c_email='$email'";
		$run_username = mysqli_query($con,$check_username_query);

		if(strlen($pass) <9 ){
			echo "<script>alert('Password should be minimum 9 characters!')</script>";
			exit();
		}
		$check_email = "select * from company where c_email='$email'";
		$run_email = mysqli_query($check_email);
		$check = mysqli_num_rows($run_email);

		if ($check == 1) {
			echo "<script>alert('Email already exist, Please try using another email')</script>";
			echo "<script>window.open('company_reg.php', '_self')</script>";
			exit();
		}

		$profile_pic = "images.png";


			$insert = "insert into company (c_name,cuser_name,cdescribe_user,c_tel,c_pass,c_email,c_area,c_cat,c_add,c_image,c_cover,c_reg_date,cstatus,cposts,crecovery_account) 
				values('$c_name','$username','Company','$tel','$pass','$email','$area','$cat','$add','$profile_pic','download.jpg',NOW(),'status','$posts','DCMA.')";
			$query = mysqli_query($con, $insert);

			if ($query) {

				echo "<script>window.open('company_login.php', '_self')</script>";
			}
			else{
				echo "<script>alert('Registration failed,please try again!')</script>";
				echo "<script>window.open('company_reg.php', '_self')</script>";
			}



	}
?>