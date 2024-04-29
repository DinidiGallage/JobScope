<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	
	<link rel="stylesheet" href="style.css">
	
	
</head>
<body> 
	<div class="wrapper">
		<header ">
		<img src="./images/logo1.jpg" class="logo1">
		
		<?php
			if(isset($_SESSION['login_user']))
			{?>
				<nav>
				<ul >
					<li><a href="index.php" class="a1">HOME</a></li>
					<li><a href="jobs.php" class="a1">JOBS</a></li>
					<li><a href="about.php" class="a1">ABOUTUS</a></li>
					<li><a href="help.php" class="a1">HELP</a></li>
					<li><a href="" class="a1">SEARCH</a></li>
				</ul>
			</nav>
			<div class ="btn">
			<a href="uprofile.php" class="a2">
				   <div style="color:white; padding-right:150px;word-spacing:10px;">
					<?php
					 echo "WELCOME ".$_SESSION['login_user'];
					?>
					</div>
				   </a>

					<a href="logout.php" class="a2"><input type="button" name="submit1" value="Log Out" style="font-size:20px;" ></a>
					
			</div>
			<?php
			}
			
			else
			{?>
				<nav>
				<ul >
					<li><a href="index.php" class="a1">HOME</a></li>
					<li><a href="jobs.php" class="a1">JOBS</a></li>
					<li><a href="about.php" class="a1">ABOUTUS</a></li>
					<li><a href="help.php" class="a1">HELP</a></li>
					<li><a href="" class="a1">SEARCH</a></li>
				</ul>
			</nav>
			<div class ="btn">

					<a href="ulogin.php" class="a2"><input type="button" name="submit1" value="Login" style="font-size:20px;" ></a>
					<a href="registration.php" class="a2"><input type="button" name="submit2" value="Sign Up" style="font-size:20px;" ></a>
			</div>
			<?php
			}
		    ?>
			
							   
		</header>
	<section>
	<div class="img1">
	</div>
	
				
	</section>							
						
								
	
	<footer class="footer">
		<br>
		<h4 style="padding-left:10px; color:white;">Contact Us</h4>
		<div class="container">
			<div class="row">
				<div class="footer-col">
					<h4>TELEPHONE</h4>
					<ul>
						<li><a href="" class="a1">+942345678</a></li>
						<li><a href=""class="a1">+949078659</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>EMAIL</h4>
					<ul>
						<li><a href="" class="a1">jobscope@gmail.com</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>SOCIAL MEDIA</h4>
					<ul>
						<li>Twitter:<a href="" class="a1"> JobScope</a></li>
						<li>Facebook:<a href="" class="a1"> JobScope</a></li>
						<li>Instagram:<a href="" class="a1"> JobScope</a></li>
					</ul>
				</div>
				
			</div>
		</div>
	</footer>
	</div>
</body>	
</html>