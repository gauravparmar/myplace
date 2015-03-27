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
  <link rel="shortcut icon" href="http://prettystrap.com/themes/the-story/preview/img/favicon.ico">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="/js/html5shiv.js"></script>
      <script src="/js/respond.min.js"></script>
      <![endif]-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">    
<link rel="stylesheet" href="css/p-controls.css" type="text/css"><style type="text/css"></style></head>

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
          <li class="active"><a title="Home page" class="scroll brand-1" href="#home">Home</a></li>
          
          <li class=""><a title="Check out our awesome services" href="#services" class=" scroll brand-2">Services</a></li>
          <li><a title="Suggest places to us to include in Glog" href="#suggest" class="scroll brand-2">Suggest</a></li>
          <li><a title="Who we are" href="#advertise" class="scroll brand-2"> Advertise</a></li>
          <li><a title="Get in touch!" href="#feedback" class="scroll brand-2">Feedback</a></li>
          <li><a title="Who we are" href="#about_us" class="scroll brand-2"> About us</a></li>
          <li><a title="External page sample" href="http://prettystrap.com/themes/the-story/preview/sample-page.html">Sample Page</a></li>
        </ul>
      </div>
    </div><!-- /.navbar-container -->
  </nav>

  <!-- Home Page -->
  <div id="home" class="page color-1" >
    <div class="inner-page">
      <div class="">
        <center><h4>Search A Place Here</h4></center>
        <form action="search.php?page_start=<?php 
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
      <div class="col-md-8 col-md-push-4 lazy-container loaded">
        <img style="display: block;" class="lazy" alt="Looks great on every device" src="img/home.png" data-original="img/home.png">
      </div>
      <div class="col-md-4 col-md-pull-8">
        <ul class="big-list">
          <li ><i class="fa fa-list"></i> Place Searching</li>
          <li><i class="fa fa-list"></i> Responsive</li>
          <li><i class="fa fa-list"></i>Advertisement</li>
          <li><i class="fa fa-list"></i> Suggestions</li>

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
    <div class="inner-page">
      <h2 class="page-headline">Our services</h2>
    </div>

    <div class="inner-page row">
      <ul class="features list-inline">
        <li>
          <h3><i class="fa fa-cog"></i> Make it your own</h3>
          <p>Easily change every color, by changing just few variables. Add or remove pages, and choose from 600+ fonts.</p>
        </li>
        <li>
          <h3><i class="fa fa-heart"></i> Page speed</h3>
          <p>The theme is optimized to ensure fast loading time by lazy-loading of images and beeing minimal by design.</p>
        </li>
        <li>
          <h3><i class="fa fa-tablet"></i> For every device.</h3>
          <p>
            <strong>The Story</strong>is built to look great on every device. Custom menu for mobile devices, to ensure the best expierence.</p>
        </li>
      </ul>
    </div>

    <div class="row inner-page">
      <div class="col-md-6 lazy-container loaded">
        <img style="display: block;" class="figurette lazy" src="img/two-phones.png" data-original="img/two-phones.png" alt="Zombie ipsum">
      </div>
      <div class="col-md-6">
        <h3>All artwork included</h3>
        <p class="lead">Present your project properly. Create your own art from included templates</p>
        <ul class="list-wide">
          <li><i class="fa fa-check"></i> More than 300 awesome icons from <a href="http://fortawesome.github.io/Font-Awesome/" title="awesome font, awesome">Font-awesome</a>
          </li>
          <li><i class="fa fa-check"></i> Browser icons</li>
          <li><i class="fa fa-check"></i> Phone, tablet, laptop, desktop vectors (SVG)</li>
          <li><i class="fa fa-check"></i> 5 Layered PSD files.</li>
        </ul>
      </div>
    </div>

    <hr>

    <!-- Video -->
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
  
  <!-- suggest page -->
  <div id="suggest" class="page color-3">
    <div class="inner-page">
      <h2 class="page-headline">Page suggest</h2>
    </div>

    <!-- Vectors -->
    <div class="row inner-page">
      <div class="col-md-6 lazy-container loaded">
        <img style="display: block;" class="figurette lazy" alt="Original vectors" src="img/responsive-vectors.png" data-original="img/responsive-vectors.png">
      </div>
      <div class="col-md-6">
        <h3>5 vectors included</h3>
        <p class="lead">Zombie ipsum
          <abbr title="HyperText Markup Language" class="initialism">HTML</abbr>reversus ab viral inferno, nam rick grimes malum cerebro. De carne lumbering animata corpora quaeirtis.</p>
        <p>The voodoo sacerdos flesh eater, suscitat mortuos comedere 
carnem virus. Zonbi tattered for solum oculi eorum defunctis go lum 
cerebro..</p>
      </div>
    </div>  <!-- /vectors -->

    <hr>

    <!-- Big laptop -->
    <div class="row inner-page">
      <div class="col-md-offset-1 col-md-10">
        <div class="lazy-container lazy-large btn-container loaded">
          <div class="btn-container">
            <img class="figurette lazy " src="img/laptop-blue2x.png" data-original="img/laptop-blue@2x.png" alt="view image in lightbox" style="display: inline;">
            <a href="http://prettystrap.com/themes/the-story/preview/img/superman.jpg" class="lightbox btn-play" target="_blank">
              <i class="fa fa-search-plus"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Clients -->
    <div class="clients color-1">
      <div class="inner-page">
        <h2 class="page-headline">Who's using stories.</h2>
      </div>
      <div class="inner-page row">
        <ul class="clients list-inline">
          <li><i class="fa fa-globe"></i> Earth</li>
          <li><i class="fa fa-heart"></i> Love</li>
          <li><i class="fa fa-leaf"></i> Leaves</li>
          <li><i class="fa fa-cloud"></i> Clouds</li>
        </ul> 
      </div>
    </div>
  </div> <!-- /#suggest -->
 


  <!-- Advertise page-->   
  <div id="advertise" class="page color-2">
    <div class="inner-page">
      <h2 class="page-headline">Advertise</h2>
    </div>
    <div class="row inner-page contact">
      <div class="col-md-6">
        <h3>What's on your mind?</h3>
        <form id="contact-form">
          <textarea rows="6" class="form-control" placeholder="Your story"></textarea>
          <input class="form-control" placeholder="your@e-mail.com" type="text">
          <input class="form-control" placeholder="Name" type="text">
          <button class="btn btn-primary btn-centered">Advertise</button>
        </form>
      </div>
      <div class="col-md-6">
        <div class="btn-container centered lazy-container text-center"><div role="progressbar" style="position: relative; width: 0px; z-index: 2000000000; left: 265px; top: 200px;" class="spinner"><div style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s normal none infinite opacity-100-25-0-12;"><div style="position: absolute; width: 12px; height: 5px; background: none repeat scroll 0% 0% rgb(0, 0, 0); box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1); transform-origin: left center; transform: rotate(0deg) translate(10px, 0px); border-radius: 2px 2px 2px 2px;"></div></div><div style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s normal none infinite opacity-100-25-1-12;"><div style="position: absolute; width: 12px; height: 5px; background: none repeat scroll 0% 0% rgb(0, 0, 0); box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1); transform-origin: left center; transform: rotate(30deg) translate(10px, 0px); border-radius: 2px 2px 2px 2px;"></div></div><div style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s normal none infinite opacity-100-25-2-12;"><div style="position: absolute; width: 12px; height: 5px; background: none repeat scroll 0% 0% rgb(0, 0, 0); box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1); transform-origin: left center; transform: rotate(60deg) translate(10px, 0px); border-radius: 2px 2px 2px 2px;"></div></div><div style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s normal none infinite opacity-100-25-3-12;"><div style="position: absolute; width: 12px; height: 5px; background: none repeat scroll 0% 0% rgb(0, 0, 0); box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1); transform-origin: left center; transform: rotate(90deg) translate(10px, 0px); border-radius: 2px 2px 2px 2px;"></div></div><div style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s normal none infinite opacity-100-25-4-12;"><div style="position: absolute; width: 12px; height: 5px; background: none repeat scroll 0% 0% rgb(0, 0, 0); box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1); transform-origin: left center; transform: rotate(120deg) translate(10px, 0px); border-radius: 2px 2px 2px 2px;"></div></div><div style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s normal none infinite opacity-100-25-5-12;"><div style="position: absolute; width: 12px; height: 5px; background: none repeat scroll 0% 0% rgb(0, 0, 0); box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1); transform-origin: left center; transform: rotate(150deg) translate(10px, 0px); border-radius: 2px 2px 2px 2px;"></div></div><div style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s normal none infinite opacity-100-25-6-12;"><div style="position: absolute; width: 12px; height: 5px; background: none repeat scroll 0% 0% rgb(0, 0, 0); box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1); transform-origin: left center; transform: rotate(180deg) translate(10px, 0px); border-radius: 2px 2px 2px 2px;"></div></div><div style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s normal none infinite opacity-100-25-7-12;"><div style="position: absolute; width: 12px; height: 5px; background: none repeat scroll 0% 0% rgb(0, 0, 0); box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1); transform-origin: left center; transform: rotate(210deg) translate(10px, 0px); border-radius: 2px 2px 2px 2px;"></div></div><div style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s normal none infinite opacity-100-25-8-12;"><div style="position: absolute; width: 12px; height: 5px; background: none repeat scroll 0% 0% rgb(0, 0, 0); box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1); transform-origin: left center; transform: rotate(240deg) translate(10px, 0px); border-radius: 2px 2px 2px 2px;"></div></div><div style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s normal none infinite opacity-100-25-9-12;"><div style="position: absolute; width: 12px; height: 5px; background: none repeat scroll 0% 0% rgb(0, 0, 0); box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1); transform-origin: left center; transform: rotate(270deg) translate(10px, 0px); border-radius: 2px 2px 2px 2px;"></div></div><div style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s normal none infinite opacity-100-25-10-12;"><div style="position: absolute; width: 12px; height: 5px; background: none repeat scroll 0% 0% rgb(0, 0, 0); box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1); transform-origin: left center; transform: rotate(300deg) translate(10px, 0px); border-radius: 2px 2px 2px 2px;"></div></div><div style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s normal none infinite opacity-100-25-11-12;"><div style="position: absolute; width: 12px; height: 5px; background: none repeat scroll 0% 0% rgb(0, 0, 0); box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1); transform-origin: left center; transform: rotate(330deg) translate(10px, 0px); border-radius: 2px 2px 2px 2px;"></div></div></div>
          <img src="img/pixel.png" class="lazy figurette" alt="Open the map" data-original="img/map.png">
          <a class="lightbox iframe  btn-map" target="blank" title="Open google maps" href="https://maps.google.com/maps?q=Stationsplein,+1012+Centrum,+Amsterdam,+Noord-Holland,+The+Netherlands&amp;hl=en"><i class="pull-left fa fa-map-marker"></i><div>Stationsplein, 1012 AB,<br>Amsterdam,<br> The Netherlands</div></a>
        </div>
      </div>
    </div>
  </div> 
  <!-- /Advertise page-->
  <!-- Feedback page-->   
  <div id="feedback" class="page color-2">
    <div class="inner-page">
      <h2 class="page-headline">Feedback</h2>
    </div>
    <div class="row inner-page contact">
      <div class="col-md-6">
        <h3>What's on your mind?</h3>
        <form id="contact-form">
          <textarea rows="6" class="form-control" placeholder="Your story"></textarea>
          <input class="form-control" placeholder="your@e-mail.com" type="text">
          <input class="form-control" placeholder="Name" type="text">
          <button class="btn btn-primary btn-centered">Feedback</button>
        </form>
      </div>
      <div class="col-md-6">
        <div class="btn-container centered lazy-container text-center"><div role="progressbar" style="position: relative; width: 0px; z-index: 2000000000; left: 265px; top: 200px;" class="spinner"><div style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s normal none infinite opacity-100-25-0-12;"><div style="position: absolute; width: 12px; height: 5px; background: none repeat scroll 0% 0% rgb(0, 0, 0); box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1); transform-origin: left center; transform: rotate(0deg) translate(10px, 0px); border-radius: 2px 2px 2px 2px;"></div></div><div style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s normal none infinite opacity-100-25-1-12;"><div style="position: absolute; width: 12px; height: 5px; background: none repeat scroll 0% 0% rgb(0, 0, 0); box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1); transform-origin: left center; transform: rotate(30deg) translate(10px, 0px); border-radius: 2px 2px 2px 2px;"></div></div><div style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s normal none infinite opacity-100-25-2-12;"><div style="position: absolute; width: 12px; height: 5px; background: none repeat scroll 0% 0% rgb(0, 0, 0); box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1); transform-origin: left center; transform: rotate(60deg) translate(10px, 0px); border-radius: 2px 2px 2px 2px;"></div></div><div style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s normal none infinite opacity-100-25-3-12;"><div style="position: absolute; width: 12px; height: 5px; background: none repeat scroll 0% 0% rgb(0, 0, 0); box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1); transform-origin: left center; transform: rotate(90deg) translate(10px, 0px); border-radius: 2px 2px 2px 2px;"></div></div><div style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s normal none infinite opacity-100-25-4-12;"><div style="position: absolute; width: 12px; height: 5px; background: none repeat scroll 0% 0% rgb(0, 0, 0); box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1); transform-origin: left center; transform: rotate(120deg) translate(10px, 0px); border-radius: 2px 2px 2px 2px;"></div></div><div style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s normal none infinite opacity-100-25-5-12;"><div style="position: absolute; width: 12px; height: 5px; background: none repeat scroll 0% 0% rgb(0, 0, 0); box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1); transform-origin: left center; transform: rotate(150deg) translate(10px, 0px); border-radius: 2px 2px 2px 2px;"></div></div><div style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s normal none infinite opacity-100-25-6-12;"><div style="position: absolute; width: 12px; height: 5px; background: none repeat scroll 0% 0% rgb(0, 0, 0); box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1); transform-origin: left center; transform: rotate(180deg) translate(10px, 0px); border-radius: 2px 2px 2px 2px;"></div></div><div style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s normal none infinite opacity-100-25-7-12;"><div style="position: absolute; width: 12px; height: 5px; background: none repeat scroll 0% 0% rgb(0, 0, 0); box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1); transform-origin: left center; transform: rotate(210deg) translate(10px, 0px); border-radius: 2px 2px 2px 2px;"></div></div><div style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s normal none infinite opacity-100-25-8-12;"><div style="position: absolute; width: 12px; height: 5px; background: none repeat scroll 0% 0% rgb(0, 0, 0); box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1); transform-origin: left center; transform: rotate(240deg) translate(10px, 0px); border-radius: 2px 2px 2px 2px;"></div></div><div style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s normal none infinite opacity-100-25-9-12;"><div style="position: absolute; width: 12px; height: 5px; background: none repeat scroll 0% 0% rgb(0, 0, 0); box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1); transform-origin: left center; transform: rotate(270deg) translate(10px, 0px); border-radius: 2px 2px 2px 2px;"></div></div><div style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s normal none infinite opacity-100-25-10-12;"><div style="position: absolute; width: 12px; height: 5px; background: none repeat scroll 0% 0% rgb(0, 0, 0); box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1); transform-origin: left center; transform: rotate(300deg) translate(10px, 0px); border-radius: 2px 2px 2px 2px;"></div></div><div style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s normal none infinite opacity-100-25-11-12;"><div style="position: absolute; width: 12px; height: 5px; background: none repeat scroll 0% 0% rgb(0, 0, 0); box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1); transform-origin: left center; transform: rotate(330deg) translate(10px, 0px); border-radius: 2px 2px 2px 2px;"></div></div></div>
          <img src="img/pixel.png" class="lazy figurette" alt="Open the map" data-original="img/map.png">
          <a class="lightbox iframe  btn-map" target="blank" title="Open google maps" href="https://maps.google.com/maps?q=Stationsplein,+1012+Centrum,+Amsterdam,+Noord-Holland,+The+Netherlands&amp;hl=en"><i class="pull-left fa fa-map-marker"></i><div>Stationsplein, 1012 AB,<br>Amsterdam,<br> The Netherlands</div></a>
        </div>
      </div>
    </div>
  </div> 
  <!-- /Feedback page-->
    <!-- About page -->
  <div id="about_us" class="page color-4">
    <div class="inner-page">
      <h2 class="page-headline">Who are we and how it all got started. Our story.</h2>
    </div>
    <div class="row inner-page">
      <div class="col-md-6  lazy-container"><div role="progressbar" style="position: relative; width: 0px; z-index: 2000000000; left: 265px; top: 200px;" class="spinner"><div style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s normal none infinite opacity-100-25-0-12;"><div style="position: absolute; width: 12px; height: 5px; background: none repeat scroll 0% 0% rgb(0, 0, 0); box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1); transform-origin: left center; transform: rotate(0deg) translate(10px, 0px); border-radius: 2px 2px 2px 2px;"></div></div><div style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s normal none infinite opacity-100-25-1-12;"><div style="position: absolute; width: 12px; height: 5px; background: none repeat scroll 0% 0% rgb(0, 0, 0); box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1); transform-origin: left center; transform: rotate(30deg) translate(10px, 0px); border-radius: 2px 2px 2px 2px;"></div></div><div style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s normal none infinite opacity-100-25-2-12;"><div style="position: absolute; width: 12px; height: 5px; background: none repeat scroll 0% 0% rgb(0, 0, 0); box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1); transform-origin: left center; transform: rotate(60deg) translate(10px, 0px); border-radius: 2px 2px 2px 2px;"></div></div><div style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s normal none infinite opacity-100-25-3-12;"><div style="position: absolute; width: 12px; height: 5px; background: none repeat scroll 0% 0% rgb(0, 0, 0); box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1); transform-origin: left center; transform: rotate(90deg) translate(10px, 0px); border-radius: 2px 2px 2px 2px;"></div></div><div style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s normal none infinite opacity-100-25-4-12;"><div style="position: absolute; width: 12px; height: 5px; background: none repeat scroll 0% 0% rgb(0, 0, 0); box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1); transform-origin: left center; transform: rotate(120deg) translate(10px, 0px); border-radius: 2px 2px 2px 2px;"></div></div><div style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s normal none infinite opacity-100-25-5-12;"><div style="position: absolute; width: 12px; height: 5px; background: none repeat scroll 0% 0% rgb(0, 0, 0); box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1); transform-origin: left center; transform: rotate(150deg) translate(10px, 0px); border-radius: 2px 2px 2px 2px;"></div></div><div style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s normal none infinite opacity-100-25-6-12;"><div style="position: absolute; width: 12px; height: 5px; background: none repeat scroll 0% 0% rgb(0, 0, 0); box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1); transform-origin: left center; transform: rotate(180deg) translate(10px, 0px); border-radius: 2px 2px 2px 2px;"></div></div><div style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s normal none infinite opacity-100-25-7-12;"><div style="position: absolute; width: 12px; height: 5px; background: none repeat scroll 0% 0% rgb(0, 0, 0); box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1); transform-origin: left center; transform: rotate(210deg) translate(10px, 0px); border-radius: 2px 2px 2px 2px;"></div></div><div style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s normal none infinite opacity-100-25-8-12;"><div style="position: absolute; width: 12px; height: 5px; background: none repeat scroll 0% 0% rgb(0, 0, 0); box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1); transform-origin: left center; transform: rotate(240deg) translate(10px, 0px); border-radius: 2px 2px 2px 2px;"></div></div><div style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s normal none infinite opacity-100-25-9-12;"><div style="position: absolute; width: 12px; height: 5px; background: none repeat scroll 0% 0% rgb(0, 0, 0); box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1); transform-origin: left center; transform: rotate(270deg) translate(10px, 0px); border-radius: 2px 2px 2px 2px;"></div></div><div style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s normal none infinite opacity-100-25-10-12;"><div style="position: absolute; width: 12px; height: 5px; background: none repeat scroll 0% 0% rgb(0, 0, 0); box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1); transform-origin: left center; transform: rotate(300deg) translate(10px, 0px); border-radius: 2px 2px 2px 2px;"></div></div><div style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s normal none infinite opacity-100-25-11-12;"><div style="position: absolute; width: 12px; height: 5px; background: none repeat scroll 0% 0% rgb(0, 0, 0); box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1); transform-origin: left center; transform: rotate(330deg) translate(10px, 0px); border-radius: 2px 2px 2px 2px;"></div></div></div>
        <img class="figurette lazy" src="img/pixel.png" data-original="img/green-office.png" alt="Our workspace">
      </div>
      <div class="col-md-6">
        <h3>Zonbi tattered for solum.</h3>
        <p class="lead">The voodoo sacerdos flesh eater, suscitat 
mortuos comedere carnem virus. Zonbi tattered for solum oculi eorum 
defunctis go lum cerebro.</p>
        <p>Zombie ipsum reversus ab viral inferno, nam rick grimes malum
 cerebro. De carne lumbering animata corpora quaeritis. Summus brains 
sit​​, morbo vel maleficia? De apocalypsi gorger omero undead survivor 
dictum mauris. Hi mindless mortuis soulless creaturas, imo evil stalking
 monstra adventus resi dentevil vultus comedat cerebella viventium.</p>
      </div>
    </div>

    <hr>

    <!-- Team -->
    <div class="row inner-page team">
      <div class="col-md-6">
        <img class="pull-left" src="img/cookies2.png" alt="A cookie">
        <h4>Jane Doe</h4>
        <p>Zombie ipsum reversus ab viral inferno, nam rick grimes malum cerebro. De carne lumbering animata corpora quaeritis.</p>
        <ul>
          <li><i class="fa fa-home"></i>  <a href="http://prettystrap.com/themes/the-story/preview/prettystrap.com">http://prettystrap.com</a>
          </li>
          <li><i class="fa fa-envelope-o"></i>  <a href="http://prettystrap.com/themes/the-story/preview/info@email.com">info@email.com</a>
          </li>
          <li class="social">
            <a href="#about_us"><i class="fa fa-facebook-square"></i></a>
            <a href="#about_us"><i class="fa fa-twitter"></i></a>
            <a href="#about_us"><i class="fa fa-github-square"></i></a>
          </li>
        </ul>
      </div>
      <div class="col-md-6 team2">
        <img class="pull-left" src="img/cookies.png" alt="A cookie">
        <h4>John Doe</h4>
        <p>Zombie ipsum reversus ab viral inferno, nam rick grimes malum cerebro. De carne lumbering animata corpora quaeritis.</p>
        <ul>
          <li><i class="fa fa-home"></i>  <a href="http://prettystrap.com/themes/the-story/preview/prettystrap.com">http://prettystrap.com</a>
          </li>
          <li><i class="fa fa-envelope-o"></i>  <a href="http://prettystrap.com/themes/the-story/preview/info@email.com">info@email.com</a>
          </li>
          <li class="social">
            <a href="#about_us"><i class="fa fa-facebook-square"></i></a>
            <a href="#about_us"><i class="fa fa-twitter"></i></a>
            <a href="#about_us"><i class="fa fa-github-square"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </div> <!-- /#about -->
  

  <!-- Newsletter -->
  <div class="newsletter color-1">
    <div class="inner-page row">
      <div class="col-md-4">
        <h4>
          <strong>Be cool</strong>, subscribe to get our latest news</h4>
      </div>
      <div class="col-md-6">
        <input placeholder="your@e-mail.com" name="EMAIL" class="subscribe" type="email">
      </div>
      <div class="col-md-2">
        <button type="submit" class="btn btn-primary pull-right btn-block">Subscribe</button>
      </div>
    </div>
  </div> <!-- /newsletter -->

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
        © 2013 <a href="http://prettystrap.com/" title="twitter bootstrap themes">prettystrap.com</a> | all rights reserved | <a href="#top" title="Got to top" class="scroll">To top <i class="fa fa-caret-up"></i></a>
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