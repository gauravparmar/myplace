<?php
@$file_name=$_FILES['file']['name'];
@$tmp_name=$_FILES['file']['tmp_name']; 
@$type=$_FILES['file']['type'];
@$sizeinbytes=$_FILES['file']['size'];
$maxsize=5242880;
$extension=strtolower(substr($file_name,strpos($file_name,'.')+1));

if(isset($file_name))
{
	if(!empty($file_name))
	{
		if(($extension=='jpg'||$extension=='jpeg'||$extension=='png'||$extension=='gif')&&(($type=='image/jpeg')||($type=='image/jpg')||($type=='image/png')||($type=='image/gif'))&&($sizeinbytes<=$maxsize))
		{
			$location='place_images/';
			$new_file_name=time()+19800;
			$new_file_name=$new_file_name.'.'.$extension;
			if(move_uploaded_file($tmp_name,$location.$new_file_name))
				echo '<strong>'.$file_name.'</strong> file has been uploaded to the upload folder.';			
			else
				echo 'Error in uploading.';
		}
		else
			echo 'Extension is not .jpg/.jpeg and size must be 2 MB or less.';
	}
	else
		echo 'Please choose a file.';
}
?>
<form action="index.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file" /><br /><br />
    <input type="submit" value="submit" />
</form>
