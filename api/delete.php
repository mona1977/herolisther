/*
delete records
*/
<?php
	require '../db_config.php';
	$id  = $_GET["id"];
	$sql = "DELETE FROM hero WHERE id = '".$id."'";
	$result = $mysqli->query($sql);
	
	echo json_encode([$id]);
// 
?>