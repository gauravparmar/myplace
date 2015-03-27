<?php
session_start();
function loggedin()
{
	$current_ip=$_SERVER['REMOTE_ADDR'];
	if(isset($_SESSION['logged_admin_id'])&&!empty($_SESSION['logged_admin_id'])&&isset($_SESSION['logged_admin_ip'])&&!empty($_SESSION['logged_admin_ip'])&&($current_ip==$_SESSION['logged_admin_ip']))
		return true;
	else
		return false;	
}
?>