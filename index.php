  <?php
  $no_of_postings_to_show=5;
  $no_of_characters_in_each_suggestion_row=20;
  $no_of_suggestions_to_show=10;
?>


<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Welcome to MyPlace</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="description" content="Twitter bootstrap theme">
  <link rel="icon" type="image/jpg" href="icon.jpg">
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
<link rel="stylesheet" href="css/p-controls.css" type="text/css">
<style type="text/css">
  .big-list li 
  {
      line-height: 35px;
      height: 50px;
      margin: 10px;
  }
  .navbar-collapse 
  {
      max-height: 400px;
  }
  .inner-page { 
      margin: 0 auto;
      max-width: 1100px;
      padding-bottom: 10;
      padding-top: 30px;
  }

</style>
  <script type="text/javascript">
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
</head>

<!-- activate scrollspy -->

<body id="top" data-spy="scroll" data-target=".navbar" data-offset="50">
  <div id="home" class="page color-1" >
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
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#home" style="font-size:30px; font-weight:bolder;">MyPlace</a>
            </div>
      <div id="nav-collapse" class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a title="Home page" class="scroll brand-1" href="#home">Home</a></li>
          <li class=""><a title="Check out our awesome services" href="#services" class=" scroll brand-2">Services</a></li>
          <li><a title="Suggest places to us to include in MyPlace" href="#suggest" class="scroll brand-2">Suggest</a></li>
          <li><a title="Who we are" href="#advertise" class="scroll brand-2"> Advertise</a></li>
          <li><a title="Get in touch!" href="#feedback" class="scroll brand-2">Feedback</a></li>
          <li><a title="Who we are" href="#about_us" class="scroll brand-2"> About us</a></li>
          <li><a><span class="input-group-btn"  style="width:10px;height:20px;">
                  <font class="btn btn-default btn-xs">
                   <?php 
                      /**/
                              if(isset($_SERVER['HTTP_REFERER']))
                              {    
                                //echo 'set';
                                $referer_url=$_SERVER['HTTP_REFERER'];
                                //echo $referer_url;
                                require_once 'connect.inc.php';
                                $query="SELECT `HITS` FROM `total_hits`";
                                $query_run=mysql_query($query);
                                $hits=mysql_result($query_run,0,'HITS');
                                echo $hits;
                                unset($_SERVER['HTTP_REFERER']);
                              }
                              else
                              {
                                require_once 'connect.inc.php';
                                $query="SELECT `HITS` FROM `total_hits`";
                                $query_run=mysql_query($query);
                                $hits=mysql_result($query_run,0,'HITS');
                                echo $incremented_hits=$hits+1;
                                $query="UPDATE `total_hits` SET `HITS`='".mysql_real_escape_string($incremented_hits)."'";
                                $query_run=mysql_query($query);
                                //echo 'not set';
                              }  
                                  
                            
                                
                              
                        /***/      
                        
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
                  <button class="btn btn-default btn-xs" type="submit"  style="height:24px;">
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
  <div id="home" class="page color-1" style="padding-top:0px;">
    <div class="inner-page">
      <div class="">
        <center><h4>Search A Place, Product Or Address Here</h4></center>
        <?php
          /**/

          /***/
        ?>
        <form action="search3.php?page_start=<?php 
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
        ?>" method="post">
          <div class=" col-md-4">
              <input type="text" class="form-control"  placeholder="Place Name"  name="name" id="name" >
          </div>
          <div class=" col-md-4">
              <input type="text" class="form-control"  placeholder="Product" name="for"  >
          </div>
          <div class="input-group col-md-4">
              <input type="text" class="form-control" placeholder="Area"  name="area" >
              <span class="input-group-btn">
                  <button class="btn btn-default" type="submit">
                      <span class="glyphicon glyphicon-search"></span>
                  </button>
              </span>
          </div>
          <!-- /input-group -->
        </form>
    </div>
    </div>
    <div class="row inner-page">
      <div class="col-md-7 col-md-push-4 lazy-container loaded">
        <img style="display: block;" class="lazy" alt="Looks great on every device" src="img/home3.png" data-original="img/home3.png">
      </div>
      <div class="col-md-5 col-md-pull-8">
        <ul class="big-list" style="margin-left:45px;">
          <li><i class="fa fa-globe "></i> Place Searching</li>
          <li><i class="fa fa-list"></i>Advertisement</li>
          <li><i class="fa fa-check"></i> Suggestions</li>
          <li><i class="fa fa-desktop" style="padding:0 0 0 0; margin:0px 0px 0px 0px;"></i><i class="fa fa-laptop" style="padding:0 0 0 0; margin:0px 0px 0px 0px;"></i><i class="fa fa-tablet"  style="padding:0 0 0 0; margin:0 0 0 0;"></i><i class="fa fa-mobile"  style="padding:0 0 0 0; margin:0 0 0 0;"></i>Responsive</li>
          

        </ul>
        <br>
        <a href="#services" title="Check out more freatures!" class="scroll btn btn-primary btn-centered"><i class="fa fa-caret-down"></i> Learn more</a>
      </div>
    </div>
  </div> <!-- /#home -->

  <!-- Sign up -->
  <div class="sign-up color-2 visible-lg">
    <div class="row inner-page">
      <div class="col-md-12">
        <h4 class="pull-left">They say visitors prefer scrolling rather than clicking. We combined both.</h4>
        <a href="#services" class="scroll btn btn-primary pull-right" title="Check out more freatures!"><i class="fa fa-caret-down"></i> Scroll down</a>
      </div>
    </div>
  </div> <!-- /.sign-up -->

  <!-- Services page-->
  <div id="services" class="page color-4">
    <div class="inner-page"  style="padding:0 0;">
      <h2 class="page-headline">Our services</h2>
    </div>

    <div class="inner-page row"  style="padding:0 0;">
      <ul class="features list-inline">
        <li>
          <h3><i class="fa fa-globe"></i> Place Searching</h3>
          <p>Easily search any place, product, thing, service, area or any combination of these through MyPlace's 3-way searching mechanism. Searching was not so easy before MyPlace.</p>
        </li>
         <li>
          <h3><i class="fa fa-list"></i> Advertisement</h3>
          <p>At MyPlace, we provide you the service to grow your business with our advertisement facility. Our advertisement solution is easy to understand and cheaper.</p>
        </li>
        <li>
          <h3><i class="fa fa-check"></i>Suggestion.</h3>
          <p>Want your shop, business, mall etc to be displayed under our search list. Just post us a suggestion and we shall display your place in MyPlace. Get global coverage for your place.</p>
        </li>

      </ul>
    </div>

    <div class="row inner-page">
      <div class="col-md-6 lazy-container loaded">
           <img style="display: block;" class="figurette lazy" alt="Original vectors" src="img/responsive-vectors.png" data-original="img/responsive-vectors.png">
      </div>
      <div class="col-md-6">
        <h3>For every device</h3>
        <p class="lead"><strong>MyPlace</strong> is built to look great on every device. Custom menu for mobiles, tablets, desktop computers and laptops, to ensure the best user expierence.</p>
        <ul class="list-wide">
          <li><i class="fa fa-check"></i> Thousands of visitors from around the globe.
          </li>
          <li><i class="fa fa-check"></i> Fast searching</li>
          <li><i class="fa fa-check"></i> Device responsive design.</li>
          <li><i class="fa fa-check"></i> 24x7 Accessibility.</li>
        </ul>
      </div>
    </div>

    <hr>

    <!-- Video -->
    <!--
    <div class="row inner-page">
      <div class="col-md-6 col-md-push-6">
        <div class="btn-container figurette">
          <img src="img/video.png" alt="Play video">
          <a class="lightbox iframe btn-play" target="_blank" href="http://vimeo.com/61693087"><i class="fa fa-play"></i></a>
        </div>
      </div>
      <div class="col-md-6 col-md-pull-6">
        <ul class="big-list">
          <li><i class="fa fa-check"></i> Always latest bootstrap</li>
          <li><i class="fa fa-play"></i> Responsive video</li>
          <li><i class="fa fa-expand"></i> Adaptive, smart lightbox</li>
          <li><i class="fa fa-desktop"></i> All modern browsers supported</li>
        </ul>
        <br>
        <a href="#suggest" class="scroll btn btn-primary btn-centered"><i class="fa fa-caret-down"></i> Even more features</a>
      </div>
    </div>
  </div> <!-- /#services -->
  
  <!-- Suggest page -->
  <div id="suggest" class="page color-3">
    <div class="inner-page" style="padding:0 0;">
      <h2 class="page-headline">Suggest A Place</h2>
    </div>

    <!-- Suggest form -->
    <div class="row inner-page contact"  style="padding:0 0;">
      <div class="col-md-12">
        <h3>  Help other people and us by suggesting more places you know.</h3>

        <!-- Suggest form processing-->
            <?php
              require_once 'connect.inc.php';
              @session_start();
              if(!isset($_SESSION['secure']))
              {
                  $_SESSION['secure']=rand(1000,9999);
              }
              $generated_captcha=$_SESSION['secure'];
              if(isset($_POST['suggest_place_name'])||isset($_POST['suggest_for'])||isset($_POST['suggest_description'])||isset($_POST['suggest_address'])||isset($_POST['suggest_contact_number'])||isset($_POST['suggest_business_email'])||isset($_POST['suggest_url'])||isset($_POST['suggest_your_name'])||isset($_POST['suggest_your_email'])||isset($_POST['suggest_code']))
              {
                if(($_POST['suggest_place_name']=='')||($_POST['suggest_for']=='')||($_POST['suggest_description']=='')||($_POST['suggest_address']=='')||($_POST['suggest_your_name']=='')||($_POST['suggest_code']==''))
                {
                  echo '<div class="alert alert-warning alert-dismissable">Please provide all mandatory information marked with *.</div>';      
                }
                else
                {
                  if($_POST['suggest_code']==$generated_captcha)
                  {
                      require_once 'connect.inc.php';
    
                      $suggest_place_name=mysql_real_escape_string(htmlentities(trim($_POST['suggest_place_name'])));
                      $suggest_for=mysql_real_escape_string(htmlentities(trim($_POST['suggest_for'])));
                      $suggest_description=mysql_real_escape_string(htmlentities(trim($_POST['suggest_description'])));
                      $suggest_address=mysql_real_escape_string(htmlentities(trim($_POST['suggest_address'])));
                      $suggest_contact_number=mysql_real_escape_string(htmlentities(trim($_POST['suggest_contact_number'])));
                      $suggest_business_email=mysql_real_escape_string(htmlentities(trim($_POST['suggest_business_email'])));
                      $suggest_url=mysql_real_escape_string(htmlentities(trim($_POST['suggest_url'])));
                      $suggest_your_name=mysql_real_escape_string(htmlentities(trim($_POST['suggest_your_name'])));
                      $suggest_your_email=mysql_real_escape_string(htmlentities(trim($_POST['suggest_your_email'])));

                      @$image_name=$_FILES['place_image']['name'];
                      @$tmp_name=$_FILES['place_image']['tmp_name']; 
                      @$type=$_FILES['place_image']['type'];
                      @$sizeinbytes=$_FILES['place_image']['size'];
                      $maxsize=5242880;
                      $extension=strtolower(substr($image_name,strpos($image_name,'.')+1));
                      
                      $suggest_code=mysql_real_escape_string(htmlentities(trim($_POST['suggest_code'])));
                   
                      if(($suggest_contact_number=='')||($suggest_contact_number==' '))
                          $suggest_contact_number='N/A';
                      if(($suggest_business_email=='')||($suggest_business_email==' '))
                          $suggest_business_email='N/A';
                      if(($suggest_url=='')||($suggest_url==' '))
                          $suggest_url='N/A';
                      if(($suggest_your_email=='')||($suggest_your_email==' '))
                          $suggest_your_email='N/A';  

                      /*setting place image information*/
                      $new_image_name='N/A';
                      if(isset($image_name))
                      {
                        if(!empty($image_name))
                        {
                          if(($extension=='jpg'||$extension=='jpeg'||$extension=='png'||$extension=='gif')&&(($type=='image/jpeg')||($type=='image/jpg')||($type=='image/png')||($type=='image/gif'))&&($sizeinbytes<=$maxsize))
                          {
                            $location='assets/img/place_images/';
                            $new_image_name=time()+19800;
                            $new_image_name=$new_image_name.'.'.$extension;
                            if(!move_uploaded_file($tmp_name,$location.$new_image_name))
                              /*echo '<strong>'.$image_name.'</strong> file has been uploaded to the upload folder with name'.$new_image_name;      
                            else*/
                               echo 'Error in uploading the image.';
                          }
                          else
                            echo 'Uploaded file is not a jpg, jpeg, png or gif file or its size is greater than 5 MB.';
                        }
                      }
                      
                          
                      /*/setting place image information*/


                      /**Getting current time and timestamp(start)**/
                          $timestamp=time()+19800;
                          $current_time=gmdate('D, d-M-Y H:i:s',$timestamp);  
                      /**Getting current time and timestamp(end)**/
        
                      $query="INSERT INTO `temp_places` VALUES('','$suggest_for', '$suggest_place_name', '$suggest_description', '$suggest_address', '$suggest_contact_number', '$suggest_business_email', '$suggest_url','$suggest_your_name','$suggest_your_email','$current_time','$timestamp','$new_image_name')";
                      $query_run=mysql_query($query);
    
                      if($query_run)
                      {
                        echo ' <div class="alert alert-success alert-dismissable">Thank you for the suggestion. Your place will be processed soon!</div>';
                      }
                      else
                          echo '<div class="alert alert-warning alert-dismissable">Sorry! Your place information cannot be saved at this moment. Try again later.</div>'; 
                  }
                  else
                      echo '<div class="alert alert-danger alert-dismissable">You have entered incorrect code.</div>';
                  $_SESSION['secure']=rand(1000,9999);
                }  
                /**Check for mandatory fields (Start)**/
              }    
            ?>            
          <!-- /Suggest form processing-->

        <form id="contact-form" action="index.php?#suggest" method="post" enctype="multipart/form-data">  
              <div class="col-md-6">
                  <input class="form-control" name="suggest_place_name" placeholder="Place Name *" type="text">
                  <input class="form-control" name="suggest_for" placeholder="For *" type="text">
                  <textarea rows="6" class="form-control col-md-6" name="suggest_description" placeholder="Description *"></textarea>
                  <input class="form-control" name="suggest_address" placeholder="Address/Area *" type="text">
              </div>
              <div class="col-md-6">
                  <input class="form-control" name="suggest_contact_number" placeholder="Contact Number" type="text">
                  <input class="form-control" name="suggest_business_email" placeholder="Business Email" type="text">
                  <input class="form-control" name="suggest_url" placeholder="Business/Place URL" type="text">
                  <input class="form-control" name="suggest_your_name" placeholder="Your Name *" type="text">
                  <input class="form-control" name="suggest_your_email" placeholder="Your Email ID" type="email">  
                  <div class="row"> 
                    <div class="col-md-12">
                      <div class="col-md-6" style="padding-top:10px;">
                        Upload an image for this place: 
                      </div>
                      <div class="col-md-6">
                        <input type="file" name="place_image"   />
                      </div>
                       
                    </div>
                  </div>  
                  <div class="row">
                      <div class="col-md-12">
                        <div class="col-md-4">
                          Enter This Code
                        </div>
                        <div class="col-md-4">
                          <img src="generate_captcha.php" style="height:48px;width:200px;"/>  
                        </div>
                        <div class="col-md-4">
                          <input name="suggest_code"  class="form-control" placeholder="Enter Code *" type="text" style="padding-top:0px; margin-top:0px; align:right;">     
                        </div>
                      </div>  
                  </div>
                  <button class="btn btn-primary btn-centered">Suggest</button>
              </div>
        </form>
      </div>
    </div>
    <!-- /Suggest form -->

    <!-- Why to use MyPlace? -->
    <div class="clients color-1">
      <div class="inner-page"  style="padding:0 0;">
        <h2 class="page-headline">Why MyPlace?</h2>
      </div>
      <div class="inner-page row">
        <ul class="clients list-inline">
          <li><i class="fa fa-globe"></i> Search</li>
          <li><i class="fa fa-list"></i> Advertise</li>
          <li><i class="fa fa-check"></i> Suggest</li>
          <li><i class="fa fa-mobile"></i><i class="fa fa-tablet"></i><i class="fa fa-laptop"></i><i class="fa fa-desktop"></i> Responsive</li>
        </ul> 
      </div>
    </div>
    <!-- /Why to use MyPlace? -->

  </div> 
  <!-- /Suggest page -->
 


  <!-- Advertise page-->   
  <div id="advertise" class="page color-3">
    <div class="inner-page" style="padding:0 0;">
      <h2 class="page-headline">Advertise</h2>
    </div>
    <!-- Big laptop -->
    <div class="row inner-page" style="padding:0 0;">
      <div class="col-md-offset-1 col-md-10">
        <div class="  btn-container loaded">
          <div class="btn-container">
            <center><img class="figurette lazy " src="img/laptop-blue2x_text.png" data-original="img/laptop-blue@2x_text.png" alt="view image in lightbox" style="display: inline; height:300px;"></center>
            <a href="img/laptop-blue2x_text.png" class="lightbox btn-play" target="_blank">
              <i class="fa fa-search-plus"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- /Big laptop -->
    <!-- Ad form -->
    <div class="row inner-page contact">
      <div class="col-md-12">
        <h3>  Promote your business on MyPlace.</h3>

        <!-- Ad form processing-->
            <?php
              require_once 'connect.inc.php';
              @session_start();
              if(!isset($_SESSION['secure']))
              {
                  $_SESSION['secure']=rand(1000,9999);
              }
              $generated_captcha=$_SESSION['secure'];
              if(isset($_POST['ad_name'])||isset($_POST['ad_email'])||isset($_POST['ad_contact_number'])||isset($_POST['ad_place_name'])||isset($_POST['ad_place_address'])||isset($_POST['ad_title'])||isset($_POST['ad_content'])||isset($_POST['ad_code']))
              {
                if(($_POST['ad_name']=='')||($_POST['ad_email']=='')||($_POST['ad_contact_number']=='')||($_POST['ad_place_name']=='')||($_POST['ad_title']=='')||($_POST['ad_content']=='')||($_POST['ad_code']==''))
                {
                  echo '<div class="alert alert-warning alert-dismissable">Please provide all mandatory information marked with *.</div>';      
                }
                else
                {
                  if($_POST['ad_code']==$generated_captcha)
                  {
                      require_once 'connect.inc.php';
    
                      $ad_name=mysql_real_escape_string(htmlentities(trim($_POST['ad_name'])));
                      $ad_email=mysql_real_escape_string(htmlentities(trim($_POST['ad_email'])));
                      $ad_contact_number=mysql_real_escape_string(htmlentities(trim($_POST['ad_contact_number'])));
                      $ad_place_name=mysql_real_escape_string(htmlentities(trim($_POST['ad_place_name'])));
                      $ad_place_address=mysql_real_escape_string(htmlentities(trim($_POST['ad_place_address'])));
                      $ad_title=mysql_real_escape_string(htmlentities(trim($_POST['ad_title'])));
                      $ad_content=mysql_real_escape_string(htmlentities(trim($_POST['ad_content'])));
                      $ad_code=mysql_real_escape_string(htmlentities(trim($_POST['ad_code'])));
                   
                      if(($ad_place_address=='')||($ad_place_address==' '))
                          $ad_place_address='N/A';
    
                      /**Getting current time and timestamp(start)**/
                          $timestamp=time()+19800;
                          $current_time=gmdate('D, d-M-Y H:i:s',$timestamp);  
                      /**Getting current time and timestamp(end)**/
        
                      $query="INSERT INTO `temp_ads` VALUES('','$ad_name','$ad_email','$ad_contact_number','$ad_place_name','$ad_place_address','$ad_title','$ad_content','$current_time','$timestamp')";
                      $query_run=mysql_query($query);
    
                      if($query_run)
                      {
                        echo ' <div class="alert alert-success alert-dismissable">Thank you for posting an ad. Your ad will be processed soon!</div>';
                      }
                      else
                          echo '<div class="alert alert-warning alert-dismissable">Sorry! Your ad information cannot be saved at this moment. Try again later.</div>'; 
                  }
                  else
                      echo '<div class="alert alert-danger alert-dismissable">You have entered incorrect code.</div>';
                  $_SESSION['secure']=rand(1000,9999);
                }  
                /**Check for mandatory fields (Start)**/
              }    
            ?>            
          <!-- /Ad form processing-->

        <form id="contact-form" action="index.php?#advertise" method="post">  
              <div class="col-md-6">
                  <input class="form-control" name="ad_name" placeholder="Enter Your Name *" type="text">
                  <input class="form-control" name="ad_email" placeholder="Enter Your Email ID (eg : your@e-mail.com) *" type="email">
                  <input class="form-control" name="ad_contact_number" placeholder="Enter Your Contact Number *" type="text">
                  <input class="form-control" name="ad_place_name" placeholder="Enter Business/Place Name *" type="text">
                  <input class="form-control" name="ad_place_address" placeholder="Enter Business/Place Address" type="text">
                  <input class="form-control" name="ad_title" placeholder="Enter Ad Title *" type="text">
              </div>
              <div class="col-md-6">
                  <textarea rows="6" class="form-control col-md-6" name="ad_content" placeholder="Enter Ad Content *"></textarea>
                  <div class="col-md-12">
                    <div class="col-md-4">
                      Enter This Code
                    </div>
                    <div class="col-md-4">
                      <img src="generate_captcha.php" style="height:48px;width:200px;"/>  
                    </div>
                    <div class="col-md-4">
                      <input name="ad_code" style="padding-top:0px; margin-top:0px;" class="form-control" placeholder="Enter Code *" type="text">     
                    </div>
                  </div>  
                  <button class="btn btn-primary btn-centered">Post my ad</button>
              </div>
        </form>
      </div>
    </div>
    <!-- /Ad form -->
  </div> 
  <!-- /Advertise page-->

  <!-- Feedback page-->   
  <div id="feedback" class="page color-2">
    <div class="inner-page">
      <h2 class="page-headline">Feedback</h2>
    </div>
    
   <!-- Feedback form -->
    <div class="row inner-page contact">
      <div class="col-md-12">
        <h3>We would appreciate your feedbacks</h3>
        <!-- Feedback form processing-->
            <?php
              require_once 'connect.inc.php';
              @session_start();
              if(!isset($_SESSION['secure']))
              {
                  $_SESSION['secure']=rand(1000,9999);
              }
              $generated_captcha=$_SESSION['secure'];
              if(isset($_POST['feed_name'])||isset($_POST['feed_email'])||isset($_POST['feed_comment'])||isset($_POST['feed_code']))
              {
                if(($_POST['feed_name']=='')||($_POST['feed_comment']=='')||($_POST['feed_code']==''))
                {
                  echo "Mandatory fields not set.";      
                }
                else
                {
                  if($_POST['feed_code']==$generated_captcha)
                  {
                      require_once 'connect.inc.php';
    
                      $feed_comment=mysql_real_escape_string(htmlentities(trim($_POST['feed_comment'])));
                      $feed_name=mysql_real_escape_string(htmlentities(trim($_POST['feed_name'])));
                      $feed_email=mysql_real_escape_string(htmlentities(trim($_POST['feed_email'])));
                      $feed_code=mysql_real_escape_string(htmlentities(trim($_POST['feed_code'])));
                   
                      if($feed_email=='')
                          $feed_email='N/A';
    
                      /**Getting current time and timestamp(start)**/
                          $timestamp=time()+19800;
                          $current_time=gmdate('D, d-M-Y H:i:s',$timestamp);  
                      /**Getting current time and timestamp(end)**/
        
                      $query="INSERT INTO `feedbacks` VALUES('', '$feed_name', '$feed_email', '$feed_comment', '$current_time', '$timestamp')";
                      $query_run=mysql_query($query);
    
                      if($query_run)
                      {
                        $query="INSERT INTO `privileged_users` VALUES('', '$feed_name', '$feed_email', 'N/A')";
                        $query_run=mysql_query($query);
                        echo ' <div class="alert alert-success alert-dismissable">Thank you!</div>';
                      }
                      else
                          echo '<div class="alert alert-warning alert-dismissable">Sorry! Your feedback cannot be saved at this moment. Try again later.</div>'; 
                  }
                  else
                      echo '<div class="alert alert-danger alert-dismissable">You have entered incorrect code.</div>';
                  $_SESSION['secure']=rand(1000,9999);
                }  
                /**Check for mandatory fields (Start)**/
              }    
            ?>            
          <!-- /Feedback form processing-->
        <form id="contact-form" action="index.php?#feedback" method="post">
            <div class="col-md-6">
                <textarea name="feed_comment"  rows="6" class="form-control" placeholder="Feedback/Comment *"></textarea>
            </div>
            <div class="col-md-6">
                <input name="feed_name" class="form-control" placeholder="Your Name *" type="text">
                <br>
                <input name="feed_email" class="form-control" placeholder="Your Email ID" type="email">
                <br>
                <div class="col-md-12">
                  <div class="col-md-4">
                    Enter This Code
                  </div>
                  <div class="col-md-4">
                    <img src="generate_captcha.php" style="height:48px;width:200px;"/>  
                  </div>
                  <div class="col-md-4">
                    <input name="feed_code" style="padding-top:0px; margin-top:0px;" class="form-control" placeholder="Enter Code *" type="text">     
                  </div>
                </div>
                <br><br>
                <button class="btn btn-primary btn-centered" type="submit">Post Feedback</button>
                
            </div>
        </form>    
      </div>
      <!-- Previous comments-->
      <a id="posted_comments"></a>
      <div>
        
            <h3><center>Recent Feedbacks</center></h3>
            <form  action="index.php?page_start=<?php 
                            if(!isset($_POST['search'])&&!isset($_POST['next']))
                            {
                              $page_start=0;
                              echo $page_start;
                            }
                            if(isset($_POST['next']))
                            {
                              
                              $page_start=$_GET['page_start']+$no_of_postings_to_show;
                              echo $page_start; 
                            }
                            if(isset($_POST['previous']))
                            {
                              
                              if(($_GET['page_start']-$no_of_postings_to_show)>=0)
                              {
                                $page_start=$_GET['page_start']-$no_of_postings_to_show;
                              }
                              echo $page_start; 
                            }
                            $page_end=$no_of_postings_to_show;
                            ?>#posted_comments" method="post" style="text-align:center">
          <?php
          /**Showing previous suggestions (Start)**/
          require_once 'connect.inc.php';
      
          $query="SELECT * FROM `feedbacks` ORDER BY `TIMESTAMP` DESC";
          $query_run=mysql_query($query);
          $total_feedbacks=mysql_num_rows($query_run);
          $query="SELECT * FROM `feedbacks` ORDER BY `TIMESTAMP` DESC LIMIT $page_start, $page_end";
          $query_run=mysql_query($query); 
          
          $no_of_suggestions_for_current_page=mysql_num_rows($query_run);
          /**--------------**/
          $query_for_all_records="SELECT * FROM `feedbacks`";
          $query2_run=mysql_query($query_for_all_records);
          $total_records_found=mysql_num_rows($query2_run);
          $suffix=($total_records_found>1)?'s':'';
          if($no_of_suggestions_for_current_page==0)
          {
            echo '<div class="alert alert-warning alert-dismissable" >No feedbacks for now.</div>';
            die();
          }
          else
          {
            /**Dislay all feedbacks for current page according to user information upto suggestion show limit (start)**/
            $i=1;
            echo'<div class="alert alert-info alert-dismissables">Showing '.($page_start+$no_of_suggestions_for_current_page).' out of '.$total_records_found.' posting',$suffix,' found. '; 
            if($page_start>0)
              echo'<input type="submit" value="Previous" name="previous" align="right" class="btn btn-primary btn-sm"/>';
            if(($page_start+$no_of_postings_to_show)<$total_records_found)
              echo'<input type="submit" value="Next" name="next"  align="right" class="btn btn-primary btn-sm"/>';  
            echo '</div>';         
            while($row=mysql_fetch_assoc($query_run))
            { 
            /** Display one particular suggestion among all the suggestions to be shown for current page (Start)**/
              $feedback_id=stripslashes($row['FEEDBACK_ID']);
              $name=stripslashes($row['FULL_NAME']);
              $comment=stripslashes($row['COMMENT']);
              $date_and_time=stripslashes($row['DATE_AND_TIME']);
              
              /** Determining different string's size and adding spaces if no spaces are there (start)**/
              $strings_to_add_spaces=array($comment); /**All the string to add spaces if length is more**/
              
              $total_strings_to_add_spaces=count($strings_to_add_spaces);
              
              for($k=0;$k<$total_strings_to_add_spaces;$k++)
              { 
                
                $string=$strings_to_add_spaces[$k];
                /**echo "<br>string to add spaces = $string<br>";
                /**echo "<br>string inside spacing loop<br>$string<br>";**/
                $string_length=strlen($string);
                for($i=0;$i<$string_length;$i=$i+$no_of_characters_in_each_suggestion_row)
                {
                  /**echo "<br>looking at index $i<br>";**/
                  
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
                    /**echo "<br>no space in right<br>";**/
                    if($i-$no_of_characters_in_each_suggestion_row>=0)
                    {
                      $contains_space_on_left=false;
                      for($f=$i;$f>=($i-$no_of_characters_in_each_suggestion_row+1);$f--)
                      {
                        
                        if($string[$f]==' ')
                        {
                          /**echo "<br>Cnatains space at $j in left<br>";**/
                          $contains_space_on_left=true;
                          break;
                        } 
                      }
                      if($contains_space_on_left==false)
                      {
                        /**echo "<br>Adding space at $i<br>";**/
                        $string=substr_replace($string,' ',$i,0);
                      }
                    }
                  }
                } 
                $strings_to_add_spaces[$k]=$string;
              }
              $comment=$strings_to_add_spaces[0];
              /** Determining different string's size and adding spaces if no spaces are there (end)**/
                echo '<div class="well" style="color:black;">
                        <div style="text-align:right; font-size:small;">Posted on : '.$date_and_time.'</div>
                        <div  style="text-align:left;color:#3A9AC4;"><b>'.$name.'</b></div>    
                        <div  style="text-align:left">'.$comment.'</div>  
                     </div>';
      
            /** Display one particular suggestion among all the suggestions to be shown for current page (end)**/
            }
            echo'<div class="alert alert-info alert-dismissable">Showing '.($page_start+$no_of_suggestions_for_current_page).' out of '.$total_records_found.' posting',$suffix,' found. '; 
            if($page_start>0)
              echo'<input type="submit" value="Previous" name="previous" align="right" class="btn btn-primary btn-sm"/>';
            if(($page_start+$no_of_postings_to_show)<$total_records_found)
              echo'<input type="submit" value="Next" name="next"  align="right" class="btn btn-primary btn-sm"/>';  
            echo '</div></form>'; 
            /**Dislay all feedbacks for current page according to user information upto suggestion show limit (end)**/  
                
            /****/    
                
              }
            
          /**Showing previous suggestions (Start)**/  
          ?>
                </form>
        
      </div>  

      <!-- /Previous comments-->
    </div>
    <!-- /Feedback form -->
  </div> 
  <!-- /Feedback page-->
    <!-- About page -->
  <div id="about_us" class="page color-4">
    <div class="inner-page">
      <h2 class="page-headline">Who are we and how it all got started. Our story.</h2>
    </div>

    <!-- Team -->
    <div class="row inner-page team">
      <div class="col-md-6">
          <h3>MyPlace's Journey</h3>
          <p class="lead">MyPlace is developed after finding huge place searching requirements in people.</p>
          <p>We have seen people searching places in a difficult manner. Before MyPlace, the major difficulty was there when you are searching from your phone or tablet. At MyPlace we provide a device responsive design making MyPlace to be easily browsed from any device.</p>
      </div>
      <div class="col-md-6 team2">  
        <img class="pull-left" src="img/gaurav.jpg" alt="Gaurav Parmar" style="width:230px;">
        <h4>Gaurav Parmar</h4>
        <p><b>Proprietor, Founder, Creator, Designer and Developer of MyPlace.</b><br>I am a professional web developer, freelancer, entrepreneur and artist.</p>
        <ul>
          <li><i class="fa fa-home"></i> My Blog : <a href="http://being-technical.blogspot.in" target="_new">Being Technical<br>http://being-technical.blogspot.in</a>
          </li>
          <li><i class="fa fa-envelope-o"></i>  <a href="mailto:gauravparmariam@gmail.com">gauravparmariam@gmail.com</a>
          </li>
          <li class="social">
            <a href="http://github.com/gauravparmar"><i class="fa fa-github-square"></i></a>
            <a href="http://linkedin.com/in/gauravbparmar"><i class="fa fa-linkedin-square"></i></a>
            <a href="http://twitter.com/gauravonquest"><i class="fa fa-twitter"></i></a>
            <a href="http://youtube.com/user/gauravparmariam"><i class="fa fa-youtube"></i></a>
            <a href="http://facebook.com/gauravparmariam"><i class="fa fa-facebook-square"></i></a>
          </li>
        </ul>
      </div>
    </div>

    <hr>
    <div class="row inner-page" style="padding-top:0; margin-top:0px;">
      <center><h2>Reach Us</h2></center>
          <div class="col-md-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d235520.2380987839!2d75.8532572!3d22.7281031!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fcad1b410ddb%3A0x96ec4da356240f4!2sIndore%2C+Madhya+Pradesh!5e0!3m2!1sen!2s!4v1394564875727" class="col-md-12 img-responsive" frameborder="0" style="border:0; height:200px; min-height:200px; max-width:100%;"></iframe>
          </div>
    </div>

   

    
  </div> <!-- /#about -->
  

  <!-- Newsletter -->

  <a href="#" id="subscribe"></a>
  <div class="newsletter color-1">
    <div class="inner-page row">
      <div class="col-md-4">
        <h4>
          <strong>Be cool</strong>, subscribe to get our latest news.
        </h4>
      </div>
      <!--Subscribe email processing-->
      <?php
        if(isset($_POST['subscriber_email']))
        {
          if($_POST['subscriber_email']!='')
          {
             $subscriber_email=mysql_real_escape_string(htmlentities(trim($_POST['subscriber_email']))); 
             $query="INSERT INTO `subscribed_users` VALUES('','$subscriber_email')"; 
             $query_run=mysql_query($query);
             if($query_run)
             {
               echo '<div class="alert alert-success alert-dismissable">Your subsciption request is accepted!</div>';
             } 
             else
               echo '<div class="alert alert-danger alert-dismissable">Sorry, your request cannot be processed right now. Try later!</div>';
          }
          else
            echo '<div class="alert alert-warning alert-dismissable">Please enter an email id to subscirbe!</div>';
        }  
      ?>
      <!--/Subscribe email processing-->
      <form action="index.php?#subscribe" method="post">
          <div class="col-md-6">
            <input placeholder="your@e-mail.com" name="subscriber_email" class="subscribe" type="email">
          </div>
          <div class="col-md-2">
            <button type="submit" class="btn btn-primary pull-right btn-block">Subscribe</button>
          </div>
      </form>
    </div>
  </div> <!-- /newsletter -->

  <!-- The footer, social media icons, and copyright -->
  <footer class="page color-5">
    <div class="inner-page row">
      <div class="col-md-6 social">
        <a href="http://twitter.com/MyPlace"><i class="fa fa-twitter"></i></a>
        <a href="http://github.com/MyPlace"><i class="fa fa-github-square"></i></a> 
        <a href="http://facebook.com/MyPlace"><i class="fa fa-facebook-square"></i></a>
        <a href="http://plus.google.com/+MyPlace"><i class="fa fa-google-plus-square"></i></a>
      </div>
      <div class="col-md-6 text-right copyright">
        Copyright © <a href="#" title="Gaurav Parmar">Gaurav Parmar</a> | All rights reserved | <a href="#top" title="Got to top" class="scroll">To top <i class="fa fa-caret-up"></i></a>
      </div>
    </div>
  </footer>
  <a href="#" class="go-top"><img src="img/up.png" width="40px"></a>
  

  <!-- JQUERY END -->

  <!--Main js file. -->
  <script src="js/jquery.js"></script>
  <script>
  if (typeof jQuery == 'undefined') {
    document.write(unescape("%3Cscript src='js/jquery-1.9.1.min.js' type='text/javascript'%3E%3C/script%3E"));
  }
  </script>
  <script src="js/jquery-1.10.2.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/the-story.js"></script>
  <script src="js/gototop.js"></script>


</body>
</html>
