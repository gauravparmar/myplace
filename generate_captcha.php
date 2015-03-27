<?php
	session_start();
	header('content-type: image/jpeg');
	$text=$_SESSION['secure'];
	$font_size=40;
	$image_width=200;
	$image_height=45;
	$image=imagecreate($image_width,$image_height);
	imagecolorallocate($image,255,255,255);
	$text_color=imagecolorallocate($image,58,154,196);
	$line_color=imagecolorallocate($image,0,0,0);
	for($x=1;$x<=200;$x++) //number of lines 
	{
		$x1=rand(1,$image_width);
		$y1=rand(1,$image_width);
		$x2=rand(1,$image_width);
		$y2=rand(1,$image_width);
		imageline($image,$x1,$y1,$x2,$y2,$line_color);
	}
	imagettftext($image,$font_size,2,$image_width/4,35,$text_color,'./font_for_captcha.TTF',$text); //imagettftext(image,font size,angle to render font,left margin,height from top(include text),font color,font name,text)
	imagejpeg($image);
	
	

 

?>
