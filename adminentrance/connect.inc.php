<font color="#FFFFFF">
<?php
$conn_error='Error:Could not connect';
$mysql_database_name='myplace';
if(!@mysql_connect('localhost','root','gaurav007')||!@mysql_select_db($mysql_database_name))
{
	die($conn_error);
}

?>
</font>