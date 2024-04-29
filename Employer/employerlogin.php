<?php
	include"config.php";
	include"nav.php";
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Login </title>
	
	
</head>
<body> 
	<div class="wrapper">
		<header>
		
							   
		</header>
	<section >
		<div class="img2">
		<br><br><br>
		<div class="box1">
		 
			<h1 style="text-align:center;font-size:35px;font-family:arial;padding-top:30px">Login Form</h1><br><br>
		<form name="ulogin" action="" method="POST">
		   <div class="log">	
			<input type="text" name="username" placeholder="Username" required="" class="i1"><br><br><br>
			<input type="password" name="password" placeholder="Password" required="" class="i1"><br><br><br><br>
			<input type="submit" name="submit" value="Log In" style="font-size:18px;font-family:arial;">
		   </div>
		</form>
		<p style="color:black;padding-left:50px;">
			<br><br>
			<a style="color:black;"href="">Forgot Password?</a> <br><br><br>
			New to this website?<a style="color:black;"href="registration.html">Sign Up</a>
		</p>
		
		</div>
		
		</div>
	
	</section>	
	 <?php
			
			if(isset($_POST['submit']))
			{
				$count = 0;
				$sql1="Select * from employer_register where Username = '$_POST[username]' && Password = '$_POST[password]'";
				$res = mysqli_query($conn, $sql1);
				
				$count = mysqli_num_rows($res);
				
				if($count == 0 )
				{
					echo"<script> alert('The username and password doesn't match.')</script>";
				}
				else
				{
					$_SESSION['login_user'] = $_POST['username'];
					echo"<script> alert('Successfully Logged In.')</script>";
					echo"<script>window.location= 'index.php'</script>";
				}
			}
		  
		  
		  ?>	  	
						
								
	
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