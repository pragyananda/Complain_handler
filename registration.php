<?php
   include("connect.php");
?>


<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Signin page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="complain.css">
</head>
<body >

    <section class="container-fluid">
      
    	<section class="row justify-content-center">
    		<section class="col-12 col-sm-6 col-md-3 col-xs-3" >
    			<form class="form-container" action="action.php"method="POST">
    				<div class="form-group">
                    <input type="text"placeholder="Enter First Name..." name="name" required><br>                   
                    <br><input type="text" placeholder="Enter Lastname..." name="lname" required><br>                  
                   <br><input type="text" placeholder="Phone..." name="mob" required><br>
                   <br><input type="text" placeholder="Email..." name="email" required><br>
                   <!-- <label for="cars"></label><br> -->
                       <b style="color:blue;">Choose a Department:</b>
                      <select class="slct"name="dept" id="dept"placeholder="">
                        <b><option value="">Department</option></b> 
                         <option value="Computer Science">Computer science</option>
                         <option value="Electricity">Electricity Department</option>
                         <option value="water">Water Department</option>
                         <option value="Construction">Construction Department</option>
                      </select>
                    <br><br>
        
                    <label for="psw"><b style="color:blue;">Password</b></label><br>
                    <input type="password" placeholder="Enter Password" name="psw" required><br>
                    
                    </label>
                    <br><button type="submit" name="submit" class="btn btn-primary btn-block">SignUp</button><br>
                    <label><br>
                    <span ><p style="text-align: left;
    margin-top: 10px;
    font-weight: bold;
    background-color: #ffffff9c;
    color: black;" >Have an account?<a href="login.php">Login</a></span></p>
    			</div>
    			</form>
    		</section>
    	</section>
    </section>


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
