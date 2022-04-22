<?php  

if(!isset($_SESSION['prfid']))//if user not set
{

header("location:".SITEURL.'login.php');
}
?>