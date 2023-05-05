		<?php
		$conn = new mysqli('localhost', 'root', '', 'alphaware');
		if(!$conn){
			die("Fatal Error: Connection Error!");
		}
	
		$t_id = $_GET['id'];
		
		$conn->query("UPDATE transaction SET order_stat = 'Cancelled' WHERE transaction_id = '$t_id'") or die(mysqli_error());
								
		header("location: transaction.php");	
		
		?>