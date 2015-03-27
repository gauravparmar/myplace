<?php
require 'connect.inc.php';
session_start();
session_destroy();
header('Location: login.php');

?>
