<?php
	require_once 'connect.inc.php';
	require_once 'core.inc.php';
	if(!loggedin())
	{
		header("Location: ../index.php");
	}
	$id=$_GET['id'];
	$query="SELECT * FROM `temp_ads` WHERE `AD_ID`='$id'";
	$query_run=mysql_query($query);
	$row=mysql_fetch_assoc($query_run);
	
	$ad_id=mysql_real_escape_string(htmlentities(trim($row['AD_ID'])));
	$poster_name=mysql_real_escape_string(htmlentities(trim($row['POSTER_NAME'])));
	$poster_email_id=mysql_real_escape_string(htmlentities(trim($row['POSTER_EMAIL_ID'])));
	$poster_contact_number=mysql_real_escape_string(htmlentities(trim($row['POSTER_CONTACT_NUMBER'])));
	$place_name=mysql_real_escape_string(htmlentities(trim($row['PLACE_NAME'])));
	$place_address=mysql_real_escape_string(htmlentities(trim($row['PLACE_ADDRESS'])));
	$ad_title=mysql_real_escape_string(htmlentities(trim($row['AD_TITLE'])));
	$ad_content=mysql_real_escape_string(htmlentities(trim($row['AD_CONTENT'])));
		
	/**Getting current time and timestamp(start)**/
		$timestamp=time()+19800;
        $current_time=gmdate('D, d-M-Y H:i:s',$timestamp);	
    /**Getting current time and timestamp(end)**/ 
	
	$query="INSERT INTO `ads` VALUES('','$poster_name', '$poster_email_id', '$poster_contact_number', '$place_name', '$place_address', '$ad_title', '$ad_content','$current_time','$timestamp')";
	if(mysql_query($query))
	{
		$query="INSERT INTO `privileged_users` VALUES('','$poster_name','$poster_email_id','$poster_contact_number')";
		mysql_query($query);
		if(mysql_query($query))
		{
			$query="DELETE FROM `temp_ads` WHERE `AD_ID`='$id'";
	   		if(mysql_query($query))
				header('Location:manage_new_ads_applications.php');
			else
				echo "Error in deleting this ad from temporary records.";	
		}
		else
			echo "Error in adding Privileged User.";
	}
	else
		echo "Record not inserted. Please check for errors.";	
?>