<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
	body{
		overflow-x:hidden; 
	}
	.main-content{
		margin: 8px 25px 10px 10px;
		background-color: #fff;
		border: 2px solid #e6e6e6;
		padding: 40px 50px;
	}
	.header{
		border: 0px solid #000;
		margin-bottom: 5px;
	}
	.well{
		background-color: #393939;
        /* margin: 5px 5px 5px 5px;
        padding: 40px 50px; */
        height:110px;
        
	}
	#signup{
		width: 60%;
		border-radius: 30px;
        background-color:#393939;
	}

    #centered1{
		position: absolute;
		font-size: 10vw;
		top:24%;
		left:45%;
		transform: translate(-50%, -50px); 
	}
	#centered2{
		position: absolute;
		font-size: 10vw;
		top: 44%;
		left:45%;
		transform: translate(-50%, -50px); 
	}
	#centered3{
		position: absolute;
		font-size: 10vw;
		top: 64%;
		left:45%;
		transform: translate(-50%, -50px); 
	}

    #or{
		position: absolute;
		font-size: 10vw;
		top: 82%;
		left:45%;
		transform: translate(-50%, -50px); 
	}

    #babtn{
        position: absolute;
		width: 50%;
		background-color: #fff;
		border-color: #505050;
		color: #393939;
		border-radius: 30px;
		top: 90%;
		left:45%;
		transform: translate(-50%, -50px);

	}

</style>
<body>
	<div class="row">
		<div class="col-sm-12">
			<div class="well">
				<center><h1 style="color: white;">Destine</h1></center>
                <center><i><h5 style="color: white;">Build your dream House,Shop or anthing as you expected</h5></i></center>
				<div class="col-sm-6" style="top:-90px;">
		<a href=main.php><img src="images/logo1.jpg" class="img-rounded" title="Destine" width="65px" height="65px">
		</a>
		</div> 
			
			</div> 
		</div>
	</div>
    
    <div class="row">
		<div class="col-sm-6" style="Left:1%;">
			<img src="images/horusr.jpg" class="img-rounded" title="Destine" width="650px" height="634px">
	
			</div>
			
            <div class="col-sm-6" >
            <!-- <div class="col-sm-12"> -->
			<div class="main-content">
				<div class="header">
					 
				</div>
				
				<div class="1-part">
					<form action="" method="post">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
							<input type="text" class="form-control" name="first_name" placeholder="First Name" required="required">
						</div><br>

						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
							<input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required">
						</div><br>

						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input id="password" type="password" class="form-control" name="u_pass" placeholder="Password" required="required">
						</div><br>

						<div class="input-group"> 
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input id="email" type="email" class="form-control" placeholder="Email" name="u_email" required="required"></div><br> 
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span> 
							<select class="form-control" name="u_district" required="required"> 
								<option disabled>Select your District</option> 
								<option>Colombo</option>
								<option>Galle</option>
								<option>Matara</option>
								<option>kandy</option> 
								<option>Anuradhapura</option> 
								<option>Nuwara Eliya</option> 
								<option>Jaffna</option> 
							</select>
						</div><br>

						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span> 
							<select class="form-control input-md" name="u_gender" required="required"> 
								<option disabled>Select your Gender</option> 
								<option>Male</option>
								<option>Femail</option>
							</select>
						</div><br>

						<div class="input-group"> 
							<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
							<input type="date" class="form-control input-md" placeholder="Birthday" name="u_birthday" required="required"> </div><br>
							
							<a style="text-decoration: none;float: right; color: #187FAB;" data-toggle="tooltip" title="Signin" href="signing.php">Already have an account?</a><br><br>
							<center><button id="signup" class="btn btn-info btn-lg" name="sign_up"> SignUp</button></center>
						<?php include("insert_user.php"); ?>
				</form>
			</div>
		</div>
	</div>
		
		</div>
	</div>
<script>
// var check = function() {
//   if (document.getElementById('password').value ==
//     document.getElementById('cpassword').value) {
//     document.getElementById('message').style.color = 'green';
//     document.getElementById('message').innerHTML = 'matching';
//   } 
//   else {
//     document.getElementById('message').style.color = 'red';
//     document.getElementById('message').innerHTML = 'not matching';
//   }
// }
//onkeyup='check();'
</script>
</body>  
</html>