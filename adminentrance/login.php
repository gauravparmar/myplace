<?php
    require_once 'connect.inc.php';
    require_once 'core.inc.php';
    
    $current_ip=$_SERVER['REMOTE_ADDR'];
    
    if(!isset($_SESSION['secure']))
    {
        $_SESSION['secure']=rand(1000,9999);
    }
    $generated_captcha=$_SESSION['secure']; 
    
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/jpg" href="newicon.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Glog-Admin Panel</title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Log In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="login.php" method="post">
                            <f></font>
                            <?php
                                if(loggedin())
                                        header('Location: admin_functions.php');
                                    else
                                    {   
                                        if(isset($_POST['Name'])||isset($_POST['Password'])||isset($_POST['number']))
                                        {
                                            if(!empty($_POST['username'])&&!empty($_POST['password'])&&!empty($_POST['number']))
                                            {
                                                if($_POST['number']==$generated_captcha)
                                                {
                                                    require_once 'connect.inc.php';
                                                    $username=mysql_real_escape_string(htmlentities(trim($_POST['username'])));
                                                    $password=md5(mysql_real_escape_string(htmlentities(trim($_POST['password']))));
                                                    $number=mysql_real_escape_string(htmlentities(trim($_POST['number'])));
                                                    $query="SELECT * FROM `admins` WHERE `USERNAME`='$username' AND `PASSWORD`='$password'";
                                                    $query_run=mysql_query($query);
                                                    if($query_run)
                                                    {
                                                        
                                                        $number_of_user=mysql_num_rows($query_run);
                                                        if($number_of_user==1)
                                                        {
                                                            
                                                            $user_info=mysql_fetch_assoc($query_run);
                                                            $_SESSION['logged_admin_id']=$user_info['ADMIN_ID'];
                                                            $_SESSION['logged_admin_ip']=$current_ip;
                                                            /**Adding login details (start)**/
                                                            /**Getting current time and timestamp(start)**/
                                                                $timestamp=time()+19800;
                                                                $current_time=gmdate('D, d-M-Y H:i:s',$timestamp);  
                                                            /**Getting current time and timestamp(end)**/ 
                                                            $query="INSERT INTO `log` VALUES('','$current_ip','$current_time','$timestamp')";
                                                            @$query_run=mysql_query($query);
                                                            /**Adding login details (end)**/
                                                            header('Location: admin_functions.php');
                                                        }
                                                        else
                                                            echo '<div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Invalid user details! Please check again.</div>';
                                                           
                                                    }
                                                    else
                                                        echo '<div class="alert alert-warning alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Error in logging.</div>';
                                                }
                                                else
                                                     echo '<div class="alert alert-warning alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Invalid number.</div>';
                                            }
                                            else
                                                 echo '<div class="alert alert-warning alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Please fill in all the fields.</div>';
                                            $_SESSION['secure']=rand(1000,9999);    
                                            
                                        }   
                                    }  
                            ?>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="username" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="pull-right">
                                    <img src="generate_captcha.php" style="border-radius:10px;" class="img-responsive"/>
                                </div>
                                <div class="form-group ">
                                        Enter This Number
                                        <div class="pull-right"><input type="text" name="number" class="form-control" maxlength="4"></div>
                                </div><br><br><br>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" href="index.html" class="btn btn-lg btn-success btn-block" value="Login">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

</body>

</html>
