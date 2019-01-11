/*
Update records
*/
<?php
	require '../db_config.php';
	$id  = $_GET["id"];
	
	$post = file_get_contents('php://input');
	$post = json_decode($post);
	$sql = "UPDATE hero SET name = '".$post->title."', type = '".$post->type."',links = '".$post->links."',slug = '".$post->slug."',image_portrait = '".$post->portrait."',image_splash = '".$post->splash."', description = '".$post->description."' WHERE id = '".$id."'";
	$result = $mysqli->query($sql);

	$sql = "SELECT * FROM hero WHERE id = '".$id."'"; 
	$result = $mysqli->query($sql);
	$data = $result->fetch_assoc();
	
	echo json_encode($data);
// 
?>