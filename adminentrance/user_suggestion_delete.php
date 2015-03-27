<?php
	require_once 'connect.inc.php';
	
	$id=$_GET['id'];
	$query="DELETE FROM `temp_places` WHERE `PLACE_ID`='$id'";
	mysql_query($query);
	header('Location:manage_new_suggestions.php');
?>