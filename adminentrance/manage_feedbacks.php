<?php
	require_once 'connect.inc.php';
	$no_of_feedbacks_to_show=25;
	$feedback_line_break_position=35;
	$feedback_width=600;
	$no_of_characters_in_each_feedback_row=50;
	$description_string_length=140;
	$no_of_characters_in_names=25;
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
				color:#666;
				background-color:#79BCFF;
				border-radius:28px;
				box-shadow: 0px 2px 10px rgba(0,0,0,5);
				text-shadow: 0px 2px 3px rgba(255,255,255,0.5);
				padding:5 10 5 10;
			}
			.next_and_previous_button
			{
				
				border-width:0px;
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
			
			
			.feedback_text
			{
				font:"Trebuchet MS", Arial, Helvetica, sans-serif;
				color:#FFF;
				font-size:18px;
				font-weight:lighter;
				text-shadow: 0px 2px 3px rgba(0,0,0,0.5);
			}
			
			.feedback_text_box
			{
				background-color:#79BCFF;
				border:3px black;
				border-radius:10px;
				padding:5px 10px 5px 10px;
				box-shadow: 0px 2px 10px rgba(0,0,0,5);
			}
			.feedback_text_box:hover
			{
				background-color:#70B0F0;
			}
			.place_names
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
			.place_names:hover
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
			.feedback_detail_text_title
			{
				color:#FFF;
				text-shadow: 2px 0px 3px rgba(0,0,0,0.5);
			}
			.feedback_detail_text
			{
				font:"Trebuchet MS", Arial, Helvetica, sans-serif;
				color:#000;
				font-size:18px;
				font-weight:lighter;
				text-shadow: 2px 0px 3px rgba(255,255,255,0.5);
			}
			
			.full_description
			{
				color:#000;
				text-shadow:none;
				text-shadow: 2px 0px 3px rgba(255,255,255,0.5);
			}
			
			.full_comment
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
			
			.delete_button
			{
					
					
					border:0px;
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
				
				border-width:0px;
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
			function blank_place_text_box(text_box)
			{
				if(text_box.value=="Name")
					text_box.value='';
			}
			function blank_email_id_text_box(text_box)
			{
				if(text_box.value=="Email ID")
					text_box.value='';
			}
			function blank_comment_text_box(text_box)
			{
				if(text_box.value=="Comment")
					text_box.value='';
			}
			function name_text_box_text_recover(text_box)
			{
				if((text_box.value=='')||(text_box.value==' '))
					text_box.value="Name";
			}
			function email_id_text_box_text_recover(text_box)
			{
				if((text_box.value=='')||(text_box.value==' '))
					text_box.value="Email ID";
			}
			function comment_text_box_text_recover(text_box)
			{
				if((text_box.value=='')||(text_box.value==' '))
					text_box.value="Comment";
			}
			
			
			
        </script>
    </head>
<body topmargin="0px">  
<table width="98%" cellspacing="10">  
    <tr align="center">
    	<td>
        	<a href="admin_functions.php" class="back_button" style="text-align:center;">Back To Admin Panel</a><br>
        </td>
    </tr>
    <tr>
        <td class="function_title">
        	Manage Feedbacks
        </td>
    </tr>
    <tr >
    	<td>
        	<form  action="manage_feedbacks.php?page_start=<?php 
				if(isset($_POST['search'])||(!isset($_POST['search'])&&!isset($_POST['next'])))
				{
					$page_start=0;
					echo $page_start;
				}
				if(isset($_POST['next']))
				{
					
					$page_start=$_GET['page_start']+$no_of_feedbacks_to_show;
					echo $page_start;	
				}
				if(isset($_POST['previous']))
				{
					
					if(($_GET['page_start']-$no_of_feedbacks_to_show)>=0)
					{
						$page_start=$_GET['page_start']-$no_of_feedbacks_to_show;
					}
					echo $page_start;	
				}
				$page_end=$no_of_feedbacks_to_show;
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
										<input type="text" name="name" id="name" onFocus="blank_place_text_box(this);" onBlur="name_text_box_text_recover(this);" class="search_text_box" value="<?php if(isset($_POST['name'])){echo $_POST['name'];} else echo "Name";?>"/>
									</td>
									
									<td>
										<input type="text" name="email_id" onFocus="blank_email_id_text_box(this);" onBlur="email_id_text_box_text_recover(this);" class="search_text_box" value="<?php if(isset($_POST['email_id'])){echo $_POST['email_id'];} else echo "Email ID";?>"/>
									</td>
									
									<td>
										<input type="text" name="area" onFocus="blank_comment_text_box(this);" onBlur="comment_text_box_text_recover(this);" class="search_text_box" value="<?php if(isset($_POST['area'])){echo $_POST['area'];} else echo "Comment";?>"/>
									</td>
									<td>
										<input type="submit" class="search_button" value="          " name="search"/>
							
									</td>   
								</tr>	       
							</table>
						</td>
					</tr>
				</table>
				<!-- 
				This is a comment.
				-->
				<?php
					if((isset($_POST['name'])||isset($_POST['email_id'])||isset($_POST['area'])))
					{	
						$full_name=mysql_real_escape_string(htmlentities(trim($_POST['name'])));
						$email_id=mysql_real_escape_string(htmlentities(trim($_POST['email_id'])));	
						$comment=mysql_real_escape_string(htmlentities(trim($_POST['area'])));	
						
						if(($full_name==NULL)||($full_name=="Name"))
							$full_name='%';
						if(($email_id==NULL)||($email_id=="Email ID"))
							$email_id='%';
						if(($comment==NULL)||($comment=="Comment"))
							$comment='%';	
						/**seaching algo start**/	
								$where_name ="";
								$where_email_id ="";
								$where_comment ="";
								
								$full_name_keywords=preg_split('/[\s]+/',$full_name);
								$email_id_keywords=preg_split('/[\s]+/',$email_id);
								$comment_keywords=preg_split('/[\s]+/',$comment);
								
								$total_name_keywords=count($full_name_keywords);
								$total_email_id_keywords=count($email_id_keywords);
								$total_comment_keywords=count($comment_keywords);
								
								foreach($full_name_keywords as $key=>$keyword)
								{
									$where_name.="`FULL_NAME` LIKE '%$keyword%'";
									if($key!=($total_name_keywords-1))
										$where_name.=" OR ";
								}
								foreach($email_id_keywords as $key=>$keyword)
								{
									$where_email_id.="`EMAIL_ID` LIKE '%$keyword%'";
									if($key!=($total_email_id_keywords-1))
										$where_email_id.=" OR ";
								} 
								foreach($comment_keywords as $key=>$keyword)
								{
									$where_comment.="`COMMENT` LIKE '%$keyword%'";
									if($key!=($total_comment_keywords-1))
										$where_comment.=" OR ";
								}  
								
								$query="SELECT * FROM `feedbacks` WHERE $where_name AND $where_email_id AND $where_comment ORDER BY `TIMESTAMP`  LIMIT $page_start, $page_end";
								$query_run=mysql_query($query);	
						/**seaching algo end**/			
						
						$no_of_feedbacks_for_current_page=mysql_num_rows($query_run);
						/**--------------**/
						$query_for_all_records="SELECT `FEEDBACK_ID` FROM `feedbacks` WHERE $where_name AND $where_email_id AND $where_comment";
						$query2_run=mysql_query($query_for_all_records);
						$total_records_found=mysql_num_rows($query2_run);
						$suffix=($total_records_found>1)?'s':'';
						if($no_of_feedbacks_for_current_page==0)
						{
							echo '<table width="100%" style="margin-top:10px;"><tr ><td align="center"  width="50%" ><font class="no_results_found_box" >Sorry, this search yielded no results.</font></td></tr></table>';
							die();
						}
						else
						{
							/**Dislay all feedbacks for current page according to user information upto feedback show limit (start)**/
							$i=1;
							echo'<table width="97%" style="margin:0 0 10 0;"><tr style="padding:0 0 0 0">';
							echo'	<tr>
										<td align="center">
											<font color="#666666" face="Trebuchet MS, Arial, Helvetica, sans-serif" style="font-weight:bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspShowing '.($page_start+$no_of_feedbacks_for_current_page).' out of '.$total_records_found.' result',$suffix,' found. </font>'; 
							if($page_start>0)
								echo'<input type="submit" value="Previous" name="previous" align="right" class="next_and_previous_button"/>';
							if(($page_start+$no_of_feedbacks_to_show)<$total_records_found)
								echo'<input type="submit" value="Next" name="next"  align="right" class="next_and_previous_button"/>';	
							echo '</td></tr></table><table width="100%" style="margin:0 0 0 0;">';	
										
							while($row=mysql_fetch_assoc($query_run))
							{	
								/** Display one particular feedback among all the feedbacks to be shown for current page (Start)**/
								$feedback_id=stripslashes($row['FEEDBACK_ID']);
								$tname=stripslashes($row['FULL_NAME']);
								$date_and_time=stripslashes($row['DATE_AND_TIME']);
								/** chopping big strings to smaller size (Start)**/	
								$full_name=substr($tname,0,$no_of_characters_in_names);
								/** chopping big strings to smaller size (End)**/
								/** Including ... if string is bigger (start)**/
								if(strlen($full_name)<strlen($tname))
								{
									$full_name=$full_name.' ...';
									/**echo "name is bigger for ...";**/
								}
								echo '<tr >
									<td  class="feedback_text_box" style="margin-top:15 0 0 0">
										<table cellpadding="1" cellspacing="0" border="0" width="100%" class="feedback_text">
											<tr valign="top">
												<td colspan="2" >
												<a href="manage_feedbacks.php?id='.$feedback_id.'" style="text-decoration:none;" class="place_names">'.$full_name.'</a>&nbsp;<strong>Posted on : </strong>'.$date_and_time.'
												</td>
												
												<td colspan=2 align="right" ><a href="manage_feedbacks.php?id='.$feedback_id.'" class="full_details" font-size:15px;"><font class="full_details">Full details..</font></a>
												</td>
												<td  width="50px">
													<input type="button" value="Delete" class="delete_button" onCLick="window.location=\'feedback_delete.php?id='.$feedback_id.'\'">
												</td>
											</tr>
										</table>
									</td>
								  </tr>';	
								  /** Display one particular feedback among all the feedbacks to be shown for current page (end)**/
							}
							echo '</table>';
							echo'<font color="#666666" face="Trebuchet MS, Arial, Helvetica, sans-serif" style="font-weight:bold">Showing '.($page_start+$no_of_feedbacks_for_current_page).' out of '.$total_records_found.' result',$suffix,' found. </font>';  
							if($page_start>0)
								echo'<input type="submit" value="Previous" name="previous" align="right" class="next_and_previous_button"/>';
							if(($page_start+$no_of_feedbacks_to_show)<$total_records_found)
								echo'<input type="submit" value="Next" name="next"  align="right" class="next_and_previous_button"/></form>';	
							/**Dislay all feedbacks for current page according to user information upto feedback show limit (end)**/			
						}	
					}
				?>
				
				
				<? /**++++++++++++++++++++++**/?>
				
				
				<?php
					require_once 'connect.inc.php';
					/**Showing full details of a feedback with the FEEDBACK_ID (start)**/
					if(isset($_GET['id']))
					{
						
						$feedback_id=$_GET['id'];
						$query="SELECT * FROM `feedbacks` WHERE `FEEDBACK_ID`='$feedback_id'";
						$query_run=mysql_query($query);
						$row=mysql_fetch_assoc($query_run);
						$feedback_id=$row['FEEDBACK_ID'];
						$full_name=$row['FULL_NAME'];
						$email_id=$row['EMAIL_ID'];
						$comment=$row['COMMENT'];
						$date_and_time=$row['DATE_AND_TIME'];
						
								/** Determining the description string size and adding spaces if no spaces are there (start)**/
								$strings_to_add_spaces=array($full_name,$email_id,$comment); /**All the string to add spaces if length is more**/
								
								$total_strings_to_add_spaces=count($strings_to_add_spaces);
								for($k=0;$k<$total_strings_to_add_spaces;$k++)
								{	
									
									$string=$strings_to_add_spaces[$k];
									/**echo "<br>string inside spacing loop<br>$string<br>";**/
									$string_length=strlen($string);
									for($i=0;$i<$string_length;$i=$i+$no_of_characters_in_each_feedback_row)
									{
										
										$contains_space_on_right=false;
										for($j=$i;$j<$string_length;$j++)
										{
											
											if($string[$j]==' ')
											{
												$contains_space_on_right=true;
												
												break;
												
											}	
										}
										if(($contains_space_on_right==false))
										{
											if($i-$no_of_characters_in_each_feedback_row>=0)
											{
												$contains_space_on_left=false;
												for($f=$i;$f>=($i-$no_of_characters_in_each_feedback_row+1);$f--)
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
								$full_name=$strings_to_add_spaces[0];
								$email_id=$strings_to_add_spaces[1];
								$comment=$strings_to_add_spaces[2];
								
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
										<table cellpadding="1" cellspacing="0" border="0" width="100%" class="feedback_detail_text" >
											<tr valign="top">
											  <td >Posted on : '.$date_and_time.'</td>
											</tr>
											<tr valign="top">
											  <td  class="full_names">Poster : '.$full_name.'</td>
											</tr>
											<tr valign="top" valign="top">
											  <td>Email ID : '.$email_id.'</td>
											</tr>
											<tr>
												<td  class="full_comment">Comment:</td>
											</tr>
											<tr valign="top" valign="top">
											  <td >'.$comment.'</td>
											</tr>
											
											<tr>
												<td colspan=2 align="right">
													<input type="button" value="Delete" class="delete_button" onCLick="window.location=\'feedback_delete.php?id='.$feedback_id.'\'">
												</td>
											</tr>
										</table>
									</td>
								  </tr>
								  
							  </table>';
							  
					}
					/**Showing full details of a feedback with the FEEDBACK_ID (end)**/
				?>
				</form>
		</td>
    </tr>
</table>
</html>
