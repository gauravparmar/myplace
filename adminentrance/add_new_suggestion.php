<html>
	<style type="text/css">
        .suggestion_form
        {
            background-color:#70B0F0;
            padding:10 10 10 10;
            border-radius:20px;
            box-shadow: 0px 2px 10px rgba(0,0,0,5);
            margin-left:10px;
            width:95%;
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
            font-size:20px;
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
			function isNumericKey(e)
			{
				if (window.event) { var charCode = window.event.keyCode; }
				else if (e) { var charCode = e.which; }
				else { return true; }
				if (charCode > 31 && (charCode < 48 || charCode > 57)) { return false; }
				return true;
			}
	</script>
<body topmargin="10px">
	<table width="100%" style="margin-bottom:10px;">
    	<tr align="center">
        	<td align="center">
            	<a href="admin_functions.php" class="back_button" style="text-align:center;">
                	Back To Admin Panel
                </a>
       		</td>
       </tr>
    </table>
<div class="suggestion_form">
	<table width="100%">
    	<tr>
        	<td align="center">
            	<font color="#FF0000" face="Trebuchet MS, Arial, Helvetica, sans-serif" class="suggestion_notice">
					<?php
                        require_once '../connect.inc.php';
                        @session_start();
                        if(!isset($_SESSION['secure']))
                        {
                            $_SESSION['secure']=rand(1000,9999);
                        }
                        $generated_captcha=$_SESSION['secure'];
                    
                        if(isset($_POST['for'])||isset($_POST['name'])||isset($_POST['description'])||isset($_POST['address']))
                        {
                            if(!empty($_POST['for'])&&!empty($_POST['name'])&&!empty($_POST['description'])&&!empty($_POST['address']))
                            {
                                    require_once 'connect.inc.php';
                                    
                                    $for=mysql_real_escape_string(htmlentities(trim($_POST['for'])));
                                    $name=mysql_real_escape_string(htmlentities(trim($_POST['name'])));
									$description=mysql_real_escape_string(htmlentities(trim($_POST['description'])));
                                    $address=mysql_real_escape_string(htmlentities(trim($_POST['address'])));
                                    $contact_number=mysql_real_escape_string(htmlentities(trim($_POST['contact_number'])));
                                    $email=mysql_real_escape_string(htmlentities(trim($_POST['email'])));
                                    $website=mysql_real_escape_string(htmlentities(trim($_POST['website'])));
                                    
                                    if($contact_number=='')
                                        $contact_number='N/A';
                                    if($email=='')
                                        $email='N/A';
                                    if($website=='')
                                        $website='N/A';	
                                     
									/**Getting current time and timestamp(start)**/
											$timestamp=time()+19800;
                                            $current_time=gmdate('D, d-M-Y H:i:s',$timestamp);	
                                    /**Getting current time and timestamp(end)**/ 
									/****/
									$query="INSERT INTO `places` VALUES('','$for', '$name', '$description', '$address', '$contact_number', '$email', '$website',0,'$current_time','$timestamp')";
									if(mysql_query($query))
									{
										echo "*Record added.";
									}
									else
										echo "*Record not inserted. Please check for errors.";	
									
									/****/
									/*
                                    if($query_run)
                                    {
                                        echo ' <font class="suggestion_ok_notice">&nbsp;&nbsp;  Thank you for your valuable suggestion. It will be processed soon.&nbsp;&nbsp;  </font>';
                                    }
                                    else
                                        echo '&nbsp;&nbsp;  Sorry! Your suggestion can not be saved at this moment. Try again later.&nbsp;&nbsp;  ';*/	
                                
                                
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
    <form action="add_new_suggestion.php" method="post">
        <table cellpadding="2" cellspacing="0" class="suggestion_box_form" align="center" width="100%" border="0" >
            
            <tr  valign="top" >
                <td colspan="2" align="center" >
                    <font class="form_title">Add A Place</font>
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
                    Place Name
                </td>
                <td>
                    : <input type="text" name="name" class="text_box" maxlength="200"><font color="#FF0000"> * </font>
                </td>
            </tr>
            <tr valign="top">
                <td valign="top">
                    For
                </td>
                <td >
                    : <input type="text" name="for" class="text_box" maxlength="200"><font color="#FF0000"> * </font><font class="for_text_box_info"><br>&nbsp;&nbsp;&nbsp;&nbsp;Use , (comma) to separate things. e.g. - pizza, clothes, sweets etc</font>
                </td>
            </tr>
            <tr valign="top">
                <td valign="top">
                    Description
                </td>
                <td>
                    : <textarea name="description" class="text_box" style="height:100px; max-height:100px; min-height:100px; max-width:95%; min-width:95%; vertical-align:text-top; padding: 3 10 5 10;" maxlength="1000"></textarea><font color="#FF0000"> * </font>
                </td>
            </tr>
            
            <tr >
                <td>
                    Address/Area
                </td>
                <td>
                    : <input type="text" name="address" class="text_box" maxlength="200"><font color="#FF0000"> * </font>
                </td>
            </tr>
            
            <tr >
                <td>
                    Contact No.
                </td>
                <td>
                    : <input type="text" name="contact_number" class="text_box" maxlength="12" onKeyPress="return isNumericKey(event);">
                </td>
            </tr>
            
            <tr >
                <td>
                    Email
                </td>
                <td>
                    : <input type="text" name="email" class="text_box" maxlength="50">
                </td>
            </tr>
            
            <tr >
                <td>
                    URL
                </td>
                <td>
                    : <input type="text" name="website" class="text_box" maxlength="200">
                </td>
            </tr>         
            <tr  valign="top">
                <td>
                </td>
                <td width="100%" align="right" style="padding-right:5%;">
                            <input type="submit" value="Suggest" class="button">
                            <input type="reset" value="Reset" class="button">
                </td>
            </tr>
        </table>       
        
    </form>
</div>

</body>
</html>