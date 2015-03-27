<?php
	require_once 'connect.inc.php';

	$no_of_users_to_show=25;
	$user_info_line_break_position=35;
	$no_of_characters_in_each_ad_row=50;
	$no_of_characters_in_names=20;
	$no_of_characters_in_email_id=20;
?>
<html>
    <head>
		<style type="text/css">
		.function_title
		{
			background:#7B0;
			color:#000;
			border-radius:8px;
			font-size:24px;
			font-weight:bold;
			font-family:"Comic Sans MS", cursive;
			text-shadow: 0px 2px 3px rgba(255,255,255,0.5);
			box-shadow: 0px 3px 6px rgba(0,0,0,0.7);
			text-align:center;
		}
		.validate_button
        {
			border-width:0px;
                border-radius:10px;
                background:#0C3;
                color:#FFF;
                
                font:"Trebuchet MS", Arial, Helvetica, sans-serif;
                font-weight:bold;
                box-shadow: 0px 3px 6px rgba(0,0,0,0.7);
                text-shadow: 0px 2px 3px rgba(0,0,0,0.5);
                padding:0 15 0 15;
                
        }
        .validate_button:hover,.validate_button:focus
        {
                background:#7B0;
                box-shadow: 0px 3px 6px rgba(127,127,127,0.7);
                text-shadow: 0px 3px 2px rgba(255,255,255,1);
                color:#000;
                
        }
		.search_box
		{
			background-color:#70B0F0;
			border-radius:28px;
			margin:0 0 0 0;
			box-shadow: 0px 2px 10px rgba(0,0,0,5);
			text-shadow: 0px 2px 3px rgba(0,0,0,0.5);
			margin-left:10px;
		}
		.search_box:hover
		{
			background-color:#79BCFF;
			border-radius:28px;
			margin:0 0 0 0;
			box-shadow: 0px 2px 7px rgba(0,0,0,5);
			text-shadow: 0px 2px 3px rgba(0,0,0,0.5);
			margin-left:10px;
		}
		.search_text_box
		{
			border-color:#70B000;
			width:100%;
			padding-left:10px;
			padding-right:10px;
			border-width:3px;
			height:40px;
			border-style:solid;
			border-radius:24px;
			font-size:17px;
			font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
			font-weight:bold;
			color:#333;
			box-shadow:inset 0px 0px 5px rgba(0,0,0,0.9);
			
			text-shadow: 0px 2px 3px rgba(0,0,0,0.1);
				
		}
		.search_text_box:focus,.search_text_box:hover
		{
			border-color:#000;
			border-width:3px;
			color:#000;
			
			box-shadow: 0px 0px 10px rgba(255,255,255,2);
			
			
		} 
		.search_button  
		{
			
			background:#79BCFF;
			background-image:url(search_button_up.png);
			height:45px;
			border-radius:15px;
			
			border:inherit;
		}
		.search_button:hover,.search_button:focus
		{
			box-shadow:inset 0px 0px 10px rgba(0,0,0,0.3);	
		}  
		.no_results_found_box
		{
			text-align:center;
			width:50%;
			margin-top:20px;
			
			font-weight:bold;
			color:#333;
			
			
			background-color:#79BCFF;
			border-radius:28px;
			
			box-shadow: 0px 2px 10px rgba(0,0,0,5);
			text-shadow: 0px 2px 3px rgba(255,255,255,0.5);
			padding:5 10 5 10;
			
		}
		.next_and_previous_button
		{
			
			border-width:4px;
			border-color:#7B0;
			border-radius:10px;
			background:#79BCFF;
			color:#FFF;
			
			font:"Trebuchet MS", Arial, Helvetica, sans-serif;
			font-weight:bold;
			box-shadow: 0px 3px 6px rgba(0,0,0,0.7);
			text-shadow: 0px 2px 3px rgba(0,0,0,0.5);
			padding:3 15 5 15;
			
		}
		.next_and_previous_button:hover,.next_and_previous_button:focus
		{
			background:#7B0;
			box-shadow: 0px 3px 6px rgba(127,127,127,0.7);
			text-shadow: 0px 3px 2px rgba(255,255,255,1);
			color:#000;
			
		}
		
		
		.ad_text
		{
			font:"Trebuchet MS", Arial, Helvetica, sans-serif;
			color:#FFF;
			font-size:18px;
			font-weight:lighter;
			text-shadow: 0px 2px 3px rgba(0,0,0,0.5);
			
		}
		
		.ad_text_box
		{
			background-color:#79BCFF;
			border:3px black;
			border-radius:10px;
			
			padding:5px 10px 5px 10px;
			box-shadow: 0px 2px 10px rgba(0,0,0,5);
		}
		.ad_text_box:hover
		{
			background-color:#70B0F0;
			
		}
		.ad_titles
		{
			
			color:#FFF;
			
			font-size:18px;
			text-decoration:none;
			font-weight:bold;
			
			
			border-radius:6px;
			text-shadow: 0px 2px 5px rgba(7,7,7,1);
			box-shadow: 3px 0px 5px rgba(255,255,255,5);
			padding:2 5 4 0;
			background-color:#70B000;
			
			
		}
		.ad_titles:hover
		{
			padding:2 10 4 15;
		}
		
		.full_details
		{
			text-decoration:none;
			font:Trebuchet MS, Arial, Helvetica, sans-serif;
			color:#FFF;
			text-shadow: 0px 2px 5px rgba(7,7,7,1);
		}
		.full_details:hover
		{
			text-shadow: 0px 2px 5px rgba(255,255,255,1);
			color:#000;
			text-decoration:underline;
		}
		.rate_this
		{
			color:#FFF;
			font:Comic Sans MS, cursive;
			font-size:16px;
			font-weight:bold;
			vertical-align:middle;
			text-shadow:none;
			padding:0 5 0 5;
			border-radius:6px;
			background-color:#0CF;
			text-shadow: 0px 2px 5px rgba(7,7,7,1);
			box-shadow: 3px 0px 5px rgba(255,255,255,5);
		}
		.rate_number
		{
			background-color:#0CF;
			font-weight:bold;
			color:#FFF;
			padding:4px;
			border:none;
			box-shadow: 0px 2px 10px rgba(0,0,0,5);
			border-radius:20px;
		}
		.rate_number:hover
		{
			color:#000;
			font-size:large;
			box-shadow: 0px 2px 10px rgba(255,255,255,3);
		}
		.ad_detail_text_title
		{
			color:#FFF;
			text-shadow: 2px 0px 3px rgba(0,0,0,0.5);
		}
		.ad_detail_text
		{
			font:"Trebuchet MS", Arial, Helvetica, sans-serif;
			color:#000;
			font-size:18px;
			font-weight:lighter;
			text-shadow: 2px 0px 3px rgba(255,255,255,0.5);
		}
		
		.full_ad_content
		{
			color:#000;
			text-shadow:none;
			
			text-shadow: 2px 0px 3px rgba(255,255,255,0.5);
		}
		
		.full_ad_title
		{
			color:#FFF;
			font-size:16px;
			text-decoration:none;
			font-weight:bold;
			padding:2 5 4 10;
			border-radius:6px;
			background-color:#73B167;
			text-shadow: 0px 2px 5px rgba(7,7,7,1);
			box-shadow: 3px 0px 5px rgba(255,255,255,5);
		}
		.detailed_text_box
		{
			background-color:#79BCFF;
			border:3px black;
			border-radius:10px;
			
			padding:0px 10px 5px 10px;
			box-shadow: 0px 2px 10px rgba(0,0,0,5);
			margin-top:10px;
		}
		.full_names
		{
			color:#FFF;
			font-size:18px;
			text-decoration:none;
			font-weight:bold;
			border-radius:6px;
			text-shadow: 0px 2px 5px rgba(7,7,7,1);
			box-shadow: 3px 0px 5px rgba(255,255,255,5);
			padding:2 10 4 10;
			background-color:#70B000;
		}
		.edit_button
        {
			border-width:0px;
                border-radius:10px;
                background:#FC0;
                color:#000;
                font:"Trebuchet MS", Arial, Helvetica, sans-serif;
                font-weight:bold;
                box-shadow: 0px 3px 6px rgba(0,0,0,0.7);
                text-shadow: 0px 2px 3px rgba(0,0,0,0.5);
                padding:0 15 0 15;
        }
        .edit_button:hover,.edit_button:focus
        {
                background:#7B0;
                box-shadow: 0px 3px 6px rgba(127,127,127,0.7);
                text-shadow: 0px 3px 2px rgba(255,255,255,1);
                color:#000;
                
        }
		.delete_button
        {
                border-width:0px;
                border-radius:10px;
                background:#F00;
                color:#FFF;
                
                font:"Trebuchet MS", Arial, Helvetica, sans-serif;
                font-weight:bold;
                box-shadow: 0px 3px 6px rgba(0,0,0,0.7);
                text-shadow: 0px 2px 3px rgba(0,0,0,0.5);
                padding:1 15 1 15;
                
        }
        .delete_button:hover,.delete_button:focus
        {
                background:#7B0;
                box-shadow: 0px 3px 6px rgba(127,127,127,0.7);
                text-shadow: 0px 3px 2px rgba(255,255,255,1);
                color:#000;
                
        }
		.back_button
		{
			
			border-width:4px;
			border-color:#7B0;
			border-radius:10px;
			background:#79BCFF;
			color:#FFF;
			text-decoration:none;
			font:"Trebuchet MS", Arial, Helvetica, sans-serif;
			font-weight:bold;
			box-shadow: 0px 3px 6px rgba(0,0,0,0.7);
			text-shadow: 0px 2px 3px rgba(0,0,0,0.5);
			padding:3 15 5 15;
			
		}
		.back_button:hover,.back_button:focus
		{
			background:#7B0;
			box-shadow: 0px 3px 6px rgba(127,127,127,0.7);
			text-shadow: 0px 3px 2px rgba(255,255,255,1);
			color:#000;
		}
        </style>
        
        <script language="javascript">
			function blank_full_name_text_box(text_box)
			{
				if(text_box.value=="Full Name")
					text_box.value='';
			}
			function blank_email_id_text_box(text_box)
			{
				if(text_box.value=="Email ID")
					text_box.value='';
			}
			function blank_contact_number_text_box(text_box)
			{
				if(text_box.value=="Contact Number")
					text_box.value='';
			}
			function full_name_text_box_text_recover(text_box)
			{
				if((text_box.value=='')||(text_box.value==' '))
					text_box.value="Full Name";
			}
			function email_id_text_box_text_recover(text_box)
			{
				if((text_box.value=='')||(text_box.value==' '))
					text_box.value="Email ID";
			}
			function contact_number_text_box_text_recover(text_box)
			{
				if((text_box.value=='')||(text_box.value==' '))
					text_box.value="Contact Number";
			}
			
        </script>
    </head>
<body topmargin="0px">  
<table width="98%" cellspacing="10">  
	<tr align="center">
    	<td>
        	<a href="admin_functions.php" class="back_button" style="text-align:center;">Back To Admin Panel</a><br><br>
        </td>
    </tr>
	<tr>
        <td class="function_title">
        	Login Log
        </td>
    </tr>
    
    <tr >
    	<td>
        	<form  action="login_log.php?page_start=<?php 
				if(isset($_POST['search'])||(!isset($_POST['search'])&&!isset($_POST['next'])))
				{
					$page_start=0;
					echo $page_start;
				}
				if(isset($_POST['next']))
				{
					
					$page_start=$_GET['page_start']+$no_of_users_to_show;
					echo $page_start;	
				}
				if(isset($_POST['previous']))
				{
					
					if(($_GET['page_start']-$no_of_users_to_show)>=0)
					{
						$page_start=$_GET['page_start']-$no_of_users_to_show;
					}
					echo $page_start;	
				}
				$page_end=$no_of_users_to_show;
				?>" method="post" style="text-align:center">
				
				<?php
						$ip=$_SERVER['REMOTE_ADDR'];
						/**Getting current time and timestamp(start)**/
							$timestamp=time()+19800;
							$current_time=gmdate('D, d-M-Y H:i:s',$timestamp);	
						/**Getting current time and timestamp(end)**/ 
						
								$query="SELECT * FROM `log` ORDER BY `TIMESTAMP` DESC LIMIT $page_start, $page_end";
								$query_run=mysql_query($query);	
						/**seaching algo end**/			
						
						$no_of_users_for_current_page=mysql_num_rows($query_run);
						/**--------------**/
						$query_for_all_records="SELECT * FROM `log`";
						$query2_run=mysql_query($query_for_all_records);
						$total_records_found=mysql_num_rows($query2_run);
						$suffix=($total_records_found>1)?'s':'';
						if($no_of_users_for_current_page==0)
						{
							echo '<table width="100%" style="margin-top:10px;"><tr ><td align="center"  width="50%" ><font class="no_results_found_box" >Sorry, no logins.</font></td></tr></table>';
							die();
						}
						else
						{
							/**Dislay all users for current page according to admin information upto user show limit (start)**/
							$i=1;
							echo'<table width="97%" style="margin:0 0 10 0;"><tr style="padding:0 0 0 0">';
							echo'	<tr>
										<td align="center">
											<font color="#666666" face="Trebuchet MS, Arial, Helvetica, sans-serif" style="font-weight:bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Showing '.($page_start+$no_of_users_for_current_page).' out of '.$total_records_found.' login',$suffix,' done. </font>'; 
							if($page_start>0)
								echo'<input type="submit" value="Previous" name="previous" align="right" class="next_and_previous_button"/>';
							if(($page_start+$no_of_users_to_show)<$total_records_found)
								echo'<input type="submit" value="Next" name="next"  align="right" class="next_and_previous_button"/>';	
							echo '</td></tr></table><table width="100%" style="margin:0 0 0 0;">';	
										
							while($row=mysql_fetch_assoc($query_run))
							{	
								/** Display one particular user among all the users to be shown for current page (start)**/
								$ip=stripslashes($row['IP']);
								$date_and_time=stripslashes($row['DATE_AND_TIME']);
								
								
								echo '<tr >
									<td  class="ad_text_box" style="margin-top:15 0 0 0">
										<table cellpadding="1" cellspacing="0" border="0" width="100%" class="ad_text">
											<tr valign="top">
												<td colspan="2">
													From: '.$ip.' on <strong>'.$date_and_time.'</strong>
												</td>
											</tr>
										</table>
									</td>
								  </tr>';	
								  /** Display one particular user among all the users to be shown for current page (end)**/
							}
							echo '</table>';
							echo'<font color="#666666" face="Trebuchet MS, Arial, Helvetica, sans-serif" style="font-weight:bold">Showing '.($page_start+$no_of_users_for_current_page).' out of '.$total_records_found.' login',$suffix,' done. </font>';  
							if($page_start>0)
								echo'<input type="submit" value="Previous" name="previous" align="right" class="next_and_previous_button"/>';
							if(($page_start+$no_of_users_to_show)<$total_records_found)
								echo'<input type="submit" value="Next" name="next"  align="right" class="next_and_previous_button"/></form>';	
							/**Dislay all users for current page according to admin information upto user show limit (end)**/			
						}	
					
				?>
				</form>
		</td>
    </tr>
</table>
</html>










