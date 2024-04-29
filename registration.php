<?php
	include"nav.php";
	include"config.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	
	
	
	
</head>
<body> 
	<div class="wrapper">
		<header>
		<style>
			section
			{
				margin-top:-20px;
				height:630px;
				width:1350;
				background-image:url("images/logo9.jpg");
				background-repeat:no-repeat;
				background-size: cover;
			}
			.box
			{
				height:400px;
				width:450px;
				background-color:#CCCCCC;
				margin:0px auto;
				opacity:.8;
				padding:20px;
				
			}
			label
		   {
			   font-size:18px;
			   font-weight:600;
		   }
		</style>
							   
		</header>
	<section ><br><br><br><br><br>
		<div class="box">
		
			<form name="signup" action="" method="POST">
		
			<b><p style="padding-left:50px;font-size:19px;font-weight: 700;"> Sign Up as:</p></b>
			
			<input style="margin-left:50px;width:18px;"type="radio" name="user" id="user" value="user">
			<label>User</label>
			
			<input style="margin-left:50px;width:18px;"type="radio" type="radio" name="user" id="Employer" value="Employer" checked="">
			<label>Employer</label><br><br>
			
			<button type="submit" name="submit1" style="color: black; font-weight:700; width:80px;height:30px;"> OK </button>
			
			</form>
		
		</div>
		
		<?php
			if(isset($_POST['submit1']))
			{
				if($_POST['user'] == 'user')
				{
					echo"<script>window.location= 'User/registration.php'</script>";
				}
				else
				{
					echo"<script>window.location= 'Employer/registration.php'</script>";
				}
			}
		
		
		?>
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