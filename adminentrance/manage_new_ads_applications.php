<?php
	require_once 'connect.inc.php';
	$no_of_ads_to_show=25;
	$ad_line_break_position=35;
	$ad_width=600;
	$no_of_characters_in_each_ad_row=50;
	$no_of_characters_in_names=20;
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
		.full_ad_titles
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
			function blank_ad_title_text_box(text_box)
			{
				if(text_box.value=="Ad Title")
					text_box.value='';
			}
			function blank_ad_content_text_box(text_box)
			{
				if(text_box.value=="Ad Content")
					text_box.value='';
			}
			function blank_date_and_time_text_box(text_box)
			{
				if(text_box.value=="Date and Time")
					text_box.value='';
			}
			function ad_title_text_box_text_recover(text_box)
			{
				if((text_box.value=='')||(text_box.value==' '))
					text_box.value="Ad Title";
			}
			function ad_content_text_box_text_recover(text_box)
			{
				if((text_box.value=='')||(text_box.value==' '))
					text_box.value="Ad Content";
			}
			function date_and_time_text_box_text_recover(text_box)
			{
				if((text_box.value=='')||(text_box.value==' '))
					text_box.value="Date and Time";
			}
			
			
        </script>
    </head>
<body topmargin="0px">  
<table width="98%" cellspacing="10" align="center">  
	<tr align="center">
    	<td>
        	<a href="admin_functions.php" class="back_button" style="text-align:center;">Back To Admin Panel</a><br>
        </td>
    </tr>
	<tr>
        <td class="function_title">
        	Manage New Ads Applications
        </td>
    </tr>
    
    <tr >
    	<td>
        	<form  action="manage_new_ads_applications.php?page_start=<?php 
				if(isset($_POST['search'])||(!isset($_POST['search'])&&!isset($_POST['next'])))
				{
					$page_start=0;
					echo $page_start;
				}
				if(isset($_POST['next']))
				{
					
					$page_start=$_GET['page_start']+$no_of_ads_to_show;
					echo $page_start;	
				}
				if(isset($_POST['previous']))
				{
					
					if(($_GET['page_start']-$no_of_ads_to_show)>=0)
					{
						$page_start=$_GET['page_start']-$no_of_ads_to_show;
					}
					echo $page_start;	
				}
				$page_end=$no_of_ads_to_show;
				?>" method="post" style="text-align:center">
				<table cellspacing="8px" class="search_box" width="97%" align="center">
					<tr>
						<td>
							<table align="center" width="100%" style="margin:0 0 0 0;">
								<tr>
									<td >
										<font  size="5%" style="font-weight:bold; color:#FFF">Search:</font>
									</td>
									<td>
										<input type="text" name="ad_title" id="name" onFocus="blank_ad_title_text_box(this);" onBlur="ad_title_text_box_text_recover(this);" class="search_text_box" value="<?php if(isset($_POST['ad_title'])){echo $_POST['ad_title'];} else echo "Ad Title";?>"/>
									</td>
									
									<td>
										<input type="text" name="ad_content" onFocus="blank_ad_content_text_box(this);" onBlur="ad_content_text_box_text_recover(this);" class="search_text_box" value="<?php if(isset($_POST['ad_content'])){echo $_POST['ad_content'];} else echo "Ad Content";?>"/>
									</td>
									
									<td>
										<input type="text" name="date_and_time" onFocus="blank_date_and_time_text_box(this);" onBlur="date_and_time_text_box_text_recover(this);" class="search_text_box" value="<?php if(isset($_POST['date_and_time'])){echo $_POST['date_and_time'];} else echo "Date and Time";?>"/>
									</td>
									<td>
										<input type="submit" class="search_button" value="          " name="search"/>
							
									</td>   
								</tr>	       
							</table>
						</td>
					</tr>
				</table>
				
				<?php
					if((isset($_POST['ad_title'])||isset($_POST['ad_content'])||isset($_POST['date_and_time'])))
					{	
						$ad_title=mysql_real_escape_string(htmlentities(trim($_POST['ad_title'])));
						$ad_content=mysql_real_escape_string(htmlentities(trim($_POST['ad_content'])));	
						$date_and_time=mysql_real_escape_string(htmlentities(trim($_POST['date_and_time'])));	
						
						if(($ad_title==NULL)||($ad_title=="Ad Title"))
							$ad_title='%';
						if(($ad_content==NULL)||($ad_content=="Ad Content"))
							$ad_content='%';
						if(($date_and_time==NULL)||($date_and_time=="Date and Time"))
							$date_and_time='%';	
						/**seaching algo start**/	
								$where_ad_title ="";
								$where_ad_content ="";
								$where_date_and_time ="";
								
								$ad_title_keywords=preg_split('/[\s]+/',$ad_title);
								$ad_content_keywords=preg_split('/[\s]+/',$ad_content);
								$date_and_time_keywords=preg_split('/[\s]+/',$date_and_time);
								
								$total_ad_title_keywords=count($ad_title_keywords);
								$total_ad_content_keywords=count($ad_content_keywords);
								$total_date_and_time_keywords=count($date_and_time_keywords);
								
								foreach($ad_title_keywords as $key=>$keyword)
								{
									$where_ad_title.="`AD_TITLE` LIKE '%$keyword%'";
									if($key!=($total_ad_title_keywords-1))
										$where_ad_title.=" OR ";
								}
								foreach($ad_content_keywords as $key=>$keyword)
								{
									$where_ad_content.="`AD_CONTENT` LIKE '%$keyword%'";
									if($key!=($total_ad_content_keywords-1))
										$where_ad_content.=" OR ";
								} 
								foreach($date_and_time_keywords as $key=>$keyword)
								{
									$where_date_and_time.="`DATE_AND_TIME` LIKE '%$keyword%'";
									if($key!=($total_date_and_time_keywords-1))
										$where_date_and_time.=" OR ";
								}  
								$query="SELECT * FROM `temp_ads` WHERE $where_ad_title AND $where_ad_content AND $where_date_and_time LIMIT $page_start, $page_end";
								$query_run=mysql_query($query);	
								
						/**seaching algo end**/			
						
						$no_of_ads_for_current_page=mysql_num_rows($query_run);
						/**--------------**/
						$query_for_all_records="SELECT `AD_ID` FROM `temp_ads` WHERE $where_ad_title AND $where_ad_content AND $where_date_and_time";
						$query2_run=mysql_query($query_for_all_records);
						$total_records_found=mysql_num_rows($query2_run);
						$suffix=($total_records_found>1)?'s':'';
						if($no_of_ads_for_current_page==0)
						{
							echo '<table width="100%" style="margin-top:10px;"><tr ><td align="center"  width="50%" ><font class="no_results_found_box" >Sorry, this search yielded no results.</font></td></tr></table>';
							die();
						}
						else
						{
							/**Dislay all ads for current page according to user information upto ad show limit (start)**/
							$i=1;
							echo'<table width="97%" style="margin:0 0 10 0;"><tr style="padding:0 0 0 0">';
							echo'	<tr>
										<td align="center">
											<font color="#666666" face="Trebuchet MS, Arial, Helvetica, sans-serif" style="font-weight:bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Showing '.($page_start+$no_of_ads_for_current_page).' out of '.$total_records_found.' ad application',$suffix,' found. </font>'; 
							if($page_start>0)
								echo'<input type="submit" value="Previous" name="previous" align="right" class="next_and_previous_button"/>';
							if(($page_start+$no_of_ads_to_show)<$total_records_found)
								echo'<input type="submit" value="Next" name="next"  align="right" class="next_and_previous_button"/>';	
							echo '</td></tr></table><table width="100%" style="margin:0 0 0 0;">';	
										
							while($row=mysql_fetch_assoc($query_run))
							{	
								/** Display one particular ad among all the ads to be shown for current page (Start)**/
								$ad_id=stripslashes($row['AD_ID']);
								$tad_title=stripslashes($row['AD_TITLE']);
								$date_and_time=stripslashes($row['DATE_AND_TIME']);
								/** chopping big strings to smaller size (Start)**/	
								$ad_title=substr($tad_title,0,$no_of_characters_in_names);
								/** chopping big strings to smaller size (End)**/
								/** Including ... if string is bigger (start)**/
								if(strlen($ad_title)<strlen($tad_title))
								{
									$ad_title=$ad_title.' ...';
									/**echo "name is bigger for ...";**/
								}
								
								echo '<tr >
									<td  class="ad_text_box" style="margin-top:15 0 0 0">
										<table cellpadding="1" cellspacing="0" border="0" width="100%" class="ad_text">
											<tr valign="top">
												<td colspan="2">
												<a href="manage_new_ads_applications.php?id='.$ad_id.'" style="text-decoration:none;" class="ad_titles">'.$ad_title.'</a>&nbsp;<strong>On </strong>'.$date_and_time.'
												</td>
												
												<td colspan=2 align="right" ><a href="manage_new_ads_applications.php?id='.$ad_id.'" class="full_details" font-size:15px;"><font class="full_details">Full details..</font></a>
												</td>
												<td width="50px">
													<input type="button" value="Validate" class="validate_button" onCLick="window.location=\'new_ad_application_validate.php?id='.$ad_id.'\'">
												</td>
												<td width="50px">
													<input type="button" value="Edit" class="edit_button" onCLick="window.location=\'new_ad_application_edit.php?id='.$ad_id.'\'">
												</td>
												<td  width="50px">
													<input type="button" value="Delete" class="delete_button" onCLick="window.location=\'new_ad_application_delete.php?id='.$ad_id.'\'">
												</td>
											</tr>
										</table>
									</td>
								  </tr>';	
								  /** Display one particular ad among all the ads to be shown for current page (end)**/
							}
							echo '</table>';
							echo'<font color="#666666" face="Trebuchet MS, Arial, Helvetica, sans-serif" style="font-weight:bold">Showing '.($page_start+$no_of_ads_for_current_page).' out of '.$total_records_found.' ad application',$suffix,' found. </font>';  
							if($page_start>0)
								echo'<input type="submit" value="Previous" name="previous" align="right" class="next_and_previous_button"/>';
							if(($page_start+$no_of_ads_to_show)<$total_records_found)
								echo'<input type="submit" value="Next" name="next"  align="right" class="next_and_previous_button"/></form>';	
							/**Dislay all ads for current page according to user information upto ad show limit (end)**/			
						}	
					}
				?>
				
				
				<? /**++++++++++++++++++++++**/?>
				
				
				<?php
					require_once 'connect.inc.php';
					/**Showing full details of a ad with the place_id (start)**/
					if(isset($_GET['id']))
					{
						
						$ad_id=$_GET['id'];
						$query="SELECT * FROM `temp_ads` WHERE `AD_ID`='$ad_id'";
						$query_run=mysql_query($query);
						$row=mysql_fetch_assoc($query_run);
						$ad_id=$row['AD_ID'];
						$poster_name=$row['POSTER_NAME'];
						$poster_email_id=$row['POSTER_EMAIL_ID'];
						$poster_contact_number=$row['POSTER_CONTACT_NUMBER'];
						$place_name=$row['PLACE_NAME'];
						$place_address=$row['PLACE_ADDRESS'];
						$ad_title=$row['AD_TITLE'];
						$ad_content=$row['AD_CONTENT'];
						$date_and_time=$row['DATE_AND_TIME'];
						$timestamp=$row['TIMESTAMP'];
						
						
								/** Determining the description string size and adding spaces if no spaces are there (start)**/
								$strings_to_add_spaces=array($ad_title,$poster_name,$poster_email_id,$place_name,$place_address,$ad_title,$ad_content); /**All the string to add spaces if length is more**/
								
								$total_strings_to_add_spaces=count($strings_to_add_spaces);
								for($k=0;$k<$total_strings_to_add_spaces;$k++)
								{	
									
									$string=$strings_to_add_spaces[$k];
									/**echo "<br>string inside spacing loop<br>$string<br>";**/
									$string_length=strlen($string);
									for($i=0;$i<$string_length;$i=$i+$no_of_characters_in_each_ad_row)
									{
										
										$contains_space_on_right=false;
										if($string_length<$no_of_characters_in_each_ad_row)
											$search_length=$string_length;
										else
											$search_length=$no_of_characters_in_each_ad_row;		
										for($j=$i;$j<$search_length;$j++)
										{
											
											if($string[$j]==' ')
											{
												$contains_space_on_right=true;
												
												break;
												
											}	
										}
										if(($contains_space_on_right==false))
										{
											if($i-$no_of_characters_in_each_ad_row>=0)
											{
												$contains_space_on_left=false;
												for($f=$i;$f>=($i-$no_of_characters_in_each_ad_row+1);$f--)
												{
													
													if($string[$f]==' ')
													{
														$contains_space_on_left=true;
														
														break;
													}	
												}
												if($contains_space_on_left==false)
												{
													
													$string=substr_replace($string,' ',$i,0);
												}
											}
										}
									}	
									$strings_to_add_spaces[$k]=$string;
								}
								$ad_title=$strings_to_add_spaces[0];
								$poster_name=$strings_to_add_spaces[1];
								$poster_email_id=$strings_to_add_spaces[2];
								$place_name=$strings_to_add_spaces[3];
								$place_address=$strings_to_add_spaces[4];
								$ad_title=$strings_to_add_spaces[5];
								$ad_content=$strings_to_add_spaces[6];
								
								
								
								
								/** Determining the description string size and adding spaces if no spaces are there (end)**/
								
						echo '
							  <table align="center" width="100%" style="margin:0 0 0 0;">
							  	  
								  <tr align="center">
									<td align="center">
										<form>
											<input type="button" value="Back" class="next_and_previous_button" onClick="history.go(-1);">
										</form>
									</td>
								  </tr>	
								  <tr>
									<td  class="detailed_text_box" style="margin-top:10px;">
										<table cellpadding="1" cellspacing="0" border="0" width="100%" class="ad_detail_text" >
											<tr valign="top">
											  <td colspan="2" >Posted on '.$date_and_time.'</td>
											</tr>
											<tr valign="top">
											  <td colspan="2" class="full_ad_titles">'.$ad_title.'</td>
											</tr>
											<tr valign="top" valign="top">
											  <td class="ad_detail_text_title">Poster Name</td>
											  <td>: '.$poster_name.'</td>
											</tr>
											
											<tr valign="top">
											  <td class="ad_detail_text_title">Poster Email ID</td>
											  <td>: '.$poster_email_id.'</td>
											</tr>
											<tr valign="top">
											  <td  width="20%"  class="ad_detail_text_title">Poster Contact Number</td>
											  <td>: '.$poster_contact_number.'</td>
											</tr>
											<tr valign="top">
											  <td  class="ad_detail_text_title">Place Name</td>
											  <td>: '.$place_name.'</td>
											</tr>
											<tr valign="top">
											  <td   class="ad_detail_text_title">Place Address</td>
											  <td>: '.$place_address.'</td>
											</tr>
											
											
											<tr>
												<td colspan=2 class="full_ad_title">Ad Title : '.$ad_title.'</td>
											</tr>
											<tr valign="top">
												<td colspan=2 class="full_ad_content"><br>'.$ad_content.'</td>
											</tr>
											<tr>
												<td colspan=2 align="right">
													<input type="button" value="Validate" class="validate_button" onCLick="window.location=\'new_ad_application_validate.php?id='.$ad_id.'\'">
													<input type="button" value="Edit" class="edit_button" onCLick="window.location=\'new_ad_application_edit.php?id='.$ad_id.'\'">
												
													<input type="button" value="Delete" class="delete_button" onCLick="window.location=\'new_ad_application_delete.php?id='.$ad_id.'\'">
												</td>
											</tr>
										</table>
									</td>
								  </tr>
								  
							  </table>';
							  
					}
					/**Showing full details of a ad with the place_id (end)**/
				?>
				</form>
		</td>
    </tr>
</table>
</html>










