<?php
	require_once 'connect.inc.php';
	if(isset($_GET['like']))
		$like=$_GET['like'];
	if(!empty($like))
	{	
		$query="SELECT `LIKES` FROM `total_likes`";
		$query_run=mysql_query($query);
		$old_likes=mysql_result($query_run,0,'LIKES');
		$new_likes=$old_likes+1;
		$query="UPDATE `total_likes` SET `LIKES`='$new_likes'";
		$query_run=mysql_query($query);
		echo $new_likes;
	}
?>