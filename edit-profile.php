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
   
<form action="updateprofile.php" method="post"enctype="multipart/form-data">
    <input type="email"name="useremail" value="<?php echo $prfemail;?>"readonly="readonly">
    <input type="text" name="usermobile"value="<?php echo $prfmob;?>" required>
    <input type="file" name="image"value="">
    <input type="submit" class="btn-u"name="profileupdate" value="Update">
</form>


</div>
