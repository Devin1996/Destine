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
			</div> 
		</div>
	</div>
    
    <div class="row">
		<div class="col-sm-6" style="Left:1%;">
			<img src="images/com.jpg" class="img-rounded" title="Destine" width="650px" height="634px">
			
	
			</div>

            <div class="col-sm-6" >
            <!-- <div class="col-sm-12"> -->
			<div class="main-content">
				<div class="header">
					 
				</div>
				<div class="1-part">
<!-- 					<form name="Cregform" action="" method="post" >
						

						

                       
						
						
							<a style="text-decoration: none;float: right; color: #393939;" data-toggle="tooltip" title="Signin" href="login_menu.php">Already have an account?</a><br><br>
							
                            <center><button id="signup" class="btn btn-info btn-lg" name="sign_up">Sign Up</button></center>
                            
						<?php //include("insert_user.php"); ?> 
				</form> -->
				<form action="" method="post">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
							<input type="text" class="form-control" name="company_name" placeholder="Company Name" required="required">
						</div><br>

					 <div class="input-group"> 
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input id="cemail" type="email" class="form-control" placeholder="Email" name="c_email" required="required">
                        </div><br>

                        
                        <div class="input-group"> 
							<span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
							<input id="ctel" type="text" class="form-control" placeholder="Hot Line" name="c_tel" required="required">
                        </div><br>

                        
                        <div class="input-group"> 
							<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							<input id="cadd" type="text" class="form-control" placeholder="Address" name="c_add" required="required">
                        </div><br>

                        <div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span> 
							<select class="form-control" name="c_category"  required="required"> 
								<option disabled>Choose a Category</option> 
								<option>Interior Design</option>
								<option>Paint</option>
								<option>Hardaware Shop</option>
								<option>Equipment Supliers</option> 
								<option>Land Sale</option> 
								<option>Contract</option> 

							</select>
						</div><br>

                        
						<div class="input-group"> 
							<span class="input-group-addon"><i class="glyphicon glyphicon-inbox"></i></span>
							<input id="cregno" type="text" class="form-control" placeholder="Regiter Number(Optional)" name="c_regno"> 
                        </div><br>

                            <div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span> 
							<select class="form-control" name="c_area" required="required"> 
								<option disabled>Services Providing Area</option> 
								<option>Isalnd Wide</option>
								<option>Western Province</option>
                                <option>Southern Province</option>
                                <option>Northern Province</option>
                                <option>Eastern Province</option>
							</select>
						</div><br>


                        <div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input id="cpassword" type="password" class="form-control" name="c_pass" placeholder="Password" required="required" >
						</div><br>

						 

							<a style="text-decoration: none;float: right; color: #187FAB;" data-toggle="tooltip" title="Signin" href="company_login.php">Already have an account?</a><br><br>
							<center><button id="signup" class="btn btn-info btn-lg" name="sign_up"> SignUp</button></center>
						<?php include("insert_com.php"); ?>
				</form>
			</div>
		</div>
	</div>
		
		</div>
	</div>
<script>
var check = function() {
  if (document.getElementById('cpassword').value ==
    document.getElementById('cpasword').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } 
  else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}
</script>
</body>  
</html>