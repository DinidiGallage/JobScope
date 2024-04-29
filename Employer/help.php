<?php
	include_once"config.php";
	include_once"nav.php";
?>
 
<!DOCTYPE html>
<html>
<head >
	<title>Jobs</title>
	
	<style>
		.img3
		{
			height:900px;
			width: 1450px;
			background-image:url("./images/logo5.jpg");
			background-repeat: no-repeat;
			background-size: cover;
			
		}
		.wrapper
		{
			
			width:1450px;
			height:850px;
			background-color:black;
			margin-top:0px;
			opacity:.8;
			
			color:white;
			
		}
		.b1
		{
			height:50px;
			width:500px;
			margin-left:100px;
		}
		.b2
		{
			margin-left:80px;
		}
	</style>
	
</head>
<body> 

<header>
		</header>
	<div class="wrapper">
		
	<section><br><br>
	<div class="img3"><br><br>
		<div class="wrapper"><br><br><br><br><br><br><br>
		<p style="font-size:40px;padding-left:30px;">Help Desk<p><hr>
	    <form name="help" action="" method="POST">
			<h2 class="b2">Name</h2>
			<input type="text" name="name" class="b1">
			<h2 class="b2">Email</h2>
			<input type="text" name="email" class="b1">
			<h2 class="b2">Question</h2>
			<input type="text" name="question" style="height:200px; width:500px;margin-left:100px;"><br>
		<div style="padding-left:1000px;">
			<input type="submit" name="submit" value="Submit" style="width:200px; height:50px; font-size:20px;">
		</div>
		</form>
		
		</div>
	</div>
	</section>							
	
	<?php
		
		if(isset($_POST['submit']))
		{
			$sql = "insert into help (Name, Email, Question) values('$_POST[name]', '$_POST[email]', '$_POST[question]')";
			
			//execute the query
			  if(mysqli_query($conn, $sql))
			  {
				  echo"<script> alert('Question submitted')</script>";
			  }else
			  {
				 echo"<script> alert('Please enter again')</script>";
			  }
		}
		
		//close the connection
			  mysqli_close($conn);
		
		

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