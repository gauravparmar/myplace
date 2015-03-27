<?php
	require_once 'connect.inc.php';
	require_once 'core.inc.php';
	if(!loggedin())
	{
		header("Location: ../index.php");
	}
	$id=$_GET['id'];
	$query="DELETE FROM `temp_ads` WHERE `AD_ID`='$id'";
	mysql_query($query);
	header('Location:manage_new_ads_applications.php');
?>