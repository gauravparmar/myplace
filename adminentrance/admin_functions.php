<?php
	require 'connect.inc.php';
    require_once 'core.inc.php';
	if(!loggedin())
		header("Location: ../index.php");
	
	/**Getting current time and timestamp(start)**/
	$timestamp=time()+19800;
	$current_date=gmdate('D, d-M-Y ',$timestamp);
	$current_time=gmdate(' H:i:s',$timestamp);	
	/**Getting current time and timestamp(end)**/  
											
?>
<html>
    <head>
    	<style type="text/css">
			.top_most_container
			{
				margin-top:5px;
				background:#70B0F0;
				border-radius:0px;
				box-shadow:0px 2px 10px rgba(0,0,0,1);
				margin-bottom:12px;
			}
			.admin_message
			{
				padding:0 0 0 10;
				font-size:18px;
			}
			.admin_name
			{
				color:#07F;
				font-size:18px;
				font-weight:bold;
			}
			.current_ip_info
			{
				font:Trebuchet MS, Arial, Helvetica, sans-serif;
				font-size:18px;
				color:#7B0;
			}
			.time
			{
				color:#000;
			}
			.info_titles
			{
				font-weight:bold;
				color:#FFF;
				font-size:18px;
				font-family:Trebuchet MS, Arial, Helvetica, sans-serif;
				background:#7B0;
				box-shadow:0px 2px 5px rgba(0,0,0,0.7);
				border:thick;
				padding-top:3px;
				padding-bottom:3px;
				z-index:10;
			}
			.admin_function_title
			{
				font-weight:bold;
				background:#FFF;
				font-family:Trebuchet MS, Arial, Helvetica, sans-serif;
				padding-left:10px;
				padding-top:5px;
				padding-bottom:5px;
			}
			.main_admin_functions
			{
				
				background:#CCC;
				font-family:"Arial Black", Gadget, sans-serif;
				padding-left:28px;
				color:#07F;
				font-size:17px;
				
			}
			.log_out_button
			{
				border-width:0px;
				border-color:#7B0;
				border-radius:7px;
				background:#79BCFF;
				color:#FFF;
				font:"Trebuchet MS", Arial, Helvetica, sans-serif;
				font-weight:bold;
				box-shadow: 0px 3px 6px rgba(0,0,0,1);
				text-shadow: 0px 2px 6px rgba(0,0,0,1);
				padding:2 10 5 10;
			}
			.log_out_button:hover,.log_out_button:focus
			{
				background:#7B0;
				box-shadow: 0px 3px 6px rgba(127,127,127,0.7);
				text-shadow: 0px 3px 2px rgba(255,255,255,1);
				color:#000;
			}
			.function_names
			{
				background:#70B0F0;
				font-size:16px;
				color:#FFF;
				border:0px;
				font-weight:bold;
				border-radius:5px;
				padding:0px 5px 0px 5px;
				text-shadow:0px 2px 3px rgba(0,0,0,1);
				box-shadow: 0px 2px 3px rgba(0,0,0,1);
			}
			.function_names:hover
			{
				background:#7B0;
				color:#000;
				text-shadow:0px 2px 3px rgba(255,255,255,1);
				box-shadow:inset 0px 2px 3px rgba(255,255,255,1);	
			}
			.visit_number
			{
				background:#7B0;
				color:#FFF;
				text-shadow:0px 2px 3px rgba(0,0,0,1);
				border-radius:5px;
				padding:0px 8px 0px 8px;
				font-family:"Comic Sans MS", cursive;
			}
			.like_number
			{
				
				background:#7B0;
				color:#FFF;
				text-shadow:0px 2px 3px rgba(0,0,0,1);
				border-radius:5px;
				padding:0px 8px 0px 8px;
				font-family:"Comic Sans MS", cursive;
			}
        </style>
    	<script language="javascript">
			function startclock()
  			{
				var thetime=new Date();
				var nhours=thetime.getHours();
				var nmins=thetime.getMinutes();
				var nsecn=thetime.getSeconds();
				var date=thetime.getDate();
				var mon=thetime.getMonth()+1;
				var year=thetime.getFullYear();
				if(date<10)
					date="0"+date;
				if(mon<10)
					mon="0"+mon;								
				var AorP=" ";
			
				if (nhours>=12)
					AorP="PM";
				else
					AorP="AM";
			
				if (nhours>=13)
					nhours-=12;
			
				if (nhours==0)
					nhours=12;
			
				if (nsecn<10)
					nsecn="0"+nsecn;
			
				if (nmins<10)
					nmins="0"+nmins;
			
				document.getElementById('time').innerHTML="On <strong>"+date+"-"+mon+"-"+year+"</strong> At <strong>"+nhours+":"+nmins+":"+nsecn+" "+AorP+"</strong>";
				setTimeout("startclock()",1000);
			}
		</script>
    </head>
    <body  onLoad="startclock();" >
    	<table class="top_most_container"  width="90%"  cellpadding="10" align="center" cellspacing="0" border="0">
        	<tr>
            	<td>
                	<table border="0"  width="100%" cellpadding="0" cellspacing="0" style="border:1px solid black;">
                    	<tr class="info_titles" style="height:30px; font-size:20px; font-weight:bolder; border-radius:15px;"><!-- Top row for admin info title (start)-->
                        	<td  align="center"  style="border:1px solid black;">
                            	Admin Panel
                            </td>
                        </tr><!-- Top row for admin info title (end)-->
                    	<tr style="background:#FFF;"><!-- 2nd row for Admin and other info (start)-->
                        	<td>
                                <table width="100%" border="0" cellpadding="0" cellspacing="0"  style="border:1px solid black;">
                                	<tr height="30px">
                                    	<td>
											<?php
                                                
                                                if(loggedin())
                                                {
                                                    $admin_id=$_SESSION['logged_admin_id'];
                                                    $query="SELECT * FROM `admins` WHERE `ADMIN_ID`='".$admin_id."'";
                                                    $query_run=mysql_query($query);
                                                    $admin_info=mysql_fetch_assoc($query_run);
                                                    $full_name=$admin_info['FULL_NAME'];
                                                    echo '<font class="admin_message">Welcome <font class="admin_name">'.$full_name.'</font> !</font>';
                                                }
                                                else
                                                    header('Location: login.php');
                                            ?>	
                                        </td>
                                        <td class="current_ip_info" align="right">
                                            <?php
                                                $current_ip=$_SERVER['REMOTE_ADDR'];
                                                echo "From IP : <strong>$current_ip</strong>";
                                            ?>
                                      </td>
                                        <td  align="right" class="time" id="time">
                                        	
                                        </td>
                                        <td align="center" width="8%" style="padding:0 10 3 15;">
                                            <form action="logout.php" method="post" style="margin:0 0 0 0; padding:0 0 0 0;">
                                                <input type="submit" value="Log Out" class="log_out_button"/>
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                        	</td>
                        </tr><!-- 2nd row for Admin and other info (end)-->
                        <tr><!-- 3rd row for Admin Functions and Statistics info title (start)-->
                        	<table width="100%"  border="0"  cellpadding="0" cellspacing="5" >
                            	<tr>
                                	<td  width="50%">
                          <table border="0"  cellpadding="0" cellspacing="0"  width="100%"  style="border:1px solid black;">
                                        
                                            <tr > 
                                                <td valign="top"  align="center"  class="info_titles" colspan="2"  style="border:1px solid black;">
                                                    Manage Glog
                                                </td>
                                            </tr>
                                           
                                            <tr>
                                                <td class="admin_function_title" style="border:1px solid black;">
                                                 	1.Manage Suggestions   
                                                </td>
                                            </tr>
											<tr  style="padding:0px 0px 0px 0px;">
                                                <td class="main_admin_functions" style="margin:0 0 0 0;border:1px solid black;">
                                                	<form action="add_new_suggestion.php" method="post" style=" margin:5 0 5 0;">
                                                    	<li><input type="submit" value="Add New Suggestion" class="function_names"></li>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr  style="padding:0px 0px 0px 0px;">
                                                <td class="main_admin_functions" style="margin:0 0 0 0;border:1px solid black;">
                                                	<form action="manage_new_suggestions.php" method="post" style=" margin:0 0 5 0;">
                                                    	<li><input type="submit" value="Manage New Suggestions" class="function_names"></li>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr  style="margin:0 0 0 0;">
                                                <td class="main_admin_functions"  style="margin:0 0 0 0;border:1px solid black;">
                                                	<form action="manage_available_suggestions.php" method="post" style=" margin:0 0 10 0;">
                                                    	<li><input type="submit" value="Manage Available Suggestions" class="function_names"></li>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="admin_function_title"  style="border:1px solid black;">
                                                    2. Manage Ads
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="main_admin_functions" style="border:1px solid black;">
                                                	<form action="manage_new_ads_applications.php" method="post" style=" margin:5 0 5 0;">
                                                    	<li><input type="submit" value="Manage New Ads Applications" class="function_names"></li>
                                                    </form>
                                                    
                                                </td>
                                            </tr>
                                             <tr>
                                                <td class="main_admin_functions" style="border:1px solid black;">
                                                	<form action="manage_old_ads.php" method="post" style=" margin:0 0 10 0;">
                                                    	<li><input type="submit" value="Manage Old Ads" class="function_names"></li>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                            	<td class="admin_function_title" style="border:1px solid black;"> 
                                                	3. Manage Emails
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                            	<td class="main_admin_functions" style="border:1px solid black;">
                                                	<form action="email_all_privileged_users.php" method="post" style=" margin:5 0 5 0;">
                                                    	<li><input type="submit" value="Email All Privileged Users" class="function_names"></li>
                                                    </form>
                                                	
                                                </td>
                                            </tr>
                                            <tr>
                                            	<td class="main_admin_functions" style="border:1px solid black;">
                                                	<form action="email_anyone.php" method="post" style=" margin:0 0 10 0;">
                                                    	<li><input type="submit" value="Email Anyone" class="function_names"></li>
                                                    </form>
                                                	
                                                </td>
                                            </tr>
                                            <tr  class="admin_function_title">
                                            	<td class="admin_function_title" style="border:1px solid black;">
                                                        4. Manage Privileged Users and Feedbacks
                                           		</td>
                                            </tr>
                                            <tr>
                                            	<td class="main_admin_functions" style="border:1px solid black;">
                                                	<form action="manage_privileged_users.php" method="post" style=" margin:5 0 5 0;">
                                                    	<li><input type="submit" value="Manage Privileged Users" class="function_names"></li>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                            	<td class="main_admin_functions" colspan="2"  style="border:1px solid black;">
                                                	<form action="manage_feedbacks.php" method="post" style=" margin:0 0 10 0;">
                                                    	<li><input type="submit" value="Manage Feedbacks" class="function_names"></li>
                                                    </form>
                                                	
                                                </td>
                                            </tr>
                                            <tr  class="admin_function_title">
                                            	<td class="admin_function_title"  style="border:1px solid black;">
                                                        5. Miscellaneous
                                           		</td>
                                            </tr>
                                            <tr>
                                            	<td class="main_admin_functions" colspan="2" style="border:1px solid black;">
                                                	<form action="login_log.php" method="post" style=" margin:5 0 10 0;">
                                                    	<li><input type="submit" value="Login Log" class="function_names"></li>
                                                    </form>
                                                	
                                                </td>
                                            </tr>
                                            
                                        </table>
                                    </td>
                                    
                                    <td valign="top">
                                        <table  cellpadding="5" cellspacing="0"  width="100%">
                                        
                                            <tr>
                                                <td valign="top"  align="center"  class="info_titles" colspan="2" style="border:1px solid black;">
                                                    Current Statistics
                                                </td>
                                            </tr>
                                            <tr  class="admin_function_title">
                                                <td style="padding-left:10px;border:1px solid black;" width="30%" >
                                                 	Total Hits    
                                                </td>
                                                <td  style="border:1px solid black;">
                                                    <font class="visit_number">
                                                    <?php 
                                                        require_once 'connect.inc.php';
                                                        $query="SELECT `HITS` FROM `total_hits`";
                                                        $query_run=mysql_query($query);
                                                        $hits=mysql_result($query_run,0,'HITS');
                                                        echo $hits;
                                                    ?> 
                                                    </font>
                                                </td>
                                            </tr>
                                            <tr  class="admin_function_title">
                                                <td style="padding-left:10px;border:1px solid black;">
                                                 	Total Likes 
                                                </td>
                                                <td  style="border:1px solid black;">
                                                	<font class="like_number">
                                                            <?php
                                                                $query="SELECT `LIKES` FROM `total_likes`";
                                                                $query_run=mysql_query($query);
                                                                echo mysql_result($query_run,0,'LIKES');
                                                            ?>
                                                    </font>        
                                                </td>
                                            </tr>
                                           
                                        </table>
                                    </td>
                                </tr>    
                          </table>       
                        </tr><!-- 3rd row for Admin Functions and Statistics info title (end)-->
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>

