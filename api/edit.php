/*
EDIT RECORDS
*/
<?php
	require '../db_config.php';
	$id  = $_GET["id"];

	$sql = "SELECT * FROM hero WHERE id = '".$id."'"; 
	$result = $mysqli->query($sql);
	$data = $result->fetch_assoc();
	
	echo json_encode($data);
// 
?>