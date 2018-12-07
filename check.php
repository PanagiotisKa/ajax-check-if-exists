<?php
// AJAX CHECK
require_once("cclass.php");

$con = new connect();

if(!empty($_POST["code"])) {
	
	$code = $_POST["code"];
	$result = $con->check_coral($code);
	$row = mysqli_fetch_array($result);
	$code_count = $row[0];
	if($code_count>0) echo "<span style=\"color:red\" class='status-not-available'> Code Already In Use. Stop!!!<br></span>";
	else echo "<span style=\"color:lightgreen\" class='status-available'> Not in Use Code. Go On <br></span>";
}
?>
