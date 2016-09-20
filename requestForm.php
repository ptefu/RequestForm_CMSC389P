<!doctype html>
<html>
    <head> 
		<title>Request Form</title>	
	</head>

	<body>
		<h2><u>Order Request Form</u></h2>
		
		<form action="processRequest.php" method="post">
			<p style="float: left;">
				<strong>LastName:</strong> <input type="text" name="lastname" required/>
			</p>

			<p style="float: left;">
				<strong>FirstName:</strong> <input type="text" name="firstname" required/>
			</p>
	
			<br><br><br>
			
			<p style="float: left;">
				<strong>Email:</strong> <input type="text" name="email" placeholder="example@notreal.real" required/>
			</p>
			
			<br><br><br>
			
			<p style="float: left;">Shipping Method:</p>
			<br>
			<div style="float: left;">
				<input type="radio" name="shippingmethod" value="UPSS">UPSS
				<input type="radio" name="shippingmethod" value="FedEXC"> FedEXC
				<input type="radio" name="shippingmethod" value="USMAIL"checked>USMAIL
				<input type="radio" name="shippingmethod" value="Other">Other
			</div>
			
			<br><br>
			
			<p style="margin: 0; padding: 0; border: 0;">SoftWares:</p>
			<select name="softwares[]" multiple required>
				<?php
					include "softwares.php";
					foreach ($softwares as $software => $cost):
						echo '<option value="'.$software.'">'.$software." (".$cost."$)".'</option>';
					endforeach
				?>
			</select>
			
			<p>Order Specifications</p>
			<textarea name="orderspecifications" rows="8" cols="55"></textarea>
			
			<br><br>
			
			<input type="submit" value="Submit">
			<input type="reset" value="Reset">
			
		</form>	
   </body>
</html>