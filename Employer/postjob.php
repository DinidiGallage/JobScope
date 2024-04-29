<?php
	include"config.php";
	include"nav.php";
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Post Job Vacancy</title>
	
	<link rel="stylesheet" href="postjob.css">
</head>

<body> 
	<div class="wrapper">
		<header>
		
		</header>
		
		<section style="height:800px;"><br>
		<h3 style="text-align:center;padding-right:430px;"> POST JOB VACANCY</h3>
		
		<fieldset>
		<form name="postjob" action="" method = "POST">
		    <div class="apply">
				Company name &emsp;&emsp;&emsp;
				<input type="text" name="cname" required><br><br>
				Job title &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
				<input type="text" name="title" required><br><br>
				Job Category &emsp;&emsp;&emsp;&emsp;
				<select name="category" style="font-size:20px;font-family:Arial;height:40px;width:800px;text-align:center;">
					<option value="Information Technology">Information Technology</option>
					<option value="Business Management">Business Management</option>
					<option value="Engineering">Engineering</option>
					<option value="Human Resources">Human Resources</option>
					<option value="Hotel Management">Hotel Management</option>
					<option value="Entrepreneurship">Entrepreneurship</option>
				</select></br></br>
				Job Requirements &emsp;&emsp;
				<input type="text" name="requirements"required><br><br>
				Contact Number &emsp;&emsp;&nbsp;&nbsp;
				<input type="number" name="cnumber" pattern = "[0-9]{3}-[0-9]{2}-[0-9]{3}" required><br><br>
				Email Address &emsp;&emsp;&emsp;&nbsp;
				<input type="email" name="vemail"required><br><br>
			</div><br><br>
			<div class="p">
			<a href=""><input type="submit" name="submit3" value="Payment"></a>
			</div>
		</form>
		</fieldset>
		
		</section>
		<?php
		
			if(isset($_POST['submit3']))
			{
				$sql1 = "insert into job (Company_name, Job_title, Job_requirements, Contact_no, Email, Job_category)values
					('$_POST[cname]', '$_POST[title]', '$_POST[requirements]','$_POST[cnumber]','$_POST[vemail]', '$_POST[category]')";
					
					if(mysqli_query($conn, $sql1))
					{
						echo"<script> alert('Successfully added job details')</script>";
						echo"<script>window.location= 'pay.php'</script>";
					}
					else
					{
						echo"<script> alert('Error')</script>";
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