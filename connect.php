<?php

//start session
  session_start();
  ob_start();
  
  //defining
  define('SITEURL','http://localhost:8080/admin/');
  define('LOCALHOST','localhost');
  define('DB_USERNAME','root');
  define('DB_PASSWORD','');
  define('DB_NAME',"admin");


 $conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die (mysqli_error());//databse connection
 $db_select =mysqli_select_db($conn,DB_NAME) or die (mysqli_error());//select
 if(!$conn)
{
   die("<script>alert('connection failed')</script>");

}
 function getuser()
{ global $conn;
    $user['id']="";
    $user['Name']="";
    $user['Lname']="";
    $user['Eamil']="";
    $user['image']="";
    
    if(isset($_SESSION['prfid']))
    {
      $usid=$_SESSION['prfid'];
    
    $res2=mysqli_query($conn,"SELECT * FROM user where id ='$usid'" );
    $row2=mysqli_fetch_assoc($res2);
   
    $user['image']=$row2['image_name'];
    $user['Email']=$row2['Email'];
   
    }
    return $user;


}
?>