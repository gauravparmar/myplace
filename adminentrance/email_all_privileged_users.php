<style type="text/css">
	.email_form
	{
		background-color:#70B0F0;
		padding:10 10 10 10;
		border-radius:20px;
		box-shadow: 0px 2px 10px rgba(0,0,0,5);
		
		width:93%;
		margin-bottom:12px;
	}
	.email_form:hover
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
		width:95%;
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
			background:#7B0;
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
	.form_title
	{

		color:#FFF;
		font-size:22px;
		font-weight:bold;
		padding:3 20 5 20;
		border-radius:20px;
		background:#7B0;
		text-shadow: 0px 3px 6px rgba(0,0,0,1);
		font-family:"Comic Sans MS", cursive;
		box-shadow:inset 0px 0px 10px rgba(0,0,0,1);
		letter-spacing:3px;
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
		color:#FFF;
		font-family:"Comic Sans MS", cursive;
		padding:10 10 10 10;
		background:#7B0;
		border-radius:5px;
		text-shadow: 0px 1px 3px rgba(0,0,0,0.9);
		box-shadow:inset 0px 0px 20px rgba(0,0,0,0.4);
	}
	.suggestion_box_form
	{
		font:Comic Sans MS, cursive;
		font-size:16px;
		font-weight:bold;
		color:#FFF;
		text-shadow: 0px 3px 3px rgba(0,0,0,0.7);
	}
	.for_text_box_info
	{
		color:#000;
		font-size:15px;
		
		text-shadow: 0px 2px 3px rgba(255,255,255,0.7);
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

<body topmargin="15px">
    <table class="email_form" align="center">
    	<tr align="center">
            <td>
                <a href="admin_functions.php" class="back_button" style="text-align:center;">Back To Admin Panel</a><br><br>
            </td>
   		</tr>
        <tr>
            <td>
                <table width="100%" align="center">
                    <tr>
                        <td align="center">
                            <font color="#FF0000" face="Trebuchet MS, Arial, Helvetica, sans-serif" class="suggestion_notice">
                                <?php
                                    
                                    session_start();
                                    if(!isset($_SESSION['secure']))
                                    {
                                        $_SESSION['secure']=rand(1000,9999);
                                    }
                                    $generated_captcha=$_SESSION['secure'];
                                
                                    if(isset($_POST['subject'])||isset($_POST['message'])||isset($_POST['number']))
                                    {
                                        
                                        if(!empty($_POST['subject'])&&!empty($_POST['message'])&&!empty($_POST['number']))
                                        {
                                            
                                            if($_POST['number']==$generated_captcha)
                                            {
												require_once 'connect.inc.php';
                                                $subject=$_POST['subject'];
                                                $message=$_POST['message'];
                                                $header='From:Glog';
                                                $number=$_POST['number'];
												 
												/**Getting each privileged user to email and mailing(start)**/
												$query="SELECT `EMAIL_ID` FROM `privileged_users`";
												$query_run=mysql_query($query);
												$num_of_users=mysql_num_rows($query_run);
												if($num_of_users>0)
												{
													$e=0;
													while($user=mysql_fetch_assoc($query_run))
													{
														$to=$user['EMAIL_ID'];
														if(@mail($to,$subject,$message,$header))
														{															
														}
														else
															$e=$e+1;
														
													}
													if($e>0)
														echo 'Error.';	
													else
														echo 'Sent';
												}
												else
													echo "No Privileged Users exist.";
                                                /**Getting each privileged user to email and mailing(end)**/
                                            }
                                            else
                                                echo '&nbsp;&nbsp;  The number you entered did not match with the number provided in the image.&nbsp;&nbsp;  ';
                                            
                                        }
                                        else
                                            echo '&nbsp;&nbsp;  Please fill in all the * ( mandatory ) fields.&nbsp;&nbsp;';	
                                        $_SESSION['secure']=rand(1000,9999);	
                                    }
                                ?>
                                </font>	
                        </td>
                    </tr>
                </table>
                <form action="email_all_privileged_users.php" method="post">
                    <table cellpadding="5" cellspacing="0" class="suggestion_box_form" align="center" width="100%">
                        
                        <tr  valign="top" >
                            <td colspan="2" align="center" style=" border:10px thick #000;padding-right:3%;" >
                                <font class="form_title">Email All Privileged Users</font><br><br>
                            </td>
                        </tr>
                        <tr  valign="top">
                            <td colspan="2" align="right" style="padding-right:3%">
                                <font color="#FF0000">*</font><font size="3px"> = mandatory fields.</font>
                            </td>
                        </tr>
                        <tr valign="top">
                        <tr >
                            <td width="20%">
                                Subject 
                            </td>
                            <td>
                                : <input type="text" name="subject" class="text_box" maxlength="200"><font color="#FF0000"> * </font>
                            </td>
                        </tr>
                        <tr valign="top">
                            <td valign="top">
                                Message
                            </td>
                            <td>
                                : <textarea name="message" class="text_box" style="height:100px; max-height:100px; min-height:100px; max-width:95%; min-width:95%; vertical-align:text-top; padding: 3 10 5 10;" maxlength="1000"></textarea><font color="#FF0000"> * </font>
                            </td>
                        </tr>                                             
                        <tr>
                            <td>
                                Enter This No.
                            </td>
                            <td>
                                <table width="100%">
                                    <tr>
                                        <td width="8%">
                                            <img src="generate_captcha.php"  style="width:150px;"/>
                                        </td>
                                        <td align="left" width="100%">
                                            <input type="text" name="number" class="text_box" maxlength="4"><font color="#FF0000"> * </font>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>                       
                        <tr  valign="top">
                            <td>
                            </td>
                            <td width="100%" align="right" style="padding-right:5%;">
                                <input type="submit" value="Send" class="button">
                                <input type="reset" value="Reset" class="button">
                            </td>
                        </tr>
                    </table>                      
                </form>
            </td>
        </tr>
    </table>
</body>
