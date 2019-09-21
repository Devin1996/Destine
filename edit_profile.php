<!DOCTYPE html>
<?php
session_start();
include("includes/header.php");
?>
<?php 

if(!isset($_SESSION['user_email'])){
	
	header("location: index.php");

}
else{ ?>
<html>
<head>
	<title>Welcomme to Home</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles/homestyle.css" media="all"/>
</head>
<style>

</style>
<body>
<div class="row">
	<div class="col-sm-2">
	</div>
	<div class="col-sm-8">
		<form action="" method="post" enctype="multipart/form-data">
					<table class="table table-bordered table-hover">
						<tr align="center">
							<td colspan="6" class="active"><h2>Edit Your Profile</h2></td>
						</tr>
						<tr>
							<td style="font-weight: bold;">Change Your Firstname</td>
							<td>
							<input class="form-control" type="text" name="f_name" required="required" value="<?php echo $first_name;?>"/>
							</td>
						</tr>
						<tr>
							<td style="font-weight: bold;">Change Your Lastname</td>
							<td>
							<input class="form-control" type="text" name="l_name" required="required" value="<?php echo $last_name;?>"/>
							</td>
						</tr>
						<tr>
							<td style="font-weight: bold;">Change Your Username</td>
							<td>
							<input class="form-control" type="text" name="u_name" required="required" value="<?php echo $user_name;?>"/>
							</td>
						</tr>

						<tr>
							<td style="font-weight: bold;">Description</td>
							<td>
							<input class="form-control" type="text" name="describe_user" required="required" value="<?php echo $describe_user;?>"/>
							</td>
						</tr>
						
						<tr>
							<td style="font-weight: bold;">Password</td>
							<td>
							<input class="form-control" type="password" name="u_pass" id="mypass" required="required" value="<?php echo $user_pass;?>"/><!-- onfocus="this.value=''" -->
							<input type="checkbox" onclick="show_password()"> <strong>Show Password</strong>
							</td>
						</tr>
						
						<tr>
							<td style="font-weight: bold;">Email</td>
							<td>
							<input class="form-control" type="email" name="u_email" required="required" value="<?php echo $user_email;?>"></td>
						</tr>
						
						<tr>
							<td style="font-weight: bold;">District</td>
							<td>
							<select class="form-control" name="user_dis">
								<option><?php echo $user_dis;?></option>
								<option>Galle</option>
								<option>Matara</option>
								<option>Colombo</option>
								<option>Jaffna</option>
								<option>Kandy</option>
							</select>
							</td>
						</tr>
						
						<tr>
							<td style="font-weight: bold;">Gender</td>
							<td>
							<select class="form-control" name="u_gender">
								<option><?php echo $user_gender;?></option>
								<option>Male</option>
								<option>Female</option>
							</select>
							</td>
						</tr>
						
						<tr>
							<td style="font-weight: bold;">Birthday</td>
							<td>
							<input type="date" name="u_birthday" class="form-control input-md" value="<?php echo $user_birthday;?>" required="required" >
						</tr>
						<tr align="center">
							<td colspan="6">
							<input class="btn" style="width: 250px;" type="submit" name="update" value="Update"/>
							</td>
						</tr>
					</table>
				</form>
	</div>
	<div class="col-sm-2">
	</div>
</div>
</body>
</html>
					
<?php 
	if(isset($_POST['update'])){
	
		$f_name = htmlentities($_POST['f_name']);
		$l_name = htmlentities($_POST['l_name']);
		$u_name = htmlentities($_POST['u_name']);
		$describe_user = htmlentities($_POST['describe_user']);
		$u_pass = htmlentities($_POST['u_pass']);
		$u_email = htmlentities($_POST['u_email']);
		$u_dis = htmlentities($_POST['user_dis']);
		$u_gender = htmlentities($_POST['u_gender']);
		$u_birthday = htmlentities($_POST['u_birthday']);
		
		
		$update = "update users set f_name='$f_name', l_name='$l_name',user_name='$u_name',describe_user='$describe_user', user_pass='$u_pass',user_email='$u_email',user_dis='$u_dis',user_gender='$u_gender',user_birthday='$u_birthday' where user_id='$user_id'";
		
		$run = mysqli_query($con,$update); 
		
		if($run){
		
		echo "<script>alert('Your Profile Updated!')</script>";
		echo "<script>window.open('home.php','_self')</script>";
		}
	
	}


?>
<?php } ?>
<script>
function show_password() {
    var x = document.getElementById("mypass");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>