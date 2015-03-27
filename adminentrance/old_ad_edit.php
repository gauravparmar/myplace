<html>
	<?php
		require_once 'connect.inc.php';
	?>
    <head>
        <style type="text/css">
            .title
            {
                color:#FFF;
                font-weight:bold;
                font-family:Trebuchet MS, Arial, Helvetica, sans-serif;
                background:#70B000;
                
            }
            .edit_box
            {
                background-color:#79BCFF;
                border:3px black;
                border-radius:10px;
                font:Trebuchet MS, Arial, Helvetica, sans-serif;
                font-size:16px;
                font-weight:bold;
                
                padding:0px 10px 5px 10px;
                box-shadow: 0px 2px 10px rgba(0,0,0,5);
                margin-top:10px;
                
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
                width:700px;
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
            .ok_button
            {
                    border-radius:10px;
                    background:#0C3;
                    color:#000;
                    
                    font:"Trebuchet MS", Arial, Helvetica, sans-serif;
                    font-weight:bold;
                    box-shadow: 0px 3px 6px rgba(0,0,0,0.7);
                    text-shadow: 0px 2px 3px rgba(0,0,0,0.5);
                    padding:3 15 5 15;
                    
            }
            .ok_button:hover,.ok_button:focus
            {
                    background:#7B0;
                    box-shadow: 0px 3px 6px rgba(127,127,127,0.7);
                    text-shadow: 0px 3px 2px rgba(255,255,255,1);
                    color:#000;
                    
            }
            .cancel_button
            {
    
                    border-radius:10px;
                    background:#000;
                    color:#FFF;
                    
                    font:"Trebuchet MS", Arial, Helvetica, sans-serif;
                    font-weight:bold;
                    box-shadow: 0px 3px 6px rgba(0,0,0,0.7);
                    text-shadow: 0px 2px 3px rgba(0,0,0,0.5);
                    padding:3 15 5 15;
            }
            .cancel_button:hover,.cancel_button:focus
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
    </head>
    <body>
    
    <?php
        require_once 'connect.inc.php';
        $id=$_GET['id'];
        $query="SELECT * FROM `ads` WHERE `AD_ID`='$id'";
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
		$date_and_time=mysql_real_escape_string(htmlentities(trim($row['DATE_AND_TIME'])));
		$timestamp=mysql_real_escape_string(htmlentities(trim($row['TIMESTAMP'])));
       
        
        if(isset($_POST['poster_name'])||isset($_POST['poster_email_id'])||isset($_POST['poster_contact_number'])||isset($_POST['place_name'])||isset($_POST['place_address'])||isset($_POST['ad_title'])||isset($_POST['ad_content']))
        {
            
            $poster_name=mysql_real_escape_string(htmlentities(trim($_POST['poster_name'])));
            $poster_email_id=mysql_real_escape_string(htmlentities(trim($_POST['poster_email_id'])));
            $poster_contact_number=mysql_real_escape_string(htmlentities(trim($_POST['poster_contact_number'])));
            $place_name=mysql_real_escape_string(htmlentities(trim($_POST['place_name'])));
            $place_address=mysql_real_escape_string(htmlentities(trim($_POST['place_address'])));
            $ad_title=mysql_real_escape_string(htmlentities(trim($_POST['ad_title'])));
            $ad_content=mysql_real_escape_string(htmlentities(trim($_POST['ad_content'])));
			
            
            $query="UPDATE `ads` SET `POSTER_NAME`='$poster_name',`POSTER_EMAIL_ID`='$poster_email_id',`POSTER_CONTACT_NUMBER`='$poster_contact_number',`PLACE_NAME`='$place_name',`PLACE_ADDRESS`='$place_address',`AD_TITLE`='$ad_title',`AD_CONTENT`='$ad_content' WHERE `AD_ID`=$id";
            if(mysql_query($query))
                header('Location:manage_old_ads.php');
            else
                echo "Error in editing.";
        }
        if(isset($_POST['cancel']))
        {
            header('Location:manage_old_ads.php');
        }
    ?>
    
    <table cellpadding="3" cellspacing="0" border="0" width="100%">
        <tr>
            <td align="center">
                <input type="button" class="back_button" value="Back"  onClick="history.go(-1);">
            </td>
        </tr>
        <tr>
            <td>
            	<form action="old_ad_edit.php?id=<?php echo $id;?>" method="post">
                    <table border="0" cellpadding="5" cellspacing="0" class="edit_box" width="100%">
                        <tr>
                            <td class="title" colspan="2">
                                Edit Old Ad
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Date and Time
                            </td>
							<td>
                                <input type="text" disabled class="text_box" name="date_and_time" value="<?php echo $date_and_time;?>" />
                            </td>
						</tr>  
                        <tr>	
                            <td>
                                Poster Name
                            </td>
							<td>
                                <input type="text" class="text_box" name="poster_name" value="<?php echo $poster_name;?>" />
                            </td>
						</tr>  
                        <tr>	
                            <td >
                                Poster Email ID
                            </td>
							<td>
                                <input type="text" class="text_box" name="poster_email_id" value="<?php echo $poster_email_id;?>" />
                            </td>
						</tr>  
                        <tr>	
                            <td>
                                Poster Contact Number
                            </td>
							<td>
                                <input type="text" class="text_box" name="poster_contact_number" value="<?php echo $poster_contact_number;?>" />
                            </td>
                        </tr>
                        <tr>                           
                            <td>
                                Place Name
                            </td>
							<td>
                                <input type="text" class="text_box" name="place_name" value="<?php echo $place_name;?>" />
                            </td>
						</tr>  
                        <tr>	
                            <td>
                                Place Address
                            </td>
							<td>
                                <input type="text" class="text_box" name="place_address" value="<?php echo $place_address;?>" />
                            </td>
						</tr>  
                        <tr>	
                            <td>
                                Ad Title
                            </td>
							<td>
                                <input type="text" class="text_box" name="ad_title" value="<?php echo $ad_title;?>" />
                            </td>
						</tr>  
                        <tr>	
                            <td>
                                Ad Content
                            </td>
							<td>
                                <input type="text" class="text_box" name="ad_content" value="<?php echo $ad_content;?>" />
                            </td>                          
                        </tr>  
                        <tr>
							<td>
							</td>
                        	<td>
                                <input type="submit" value="Ok" class="ok_button" name="Ok">
                           
                                <input type="button" value="Cancel" class="cancel_button" name="Cancel"  onClick="history.go(-1);">
                            </td>
                        </tr>
                    </table> 
                </form>       
            </td>            
        </tr> 
        
    </table>
    
    </body>
</html>