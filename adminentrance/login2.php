<?php
	require_once 'connect.inc.php';
	require_once 'core.inc.php';
	
	$current_ip=$_SERVER['REMOTE_ADDR'];
	
	if(!isset($_SESSION['secure']))
	{
		$_SESSION['secure']=rand(1000,9999);
	}
	$generated_captcha=$_SESSION['secure'];	
	
?>
<html>
    <head>
    	<link rel="icon" type="image/jpg" href="newicon.jpg">
        <style type="text/css">
            .suggestion_form
            {
				
                background-color:#70B0F0;
                padding:10 10 10 10;
                border-radius:13px;
                box-shadow: 0px 2px 10px rgba(0,0,0,5);
                width:60%;
				margin-bottom:12px;
				border:2px solid black;
            }
            .suggestion_form:hover
            {
                background-color:#79BCFF;
            }
            .text_box
            {
                border-radius:10px;
                height:35px;
                border:#000 solid 3px ;
                font:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
                font-size:15px;
                color:#666;
                font-weight:bold;
                padding:2 10 3 10;
                box-shadow: inset 0px 0px 7px rgba(90,90,180,0.3);
                text-shadow: 0px 2px 3px rgba(0,0,0,0.1);
                
            }
            .text_box:focus,.text_box:hover
            {
                border-color:#009;	
                color:#000;
                box-shadow: 0px 0px 20px rgba(255,255,255,5);
            }
            .button
            {
                border:3px #4596F8;
                    border-radius:5px;
                    background:#79BCFF;
                    color:#FFF;
                    
                    font:"Trebuchet MS", Arial, Helvetica, sans-serif;
                    font-weight:bold;
                    box-shadow: 0px 3px 6px rgba(0,0,0,1);
                    text-shadow: 0px 2px 3px rgba(0,0,0,0.5);
                    padding:5 20 7 20;
            }
            .button:focus,.button:hover
            {
                background:#70B0F0;
                box-shadow: 0px 3px 6px rgba(255,255,255,1);
            }
            .login
            {
                
                color:#FFF;
                background:#70B000;
                font-size:22px;
                font-weight:bold;
                padding:3 12 5 12;
                border-radius:6px;
                text-shadow: 0px 3px 8px rgba(0,0,0,1);
                box-shadow: 0px 3px 20px rgba(255,255,255,1);
                
                
                
                
            }
            
            .suggestion_notice
            {
                background:#FF0;
                font-size:12px;
                
                box-shadow:0px 0px 5px rgba(0,0,0,3);
                font-weight:bold;
            }	
            .suggestion_ok_notice
            {
                background:#0F0;
                color:#000;
            }
            .information
            {
                
                color:#000;
                font-weight:bold;
                padding-right:3%;
                text-shadow: 0px 3px 3px rgba(255,255,255,0.9);
            }
            .suggestion_box_form
            {
                font:Comic Sans MS, cursive;
                font-size:18px;
                font-weight:bold;
                color:#FFF;
                text-shadow: 0px 3px 3px rgba(0,0,0,0.7);
            }
            .for_text_box_info
            {
                color:#000;
                size:3px;
                text-shadow: 0px 2px 3px rgba(255,255,255,0.7);
            }
        </style>
    </head>
    <body topmargin="15px" >
        <table class="suggestion_form" align="center" >
            <tr>
                <td>
                    <table width="100%" >
                        <tr>
                            <td align="center">
                                <font color="#FF0000" face="Trebuchet MS, Arial, Helvetica, sans-serif" class="suggestion_notice">
                                    <?php

										if(loggedin())
												header('Location: admin_functions.php');
											else
											{	
												if(isset($_POST['Name'])||isset($_POST['Password'])||isset($_POST['number']))
												{
													if(!empty($_POST['username'])&&!empty($_POST['password'])&&!empty($_POST['number']))
													{
														if($_POST['number']==$generated_captcha)
														{
															require_once 'connect.inc.php';
															$username=mysql_real_escape_string(htmlentities(trim($_POST['username'])));
															$password=md5(mysql_real_escape_string(htmlentities(trim($_POST['password']))));
															$number=mysql_real_escape_string(htmlentities(trim($_POST['number'])));
															$query="SELECT * FROM `admins` WHERE `USERNAME`='$username' AND `PASSWORD`='$password'";
															$query_run=mysql_query($query);
															if($query_run)
															{
																
																$number_of_user=mysql_num_rows($query_run);
																if($number_of_user==1)
																{
																	
																	$user_info=mysql_fetch_assoc($query_run);
																	$_SESSION['logged_admin_id']=$user_info['ADMIN_ID'];
																	$_SESSION['logged_admin_ip']=$current_ip;
																	/**Adding login details (start)**/
																	/**Getting current time and timestamp(start)**/
																		$timestamp=time()+19800;
																		$current_time=gmdate('D, d-M-Y H:i:s',$timestamp);	
																	/**Getting current time and timestamp(end)**/ 
																	$query="INSERT INTO `log` VALUES('','$current_ip','$current_time','$timestamp')";
																	@$query_run=mysql_query($query);
																	/**Adding login details (end)**/
																	header('Location: admin_functions.php');
																}
																else
																	echo "&nbsp;&nbsp; Invalid user details! Please check again.&nbsp;&nbsp;  ";
															}
															else
																echo '&nbsp;&nbsp; Sorry! We can\'t log you in at this moment. Try again later.&nbsp;&nbsp;  ';	
														}
														else
															echo '&nbsp;&nbsp;  The number you entered did not match with the number provided in the image.&nbsp;&nbsp;  ';
													}
													else
														echo '&nbsp;&nbsp;  Please fill in all the fields.&nbsp;&nbsp;';	
													$_SESSION['secure']=rand(1000,9999);	
													echo "<br><br>";
												}	
											}  
											
										                                      
                                    ?>
                                    </font>	
                            </td>
                        </tr>
                    </table>
                    <form action="login.php" method="post">
                        <table cellpadding="5" cellspacing="0" class="suggestion_box_form" align="center" width="400px" border="0">
                            
                            <tr  valign="top" height="40">
                                <td colspan="2" align="center"  class="login" style="border:3px solid black;">
                                    <font>Log In</font>
                                </td>
                            </tr>
                            
                            <tr valign="top">
                                <td width="50%" >
                                    User Name
                                </td>
                                <td  align="right">
                                    <input type="text" name="username" class="text_box" maxlength="200">
                                </td>
                            </tr>
                            
                            <tr valign="top" >
                                <td >
                                    Password
                                </td>
                                <td align="right">
                                   <input type="password" name="password" class="text_box" maxlength="12">
                                </td>
                            </tr>
                            <tr>
                                <td  colspan="2" align="right">
                                    <img src="generate_captcha.php" style="border-radius:10px;"/>
                                </td>
                            </tr>
                            <tr width="60%">
                                <td>
                                    Enter Above Number
                                </td>
                                <td   align="right" >
                                    <input type="text" name="number" class="text_box" maxlength="4">
                                </td>
                            </tr>
                            
                            
                            <tr  valign="top">
                                <td>
                                </td>
                                <td width="100%" align="center">
                                            <input type="submit" value="Log In" class="button">
                                            <input type="reset" value="Reset" class="button">
                                </td>
                            </tr>
                        </table>       
                        
                    </form>
                </td>
            </tr>
        </table>
    </body>
</html>
<?php /**u:wgaurav p:wadmin**/?>