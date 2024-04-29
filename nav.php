<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<header style="height:2px;">
	<img src="./images/logo1.jpg" class="logo1">
			<nav>
				<ul >
					<li><a href="index.php" class="a1">HOME</a></li>
					<li><a href="jobs.php" class="a1">JOBS</a></li>
					<li><a href="" class="a1">ABOUTUS</a></li>
					<li><a href="help.php" class="a1">HELP</a></li>
					<li><a href="" class="a1">SEARCH</a></li>
				</ul>
			</nav>
			
			<?php
			
				if(isset($_SESSION['login_user']))
				{?>
					
			     <div class ="btn">
				   <a href="" class="a2">
				   <div style="color:white; padding-right:150px;word-spacing:10px;">
					<?php
					 echo "WELCOME  ".$_SESSION['login_user'];
					?>
					</div>
				   </a>
					<a href="User/logout.php" class="a2"><input type="button" name="submit1" value="Log Out" style="font-size:20px;" ></a>
				</div>
				<?php
				}
				else
				{?>
				  <div class ="btn">
					<a href="login.php" class="a2"><input type="button" name="submit1" value="Login" style="font-size:20px;" ></a>
					<a href="registration.php" class="a2"><input type="button" name="submit2" value="Sign Up" style="font-size:20px;" ></a>
			      </div>
				<?php	
				}
			
			?>
			
</header>			   
</body>
</html>