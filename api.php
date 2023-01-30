<?php

header("Content-Type:application/json");
include('connection.php');

if (isset($_GET['id']) && $_GET['id']!="") {

	$id = $_GET['id'];
	$query = "SELECT * FROM `users` WHERE id=$id";
	$result = mysqli_query($con,$query);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	
	$response["status"] = "true";	
	$response["message"] = "User Details";
	$response["users"] = $row;
	
} else{
	$response["status"] = "false";
	$response["message"] = "No user(s) found!";
}
echo json_encode($response); exit;

?>
