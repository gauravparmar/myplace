
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
  <title>Welcome to MyPlace</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="description" content="Twitter bootstrap theme">
  <meta name="author" content="Gaurav Parmar">
  <link rel="icon" type="image/jpg" href="icon.jpg">
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
  <style type="text/css">

      .well
      {
        color: black;
      }
      
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
        box-shadow:  0px 15px 7px rgba(0,0,0,0.5);
      }
      .top_row_left_menu:hover
      {
        text-decoration:underline;
        background-color:#666;
        color:#7B0;
        box-shadow:  0px 8px 25px rgba(255,255,255,0.8);
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
        background:#4BAAD3;
        font-family:"Times New Roman", Times, serif;
        
      }
      .ad_contents
      {
        color: black;
      }
      .ad_place_details
      {
        
        font-weight:bold;
        font-size: 12px;
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
      .desc_title
      {
        font-weight: bold;
      }
      .btn-play i
      {
        font-size: 30px;
        padding: -15;
      }
  </style>
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

        .one_suggestion
        {
          padding:2 5 2 5;
        }
        .one_suggestion:hover
        {
            background-color:#ECF9FF;
            
            
        }
        .small_address,.small_description
        {
          color: black;
        }
        .one_suggestion:hover .small_address,.one_suggestion:hover .small_description
        {
            color: black;
        }
        h1,h2,h3,h4,h5,h6,h6
        {
          color: black;
        }
       
        p
        {
          color: black;
        }
        .navbar-collapse 
        {
            max-height: 400px;
        }
    </style>

</head>


<!-- activate scrollspy -->

<body id="top" data-spy="scroll" data-target=".navbar" data-offset="50">

  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="margin:0 0 0 0;">
    <div class="navbar-container">
      <!--
      <div class="navbar-header">
     
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar "></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar sr-only"></span>
        </button>
        <a class="navbar-brand" href="#">MyPlace</a> 
      </div>
      -->
          <div class="navbar-header page-scroll">
                <button type="button"  style="font-size:20pt;padding:0px;background:#ffffff;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <i class="fa fa-bars" style="font-size:20pt;"></i>
                </button>
                <a class="navbar-brand" href="index.php?#home" style="font-size:30px; font-weight:bolder;">MyPlace</a>
            </div>
      <div id="nav-collapse" class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav navbar-right">
          
          <li class="active"><a title="Home page" class="scroll brand-1" href="index.php">Home</a></li>
              
              <li class=""><a title="Check out our awesome services" href="index.php?#services" class=" scroll brand-2">Services</a></li>
              <li><a title="Suggest places to us to include in MyPlace" href="index.php?#suggest" class="scroll brand-2">Suggest</a></li>
              <li><a title="Who we are" href="index.php?#advertise" class="scroll brand-2"> Advertise</a></li>
              <li><a title="Get in touch!" href="index.php?#feedback" class="scroll brand-2">Feedback</a></li>
              <li><a title="Who we are" href="index.php?#about_us" class="scroll brand-2"> About us</a></li>
              <li><a><span class="input-group-btn"  style="width:10px;height:20px;">
                      <font class="btn btn-default btn-xs">
                        <?php 
                         
                              require_once 'connect.inc.php';
                              $query="SELECT `HITS` FROM `total_hits`";
                              $query_run=mysql_query($query);
                              $hits=mysql_result($query_run,0,'HITS');
                              echo $hits;
                             
                            
                        ?> Visits
                      </font>
                  </span></a>
              </li>
              <li><a title="External page sample" href="#"  class="scroll brand-2" onclick="like();">
                   <span class="input-group-btn"  style="width:10px;height:20px;">
                      <font class="btn btn-primary btn-xs" id="like_number">
                        <?php
                          $query="SELECT `LIKES` FROM `total_likes`";
                          $query_run=mysql_query($query);
                          echo $old_likes=mysql_result($query_run,0,'LIKES');
                        ?>
                      </font>
                      <button class="btn btn-default btn-xs" type="submit" style="height:24px;">
                          <span class="glyphicon glyphicon-thumbs-up"></span>
                      </button>
                  </span>
                </a>
              </li>
        </ul>
      </div>
    </div><!-- /.navbar-container -->
  </nav>

  <!-- Home Page -->
  <div id="home" class="page color-4"  >
          <div class="container" >
            <div class="row">
                <div class="col-lg-9">
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
                                                            <a class="title_name">Welcome to MyPlace</a>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="2"  align="justify">
                                                            <table width="100%" class="information" border="0" >
                                                                 <tr>
                                                                    <td colspan="2" align="justify">
                                                                        <img src="place.png" width="40%" align="right" class="my_image" hspace="15" style=" text-align:left; border:3px ridge black; box-shadow:-20px 10px 10px rgba(0,0,0,0.7); margin-bottom:10px; margin-left:30px;"/>
                                                                        Welcome to MyPlace, a new way of searching. It is developed to reduce the cumbersome task of obtaining information related to places and things inside a city by providing additional search features to make the quest easy and faster accompanied by the advertisement facility provided to shopkeepers, institutions, business owners etc to promote their brands. It is a web based online project which functions as an online directory cum ad posting site. My major aim is to provide online help to people in their quest for some product or place inside the city in any area. We provide -
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
                                                        <font color="#4BAAD3" face="Trebuchet MS, Arial, Helvetica, sans-serif" style="font-weight:bold">Shown '.($page_start+$no_of_suggestions_for_current_page).' out of '.$total_records_found.' result',$suffix,' found. </font>'; 
                                        if($page_start>0)
                                            echo'<input type="submit" value="Previous" name="previous" align="right" class="btn btn-primary btn-sm"/>';
                                        if(($page_start+$no_of_suggestions_to_show)<$total_records_found)
                                            echo'<input type="submit" value="Next" name="next"  align="right" class="btn btn-primary btn-sm"/>';  
                                        echo '</td></tr></table><table width="100%" style="margin:0 0 0 0;"><hr style="padding:0 0 0 0; margin:0 0 0 0; width:100%; border-color:#4BAAD3;">';  
                                                    
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
                                                
                                                <td  class="" style="margin-top:0 0 0 0">
                                                <!--small suggestion-->
                                                <div class="one_suggestion">
                                                    <table cellpadding="1" cellspacing="0" border="0" width="100%" class="suggestion_text">
                                                        <tr valign="top">
                                                          <td colspan="2" ><a href="search3.php?id='.$place_id.'" style="color:#4BAAD3; text-decoration:underline; font-family:Segoe Print;" ><b>'.$name.'</b></a></td>
                                                        </tr>
                                                        <tr valign="top" >
                                                          <td colspan="2"><b>'.$address.'</b></td>
                                                        </tr>
                                                        <tr valign="top" class="small_description">
                                                          <td colspan="2">'.$description.'</td>
                                                        </tr>                                                   
                                                        <tr>
                                                            <td colspan=2 align="right" ><a href="search3.php?id='.$place_id.'" class="view_details"><font>View details...</font></a></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <hr style="padding:0 0 0 0; margin:0 0 0 0; width:100%; border-color:#4BAAD3;">
                                                <!--/small suggestion-->
                                                </td>
                                                
                                              </tr>';   
                                        /** Display one particular suggestion among all the suggestions to be shown for current page (end)**/
                                        }
                                        echo '<tr><td align="center"></td></tr></table>';
                                        echo'<font color="#4BAAD3" face="Trebuchet MS, Arial, Helvetica, sans-serif" style="font-weight:bold">Shown '.($page_start+$no_of_suggestions_for_current_page).' out of '.$total_records_found.' result',$suffix,' found. </font>';  
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
                                    $image_name=$row['IMAGE_NAME'];   
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
                                          <div class="row ">
                                              <div class="col-md-12">
                                                  <center>
                                                    <form>
                                                          <input type="button" value="Back" class="btn btn-primary btn-sm" onClick="history.go(-1);">
                                                    </form>
                                                  </center>
                                              </div>
                                              
                                              <div class="col-md-12">
                                                  <div class="col-md-6" style="text-align:left;">
                                                      <font color="#FFF" face="Verdana, Geneva, sans-serif" style="background-color:#4BAAD3; border-radius:5px; padding:2 5 2 5; "><strong>Rating: '.$rating.'</strong></font>
                                                  </div>
                                                  <div class="col-md-6"  style="text-align:right;">
                                                    <form method="post" action="search3.php?id='.$place_id.'">
                                                      <font class="rate_this" style="background-attachment:fixed;">Rate this: </font>
                                                      <input type="button" value="1" name="r1"  id="r1" class="btn btn-primary btn-xs" onMouseOver=" change_color_of_rating(this);" onMouseOut=" clear_rating_color();" style="background-attachment:fixed;vertical-align:middle;"  onClick="rate(this);disable_rating();" >
                                                      <input type="button" value="2" name="r2" id="r2"  class="btn btn-primary btn-xs" onMouseOver=" change_color_of_rating(this);" onMouseOut=" clear_rating_color();" style="background-attachment:fixed;vertical-align:middle;" onClick="rate(this);disable_rating();">
                                                      <input type="button" value="3" name="r3" id="r3"  class="btn btn-primary btn-xs" onMouseOver=" change_color_of_rating(this);" onMouseOut=" clear_rating_color();" style="background-attachment:fixed;vertical-align:middle;" onClick="rate(this);disable_rating();"> 
                                                      <input type="button" value="4" name="r4" id="r4"  class="btn btn-primary btn-xs" onMouseOver=" change_color_of_rating(this);" onMouseOut=" clear_rating_color();" style="background-attachment:fixed;vertical-align:middle;" onClick="rate(this);disable_rating();">
                                                      <input type="button" value="5" name="r5" id="r5"  class="btn btn-primary btn-xs" onMouseOver=" change_color_of_rating(this);" onMouseOut=" clear_rating_color();" style="background-attachment:fixed;;vertical-align:middle;" onClick="rate(this);disable_rating();">
                                                    </form>
                                                  </div>
                                              </div>
                                              
                                              <div class="col-md-12" style="align:left; text-align:left;">
                                                  <!--First column-->
                                                  <div class="col-md-9">
                                                      <div class="col-md-12" style="align:left; text-align:left;">
                                                          <h5><b><font  style="font-family:Constantia; font-size:20px; color:#4BAAD3;">'.$name.'</font></b></h5>
                                                      </div>
                                                      <div class="col-md-12">
                                                          <div class="col-md-3 desc_title">
                                                              For :
                                                          </div>
                                                          <div class="col-md-9">
                                                              '.$for.'
                                                          </div>
                                                      </div>
                                                      <div class="col-md-12">
                                                          <div class="col-md-3 desc_title">
                                                              Address :
                                                          </div>
                                                          <div class="col-md-9">
                                                              '.$address.'
                                                          </div>
                                                      </div>
                                                      <div class="col-md-12">
                                                          <div class="col-md-3 desc_title">
                                                              Contact no. :
                                                          </div>
                                                          <div class="col-md-9">
                                                              '.$contact_number.'
                                                          </div>
                                                      </div>
                                                      <div class="col-md-12">
                                                          <div class="col-md-3 desc_title">
                                                              Email :
                                                          </div>
                                                          <div class="col-md-9">
                                                              '.$email.'
                                                          </div>
                                                      </div>
                                                      <div class="col-md-12">
                                                          <div class="col-md-3 desc_title">
                                                              Website :
                                                          </div>
                                                          <div class="col-md-9">
                                                              '.$website.'
                                                          </div>
                                                      </div>
                                                      
                                                  </div>
                                                  <!--/First column-->
                                                  <!--Second column-->
                                                  <div class="col-md-3">
                                                      <!--
                                                      <div class="col-md-12" style="text-align:right;">
                                                         <font color="#FFF" face="Verdana, Geneva, sans-serif" style="background-color:#4BAAD3; border-radius:5px; padding:2 5 2 5; "><strong>Rated:# '.$rating.'</strong></font> 
                                                      </div>
                                                      <div class="col-md-12" style="text-align:right;">
                                                          <form method="post" action="search3.php?id='.$place_id.'">
                                                            <font class="rate_this" style="background-attachment:fixed;">Rate: </font>
                                                            <input type="button" value="1" name="r1"  id="r1" class="btn btn-primary btn-xs" onMouseOver=" change_color_of_rating(this);" onMouseOut=" clear_rating_color();" style="background-attachment:fixed;vertical-align:middle;"  onClick="rate(this);disable_rating();" >
                                                            <input type="button" value="2" name="r2" id="r2"  class="btn btn-primary btn-xs" onMouseOver=" change_color_of_rating(this);" onMouseOut=" clear_rating_color();" style="background-attachment:fixed;vertical-align:middle;" onClick="rate(this);disable_rating();">
                                                            <input type="button" value="3" name="r3" id="r3"  class="btn btn-primary btn-xs" onMouseOver=" change_color_of_rating(this);" onMouseOut=" clear_rating_color();" style="background-attachment:fixed;vertical-align:middle;" onClick="rate(this);disable_rating();"> 
                                                            <input type="button" value="4" name="r4" id="r4"  class="btn btn-primary btn-xs" onMouseOver=" change_color_of_rating(this);" onMouseOut=" clear_rating_color();" style="background-attachment:fixed;vertical-align:middle;" onClick="rate(this);disable_rating();">
                                                            <input type="button" value="5" name="r5" id="r5"  class="btn btn-primary btn-xs" onMouseOver=" change_color_of_rating(this);" onMouseOut=" clear_rating_color();" style="background-attachment:fixed;;vertical-align:middle;" onClick="rate(this);disable_rating();">
                                                          </form>
                                                      </div>
                                                      -->  
                                                      <div class="col-md-12"  style="text-align:right;padding-right:0px;padding-left:4px;">
                                                          <!--<img src="assets/img/place_images/'.$image_name .'" style="height:150px;width:200px;" alt="Place image not available">       --> 
                                                          <div class="row inner-page" style="padding:0 0;">
                                                            <div class="col-md-12">
                                                              <div class="  btn-container loaded">
                                                                <div class="btn-container">
                                                                  <center><img class="figurette lazy " src="assets/img/place_images/'.$image_name .'" data-original="assets/img/place_images/'.$image_name .'" alt="view image in lightbox" style="display: inline; height:150px; width:400px;"></center>
                                                                  <a href="assets/img/place_images/'.$image_name .'" class="lightbox btn-play" target="_blank">
                                                                    <i class="fa fa-search-plus" ></i>
                                                                  </a>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                      </div>      
                                                  </div>   
                                                  <!--/Second column-->   
                                              </div>
                                              
                                                 
                                              
                                          </div> 
                                          <div class="row" style="text-align:left;">
                                                    <div class="col-md-12">
                                                        <br><b>About this place</b>
                                                    </div>
                                                    <div class="col-md-12" style="text-align:justify;">
                                                        '.$description.'
                                                    </div>
                                          </div> 
                                          </div>    
                                          ';
                                          
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
                <!-- Classified ads -->
                <div class="col-lg-3">
                    <div class="well" style="margin:0 0; padding:0 0;">
                      <center><h3 style="padding:0 0;">Classified Ads</h3></center>
                    </div>
                    <div class="well">
                        <font class="ad_titles">Best College For B.Tech. In India<br /></font>
                        <font class="ad_contents">GIT has been declared as the best college in India for pursuing B.Tech. Hurry up! Get registered today.<br /></font>
                        <font class="ad_place_details">Gaurav Institute Of Technology<br />
                        M.G. Road, Indore<br />Contact:9999999999<br />Email: gauravparmariam @gmail.com</font>
                    </div>
                    <div class="well">
                        <font class="ad_titles">New French Pizza<br /></font>
                        <font class="ad_contents">Try our new French pizza @Rs.299/- and get lost in its delicious taste.<br /></font>
                        <font class="ad_place_details">PG Pizza Center<br />
                        Rajwada, Indore<br />Contact:8987854589<br />Email: pgpizzacenter @gmail.com</font>
                    </div>
                    <div class="well">
                        <font class="ad_titles">Best College For B.Tech. In India<br /></font>
                        <font class="ad_contents">GIT has been declared as the best college in India for pursuing B.Tech. Hurry up! Get registered today.<br /></font>
                        <font class="ad_place_details">Gaurav Institute Of Technology<br />
                        M.G. Road, Indore<br />Contact:9999999999<br />Email: gauravparmariam @gmail.com</font>
                    </div>
                    <div class="well">
                        <font class="ad_titles">New French Pizza<br /></font>
                        <font class="ad_contents">Try our new French pizza @Rs.299/- and get lost in its delicious taste.<br /></font>
                        <font class="ad_place_details">PG Pizza Center<br />
                        Rajwada, Indore<br />Contact:8987854589<br />Email: pgpizzacenter @gmail.com</font>
                    </div>  
                    <!-- /well -->
                </div>
                <!-- /Classified ads -->
                
            </div>    
        </div>
        <!-- /container -->
  </div> <!-- /#home -->


  <!-- The footer, social media icons, and copyright -->
  <footer class="page color-5">
    <div class="inner-page row">
      <div class="col-md-6 social">
        <a href="http://www.twitter.com/gauravonquest"><i class="fa fa-twitter"></i></a>
        <a href="http://www.github.com/gauravparmar"><i class="fa fa-github-square"></i></a> 
        <a href="http://www.facebook.com/gauravparmariam"><i class="fa fa-facebook-square"></i></a>
        <a href="http://plus.google.com/1/+GAURAVPARMAR"><i class="fa fa-google-plus-square"></i></a>
      </div>
      <div class="col-md-6 text-right copyright">
        Copyright © <a href="#" title="twitter bootstrap themes">Gaurav Parmar</a> | All rights reserved | <a href="#top" title="Got to top" class="scroll">To Top</a>
      </div>
    </div>
  </footer>
  <a href="#" class="go-top"><img src="img/up.png" width="43px"></a>
  <script type="text/javascript">
    function disable_rating()
    {
      document.getElementById('r1').disabled=true;
      document.getElementById('r2').disabled=true;
      document.getElementById('r3').disabled=true;
      document.getElementById('r4').disabled=true;
      document.getElementById('r5').disabled=true;
    }  
  </script>
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