<?php
	require_once 'connect.inc.php';
	
	$id=$_GET['id'];
	$query="DELETE FROM `privileged_users` WHERE `USER_ID`='$id'";
	mysql_query($query);
	header('Location:manage_privileged_users.php');
?>