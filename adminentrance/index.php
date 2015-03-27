
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/jpg" href="icon.jpg">
    <title>MyPlace Admin Panel</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/blog-home.css" rel="stylesheet">
        <script language="javascript">
            function resize(id)
            {
                var h,w;
                w=document.getElementById('frame_id').contentWindow.document.body.scrollWidth;
                h=document.getElementById('frame_id').contentWindow.document.body.scrollHeight;
                w+=0;
                h+=20;
                document.getElementById('frame_id').height=h;
                document.getElementById('frame_id').width=w;
            }   
        </script>
</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">MyPlace Admin Panel</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
           
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">
        <div class="row">
            <iframe  width="100%" name="window" src="login.php" align="middle" marginheight="0" marginwidth="0" style="text-align:center;" id="frame_id" onLoad="resize('frame_id');" frameborder="0"></iframe>
        </div>
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <center><p>Copyright &copy; Gaurav Parmar</p></center>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>
