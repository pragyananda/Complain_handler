<?php include('connect.php');
 include('logincheck.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Admin</title>
    <style>

    </style>
</head>
<body>
<?php
$getuser=getuser();
 if(isset($_SESSION['dept']))
 {
    $dept= $_SESSION['dept'] ;
    
 }
 if(isset($_SESSION['image']))
 {
    $image= $_SESSION['image'] ;
    
 }
 if(isset($_SESSION['prfemail']))
 {
    $prfemail= $_SESSION['prfemail'] ;
    
    
 }
 if(isset($_SESSION['processs']))
 {
    echo '<div class="msgshow w3-animate-right" style="  background-color: #5fd65f;">
    
    <h4 style="color:white;">'.$_SESSION['processs'].'</h4>
   
</div>';
    unset($_SESSION['processs']);
    
 }
 if(isset($_SESSION['processf']))
 {
    echo '<div class="msgshow w3-animate-right" style="  background-color: red;">
    
    <h4 style="color:white;">'.$_SESSION['processf'].'</h4>
   
</div>';
    unset($_SESSION['processf']);
    
 }
 if(isset($_SESSION['logins']))
 {
    echo '<div class="msgshow w3-animate-right" style="  background-color: #5fd65f;">
    
    <h4 style="color:white;">'.$_SESSION['logins'].'</h4>
   
</div>';
    unset($_SESSION['logins']);
    
 }
 if(isset($_SESSION['completeds']))
 {
    echo '<div class="msgshow w3-animate-right" style="  background-color: #5fd65f;">
    
    <h4 style="color:white;">'.$_SESSION['completeds'].'</h4>
   
</div>';
    unset($_SESSION['completeds']);
    
 }
 if(isset($_SESSION['completedf']))
 {
    echo '<div class="msgshow w3-animate-right" style="  background-color: red;">
    
    <h4 style="color:white;">'.$_SESSION['completedf'].'</h4>
    
</div>';
    unset($_SESSION['completedf']);
    
 }

 
?>

    <div class="wrapper">
        <!--Top menu -->
        <div class="sidebar">
           <!--profile image & text-->
           <div class="profile">
                <img src="image/<?php echo $getuser['image']?>" alt="profile_picture">
                <h3><?php echo $dept;?></h3>
                <p>Department</p>
            </div>
            <!--menu item-->
            <ul>
            <li class="active">
                    <a href="index.php" >
                       
                        <span class="item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="complaints.php" >
                       
                        <span class="item">Complaints</span>
                    </a>
                </li>
                <li>
                    <a href="process.php" >
                       
                        <span class="item">Processing</span>
                    </a>
                </li>
                <li>
                    <a href="completed.php" >
                        
                        <span class="item">Completed</span>
                    </a>
                </li>
             
                
              
            </ul>
        </div>
        <div class="section">
            <div class="top_navbar">
              <div class="profile1">
                <img onclick="menu()"src="image/<?php echo $getuser['image']?>" alt="profile_picture">
                
              </div>
                <div class="drpdwn"id="drpdwn">
                 <div class="drp1">
                  
                  <img src="image/<?php echo $getuser['image']?>" alt="profile_picture">
    
                 </div>
                   <h3 class="Adname"><?php echo $dept;?> Department</h3>
                   <h5 class="Adgmail"><?php echo $prfemail;?></h5>
                     
                  <ul>
                      <hr>
                    <li><a href="chpass.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M282.3 343.7L248.1 376.1C244.5 381.5 238.4 384 232 384H192V424C192 437.3 181.3 448 168 448H128V488C128 501.3 117.3 512 104 512H24C10.75 512 0 501.3 0 488V408C0 401.6 2.529 395.5 7.029 391L168.3 229.7C162.9 212.8 160 194.7 160 176C160 78.8 238.8 0 336 0C433.2 0 512 78.8 512 176C512 273.2 433.2 352 336 352C317.3 352 299.2 349.1 282.3 343.7zM376 176C398.1 176 416 158.1 416 136C416 113.9 398.1 96 376 96C353.9 96 336 113.9 336 136C336 158.1 353.9 176 376 176z"/></svg><span class="item">Change password</span></a></li>
                    <li><a href="edit-profile.php"><i class="fas fa-edit " style="color: black;"></i><span class="item">Edit Profile</span></a></li>
                    <li><a href="logout.php"><i class="fas fa-sign-out-alt"style="color: black;"></i><span class="item">Logout</span></a></li>       
                    <hr></ul>
                  
                </div>
            </div>

        </div>
        </div>

    </div>
   
    <script>
     
     function menu(){
        var x = document.getElementById("drpdwn");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
     }
     window.onclick = function(event) {
  if (event.target == drpdwn) {s
    x.style.display = "none";
  }
}
 </script>
 
</body>

</html>