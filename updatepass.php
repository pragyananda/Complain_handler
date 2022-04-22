<?php
   include("connect.php");
?>
<?php
if(isset($_SESSION['prfid']))
{
    $userid=$_SESSION['prfid'];
}
$new_pass=($_POST['new_pass']);
$cnf_password=($_POST['cnf_pass']);

  
if(isset($_POST['chpass']))
{  
    if($new_pass==$cnf_password)
    {
        $res=mysqli_query($conn," UPDATE user set Password='$cnf_password' WHERE id='$userid' ");
        if($res==TRUE)
        {
         
         echo 'Profile updated successfully';
        header("location:index.php");
        }
        else{
         $_SESSION['userup']="<script>swal ( 'Oops' ,  'Enter valid information!' ,  'error' )</script>"; 
         header("location:profile.php");
        } 
    }
    else{
        $_SESSION['passnt']="password not match";
        header("location:chpass.php");
    }
 
}      

?>