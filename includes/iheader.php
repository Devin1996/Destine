<?php
include("includes/connection.php");
include("functions/functions.php");
?>
<style>
#search_btn{
background-color:#393939;
}
</style>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapsed" area-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		 	<span class="icon-bar"></span>
		 	</button>
		 	<a href="ufori.php" class="navbar-brand">Destine</a>
		</div>
		<div class="collapse navbar-collapse" id="#bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<?php
				$user = $_SESSION['i_email'];
				$get_user = "select * from ind where i_email='$user'";
				$run_user = mysqli_query($con, $get_user);
				$row = mysqli_fetch_array($run_user);

				$i_id = $row['i_id'];
				$user_name = $row['iuser_name'];
				$first_name = $row['if_name'];
				$last_name = $row['il_name'];
				$describe_user = $row['idescribe_user'];
				$user_pass = $row['i_pass'];
				$user_email = $row['i_email'];
				$user_gender = $row['i_gender'];
				$user_birthday = $row['i_birthday'];
				$user_image = $row['i_image'];
				$i_cover = $row['i_cover'];			
				$register_date = $row['i_reg_date'];
				$i_area = $row['i_area'];
				$i_cat=$row['i_cat'];

				$user_posts = "select * from iposts where user_id='$i_id'";
				$run_posts = mysqli_query($con, $user_posts);
				$posts = mysqli_num_rows($run_posts);
				?>
				<li><a href='inprofile.php?<?php echo "i_id=$i_id" ?>'><?php echo"$first_name"?></a></li>
				<li><a href="ufori.php">Home</a></li>
				<li><a href="findneeeds.php">Find Companies</a></li>
				<li><a href="findneeeds.php">Find Induviduals</a></li>
				<li><a href="findneeeds.php">Find Users</a></li>
				<?php
					echo"
						<li class='dropdown'>
							<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'><span><i class='glyphicon glyphicon-chevron-down'></i></span></a>
							<ul class='dropdown-menu'>

								<li>
									<a href='iedit_profile.php?u_id=$i_id'>Edit Account </a>
								</li>
								<li role='separator' class='driver'></li>
								<li>
									<a href='logout.php'>Logout</a>
								</li>
							</ul>
						</li>
				";
				?>
			</ul>
		 	
		</div>
	</div>
</nav>
