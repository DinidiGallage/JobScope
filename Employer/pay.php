<?php
	include"config.php";
	include"nav.php";
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Payment </title>
	<link rel="stylesheet" href="styles.css" type="text/css">
	
</head>
<body> 
	<div class="wrapper">
		<header>
		
							   
		</header>
	<section ><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
	<div>
    <fieldset>
    <h2>Select Payment Method</h2>
	
	<div>
	    <a href="" target="self"><img src="images/visa.jpeg" class="paymentMethods"></a>
		<a href="" target="self"><img src="images/mastercard.jpeg" class="paymentMethods"></a>
		<a href="" target="self"><img src="images/americanExpress.jpeg" class="paymentMethods"></a>
		<a href="" target="self"><img src="images/discover.jpeg" class="paymentMethods"></a>
	</div>
	

	<form action="" method="POST">
    <label for="name"></label>
    <input type="text" id="name" name="name" placeholder= "Cardholder Name" size= "50" required><br><br>

    <label for="card_number"></label>
    <input type="text" id="card_number" name="card_number" placeholder= "Card Number" "Cardholder Name" size= "50" required><br><br>

    <label for="expiry_date">Expiration Date</label><br>
    <input type="text" id="expiry_date" name="expiry_date"  placeholder= "MM/YY" size= "10" required>
    &nbsp&nbsp&nbsp&nbsp&nbsp
    <label for="cvv"></label>
    <input type="text" id="cvv" name="cvv" placeholder= "cvv" size= "10" required><br><br>

    <label for="billing_address">Payment value:</label>
    <input type="text" id="paymentv" name="paymentv" required><br><br>
	
	<label for="billing_address">Payment No:</label>
    <input type="text" id="billing_address" name="billing_address" required><br><br>

  <input type="submit" value="Pay" name="submit5" class= "pay">
  </fieldset>
</form>
</div>
	
	
		
	</section>	
	
	<?php
		
		if(isset($_POST['submit5']))
		{
					
			$sql2 = "insert into payment(Payment_value, Payment_no)values('$_POST[paymentv]','$_POST[billing_address]')";
					
				if(mysqli_query($conn, $sql2))
				{
					echo"<script> alert('Successfully added payment details')</script>";
					echo"<script>window.location= 'eprofile.php'</script>";
				}
				else
				{
					echo"<script> alert('Details not added')</script>";
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