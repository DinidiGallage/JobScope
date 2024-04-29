<?php
	include"nav.php";
	include"config.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Employer Registration</title>
	
</head>
<body> 
	<div class="wrapper">
		<header>
		
							   
		</header>
	<section >
		<div class="img2">
		<br>
		<div class="box2">
		
			<h1 style="text-align:center;font-size:35px;font-family:arial;color:white;padding-top:30px;padding-right:30px;">Employer Registration Form</h1><br>
		<form name="reg" action="" method="POST">
		   <div class="log">	
		   <input type="text" name="fname1" placeholder="First Name" required="" class="i1"><br><br><br>
		    <input type="text" name="lname1" placeholder="Last Name" required="" class="i1"><br><br><br>
			<input type="text" name="cname" placeholder="Company name" required="" class="i1"><br><br><br>
			<input type="text" name="username1" placeholder="Username" required="" class="i1"><br><br><br>
			<input type="password" name="password1" placeholder="Password" required="" class="i1"><br><br><br>
			<input type="number" name="num1" placeholder="Contact No" required="" class="i1"><br><br><br>
			<input type="text" name="email1" placeholder="Email" required="" class="i1"><br><br><br>
			<input type="submit" name=" submit" value="Sign Up" style="font-size:18px;font-family:arial;">
		   </div>
		</form>
		
		</div>
		
		</div>
	
	</section>	
	
	<?php
		
		   if(isset($_POST['submit']))
		   {
			 $count=0;
			 $sql1="Select Username from employer_register";
			 $res= mysqli_query($conn, $sql1);
			 
			 while($row = mysqli_fetch_assoc($res))
			 {
				 if($row['Username'] == $_POST['username1'])
				 {
					 $count = $count + 1;
				 }
			 }
		  if($count == 0)
		  { $sql="insert into employer_register
			 (First_Name, Last_Name, Company_Name, Username, Password, Contact_No, Email)values
			 ('$_POST[fname1]','$_POST[lname1]', '$_POST[cname]', '$_POST[username1]', '$_POST[password1]', '$_POST[num1]', '$_POST[email1]')";

			  //execute the query
			  if(mysqli_query($conn, $sql))
			  {
				  echo"<script> alert('Registered successfully')</script>";
				  echo"<script>window.location= '../login.php'</script>";
			  }else
			  {
				 echo"<script> alert('Error in insertion')</script>";
			  }
		  }
		  else
		  {
			 echo"<script> alert('The username already exist')</script>";
		  }

		   
			  //close the connection
			  mysqli_close($conn);
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