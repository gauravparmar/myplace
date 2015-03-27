<?php
	require_once 'connect.inc.php';
	
	$id=$_GET['id'];
	$query="DELETE FROM `feedbacks` WHERE `FEEDBACK_ID`='$id'";
	mysql_query($query);
	header('Location:manage_feedbacks.php');
?>