<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="Glog. Your search ends here.">
        <meta name="keywords" content="Glog, searching, places, ads, suggestions, feedbacks, rating, rating place, post ads, search products, search services, advertise">
        <link rel="icon" type="image/jpg" href="icon.jpg">
        <title>Welcome to Glog</title>
        <style type="text/css">
			.top_row_left_menu
			{
				padding-left:5px;
				padding-right:5px;
				color:#CCC;
				font-size:13px;
				font-weight:bold;
				border-right:2px #CCC solid;
				font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
				text-decoration:none;	
				box-shadow:	 0px 15px 7px rgba(0,0,0,0.5);
			}
			.top_row_left_menu:hover
			{
				text-decoration:underline;
				background-color:#666;
				color:#7B0;
				box-shadow:	 0px 8px 25px rgba(255,255,255,0.8);
			}
			.header_extras
			{
				font-size:14px;
			}
			.like_number
			{
				
				background:#7B0;
				color:#FFF;
				text-shadow:0px 2px 3px rgba(0,0,0,1);
				border-radius:5px;
				padding:0px 8px 0px 8px;
				font-family:Verdana, Geneva, sans-serif;
				font-size:14px;
				font-weight:bold;
					
			}
			.visit_number
			{
				background:#7B0;
				color:#FFF;
				text-shadow:0px 2px 3px rgba(0,0,0,1);
				border-radius:5px;
				padding:0px 8px 0px 8px;
				font-family:Verdana, Geneva, sans-serif;
				font-size:14px;
				font-weight:bold;
				text-decoration:blink;
			}
			.like_button
			{
				background:#70B0F0;
				font-size:16px;
				color:#FFF;
				border:0px;
				font-weight:bold;
				border-radius:5px;
				padding:0px 5px 0px 5px;
				font-family:"Comic Sans MS", cursive;
				font-size:14px;
				text-shadow:0px 2px 3px rgba(0,0,0,1);
				box-shadow:inset 0px 2px 3px rgba(255,255,255,1);
			}
			.like_button:hover
			{
				background:#7B0;
				color:#000;
				text-shadow:0px 2px 3px rgba(255,255,255,1);
				box-shadow:inset 0px 2px 3px rgba(255,255,255,1);	
			}
			.header
			{
				box-shadow: 0px 5px 3px rgba(0,0,0,0.9);
				
				
			}
			
			.ad_block
			{
				background-color:#E2EEFC;
				color:#000;
				border-radius:8px;
				border:2px groove black;
				padding-left:10px;
				padding-right:10px;
				padding-top:10px;	
				vertical-align:top;
				box-shadow:0px 0px 10px rgba(0,0,0,1);
			}
			.ad_titles
			{
				background:#7B0;
				color:#000;
				font-family:"Times New Roman", Times, serif;
				
			}
			
			.ad_place_details
			{
				
				font-weight:bold;
			}
			.about_gaurav
			{
				background-color:#7B0;
				color:#000;
				border-radius:0px;
				height:200px;
				padding-left:10px;
				padding-right:10px;
				padding-top:10px;
				vertical-align:top;
				border:3px groove black;
				box-shadow:0px 0px 0px rgba(0,0,0,1);
			}
			.my_image
			{
				border:#000 3px;
				padding:5 5 5 5;
				box-shadow:0px 0px 10px rgba(0,0,0,1);
			}
			.my_message
			{
				color:#9F0;
				font-family:Verdana, Geneva, sans-serif;
				font-weight:bold;
				font-size:13px;
				
			}
			.footer
			{
				box-shadow: 0px -10px 15px rgba(0,0,0,1);	
			}
			#menubar
			{
				position:fixed;
				height:31px;
				width:100%;
			}
		</style>
        <script language="javascript">
			var liked_once=false;
			function resize(id)
			{
				var h,w;
				w=document.getElementById('frame_id').contentWindow.document.body.scrollWidth;
				h=document.getElementById('frame_id').contentWindow.document.body.scrollHeight;
				document.getElementById('frame_id').height=h+15;
				document.getElementById('frame_id').width=w;
			}
			function like()
			{
				if(liked_once==false)
				{
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
							document.getElementById('like_number').innerHTML=xmlhttp.responseText;
							
						}
					}
					xmlhttp.open('GET','like.inc.php?like=1',true);
					xmlhttp.send();
					liked_once=true;
				}
			}	
			function enlarge(t,name)
			{
				 if(name=="facebook")
				 t.src="facebook_iconb.png";
				 if(name=="twitter")
				 t.src="twitter_iconb.png";
				 if(name=="orcut")
				 t.src="orcut_iconb.png";
			}
			function minimize_icon(t,name)
			{
				 if(name=="facebook")
				 t.src="facebook_icon.png";
				 if(name=="twitter")
				 t.src="twitter_icon.png";
				 if(name=="orcut")
				 t.src="orcut_icon.png"; 
			}
        </script>
    </head>
    
    <body style="margin:0 0 0 0;">
    	<table width="100%" cellpadding="0" cellspacing="0" border="0"><!--base most table start-->
        	<tr  bgcolor="#000" id="menubar" width="100%" ><!--Top most row start-->
            	<!--Top most row first column (Start)-->
                <td >
                    <table  cellspacing="0" border="0" bordercolor="#000000">
                        <tr >
                        	<td>
                            	<a href="search.php" target="window" class="top_row_left_menu">Home</a>
                            </td>
                            <td  >
                            	<a href="services.php" target="window" class="top_row_left_menu" >Services</a>
                            </td>
                            <td>
                            	<a href="suggest.php" target="window" class="top_row_left_menu" style="color:#7B0; font-size:14px;">Suggest A Place</a>
                            </td>
							
                            <td   >
                            	<a href="advertise_with_us.php" target="window" class="top_row_left_menu" >Advertise With Us</a>
                            </td>
                           
                            <td  >
                            	<a href="feedback.php" target="window" class="top_row_left_menu" >Feedback</a>
                            </td>
                            <td >
                            	<a href="contact_us.php" target="window" class="top_row_left_menu" >Contact Us</a>
                            </td>
                        </tr>
                    </table>
                </td>
                <!--Top most row first column (end)-->
                <!--Top most row second column (start)-->
                <td align="right" style="padding-left:30px;">
                            	<table width="100%" align="right" bordercolor="#FFFFFF" border="0">
                                	<tr>
                                        <td >
                                            <font color=white class="header_extras" face="Comic Sans MS, cursive"><b>Visits:</b></font>
                                        </td>
                                        <td align="center">
                                            <font class="visit_number">
                                            <?php 
                                                require_once 'connect.inc.php';
                                                $query="SELECT `HITS` FROM `total_hits`";
                                                $query_run=mysql_query($query);
                                                $hits=mysql_result($query_run,0,'HITS');
                                                echo $incremented_hits=$hits+1;
                                                $query="UPDATE `total_hits` SET `HITS`='".mysql_real_escape_string($incremented_hits)."'";
                                                $query_run=mysql_query($query);
                                                
                                            ?> 
                                            </font>
                                        </td>
                                        <td>
                                            <font color=white class="header_extras" face="Comic Sans MS, cursive"><b>Likes:</b></font>
                                        </td>
                                    	<td align="center">
                                                <div class="like_number" id="like_number">
                                                	<?php
                                                		$query="SELECT `LIKES` FROM `total_likes`";
                                                    	$query_run=mysql_query($query);
                                                    	echo $old_likes=mysql_result($query_run,0,'LIKES');
													?>
                                                </div>
                                        </td>
                                        <td align="right">
                                        	<form>
                                        		<input type="button" class="like_button" value="Like Glog" onclick="like();"/>
                                        	</form>     
                                        </td>
                                    </tr>
                                </table>
                </td>
                <!--Top most row second column (end)-->
            </tr>
            <!--Top most row (end)-->
            <!--2nd row (start)-->
            <tr height="25px" class="header">
            	<td colspan="2" bgcolor="#70B0F0" width="95%" style="padding-top:35px;">
                	
                            	<img src="glog_logo.png" height="45px" width="15%"/>
                	
                </td>            
            </tr>
            <!--2nd row (end)-->
            <tr width="100%"><!--Main frame row start-->
                <td colspan="2" width="100%">
                    <table width="100%" height="54" border="0" cellpadding="0" cellspacing="0" style="margin:0 0 0 0;">
                    	<tr>
                        	<td width="20%" align="center" valign="top"><!-- middle right column contents start-->
								<table width="98%" style="margin-top:6px" border="0">
                                	<tr ><!--Ad1 (start)-->
                                    	<td  class="ad_block">
                                        	<table  width="100%">
                                            	<tr>
                                                	<td >
                                                    	<font class="ad_titles">Best College For B.Tech. In India<br /></font>
                                                        GIT has been declared as the best college in India for pursuing B.Tech. Hurry up! Get registered today.<br />
                                                    	<font class="ad_place_details">Gaurav Institute Of Technology<br />
                                                        M.G. Road, Indore<br />Contact:9999999999<br />Email: gauravparmariam @gmail.com</font>
                                                    </td>
                                                </tr>
                                                
                                            </table>
                                        </td>	
                                    </tr><!--Ad1 (end)-->
                                    <tr ><!--Ad2 (start)-->
                                    	<td  class="ad_block">
                                        	<table  width="100%">
                                            	<tr>
                                                	<td >
                                                    	<font class="ad_titles">Get 20% off on T-Shirts<br /></font>
                                                        <font class="ad_contents">Purchase 3 t-shirts on weekdays and get 20% discount on total bill amount. Try some new variety as well.<br /></font>
                                                    	<font class="ad_place_details">ABC Cloth Store<br />
                                                        Palasia, Indore<br />Contact:9875687895<br />Email: abcclothstore @gmail.com</font>
                                                    </td>
                                                </tr>
                                                
                                            </table>
                                        </td>	
                                    </tr><!--Ad2 (end)-->
                                    <tr ><!--Ad3 (start)-->
                                    	<td  class="ad_block">
                                        	<table  width="100%">
                                            	<tr>
                                                	<td >
                                                    	<font class="ad_titles">New French Pizza<br /></font>
                                                        <font class="ad_contents">Try our new French pizza @Rs.299/- and get lost in its delicious taste.<br /></font>
                                                    	<font class="ad_place_details">PG Pizza Center<br />
                                                        Rajwada, Indore<br />Contact:8987854589<br />Email: pgpizzacenter @gmail.com</font>
                                                    </td>
                                                </tr>
                                                
                                            </table>
                                        </td>	
                                    </tr><!--Ad3 (end)-->
                                    <tr ><!--Ad4 (start)-->
                                    	<td  class="ad_block">
                                        	<table  width="100%">
                                            	<tr>
                                                	<td >
                                                    	<font class="ad_titles">Best College For B.Tech. In India<br /></font>
                                                        <font class="ad_contents">GIT has been declared as the best college in India for pursuing B.Tech. Hurry up! Get registered today.<br /></font>
                                                    	<font class="ad_place_details">Gaurav Institute Of Technology<br />
                                                        M.G. Road, Indore<br />Contact:9999999999<br />Email: gauravparmariam @gmail.com</font>
                                                    </td>
                                                </tr>
                                                
                                            </table>
                                        </td>	
                                    </tr><!--Ad4 (end)-->
                                    
                                    
                                </table>
                            </td><!-- middle right column contents start-->
                            <td width="60%"  align="center" valign="top">
                             	<iframe  width="100%" name="window" src="search.php" align="middle" marginheight="0" marginwidth="0" style=" text-align:center;" id="frame_id" onLoad="resize('frame_id');" frameborder="0" scrolling="no">
                            	main window
                                </iframe>
                            </td>
                            <td width="20%" align="center" valign="top"><!-- middle right column contents start-->
								<table width="98%" style="margin-top:6px" border="0">
                                	<tr><!--Gaurav Parmar block(start)-->
                                    	<td  class="about_gaurav">
                                        	<table  width="100%" class="my_message"><!--About the owner Gaurav Parmar (start)-->
                                            	<tr>
                                                	<td align="justify">
                                                    	
                                                        <font >
                                                        	Hello there! I <font color="white">Gaurav Parmar</font> present my new website Glog in your service. The best you can get so far. Glog is a customized web directory where you can get information regarding many places and products. Don't forget to suggest your places. Check this out.
                                                        </font>
                                                    </td>
                                                </tr>
                                                <tr>
                                                	<td>
                                                    	<table border="0">
                                                        	<tr >
																<td style="color:#FFF; text-shadow:none; font-size:12px;" height="100%" width=50%>
                                                                    <table width="100%" height="100%" border="0">
                                                                        <tr>
                                                                            <td valign="top">
                                                                                 Like/<br />Follow<br /> my work:	
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td height="40px">
                                                                                <a href="http://www.facebook.com/gauravparmariam" target="_new"><img src="facebook_icon.png" id="facebook_icon" onMouseOver="enlarge(this,'facebook');" onMouseOut="minimize_icon(this,'facebook');"></a>
                                                                                <a href="http://www.twitter.com/gauravparmariam" target="_new"><img src="twitter_icon.png" id="twitter_icon" onMouseOver="enlarge(this,'twitter');" onMouseOut="minimize_icon(this,'twitter');"></a>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                                <td align="left">
                                                                	<img src="gaurav.png" align="right" class="my_image" hspace="0" style=" text-align:left; height:80px; width:80; margin-left:10px; margin-bottom:10px; border:3px groove #0C3;"/>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                
                                            </table><!--About the owner Gaurav Pamrar (end)-->
                                        </td>	
                                    </tr><!--Gaurav Parmar block(end)-->
                                    <tr ><!--Ad2 (start)-->
                                    	<td  class="ad_block">
                                        	<table  width="100%">
                                            	<tr>
                                                	<td >
                                                    	<font class="ad_titles">Get 20% off on T-Shirts<br /></font>
                                                        <font class="ad_contents">Purchase 3 t-shirts on weekdays and get 20% discount on total bill amount. Try some new variety as well.<br /></font>
                                                    	<font class="ad_place_details">ABC Cloth Store<br />
                                                        Palasia, Indore<br />Contact:9875687895<br />Email: abcclothstore @gmail.com</font>
                                                    </td>
                                                </tr>
                                                
                                            </table>
                                        </td>	
                                    </tr><!--Ad2 (end)-->
                                    <tr ><!--Ad3 (start)-->
                                    	<td  class="ad_block">
                                        	<table  width="100%">
                                            	<tr>
                                                	<td >
                                                    	<font class="ad_titles">New French Pizza<br /></font>
                                                        <font class="ad_contents">Try our new French pizza @Rs.299/- and get lost in its delicious taste.<br /></font>
                                                    	<font class="ad_place_details">PG Pizza Center<br />
                                                        Rajwada, Indore<br />Contact:8987854589<br />Email: pgpizzacenter @gmail.com</font>
                                                    </td>
                                                </tr>
                                                
                                            </table>
                                        </td>	
                                    </tr><!--Ad3 (end)-->
                                    
                                </table>
                            </td><!-- middle right column contents start-->
                        </tr>	
                    </table>
                </td>
            </tr><!--Main frame row end-->
            
            <tr width="100%" bgcolor="#000000" height="40px" ><!--Footer row start-->
            	<td colspan="2" width="100%">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr align="center">
                        	<td width="100%" class="footer" >
                            	<font color="#FFFFFF">Copyright &copy; 2013 : Gaurav Parmar</font>	
                            </td>
                        </tr>
                    </table>
                </td>	
            </tr><!--Footer row start-->
        </table><!--base most table end-->
    </body>
</html>