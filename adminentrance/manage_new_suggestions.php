<?php
	

	require_once 'connect.inc.php';
	
	$no_of_suggestions_to_show=25;
	$suggestion_line_break_position=35;
	$suggestion_width=600;
	$no_of_characters_in_each_suggestion_row=50;
	$description_string_length=140;
	$no_of_characters_in_names=15;

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
		
		
		.suggestion_text
		{
			font:"Trebuchet MS", Arial, Helvetica, sans-serif;
			color:#FFF;
			font-size:18px;
			font-weight:lighter;
			text-shadow: 0px 2px 3px rgba(0,0,0,0.5);
			
		}
		
		.suggestion_text_box
		{
			background-color:#79BCFF;
			border:3px black;
			border-radius:10px;
			
			padding:5px 10px 5px 10px;
			box-shadow: 0px 2px 10px rgba(0,0,0,5);
		}
		.suggestion_text_box:hover
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
		.suggestion_detail_text_title
		{
			color:#FFF;
			text-shadow: 2px 0px 3px rgba(0,0,0,0.5);
		}
		.suggestion_detail_text
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
		
		.about_the_place
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
		.full_place_names
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
			function blank_place_text_box(text_box)
			{
				if(text_box.value=="Place Name")
					text_box.value='';
			}
			function blank_for_text_box(text_box)
			{
				if(text_box.value=="For")
					text_box.value='';
			}
			function blank_area_text_box(text_box)
			{
				if(text_box.value=="In Area")
					text_box.value='';
			}
			function place_text_box_text_recover(text_box)
			{
				if((text_box.value=='')||(text_box.value==' '))
					text_box.value="Place Name";
			}
			function for_text_box_text_recover(text_box)
			{
				if((text_box.value=='')||(text_box.value==' '))
					text_box.value="For";
			}
			function area_text_box_text_recover(text_box)
			{
				if((text_box.value=='')||(text_box.value==' '))
					text_box.value="In Area";
			}
			//mechanism to change the color of previous numbers on hover on other numbers (start)
			function change_color_of_rating(rate_number)
			{
				
				if(rate_number.value==1)
				{
					document.getElementById('r1').style.backgroundColor='#CC6600';
				}
				
				if(rate_number.value==2)
				{
					document.getElementById('r1').style.backgroundColor='#FFCC66';
					document.getElementById('r2').style.backgroundColor='#FFCC66';
				}
				if(rate_number.value==3)
				{
					document.getElementById('r1').style.backgroundColor='#FFFF00';
					document.getElementById('r2').style.backgroundColor='#FFFF00';
					document.getElementById('r3').style.backgroundColor='#FFFF00';
				}
				if(rate_number.value==4)
				{
					document.getElementById('r1').style.backgroundColor='#C0F12E';
					document.getElementById('r2').style.backgroundColor='#C0F12E';
					document.getElementById('r3').style.backgroundColor='#C0F12E';
					document.getElementById('r4').style.backgroundColor='#C0F12E';
				}
				if(rate_number.value==5)
				{
					document.getElementById('r1').style.backgroundColor='#33CC33';
					document.getElementById('r2').style.backgroundColor='#33CC33';
					document.getElementById('r3').style.backgroundColor='#33CC33';
					document.getElementById('r4').style.backgroundColor='#33CC33';
					document.getElementById('r5').style.backgroundColor='#33CC33';
				}
				
			}
			//mechanism to change the color of previous numbers on hover on other numbers (end)
			//mechanism to clear the rate number background color to default color (start)
			function clear_rating_color()
			{
				
				document.getElementById('r1').style.backgroundColor='#0CF';
				document.getElementById('r2').style.backgroundColor='#0CF';
				document.getElementById('r3').style.backgroundColor='#0CF';
				document.getElementById('r4').style.backgroundColor='#0CF';
				document.getElementById('r5').style.backgroundColor='#0CF';
				
			}
			//mechanism to clear the rate number background color to default color (end)
			//mechnism to dynamically change the rating (start)
			function rate(a)
			{
				
				var rate_number=a.value;
				if(window.XMLHttpRequest)
				{
					xmlhttp=new XMLHttpRequest();
					
				}
				else
				{
					xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');
				}
				
				xmlhttp.onreadystatechange=function()
				{	
					if(xmlhttp.readyState==4 && xmlhttp.status==200)
					{
						
					}	
				}
				
				parameters='rate_number='+rate_number+'&id=<?php 
																if(isset($_GET['id']))
																{
																	$sid=$_GET['id'];
																    echo $sid;
																}
															?>';
				
				xmlhttp.open('POST','rate.php',true);
				xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
				xmlhttp.send(parameters);
			}
			
			//mechnism to dynamically change the rating (end)
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
        	Manage New Suggestions
        </td>
    </tr>
    
    <tr >
    	<td>
        	<form  action="manage_new_suggestions.php?page_start=<?php 
				if(isset($_POST['search'])||(!isset($_POST['search'])&&!isset($_POST['next'])))
				{
					$page_start=0;
					echo $page_start;
				}
				if(isset($_POST['next']))
				{
					
					$page_start=$_GET['page_start']+$no_of_suggestions_to_show;
					echo $page_start;	
				}
				if(isset($_POST['previous']))
				{
					
					if(($_GET['page_start']-$no_of_suggestions_to_show)>=0)
					{
						$page_start=$_GET['page_start']-$no_of_suggestions_to_show;
					}
					echo $page_start;	
				}
				$page_end=$no_of_suggestions_to_show;
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
										<input type="text" name="name" id="name" onFocus="blank_place_text_box(this);" onBlur="place_text_box_text_recover(this);" class="search_text_box" value="<?php if(isset($_POST['name'])){echo $_POST['name'];} else echo "Place Name";?>"/>
									</td>
									
									<td>
										<input type="text" name="for" onFocus="blank_for_text_box(this);" onBlur="for_text_box_text_recover(this);" class="search_text_box" value="<?php if(isset($_POST['for'])){echo $_POST['for'];} else echo "For";?>"/>
									</td>
									
									<td>
										<input type="text" name="area" onFocus="blank_area_text_box(this);" onBlur="area_text_box_text_recover(this);" class="search_text_box" value="<?php if(isset($_POST['area'])){echo $_POST['area'];} else echo "In Area";?>"/>
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
					if((isset($_POST['name'])||isset($_POST['for'])||isset($_POST['area'])))
					{	
						$name=mysql_real_escape_string(htmlentities(trim($_POST['name'])));
						$for=mysql_real_escape_string(htmlentities(trim($_POST['for'])));	
						$area=mysql_real_escape_string(htmlentities(trim($_POST['area'])));	
						
						if(($name==NULL)||($name=="Place Name"))
							$name='%';
						if(($for==NULL)||($for=="For"))
							$for='%';
						if(($area==NULL)||($area=="In Area"))
							$area='%';	
						/**seaching algo start**/	
								$where_name ="";
								$where_for ="";
								$where_area ="";
								
								$name_keywords=preg_split('/[\s]+/',$name);
								$for_keywords=preg_split('/[\s]+/',$for);
								$area_keywords=preg_split('/[\s]+/',$area);
								
								$total_name_keywords=count($name_keywords);
								$total_for_keywords=count($for_keywords);
								$total_area_keywords=count($area_keywords);
								
								foreach($name_keywords as $key=>$keyword)
								{
									$where_name.="`NAME` LIKE '%$keyword%'";
									if($key!=($total_name_keywords-1))
										$where_name.=" OR ";
								}
								foreach($for_keywords as $key=>$keyword)
								{
									$where_for.="`FOR` LIKE '%$keyword%'";
									if($key!=($total_for_keywords-1))
										$where_for.=" OR ";
								} 
								foreach($area_keywords as $key=>$keyword)
								{
									$where_area.="`ADDRESS` LIKE '%$keyword%'";
									if($key!=($total_area_keywords-1))
										$where_area.=" OR ";
								}  
								
								$query="SELECT * FROM `temp_places` WHERE $where_name AND $where_for AND $where_area ORDER BY `TIMESTAMP` LIMIT $page_start, $page_end";
								$query_run=mysql_query($query);	
						/**seaching algo end**/			
						
						$no_of_suggestions_for_current_page=mysql_num_rows($query_run);
						/**--------------**/
						$query_for_all_records="SELECT `PLACE_ID` FROM `temp_places` WHERE $where_name AND $where_for AND $where_area";
						$query2_run=mysql_query($query_for_all_records);
						$total_records_found=mysql_num_rows($query2_run);
						$suffix=($total_records_found>1)?'s':'';
						if($no_of_suggestions_for_current_page==0)
						{
							echo '<table width="100%" style="margin-top:10px;"><tr ><td align="center"  width="50%" ><font class="no_results_found_box" >Sorry, this search yielded no results.</font></td></tr></table>';
							die();
						}
						else
						{
							/**Dislay all suggestions for current page according to user information upto suggestion show limit (start)**/
							$i=1;
							echo'<table width="97%" style="margin:0 0 10 0;"><tr style="padding:0 0 0 0">';
							echo'	<tr>
										<td align="center">
											<font color="#666666" face="Trebuchet MS, Arial, Helvetica, sans-serif" style="font-weight:bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Showing '.($page_start+$no_of_suggestions_for_current_page).' out of '.$total_records_found.' result',$suffix,' found. </font>'; 
							if($page_start>0)
								echo'<input type="submit" value="Previous" name="previous" align="right" class="next_and_previous_button"/>';
							if(($page_start+$no_of_suggestions_to_show)<$total_records_found)
								echo'<input type="submit" value="Next" name="next"  align="right" class="next_and_previous_button"/>';	
							echo '</td></tr></table><table width="100%" style="margin:0 0 0 0;">';	
										
							while($row=mysql_fetch_assoc($query_run))
							{	
								/** Display one particular suggestion among all the suggestions to be shown for current page (Start)**/
								$place_id=stripslashes($row['PLACE_ID']);
								$tname=stripslashes($row['NAME']);
								$date_and_time=stripslashes($row['DATE_AND_TIME']);
								/** chopping big strings to smaller size (Start)**/	
								$name=substr($tname,0,$no_of_characters_in_names);
								/** chopping big strings to smaller size (End)**/
								/** Including ... if string is bigger (start)**/
								if(strlen($name)<strlen($tname))
								{
									$name=$name.' ...';
									/**echo "name is bigger for ...";**/
								}
								
								echo '<tr >
									<td  class="suggestion_text_box" style="margin-top:15 0 0 0">
										<table cellpadding="1" cellspacing="0" border="0" width="100%" class="suggestion_text">
											<tr valign="top">
												<td colspan="2" >
												<a href="manage_new_suggestions.php?id='.$place_id.'" style="text-decoration:none;" class="place_names">'.$name.'</a>&nbsp;<strong>On </strong>'.$date_and_time.'
												</td>
												
												<td colspan=2 align="right" ><a href="manage_new_suggestions.php?id='.$place_id.'" class="full_details" font-size:15px;"><font class="full_details">Full details..</font></a>
												</td>
												<td width="50px">
													<input type="button" value="Validate" class="validate_button" onCLick="window.location=\'user_suggestion_validate.php?id='.$place_id.'\'">
												</td>
												<td width="50px">
													<input type="button" value="Edit" class="edit_button" onCLick="window.location=\'user_suggestion_edit.php?id='.$place_id.'\'">
												</td>
												<td  width="50px">
													<input type="button" value="Delete" class="delete_button" onCLick="window.location=\'user_suggestion_delete.php?id='.$place_id.'\'">
												</td>
											</tr>
										</table>
									</td>
								  </tr>';	
								  /** Display one particular suggestion among all the suggestions to be shown for current page (end)**/
							}
							echo '</table>';
							echo'<font color="#666666" face="Trebuchet MS, Arial, Helvetica, sans-serif" style="font-weight:bold">Showing '.($page_start+$no_of_suggestions_for_current_page).' out of '.$total_records_found.' result',$suffix,' found. </font>';  
							if($page_start>0)
								echo'<input type="submit" value="Previous" name="previous" align="right" class="next_and_previous_button"/>';
							if(($page_start+$no_of_suggestions_to_show)<$total_records_found)
								echo'<input type="submit" value="Next" name="next"  align="right" class="next_and_previous_button"/></form>';	
							/**Dislay all suggestions for current page according to user information upto suggestion show limit (end)**/			
						}	
					}
				?>
				
				
				<? /**++++++++++++++++++++++**/?>
				
				
				<?php
					require_once 'connect.inc.php';
					/**Showing full details of a suggestion with the place_id (start)**/
					if(isset($_GET['id']))
					{
						
						$place_id=$_GET['id'];
						$query="SELECT * FROM `temp_places` WHERE `PLACE_ID`='$place_id'";
						$query_run=mysql_query($query);
						$row=mysql_fetch_assoc($query_run);
						$place_id=$row['PLACE_ID'];
						$name=$row['NAME'];
						$description=$row['DESCRIPTION'];
						$for=$row['FOR'];
						$address=$row['ADDRESS'];
						$contact_number=$row['CONTACT_NUMBER'];
						$email=$row['EMAIL_ID'];
						$website=$row['WEBSITE'];
						$suggester_name=$row['SUGGESTER_NAME'];
						$suggester_email_id=$row['SUGGESTER_EMAIL_ID'];
						$date_and_time=$row['DATE_AND_TIME'];
						$image_name=$row['IMAGE_NAME'];
						
								/** Determining the description string size and adding spaces if no spaces are there (start)**/
								$strings_to_add_spaces=array($name,$description,$for,$address,$email,$website,$description,$suggester_name,$suggester_email_id); /**All the string to add spaces if length is more**/
								
								$total_strings_to_add_spaces=count($strings_to_add_spaces);
								for($k=0;$k<$total_strings_to_add_spaces;$k++)
								{	
									
									$string=$strings_to_add_spaces[$k];
									/**echo "<br>string inside spacing loop<br>$string<br>";**/
									$string_length=strlen($string);
									for($i=0;$i<$string_length;$i=$i+$no_of_characters_in_each_suggestion_row)
									{
										
										$contains_space_on_right=false;
										if($string_length<$no_of_characters_in_each_suggestion_row)
											$search_length=$string_length;
										else
											$search_length=$no_of_characters_in_each_suggestion_row;		
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
											if($i-$no_of_characters_in_each_suggestion_row>=0)
											{
												$contains_space_on_left=false;
												for($f=$i;$f>=($i-$no_of_characters_in_each_suggestion_row+1);$f--)
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
								$name=$strings_to_add_spaces[0];
								$description=$strings_to_add_spaces[1];
								$for=$strings_to_add_spaces[2];
								$address=$strings_to_add_spaces[3];
								$email=$strings_to_add_spaces[4];
								$website=$strings_to_add_spaces[5];
								$description=$strings_to_add_spaces[6];
								$suggester_name=$strings_to_add_spaces[7];
								$suggester_email_id=$strings_to_add_spaces[8];
								
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
										<table cellpadding="1" cellspacing="0" border="0" width="100%" class="suggestion_detail_text" >
											<tr valign="top">
											  <td colspan="2" >On '.$date_and_time.'</td>
											</tr>
											<tr valign="top">
											  <td colspan="2" class="full_place_names">'.$name.'</td>
											</tr>
											<tr valign="top" valign="top">
											  <td class="suggestion_detail_text_title">For</td>
											  <td>: '.$for.'</td>
											</tr>
											
											<tr valign="top">
											  <td class="suggestion_detail_text_title">Address</td>
											  <td>: '.$address.'</td>
											</tr>
											<tr valign="top">
											  <td  width="20%"  class="suggestion_detail_text_title">Contact no. </td>
											  <td>: '.$contact_number.'</td>
											</tr>
											<tr valign="top">
											  <td  class="suggestion_detail_text_title">Email</td>
											  <td>: '.$email.'</td>
											</tr>
											<tr valign="top">
											  <td   class="suggestion_detail_text_title">Website</td>
											  <td>: '.$website.'</td>
											</tr>
											<tr valign="top">
											  <td   class="suggestion_detail_text_title">Suggester\'s Name</td>
											  <td>: '.$suggester_name.'</td>
											</tr>
											<tr valign="top">
											  <td   class="suggestion_detail_text_title">Suggester\'s Email ID</td>
											  <td>: '.$suggester_email_id.'<br><br></td>
											</tr>
											<tr>
												<td colspan=2 class="about_the_place">About '.$name.' :</td>
											</tr>
											<tr valign="top">
												<td colspan=2 class="full_description"><br>'.$description.'</td>
											</tr>
											<tr>
												<td colspan=2 class="about_the_place">Place image :</td>
											</tr>';
											if($image_name!='' && $image_name!='N/A')
												echo '<tr>
															<td colspan=2 ><br><img src="../assets/img/place_images/'.$image_name .'" style="height:240px;width:400px;"></td>        
														</tr>';
											else
												echo '<tr valign="top">
															<td colspan=2 >Not available</td>
														</tr>';
											
											echo '
											<tr>
												<td colspan=2 align="right">
													<input type="button" value="Validate" class="validate_button" onCLick="window.location=\'user_suggestion_validate.php?id='.$place_id.'\'">
													<input type="button" value="Edit" class="edit_button" onCLick="window.location=\'user_suggestion_edit.php?id='.$place_id.'\'">
												
													<input type="button" value="Delete" class="delete_button" onCLick="window.location=\'user_suggestion_delete.php?id='.$place_id.'\'">
												</td>
											</tr>
										</table>
									</td>
								  </tr>
								  
							  </table>';
							  
					}
					/**Showing full details of a suggestion with the place_id (end)**/
				?>
				</form>
		</td>
    </tr>
</table>
</html>










