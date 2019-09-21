<!DOCTYPE html>
<?php
session_start();
include("includes/iheader.php");
?>
<?php 

if(!isset($_SESSION['i_email'])){
	
	header("location: index.php");

}
else{ ?>
<html>
<head>
	<title>Edit Page</title>
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
							<input class="form-control" type="text" name="if_name" required="required" value="<?php echo $first_name;?>"/>
							</td>
						</tr>
						<tr>
							<td style="font-weight: bold;">Change Your Lastname</td>
							<td>
							<input class="form-control" type="text" name="il_name" required="required" value="<?php echo $last_name;?>"/>
							</td>
						</tr>

						
						<tr>
							<td style="font-weight: bold;">Password</td>
							<td>
							<input class="form-control" type="password" name="i_pass" id="mypass" required="required" value="<?php echo $user_pass;?>"/><!-- onfocus="this.value=''" -->
							<input type="checkbox" onclick="show_password()"> <strong>Show Password</strong>
							</td>
						</tr>
						
						<tr>
							<td style="font-weight: bold;">Email</td>
							<td>
							<input class="form-control" type="email" name="i_email" required="required" value="<?php echo $user_email;?>"></td>
						</tr>
						
						<tr>
							<td style="font-weight: bold;">Change Area</td>
							<td>
							<select class="form-control" name="i_area">
								
								<option>Southern Province</option>
								<option>Northern Province</option>
								<option>Western Province</option>
								<option>Eastern Province</option>
								<option>Island Wide</option>
							</select>
							</td>
						</tr>

                        <tr>
							<td style="font-weight: bold;">Change Category</td>
							<td>
							
							<select class="form-control" name="i_cat">
								<option>Carpenter</option>
								<option>Architecture</option>
								<option>Painter</option>
								<option>labour</option>
								<option>Desgier</option>
							</select>
							</td>
						</tr>
						
						
						
					
						<tr>
							<td style="font-weight: bold;">Birthday</td>
							<td>
							<input type="date" name="i_birthday" class="form-control input-md" value="<?php echo $user_birthday;?>" required="required" >
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
	
		$f_name = htmlentities($_POST['if_name']);
		$l_name = htmlentities($_POST['il_name']);
		$u_pass = htmlentities($_POST['i_pass']);
		$u_email = htmlentities($_POST['i_email']);
        $i_area = htmlentities($_POST['i_area']);
        $i_cat = htmlentities($_POST['i_cat']);
		$u_birthday = htmlentities($_POST['i_birthday']);
		
		
		$update = "update ind set if_name='$f_name', il_name='$l_name', i_pass='$u_pass',i_email='$u_email',i_cat='$i_cat',i_area='$i_area',i_birthday='$u_birthday' where i_id='$i_id'";
		
		$run = mysqli_query($con,$update); 
		
		if($run){
		
		echo "<script>alert('Your Profile Updated!')</script>";
		echo "<script>window.open('inprofile.php','_self')</script>";
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