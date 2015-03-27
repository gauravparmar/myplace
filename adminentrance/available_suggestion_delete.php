<?php
	require_once 'connect.inc.php';
	require_once 'core.inc.php';
	if(!loggedin())
	{
		header("Location: ../index.php");
	}
	$id=$_GET['id'];
	$query="DELETE FROM `places` WHERE `PLACE_ID`='$id'";
	if(mysql_query($query))
	{
		header('Location:manage_available_suggestions.php');
	}
	else
		echo "Error in deleting.";
?>