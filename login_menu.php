<!DOCTYPE html>
<head>
<title>Destine</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
</head>

<style>
	body{
		overflow-x: hidden;
		/*overflow-y: hidden;*/ 
	}

	#centered1{
		position: absolute;
		font-size: 10vw;
		top:34%;
		left:30%;
		transform: translate(-50%, -50px); 
	}
	#centered2{
		position: absolute;
		font-size: 10vw;
		top: 54%;
		left:34%;
		transform: translate(-50%, -50px); 
	}
	#centered3{
		position: absolute;
		font-size: 10vw;
		top: 74%;
		left:34%;
		transform: translate(-50%, -50px); 
	}

	#reg_menu_btn{
		width: 85%;
		border-radius: 30px;
		background-color: #505050;
		border-color: #505050;

	}


	#signup:hover{
		width: 85%;
		background-color: #505050;
		border-color:#505050;
		border-radius: 30px;
	}

	#login{
		width: 85%;
		background-color: #fff;
		border-color: #505050;
		color: #505050;
		border-radius: 30px;

	}

	#login:hover{
		width: 85%;
		background-color: #fff;
		color: #393939;
		border-color:#505050;
		border-radius: 30px;
	}

	.well{
		background-color: #393939;
        height:110px;
	}
</style>

<body>
	<div class="row">
		<div class="col-sm-12">
			<div class="well">
				<center><b><h1 style="color: white;">Destine</h1></b></center>
				<center><i><h5 style="color: white;">Build your dream House,Shop or anthing as you expected</h5></i></center>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6" style="Left:1%;">
			<img src="images/mainpagepic21.jpg" class="img-rounded" title="Destine" width="650px" height="634px">
			
			<div id="centered1" class="centered"><h3 style="color:white;">
				<span class="glyphicon glyphicon-search"></span>
					&nbsp&nbsp<strong>Plan Your Project</strong></h3></div>

			<div id="centered2" class="centered"><h3 style="color:white;">
				<span class="glyphicon glyphicon-search"></span>
					&nbsp&nbsp<strong>Manage Your Project</strong></h3></div>

			<div id="centered3" class="centered"><h3 style="color:white;">
				<span class="glyphicon glyphicon-search"></span>		
					&nbsp&nbsp<strong>Success Your Project</strong></h3></div>

			</div>
		

	<div class="col-sm-6" style="left:1%;">
		<img src="images/logo1.jpg" class="img-rounded" title="Destine" width="120px" height="120px">

		<h2><strong>Plan,Manage and Success<br>your whole life</strong></h2><br><br>
		<h4><strong>Select your Account type</strong></h4><br>

		<form method="post" action="">

				<button id="reg_menu_btn" class="btn btn-info btn-lg" name="cureg">Regular Customer Login</button><br><br>
				<?php
					if (isset($_POST['cureg'])) {
						echo "<script>window.open('signin.php','_self')</script>";
					}
				?>

				<button id="reg_menu_btn" class="btn btn-info btn-lg" name="coreg">Company Login</button><br><br>
				<?php
					if (isset($_POST['coreg'])) {
						echo "<script>window.open('company_reg.php','_self')</script>";
					}
				?>
                <button id="reg_menu_btn" class="btn btn-info btn-lg" name="ireg">Induvidual Service Provider Login</button><br><br>
				<?php
					if (isset($_POST['ireg'])) {
						echo "<script>window.open('induvidual_reg.php','_self')</script>";
					}
				?>
		</div>
	</div>
</body> 
</html>