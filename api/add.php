/*
 * add.php - Add new record.
 * DEVELOPER : Surendra gupta
 * date : 08-Jan-2018
 */
<?php
	require '../db_config.php';
	$post = file_get_contents('php://input');
	$post = json_decode($post);
	$sql = "INSERT INTO hero (title,name,type,links,slug,image_portrait,image_splash,description) VALUES ('".$post->title."','".$post->type."','".$post->links."','".$post->slug."','".$post->portrait."','".$post->splash."','".$post->description."')";

	$result = $mysqli->query($sql);

	$sql = "SELECT * FROM hero Order by id desc LIMIT 1"; 
	$result = $mysqli->query($sql);
	$data = $result->fetch_assoc();
	
	echo json_encode($data);
// 
?>