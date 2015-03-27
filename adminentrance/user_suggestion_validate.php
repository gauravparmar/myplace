<?php
	require_once 'connect.inc.php';
	
	$id=$_GET['id'];
	$query="SELECT * FROM `temp_places` WHERE `PLACE_ID`='$id'";
	$query_run=mysql_query($query);
	$row=mysql_fetch_assoc($query_run);
	$for=mysql_real_escape_string(htmlentities(trim($row['FOR'])));
	$name=mysql_real_escape_string(htmlentities(trim($row['NAME'])));
	$description=mysql_real_escape_string(htmlentities(trim($row['DESCRIPTION'])));
	$address=mysql_real_escape_string(htmlentities(trim($row['ADDRESS'])));
	$contact_number=mysql_real_escape_string(htmlentities(trim($row['CONTACT_NUMBER'])));
	$email=mysql_real_escape_string(htmlentities(trim($row['EMAIL_ID'])));
	$website=mysql_real_escape_string(htmlentities(trim($row['WEBSITE'])));
	$suggester_name=mysql_real_escape_string(htmlentities(trim($row['SUGGESTER_NAME'])));
	$suggester_email_id=mysql_real_escape_string(htmlentities(trim($row['SUGGESTER_EMAIL_ID'])));
	$image_name=mysql_real_escape_string(htmlentities(trim($row['IMAGE_NAME'])));
		
	/**Getting current time and timestamp(start)**/
		$timestamp=time()+19800;
        $current_time=gmdate('D, d-M-Y H:i:s',$timestamp);	
    /**Getting current time and timestamp(end)**/ 
	
	$query="INSERT INTO `places` VALUES('','$for', '$name', '$description', '$address', '$contact_number', '$email', '$website',0,'$current_time','$timestamp','$image_name')";
	if(mysql_query($query))
	{
		$query="INSERT INTO `privileged_user` VALUES('','$suggester_name','$suggester_email_id','N/A')";
		mysql_query($query);
		$query="DELETE FROM `temp_places` WHERE `PLACE_ID`='$id'";
	   	mysql_query($query);
		header('Location:manage_new_suggestions.php');
	}
	else
		echo "Record not inserted. Please check for errors.";	
?>