<?php
	require_once 'connect.inc.php';
	
	$id=$_GET['id'];
	$query="DELETE FROM `ads` WHERE `AD_ID`='$id'";
	mysql_query($query);
	header('Location:manage_old_ads.php');
?>