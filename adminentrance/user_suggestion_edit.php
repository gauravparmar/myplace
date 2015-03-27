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
        $query="SELECT * FROM `temp_places` WHERE `PLACE_ID`='$id'";
        $query_run=mysql_query($query);
        $row=mysql_fetch_assoc($query_run);
        $for=mysql_real_escape_string(htmlentities(trim($row['FOR'])));
        $name=mysql_real_escape_string(htmlentities(trim($row['NAME'])));
        $description=mysql_real_escape_string(htmlentities(trim($row['DESCRIPTION'])));
        $address=mysql_real_escape_string(htmlentities(trim($row['ADDRESS'])));
        $contact_number=mysql_real_escape_string(htmlentities(trim($row['CONTACT_NUMBER'])));
        $email=mysql_real_escape_string(htmlentities(trim($row['EMAIL_ID'])));
        $website=mysql_real_escape_string(htmlentities(trim($row['WEBSITE'])));
        $suggester_name=mysql_real_escape_string(htmlentities(trim($row['SUGGESTER_NAME'])));
        $suggester_email_id=mysql_real_escape_string(htmlentities(trim($row['SUGGESTER_EMAIL_ID'])));
        $date_and_time=mysql_real_escape_string(htmlentities(trim($row['DATE_AND_TIME'])));
		$timestamp=mysql_real_escape_string(htmlentities(trim($row['TIMESTAMP'])));
        $new_image_name=mysql_real_escape_string(htmlentities(trim($row['IMAGE_NAME'])));


        
        if(isset($_POST['for'])||isset($_POST['name'])||isset($_POST['description'])||isset($_POST['address'])||isset($_POST['contact_number'])||isset($_POST['email'])||isset($_POST['website'])||isset($_POST['suggester_name'])||isset($_POST['suggester_email_id'])||isset($_POST['place_image']))
        {           
            $for=mysql_real_escape_string(htmlentities(trim($_POST['for'])));
            $name=mysql_real_escape_string(htmlentities(trim($_POST['name'])));
            $description=mysql_real_escape_string(htmlentities(trim($_POST['description'])));
            $address=mysql_real_escape_string(htmlentities(trim($_POST['address'])));
            $contact_number=mysql_real_escape_string(htmlentities(trim($_POST['contact_number'])));
            $email=mysql_real_escape_string(htmlentities(trim($_POST['email'])));
            $website=mysql_real_escape_string(htmlentities(trim($_POST['website'])));
            $suggester_name=mysql_real_escape_string(htmlentities(trim($_POST['suggester_name'])));
            $suggester_email_id=mysql_real_escape_string(htmlentities(trim($_POST['suggester_email_id'])));			
            
            @$image_name=$_FILES['place_image']['name'];
            @$tmp_name=$_FILES['place_image']['tmp_name']; 
            @$type=$_FILES['place_image']['type'];
            @$sizeinbytes=$_FILES['place_image']['size'];
            $maxsize=5242880;
            $extension=strtolower(substr($image_name,strpos($image_name,'.')+1));    

            /*setting place image information*/
              
              if(!isset($new_image_name))
                    $new_image_name='N/A';
              if(isset($image_name))
              {
                if(!empty($image_name))
                {
                  if(($extension=='jpg'||$extension=='jpeg'||$extension=='png'||$extension=='gif')&&(($type=='image/jpeg')||($type=='image/jpg')||($type=='image/png')||($type=='image/gif'))&&($sizeinbytes<=$maxsize))
                  {
                    $location='../assets/img/place_images/';
                    $new_image_name=time()+19800;
                    $new_image_name=$new_image_name.'.'.$extension;
                    if(!move_uploaded_file($tmp_name,$location.$new_image_name))
                      /*echo '<strong>'.$image_name.'</strong> file has been uploaded to the upload folder with name'.$new_image_name;      
                    else*/
                       echo 'Error in uploading the image.';
                    else
                        echo 'file uploaded';

                  }
                  else
                    echo 'Uploaded file is not a jpg, jpeg, png or gif file or its size is greater than 5 MB.';
                }
              }
              else
              {
                //$new_image_name=$old_image_name;
                echo 'new image not provided';
              }
                
              
                  
            /*/setting place image information*/


            $query="UPDATE `temp_places` SET `FOR`='$for',`NAME`='$name',`DESCRIPTION`='$description',`ADDRESS`='$address',`CONTACT_NUMBER`='$contact_number',`EMAIL_ID`='$email',`WEBSITE`='$website',`SUGGESTER_NAME`='$suggester_name',`SUGGESTER_EMAIL_ID`='$suggester_email_id',`IMAGE_NAME`='$new_image_name' WHERE `PLACE_ID`=$id";
            if(mysql_query($query))
                header('Location:manage_new_suggestions.php');
                //echo 'done';
            else
                echo "Error in editing.";
        }
        if(isset($_POST['cancel']))
        {
            header('Location:manage_new_suggestions.php');
        }
    ?>
    <form action="user_suggestion_edit.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
    <table cellpadding="3" cellspacing="0" border="0" align="center">
        <tr>
            <td align="center">
                <input type="button" class="back_button" onClick="history.go(-1);" value="Back">
            </td>
        </tr>
        <tr>
            <td>
                <table border="0" cellpadding="5" cellspacing="0" class="edit_box">
                    <tr>
                        <td class="title">
                            Edit New User Suggestion
                        </td>
                    </tr>
                    <tr>
                    	<td>
                            On
                        </td>
                        <td>
                            <input type="text" disabled class="text_box" name="date_and_time" value="<?php echo $date_and_time;?>" />
                        </td>
                    </tr>
                    <tr>   
                        <td>
                            Name
                        </td>
                        <td>
                            <input type="text" class="text_box" name="name" value="<?php echo $name;?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            For
                        </td>
                        <td>
                            <input type="text" class="text_box" name="for" value="<?php echo $for;?>" />
                        </td>
                    </tr> 
                    
                    <tr>
                        <td>
                            Description
                        </td>
                         <td>
                            <input type="text" class="text_box" name="description" value="<?php echo $description;?>" />
                        </td>
                    </tr>
                    <tr>    
                        <td>
                            Address
                        </td>
                        <td>
                            <input type="text" class="text_box" name="address" value="<?php echo $address;?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Contact Number
                        </td>
                        <td>
                            <input type="text" class="text_box" name="contact_number"  maxlength="10" value="<?php echo $contact_number;?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            E-mail
                        </td>
                        <td>
                            <input type="text" class="text_box" name="email" value="<?php echo $email;?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Website
                        </td>
                         <td>
                            <input type="text" class="text_box" name="website" value="<?php echo $website;?>" />
                        </td>
                    </tr>
                    <tr>    
                        <td>
                            Suggester's Name
                        </td>
                        <td>
                            <input type="text" class="text_box" name="suggester_name" value="<?php echo $suggester_name;?>"  />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Suggester's Email ID
                        </td>
                        <td>
                            <input type="text" class="text_box" name="suggester_email_id" value="<?php echo $suggester_email_id;?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Place Image
                        </td>
                        <td>
                             <img src="../assets/img/place_images/<?php if(isset($new_image_name)) echo $new_image_name; else echo $old_image_name;?>" style="height:150px;width:200px;" alt="Place image not available">        
                             <br><input type="file" name="place_image" />
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
            </td>            
        </tr> 
        
    </table>
    </form>
    </body>
</html>