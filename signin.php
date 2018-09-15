<?php

    if(isset($_POST["signup"]))
    {
    	if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["pwd"]))
    	{
    		header("location:signin.php");
    	}
        else
        {
        	$msg="Empty Field";
        }
    	
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product example for Bootstrap</title>

    <!-- Bootstrap core CSS -->

    <!-- Custom styles for this template -->
    <link href="css/product.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/css/mdb.min.css" rel="stylesheet">
</head>
<style>
	body{
		background-image: url(img/advertisement-businessman-hands-533444.jpg);
		background-size: 100% 100%;
	}
</style>
<body>
	<div>
	    <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
              <a class="navbar-brand" href="#"><strong>Navbar</strong></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav mr-auto navbar-right navbar-dark">
                            <a class="nav-link" href="#">Become A Host <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Help</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="signup.php">Sign up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section style="float: right;">
        <div class="container">
        	<div class="row pt-3 pr-5">
        		
        		<!-- Default form login -->
				<form class="text-center border border-light p-3" method="POST">

				    <p class="h4 mb-2">Sign in</p>

                    <p style="color: red;"><?php  if(isset($msg))  echo $msg;?></p>
				    <!-- Fullname -->
				    <input type="text" id="defaultLoginFormfullname" class="form-control mb-2" placeholder="Your name" name="name">

				    <!-- Email -->
				    <input type="email" id="defaultLoginFormEmail" class="form-control mb-2" placeholder="Your email" name="email">

				    <!-- Password -->
				    <input type="password" id="defaultLoginFormPassword" class="form-control mb-2" placeholder="Your password" name="pwd">

				    <div class="d-flex justify-content-around">
				        <div class="">
				            <!-- Remember me -->
				            <div class="custom-control custom-checkbox">
				                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
				                <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
				            </div>
				        </div>
				    </div>

				    <!-- Sign in button -->
				    <button class="btn btn-info btn-block my-2" type="submit" name="signup">Sign Up</button>

				    <!-- Register -->
				    <p class="text-right">Not a member?
				        <a href="#">Register</a>
				    </p>


				</form>
				<!-- Default form login -->
				
        	</div>
        </div>
        </section>
    </div>


    


    <!-- JQuery -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <!-- Bootstrap tooltips -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
      <!-- Bootstrap core JavaScript -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
      <!-- MDB core JavaScript -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/js/mdb.min.js"></script>
	
</body>
</html>