<?php
	/**Mechanism to increase rating (start)**/
	require_once "connect.inc.php";
	if(isset($_POST['rate_number']))
	{
		if(!empty($_POST['rate_number']))
		{
			$id=$_POST['id'];
			echo "id =$id";
			$rate_number=$_POST['rate_number'];
			
			$query1="SELECT `rating` FROM `places` WHERE `PLACE_ID`='$id'";
			
			if($query_run=mysql_query($query1))
			{
				$num_records=mysql_num_rows($query_run);
				if($num_records==1)
				{
					$current=mysql_result($query_run,0,'rating');
					echo "current rating is = $current<br>";
					$new_rating=$current+$rate_number;
					$query2="UPDATE `places` SET `RATING`='$new_rating' WHERE `PLACE_ID`='$id'";
					if($query_run=mysql_query($query2))
						echo 'Rated';
					else
						echo 'Not rated';	
					
					$query_run=mysql_query($query1);
					$after_rating=mysql_result($query_run,0,'RATING');
					echo "After rating = $after_rating";
				}
			}
		}
		else
			echo 'Please type in something.';
	}
	/**Mechanism to increase rating (end)**/
			
			
?>