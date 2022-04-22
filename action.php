<?php
   include("connect.php");
?>
<?php
if(isset($_POST['login']))
{
 $email=$_POST['email'];
 $password=$_POST['psw'];
 
 $sql="SELECT * FROM user WHERE Email='$email' AND  Password='$password' ";
 $res=mysqli_query($conn,$sql);
 $row=mysqli_fetch_assoc($res);
 $count=mysqli_num_rows($res);
 if($count >0){
  $_SESSION['prfid'] =$row['id'];
  $_SESSION['prfemail'] =$row['Email'];
  $_SESSION['image'] =$row['image_name'];
  $_SESSION['prfmob'] =$row['phone'];
  $_SESSION['dept'] =$row['Department'];
$_SESSION['logins']="Login successfully..";
  header("location:index.php");
  

 }
else{
    header("location:login.php");
}
 
}
?>
<?php
if(isset($_POST['submit']))
{
   $name=$_POST['name'];
    $lname=$_POST['lname'];
   $email=$_POST['email'];
  $mob=$_POST['mob'];
  $dept=$_POST['dept'];
   $password=$_POST['psw'];
  
  $sql="INSERT INTO user SET
  Name= '$name',
  Lname= '$lname',
  Email= '$email',
  phone= '$mob',
  Department='$dept',
  Password= '$password' ";
    $res=mysqli_query($conn,$sql);

    if($res==TRUE)
    {
      $_SESSION['signin']="Sign up successfully";
      header("location:login.php");
    
    }
    else{
      $_SESSION['signin']="Check your entered input ";
    }
    
  

  }
  
?>

    <?php
    if(isset($_POST['processsubmit']))
{
  $msgid=$_POST['msgid'];
  $sql5="UPDATE complaint
  SET status ='process'
  WHERE  id='$msgid'";
  $res5=mysqli_query($conn,$sql5);
 

  if($res5==true){
    $_SESSION['processs']="Processed successfully..";
    header("location:complaints.php");
   

  }
  else{
    $_SESSION['processf']="Please check.......";
    header("location:complaints.php");
  }
}
   ?>
    <?php
    if(isset($_POST['completedsubmit']))
{
  $msgid=$_POST['msgid'];
  $sql5="UPDATE complaint
  SET status ='completed'
  WHERE  id='$msgid'";
  $res5=mysqli_query($conn,$sql5);
 

  if($res5==true){
    $_SESSION['completeds']="completed successfully..";
    header("location:complaints.php");
   

  }
  else{
    $_SESSION['completedf']="Please check.......";
    header("location:complaints.php");
  }
}
   ?>
