<?php
   include("connect.php");
?>
<?php
if(isset($_SESSION['prfid']))
{
    $userid=$_SESSION['prfid'];
}
$mobile=($_POST['usermobile']);
$email=($_POST['useremail']);
if(isset($_FILES['image']))
   {
    $image_name=$_FILES['image']['name'];
    $image_size=$_FILES['image']['size'];
    $image_tmp=$_FILES['image']['tmp_name'];
    $image_type=$_FILES['image']['type'];
    $dst="image/".$image_name;
    $default="avatar7.png";
   move_uploaded_file($image_tmp,$dst);
   
   if(!$image_name==0)
   {
      $image_name=$_FILES['image']['name'];
      echo 'success profile image';
   }
   else{
      $image_name=$default;
      echo 'image not found';
   }
if(isset($_POST['profileupdate']))
{  
   

   }
         $res=mysqli_query($conn," UPDATE user set Email='$email',phone='$mobile',image_name='$image_name' WHERE id='$userid' ");
           if($res==TRUE)
           {
            
            echo 'Profile updated successfully';
           header("location:edit-profile.php");
           }
           else{
            $_SESSION['userup']="<script>swal ( 'Oops' ,  'Enter valid information!' ,  'error' )</script>"; 
            header("location:profile.php");
           } 
        
}
?>