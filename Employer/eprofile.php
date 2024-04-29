<?php
	include"config.php";
	include"nav.php";
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" href="epstyle.css">
	<header>
	</header>
	
	
</head>
<body> 
	<div class="wrapper">
		
	
	
	
	
	<section>
	
	<fieldset class="f1">
		
		<table>
			<tr>
				<td >
					<fieldset class="f2">
						<?php
						echo "<br>";
						echo $_SESSION['login_user'];
						echo "</br>";
						?>
						<br><br>
						<img src="./images/logo7.jpg" class="logo3"><br><a href="">Edit Profile Photo</a><br><br><br><br>
										
						<button id="btn1">VIEW APPLICATIONS</button><br><br><br><br>
						<button id="btn2">UPDATE COMPANY PROFILE</button><br><br><br><br>
						<button id="btn3">POST ADVERTISEMENTS</button><br><br><br><br>
						<button id="btn4"><a href="postjob.php">POST JOB VACANCY</a></button>
					</fieldset>	
				</td>	

				<td>
	
					<fieldset class="f3">
						<h3>Account Information</h3>
						<?php
						
							$sql= "select * from employer_register where Username = '$_SESSION[login_user]' ";
							$res= mysqli_query($conn, $sql);
						
						?>
						
						<h2>My Profile</h2>
						<?php
							$row = mysqli_fetch_assoc($res);
							
							echo"<b>";
							echo"<table style='width:200px; '>";
								
								echo"<tr>";
									echo"<td>";
										echo" <b> First Name:</b>";
									echo"</td>";
									
									echo"<td>";
										echo $row['First_Name'];
									echo"</td>";
								echo"<tr>";
								
								echo"<tr>";
									echo"<td>";
										echo" <b> Last Name:</b>";
									echo"</td>";
									
									echo"<td>";
										echo $row['Last_Name'];
									echo"</td>";
								echo"<tr>";
								
								echo"<tr>";
									echo"<td>";
										echo" <b> Company Name:</b>";
									echo"</td>";
									
									echo"<td>";
										echo $row['Company_Name'];
									echo"</td>";
								echo"<tr>";
								
								echo"<tr>";
									echo"<td>";
										echo" <b> Username:</b>";
									echo"</td>";
									
									echo"<td>";
										echo $row['Username'];
									echo"</td>";
								echo"<tr>";
								
								echo"<tr>";
									echo"<td>";
										echo" <b> Password:</b>";
									echo"</td>";
									
									echo"<td>";
										echo $row['Password'];
									echo"</td>";
								echo"<tr>";
								
								echo"<tr>";
									echo"<td>";
										echo" <b> Contact No:</b>";
									echo"</td>";
									
									echo"<td>";
										echo $row['Contact_No'];
									echo"</td>";
								echo"<tr>";
								
								echo"<tr>";
									echo"<td>";
										echo" <b> Email:</b>";
									echo"</td>";
									
									echo"<td>";
										echo $row['Email'];
									echo"</td>";
								echo"<tr>";
							
							echo"</table>";
							echo"</b>";
						
						
						?>
						
						<br><br><br>
						<form action="" method="POST"> 
						<button class = "b" name="submit1" >EDIT</button>
						</form>	
						
					</fieldset>
					<br><br>
				</td>
			</tr>
		</table>	
											
	</fieldset>
				
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