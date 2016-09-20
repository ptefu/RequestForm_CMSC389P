<!doctype html>
<html>
    <head> 
		<title>Process Request</title>	
	</head>

	<body>
        <h2><u>Order Confirmation</u></h2>
		<?php
            $lastname = trim($_POST['lastname']);
            $firstname = trim($_POST['firstname']);
            $email = trim($_POST['email']);
            $shippingmethod = $_POST['shippingmethod'];
            $softwares_in = $_POST['softwares'];
            $orderspecifications = $_POST['orderspecifications'];

            function getCost($key){
                include "softwares.php";
                return $softwares[$key];
            }
            
            function getTotal($softwares_in) {
                include "softwares.php";
                $total = 0;
                foreach ($softwares_in as $key) {
                    $total += (int)$softwares[$key];
                }
                return $total;
            }
        ?>
        
        <p style="float: left;"><strong>LastName</strong>: <?php echo $lastname ?>, &nbsp&nbsp&nbsp</p>
        <p style="float: left;"><strong>FirstName</strong>: <?php echo $firstname ?>, &nbsp&nbsp&nbsp</p>
        <p style="float: left;"><strong>Email</strong>: <?php echo $email ?> &nbsp&nbsp&nbsp</p>
        
        <br><br><br>
        
        <p><strong>Shipping Method</strong>: <?php echo $shippingmethod ?></p>
        
        <br>
        <strong>Software Order:</strong>
        <table id="table" border="1">
            <tr><td align="center">Software</td><td align="center">Cost</td></tr>
            <?php
                foreach($softwares_in as $software) {
                    $cost = getCost($software);
                    echo "<tr><td> $software</td> <td>$$cost</td></tr>";
                }
                $total = getTotal($softwares_in);
                echo "<tr><td><strong>Total</strong></td> <td>$$total</td></tr>";
            ?>
        </table>

        <br><br>
        <p><strong><u>Order Specifications:</u></strong></p>
        <?php
            echo nl2br("$orderspecifications");
        ?>

        
   </body>
</html>