<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="complain.css">
</head>
<body>
    <section class="container-fluid">
    	<section class="row justify-content-center">
    		<section class="col-12 col-sm-6 col-md-3" >
    			<form class="form-container" action ="action.php" method="POST">
    				<div class="form-group">
                   <br><input type="text" placeholder="Email..." name="email" required><br><br>
                   
                    <label for="psw"><b>Password</b></label><br>
                    
                   
                    <input type="password" placeholder="Enter Password" name="psw" required><br>
                    
                    </label>
                    <br><button type="submit" name="login" class="btn btn-primary btn-block">Login</button><br>
                    <label><br>
				    <span ><p style="text-align: left;
    margin-top: 10px;
    font-weight: bold;
    background-color: #ffffff9c;
    color: black;" >Have'nt an account?<a href="registration.php">Signup</a></span></p>
    			</div>
    			</form>
    		</section>
    	</section>
    </section>
    
</body>
</html>