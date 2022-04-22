<?php
//constraint
 include("connect.php"); 
//destroy the session and redirect login page
unset($_SESSION['prfid']);// unset $_session ['user']
///redirect
header("location:".SITEURL.'login.php');


?>