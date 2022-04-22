<?php include('include/header.php')?>
<?php
 if(isset($_SESSION['dept']))
 {
    $dept= $_SESSION['dept'] ;  
 }

 if(isset($_SESSION['prfemail']))
 {
    $prfemail= $_SESSION['prfemail'] ;
    
    
 }
 if(isset($_SESSION['prfmob']))
 {
    $prfmob= $_SESSION['prfmob'] ;
    
    
 }
 
?>
<div class="usercontainer">
   <?php
   if(isset($_SESSION['passnt'])){
      echo $_SESSION['passnt'];
      unset($_SESSION['passnt']);
   }?>
<form action="updatepass.php" method="post">
    <input type="password" placeholder="Enter your new password"name="new_pass">
    <input type="password" placeholder="Enter your confirm password"name="cnf_pass">
    <input type="submit" class="btn-u"name="chpass" value="Change Password">
</form>


</div>
