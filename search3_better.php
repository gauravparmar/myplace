<?php
    require_once 'connect.inc.php';
    $no_of_suggestions_to_show=10;
    $suggestion_line_break_position=35;
    $suggestion_width=600;
    $no_of_characters_in_each_suggestion_row=100;
    $description_string_length=140;
    $address_string_length=70;
    if(isset($_POST['suggest_a_place']))
    {
        header("Location: suggest.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Welcome to Glog</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="description" content="Twitter bootstrap theme">
  <meta name="author" content="Gaurav Parmar">

  <!-- Load The Story -->

  <link rel="stylesheet" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="css/font-awesome.css" />
  <link rel="stylesheet" href="css/gototop.css" />

  <link id="the-story-css-file" rel="stylesheet" href="css/the-story.css" type="text/css">






  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon.ico">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="/js/html5shiv.js"></script>
      <script src="/js/respond.min.js"></script>
      <![endif]-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">    
  <link rel="stylesheet" href="css/p-controls.css" type="text/css"><style type="text/css"></style>

      <script type="text/javascript">



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
            var rated_once=false;
            function rate(a)
            {
                //alert('rated');
                var rate_number=a.value;
                
                if(rated_once==false)
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
                
            }
            
            //mechnism to dynamically change the rating (end)
            var liked_once=false;
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
    </script>
    <style type="text/css">

        .well
        {
            margin-bottom: 0px;
            padding-top: 0px;
        }
        .form-control 
        {
            display: block;
            width: 100%;
            height: 37px;
            padding: 7px 10px;
            font-size: 17px;
            line-height: 2.0;
            color: ;
            vertical-align: bottom;
            background-color: rgb(255, 255, 255);
            border: 1px solid rgb(204, 204, 204);
            border-radius: 0px 0px 0px 0px;
            box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset;
            transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
        }
        .one_suggestion:hover
        {
            background-color:#ECF9FF;
        }
        .small_address,.small_description
        {
          color: white;
        }
        .one_suggestion:hover .small_address,.one_suggestion:hover .small_description
        {
            color: black;
        }
        h1,h2,h3,h4,h5,h6,h6
        {
          color: black;
        }
        body
        {
          color: black;
        }
        p
        {
          color: black;
        }
        .like_number
        {
          
          background:#7B0;
          color:#FFF;
          text-shadow:0px 2px 3px rgba(0,0,0,1);
          border-radius:5px;
          padding:8 8 8 8;
          font-family:Verdana, Geneva, sans-serif;
          font-size:14px;
          font-weight:bold;
            
        }
    </style>

</head>


<!-- activate scrollspy -->

<body id="top" data-spy="scroll" data-target=".navbar" data-offset="50">

  <nav class="navbar navbar-inverse " role="navigation" style="margin:0 0 0 0;">
    <div class="navbar-container">
      <!--
      <div class="navbar-header">
     
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar "></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar sr-only"></span>
        </button>
        <a class="navbar-brand" href="#">Glog</a> 
      </div>
      -->
          <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top" style="font-size:30px; font-weight:bolder;">Glog</a>
            </div>
      <div id="nav-collapse" class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav navbar-right">
          
          <li class="active"><a title="Home page" class="scroll brand-1" href="index.php?#home">Home</a></li>
              
              <li class=""><a title="Check out our awesome services" href="index.php?#services" class=" scroll brand-2">Services</a></li>
              <li><a title="Suggest places to us to include in Glog" href="index.php?#suggest" class="scroll brand-2">Suggest</a></li>
              <li><a title="Who we are" href="index.php?#advertise" class="scroll brand-2"> Advertise</a></li>
              <li><a title="Get in touch!" href="index.php?#feedback" class="scroll brand-2">Feedback</a></li>
              <li><a title="Who we are" href="index.php?#about_us" class="scroll brand-2"> About us</a></li>
          <li><a title="External page sample" href="#"  class="scroll brand-2" onclick="like();">
                <font class="like_number" id="like_number">
                  <?php
                    $query="SELECT `LIKES` FROM `total_likes`";
                    $query_run=mysql_query($query);
                    echo $old_likes=mysql_result($query_run,0,'LIKES');
                  ?>
                </font>&nbsp;&nbsp;Like
              </a>
          </li>
        </ul>
      </div>
    </div><!-- /.navbar-container -->
  </nav>

  <!-- Home Page -->
  <div id="home" class="page color-1"  style="padding-top:10px;">
          <div class="container" >
            <div class="row">
                <div class="col-lg-6">
                    <form  action="search3.php?page_start=<?php 
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

                        <div class="well" >
                            <h5>Search a place, product or address below.</h5>
                            <div class="row">
                                <div class=" col-md-4">
                                    <input type="text" class="form-control"  placeholder="Place Name"  name="name" id="name"  value="<?php if(isset($_POST['name'])){echo $_POST['name'];}?>">
                                </div>
                                <div class=" col-md-4">
                                    <input type="text" class="form-control"  placeholder="Product" name="for"  value="<?php if(isset($_POST['for'])){echo $_POST['for'];}?>">
                                </div>
                                <div class="input-group col-md-4">
                                    <input type="text" class="form-control" placeholder="Area"  name="area"  value="<?php if(isset($_POST['area'])){echo $_POST['area'];}?>">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit">
                                            <span class="glyphicon glyphicon-search"></span>
                                        </button>
                                    </span>
                                </div>
                            </div>
                            <!-- /input-group -->
                        </div>
                        <!-- /well -->
                        
                        <!-- Suggestions-->
                            <?php
                                /**function home_info()
                                {
                                    echo '<table class="suggestion_form" align="center" style="border:2px solid black;">
                                              <tr>
                                                  <td>
                                                    <table>
                                                      <tr >
                                                        <td colspan="2" align="center">
                                                            <a class="title_name">Welcome to Glog</a>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2"  align="justify">
                                                            <table width="100%" class="information" border="0" >
                                                                 <tr>
                                                                    <td colspan="2" align="justify">
                                                                        <img src="place.png" width="40%" align="right" class="my_image" hspace="15" style=" text-align:left; border:3px ridge black; box-shadow:-20px 10px 10px rgba(0,0,0,0.7); margin-bottom:10px; margin-left:30px;"/>
                                                                        Welcome to Glog, a new way of searching. It is developed to reduce the cumbersome task of obtaining information related to places and things inside a city by providing additional search features to make the quest easy and faster accompanied by the advertisement facility provided to shopkeepers, institutions, business owners etc to promote their brands. It is a web based online project which functions as an online directory cum ad posting site. My major aim is to provide online help to people in their quest for some product or place inside the city in any area. We provide -
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <font color="#FFFF00">*</font>
                                                                    </td>
                                                                    <td>
                                                                        24 x 7 searching facility from anywhere at anytime from any device with web access.
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <font color="#FFFF00">*</font>
                                                                    </td>
                                                                    <td>
                                                                        Optimized searching mechanism to make your search easy and faster.
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <font color="#FFFF00">*</font>
                                                                    </td>
                                                                    <td>
                                                                        3-Way searching option on providing place\'s name, product searching for or area or any combination of these. 
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                      </tr>
                                                  <table>
                                                  </td>
                                              </tr>
                                          </table>';
                                }**/
                                if((isset($_POST['name'])||isset($_POST['for'])||isset($_POST['area'])))
                                {   
                                    echo '<br>';
                                    $name=mysql_real_escape_string(htmlentities(trim($_POST['name'])));
                                    $for=mysql_real_escape_string(htmlentities(trim($_POST['for'])));   
                                    $area=mysql_real_escape_string(htmlentities(trim($_POST['area']))); 
                                    
                                    /**Checking if all the inputs given in search bar are spaces or not(start)**/
                                    $inputs=array($name,$for,$area);
                                    $spaces_in_inputs_in_sequence=array(true,true,true);
                                    $total_inputs=count($inputs);
                                    for($i=0;$i<$total_inputs;$i++)
                                    {
                                        $string=$inputs[$i];
                                        $len=strlen($string);
                                        
                                        /****/
                                        $c=0;
                                        for($j=0;$j<$len;$j++)
                                        {
                                            
                                            if($string[$j]==' ')
                                                $c++;
                                        }
                                        if($c!=$len)
                                        {
                                            $spaces_in_inputs_in_sequence[$i]=false;    
                                            
                                        }
                                        
                                        /****/  
                                        
                                    }
                                    $all_inputs_contain_spaces=true;
                                    /*for($i=0;$i<count($inputs);$i++)
                                    {
                                        if($spaces_in_inputs_in_sequence[$i]==false)
                                        {
                                            $all_inputs_contain_spaces=false;
                                            break;
                                        }
                                    }
                                    if($all_inputs_contain_spaces==true)
                                    {
                                        echo '<table width="100%" style="margin-top:10px;"><tr ><td align="center"  width="50%" ><font class="no_results_found_box" >Nothing is given. Please type in some information above to start searching.</font></td></tr></table>'; 
                                        die();
                                    }   */
                                    /**Checking if all the inputs given in search bar are spaces or not(end)**/     
                                    if((($name=='Place (eg- GP Sweets)')||($spaces_in_inputs_in_sequence[0]==true))&&(($for=='For (eg- Pizza)')||($spaces_in_inputs_in_sequence[1]==true))&&(($area=='In Area (eg- Bank Colony)')||($spaces_in_inputs_in_sequence[2]==true)))   
                                    {
                                        echo '<table width="100%" style="margin-top:10px;"><tr ><td align="center"  width="50%" ><font class="no_results_found_box" >Please type in some information above to start searching.</font></td></tr></table>';   
                                        /**die();**/
                                    }
                                    
                                    if(($name==NULL)||($name=="Place Name"))
                                        $name='%';
                                    if(($for==NULL)||($for=="Product"))
                                        $for='%';
                                    if(($area==NULL)||($area=="Area"))
                                        $area='%';  

                                    if(!(($name=='%')&&($for=='%')&&($area=='%')))
                                    {        
                                    
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
                                            /*echo 'total_name_keywords:'.$total_name_keywords;*/
                                            
                                            foreach($name_keywords as $key=>$keyword)
                                            {
                                                $where_name.="`NAME` LIKE '%$keyword%'";
                                                if($key!=($total_name_keywords-1))
                                                    $where_name.=" AND ";
                                            }
                                            foreach($for_keywords as $key=>$keyword)
                                            {
                                                $where_for.="`FOR` LIKE '%$keyword%'";
                                                if($key!=($total_for_keywords-1))
                                                    $where_for.=" AND ";
                                            } 
                                            foreach($area_keywords as $key=>$keyword)
                                            {
                                                $where_area.="`ADDRESS` LIKE '%$keyword%'";
                                                if($key!=($total_area_keywords-1))
                                                    $where_area.=" AND ";
                                            }  
                                            
                                            $query="SELECT * FROM `places` WHERE $where_name AND $where_for AND $where_area ORDER BY `RATING` DESC LIMIT $page_start, $page_end";
                                            $query_run=mysql_query($query); 
                                    /**seaching algo end**/         
                                    
                                    $no_of_suggestions_for_current_page=mysql_num_rows($query_run);
                                    /**--------------**/
                                    $query_for_all_records="SELECT `PLACE_ID` FROM `places` WHERE $where_name AND $where_for AND $where_area";
                                    $query2_run=mysql_query($query_for_all_records);
                                    $total_records_found=mysql_num_rows($query2_run);
                                    $suffix=($total_records_found>1)?'s':'';
                                    if($no_of_suggestions_for_current_page==0)
                                    {
                                        echo '<table width="100%" style="margin-top:10px;"><tr ><td align="center"  width="50%" ><font class="no_results_found_box" >Sorry, this search yielded no results.</font></td></tr></table>';
                                        /*die();*/
                                    }
                                    else
                                    {
                                        /**Dislay all suggestions for current page according to user information upto suggestion show limit (start)**/
                                        $i=1;
                                        echo'<table width="97%" style="margin:0 0 10 0;"><tr style="padding:0 0 0 0">';
                                        echo'   <tr>
                                                    <td align="center">
                                                        <font color="#FFFFFF" face="Trebuchet MS, Arial, Helvetica, sans-serif" style="font-weight:bold">Showing '.($page_start+$no_of_suggestions_for_current_page).' out of '.$total_records_found.' result',$suffix,' found. </font>'; 
                                        if($page_start>0)
                                            echo'<input type="submit" value="Previous" name="previous" align="right" class="btn btn-primary btn-sm"/>';
                                        if(($page_start+$no_of_suggestions_to_show)<$total_records_found)
                                            echo'<input type="submit" value="Next" name="next"  align="right" class="btn btn-primary btn-sm"/>';  
                                        echo '</td></tr></table><table width="100%" style="margin:0 0 0 0;">';  
                                                    
                                        while($row=mysql_fetch_assoc($query_run))
                                        {   
                                        /** Display one particular suggestion among all the suggestions to be shown for current page (Start)**/
                                            $place_id=stripslashes($row['PLACE_ID']);
                                            
                                            $tname=stripslashes($row['NAME']);
                                            $tdescription=stripslashes($row['DESCRIPTION']);
                                            $taddress=stripslashes($row['ADDRESS']);
                                            /** chopping big strings to smaller size (Start)**/ 
                                            $name=substr($tname,0,$no_of_characters_in_each_suggestion_row);
                                            $description=substr($tdescription,0,$description_string_length);
                                            $address=substr($taddress,0,$address_string_length);
                                            /** chopping big strings to smaller size (End)**/
                                            /** Determining the description string size and adding spaces if no spaces are there (start)**/
                                            $description_length=strlen($description);
                                            for($i=0;$i<$description_string_length;$i=$i+$no_of_characters_in_each_suggestion_row)
                                            {
                                                
                                                $contains_space=false;
                                                for($j=$i;$j<$description_length;$j++)
                                                {
                                                    if($description[$j]==' ')
                                                    {
                                                        $contains_space=true;
                                                        break;
                                                    }   
                                                }
                                                if($contains_space==false)
                                                {
                                                    $description=substr_replace($description,' ',$i,0);
                                                }
                                            }   
                                            /** Determining the description string size and adding spaces if no spaces are there (end)**/
                                            
                                            /** Determining the address string size and adding spaces if no spaces are there (start)**/
                                            $address_length=strlen($address);
                                            for($i=0;$i<$address_string_length;$i=$i+$no_of_characters_in_each_suggestion_row)
                                            {
                                                
                                                $contains_space=false;
                                                for($j=$i;$j<$address_length;$j++)
                                                {
                                                    if($address[$j]==' ')
                                                    {
                                                        $contains_space=true;
                                                        break;
                                                    }   
                                                }
                                                if($contains_space==false)
                                                {
                                                    $address=substr_replace($address,' ',$i,0);
                                                }
                                            }   
                                            /** Determining the address string size and adding spaces if no spaces are there (end)**/
                                            
                                            
                                            /** Including ... if string is bigger (start)**/
                                            if(strlen($name)<strlen($tname))
                                            {
                                                $name=$name.' ...';
                                                /**echo "name is bigger for ...";**/
                                            }
                                            if(strlen($description)<strlen($tdescription))
                                                $description=$description.' ...';   
                                            if(strlen($address)<strlen($taddress))
                                                $address=$address.' ...';       
                                            /** Including ... if string is bigger (end)**/  
                                                            
                                            
                                            echo '<tr >
                                                
                                                <td  class="suggestion_text_box" style="margin-top:0 0 0 0">
                                                <!--small suggestion-->
                                                <div class="one_suggestion">
                                                    <table cellpadding="1" cellspacing="0" border="0" width="100%" class="suggestion_text">
                                                        <tr valign="top">
                                                          <td colspan="2" ><a href="search3.php?id='.$place_id.'" style="color:black; text-decoration:underline;" class="place_names"><b>'.$name.'</b></a></td>
                                                        </tr>
                                                        <tr valign="top" class="small_address">
                                                          <td colspan="2">'.$address.'</td>
                                                        </tr>
                                                        <tr valign="top" class="small_description">
                                                          <td colspan="2">'.$description.'</td>
                                                        </tr>                                                   
                                                        <tr>
                                                            <td colspan=2 align="right" ><a href="search3.php?id='.$place_id.'" class="view_details"><font>View details...</font></a></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <!--/small suggestion-->
                                                </td>
                                                
                                              </tr>';   
                                        /** Display one particular suggestion among all the suggestions to be shown for current page (end)**/
                                        }
                                        echo '<tr><td align="center"></td></tr></table>';
                                        echo'<font color="#666666" face="Trebuchet MS, Arial, Helvetica, sans-serif" style="font-weight:bold">Showing '.($page_start+$no_of_suggestions_for_current_page).' out of '.$total_records_found.' result',$suffix,' found. </font>';  
                                        if($page_start>0)
                                            echo'<input type="submit" value="Previous" name="previous" align="right" class="btn btn-primary btn-sm"/>';
                                        if(($page_start+$no_of_suggestions_to_show)<$total_records_found)
                                            echo'<input type="submit" value="Next" name="next"  align="right" class="btn btn-primary  btn-sm"/></form>';   
                                        /**Dislay all suggestions for current page according to user information upto suggestion show limit (end)**/            
                                    }
                                    }   
                                }
                                if(!isset($_GET['id'])&&!isset($_GET['page_start']))
                                    home_info();
                            ?>
                            <?php
                                require_once 'connect.inc.php';
                                /**Showing full details of a suggestion with the place_id (start)**/
                                if(isset($_GET['id']))
                                {       
                                    $place_id=$_GET['id'];
                                    $query="SELECT * FROM `places` WHERE `PLACE_ID`='$place_id'";
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
                                    $rating=$row['RATING'];     
                                            /** Determining different string's size and adding spaces if no spaces are there (start)**/
                                            $strings_to_add_spaces=array($name,$description,$for,$address,$email,$website,$description); /**All the string to add spaces if length is more**/
                                            
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
                                            
                                            /** Determining different string's size and adding spaces if no spaces are there (end)**/
                                            
                                    echo '<br>
                                          <div class="one_suggestion">  
                                          <table align="center" width="100%" style="margin:0 0 0 0;">
                                              <tr align="center">
                                                <td align="center">
                                                    <form>
                                                        <input type="button" value="Back" class="btn btn-primary btn-sm" onClick="history.go(-1);">
                                                    </form>
                                                </td>
                                              </tr> 
                                              <tr>
                                                <td  class="detailed_text_box" style="margin-top:10px;">
                                                    <table cellpadding="1" cellspacing="0" border="0" width="100%" class="table">
                                                        <tr valign="top" >
                                                          <td colspan=2 align="right" style="background-attachment:fixed;vertical-align:middle;" width="100%">
                                                            <table width="100%" border="0" >
                                                                <tr height="52px">
                                                                    <td  align="left" style="padding-top:5px; text-shadow:0px 0px 2px rgba(0,0,0,1);" valign="top" >
                                                                        <font color="#FFF" face="Verdana, Geneva, sans-serif" style="background-color:#4BAAD3; border-radius:5px; padding:2 5 2 5; "><strong>Rating: '.$rating.'</strong></font>
                                                                        
                                                                    </td>
                                                                    <td  align="right">
                                                                        <form method="post" action="search3.php?id='.$place_id.'">
                                                                          <font class="rate_this" style="background-attachment:fixed;">Rate this: </font>
                                                                          <input type="button" value="1" name="r1"  id="r1" class="btn btn-primary btn-xs" onMouseOver="change_color_of_rating(this);" onMouseOut="clear_rating_color();" style="background-attachment:fixed;vertical-align:middle;"  onClick="rate(this);" >
                                                                          <input type="button" value="2" name="r2" id="r2"  class="btn btn-primary btn-xs" onMouseOver="change_color_of_rating(this);" onMouseOut="clear_rating_color();" style="background-attachment:fixed;vertical-align:middle;" onClick="rate(this);">
                                                                          <input type="button" value="3" name="r3" id="r3"  class="btn btn-primary btn-xs" onMouseOver="change_color_of_rating(this);" onMouseOut="clear_rating_color();" style="background-attachment:fixed;vertical-align:middle;" onClick="rate(this);"> 
                                                                          <input type="button" value="4" name="r4" id="r4"  class="btn btn-primary btn-xs" onMouseOver="change_color_of_rating(this);" onMouseOut="clear_rating_color();" style="background-attachment:fixed;vertical-align:middle;" onClick="rate(this);">
                                                                          <input type="button" value="5" name="r5" id="r5"  class="btn btn-primary btn-xs" onMouseOver="change_color_of_rating(this);" onMouseOut="clear_rating_color();" style="background-attachment:fixed;;vertical-align:middle;" onClick="rate(this);">
                                                                        </form>
                                                                    </td>
                                                                    
                                                                </tr>
                                                            </table>
                                                          </td>
                                                        </tr>
                                                        <tr valign="top">
                                                          <td colspan="2" style="color:#4BAAD3;"><h5><b>'.$name.'</b></h5></td>
                                                        </tr>
                                                        <tr valign="top" valign="top">
                                                          <td class="suggestion_detail_text_title">For</td>
                                                          <td class="suggestion_detail_text_detail">'.$for.'</td>
                                                        </tr>
                                                        
                                                        <tr valign="top">
                                                          <td class="suggestion_detail_text_title">Address</td>
                                                          <td class="suggestion_detail_text_detail">'.$address.'</td>
                                                        </tr>
                                                        <tr valign="top">
                                                          <td  width="20%"  class="suggestion_detail_text_title">Contact no. </td>
                                                          <td class="suggestion_detail_text_detail">'.$contact_number.'</td>
                                                        </tr>
                                                        <tr valign="top">
                                                          <td  class="suggestion_detail_text_title">Email</td>
                                                          <td class="suggestion_detail_text_detail">'.$email.'</td>
                                                        </tr>
                                                        <tr valign="top">
                                                          <td   class="suggestion_detail_text_title">Website</td>
                                                          <td class="suggestion_detail_text_detail">'.$website.'<br><br></td>
                                                        </tr>
                                                        
                                                       
                                                        <tr valign="top">
                                                            <td colspan=2 class="full_description"><b>About this place:</b><br>'.$description.'<br><br></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2"  class="contribute_in_glog" style="font-size:16px;" align="right">
                                                                <form action="search3.php" method="post">
                                                                    <font style=" font-size:12px;">Know about some places? Contribute in Glog.</font>
                                                                     <input type="submit" value="Suggest A Place" name="suggest_a_place" class="btn btn-primary" style="padding:2 10 5 10;">
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                              </tr>
                                              
                                          </table>
                                          </div>';
                                          
                                }
                                /**Showing full details of a suggestion with the place_id (end)**/
                            ?>    
                            <?php
                                require_once "connect.inc.php";
                                 
                                /** Updating the current rating of the place since user checked full details of it (Start)**/
                                if((isset($_GET['id'])))/** Getting the current place id for which the rating is to be increased**/
                                {
                                    $p_id=$_GET['id'];
                                    $query="SELECT `RATING` FROM `places` WHERE `PLACE_ID`=$p_id";  
                                    $query_run=mysql_query($query);
                                    $current_rating=mysql_result($query_run,0,'rating');
                                    $updated_rating=$current_rating+1;
                                    $query="UPDATE `places` SET `RATING`=$updated_rating WHERE `PLACE_ID`=$p_id";
                                    mysql_query($query);
                                    /**echo "<br>Rating increased by 1.<br>";**/
                                }
                                /** Updating the current rating of the place since user checked full details of it (end)**/
                                
                            ?>
                        <!-- /Suggestions-->


                </div>    
                <div class="col-lg-3">
                    
                    <div class="well">
                        <h4>Popular Glog Categories</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled">
                                    <li><a href="#dinosaurs">Dinosaurs</a>
                                    </li>
                                    <li><a href="#spaceships">Spaceships</a>
                                    </li>
                                    <li><a href="#fried-foods">Fried Foods</a>
                                    </li>
                                    <li><a href="#wild-animals">Wild Animals</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled">
                                    <li><a href="#alien-abductions">Alien Abductions</a>
                                    </li>
                                    <li><a href="#business-casual">Business Casual</a>
                                    </li>
                                    <li><a href="#robots">Robots</a>
                                    </li>
                                    <li><a href="#fireworks">Fireworks</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /well -->
                    <div class="well">
                        <h4>Side Widget Well</h4>
                        <p>Bootstrap's default wells work great for side widgets! What is a widget anyways...?</p>
                    </div>
                    <!-- /well -->
                </div>

                
               
                <div class="col-lg-3">
                    <div class="well">
                        <h4>Search A Place Here</h4>
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </div>
                    <!-- /well -->
                    <div class="well">
                        <h4>Popular Glog Categories</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled">
                                    <li><a href="#dinosaurs">Dinosaurs</a>
                                    </li>
                                    <li><a href="#spaceships">Spaceships</a>
                                    </li>
                                    <li><a href="#fried-foods">Fried Foods</a>
                                    </li>
                                    <li><a href="#wild-animals">Wild Animals</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled">
                                    <li><a href="#alien-abductions">Alien Abductions</a>
                                    </li>
                                    <li><a href="#business-casual">Business Casual</a>
                                    </li>
                                    <li><a href="#robots">Robots</a>
                                    </li>
                                    <li><a href="#fireworks">Fireworks</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /well -->
                    <div class="well">
                        <h4>Side Widget Well</h4>
                        <p>Bootstrap's default wells work great for side widgets! What is a widget anyways...?</p>
                    </div>
                    <div class="well">
                        <h4>Side Widget Well</h4>
                        <p>Bootstrap's default wells work great for side widgets! What is a widget anyways...?</p>
                    </div>
                    <div class="well">
                        <h4>Side Widget Well</h4>
                        <p>Bootstrap's default wells work great for side widgets! What is a widget anyways...?</p>
                    </div>
                    <div class="well">
                        <h4>Side Widget Well</h4>
                        <p>Bootstrap's default wells work great for side widgets! What is a widget anyways...?</p>
                    </div>
                    <!-- /well -->
                </div>    

            </div>    
        </div>
        <!-- /container -->
  </div> <!-- /#home -->


  <!-- The footer, social media icons, and copyright -->
  <footer class="page color-5">
    <div class="inner-page row">
      <div class="col-md-6 social">
        <a href="#contact"><i class="fa fa-twitter"></i></a>
        <a href="#contact"><i class="fa fa-github-square"></i></a> 
        <a href="#contact"><i class="fa fa-facebook-square"></i></a>
        <a href="#contact"><i class="fa fa-google-plus-square"></i></a>
      </div>
      <div class="col-md-6 text-right copyright">
        Copyright © <a href="http://prettystrap.com/" title="twitter bootstrap themes">Gaurav Parmar</a> | All rights reserved | <a href="#top" title="Got to top" class="scroll">To Top</a>
      </div>
    </div>
  </footer>
  <a href="#" class="go-top"><img src="img/up.png" width="40px"></a>
  <script src="js/jquery.js"></script>
  <script>
  if (typeof jQuery == 'undefined') {
    document.write(unescape("%3Cscript src='js/jquery-1.9.1.min.js' type='text/javascript'%3E%3C/script%3E"));
  }
  </script>

  <!-- JQUERY END -->

  <!--Main js file. -->
  <script src="js/jquery-1.10.2.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/the-story.js"></script>
  <script src="js/gototop.js"></script>


</body></html>