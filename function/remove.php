<?php
$conn = new mysqli('localhost', 'root', '', 'alphaware');
if(!$conn){
	die("Fatal Error: Connection Error!");
}

$id = $_POST['id'];

	$conn->query("DELETE FROM product WHERE product_id = '$id'") or die(mysqli_error());

?>