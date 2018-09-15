<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product example for Bootstrap</title>

    <!-- Bootstrap core CSS -->

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/product.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/css/mdb.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat+Alternates">
</head>
<style>
	body{
		background: url(img/red-blue-bricks-pattern.jpg);
        background-size: 100% 100%;
	}
    .animated-icon4{
    width:30px;
    height: 20px;
    position: relative;
    margin:0px;
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
    -webkit-transition: .5s ease-in-out;
    -moz-transition :.5s ease-in-out;
    -o-transition: .5s ease-in-out;
    transition: .5s ease-in-out;
    cursor: pointer;
    }
    .animated-icon4 span{
        display: block;
        position: absolute;
        height: 3px;
        width: 100%;
        border-radius: 9px;
        opacity: 1;
        left: 0;
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
        -webkit-transition: .25s ease-in-out;
        -moz-transition :.25s ease-in-out;
        -o-transition: .25s ease-in-out;
        transition: .25s ease-in-out;
    }
    .animated-icon4 span{
        background: #f3e5f5;
    }
    .animated-icon4 span:nth-child(1){
        top: 0px;
        -webkit-transform-origin: left center;
        -moz-transform-origin: left center;
        -o-transform-origin: left center;
        transform-origin: left center;
    }
    .animated-icon4 span:nth-child(2){
        top: 10px;
        -webkit-transform-origin: left center;
        -moz-transform-origin: left center;
        -o-transform-origin: left center;
        transform-origin: left center;
    }
    .animated-icon4 span:nth-child(3){
        top: 20px;
        -webkit-transform-origin: left center;
        -moz-transform-origin: left center;
        -o-transform-origin: left center;
        transform-origin: left center;
    }

    .animated-icon4.open span:nth-child(1){
        -webkit-transform-origin: rotate(45deg);
        -moz-transform-origin: rotate(45deg);
        -o-transform-origin: rotate(45deg);
        transform-origin: rotate(45deg);
        top: 0px;
        left: 8px;
    }
    .animated-icon4.open span:nth-child(2){
        width: 0%;
        opacity: 0;
    }
    .animated-icon4.open span:nth-child(3){
        -webkit-transform-origin: rotate(45deg);
        -moz-transform-origin: rotate(45deg);
        -o-transform-origin: rotate(45deg);
        transform-origin: rotate(45deg);
        top: 21px;
        left: 8px;
    }
    .quiz{
        position: relative;
        display: block;
        background: #ffdda2;
        color: #f74343;
        border-radius: 10px;
        padding: 2px 5px;
        cursor: pointer;
    }
    .quiz:hover:nth-child(5n + 5){
        transform: translateY(3px);

    }
    .quiz:hover:nth-child(5n + 4){
        transform: translateY(3px);

    }
    .quiz:hover:nth-child(5n + 3){
        transform: translateY(3px);

    }
    .quiz:hover:nth-child(5n + 2){
        transform: translateY(3px);

    }
    .quiz:hover:nth-child(5n + 1){
        transform: translateY(0px);

    }
    .quiz input[type="checkbox"]{
        display: none;
    }
    .quiz .container{
        display:block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px; 
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
    .quiz .container input{
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }
    .quiz .container .checkmark{
        position: absolute;
        top: 0;
        left: 0;
        height: 30px;
        width: 30px;
        border:2px solid #f74343;
        border-radius: 10px;
    }
    .quiz .container:hover input ~ .checkmark{
        background: #f74343;
    }
    .quiz .container input:checked ~ .checkmark {
        background-color: #f74343;
    }
    .quiz .container .checkmark:after{
        content:'';
        position: absolute;
        display: none;
    }
    .quiz .container input:checked ~ .checkmark:after{
        display: block;
    }
    .quiz .container .checkmark:after {
        left: 9px;
        top: 5px;
        width: 10px;
        height: 20px;
        border: 2px solid #ffdda2;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }
    footer .row{
        color:#c7bcbc;
        padding:0px;
        font-size: 20px;
    }
    footer .row a:hover{
        color: #fff;
        font-size: 25px;
    }
    #myBtn{
        display: none;
        font-size: 50px;
        background: #fff;
        color: #000;
        width: 70px;
        height: 70px;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        position: fixed;
        /*text-align: center;*/
        border-radius: 30px;
        cursor: pointer;
    }
    #myBtn:hover{
        background-color: ; 
    }
    #popModal{
        background: rgba(0,0,0,0.6);
    }
    #popModal .modal-body{
        font-size: 15px;
        background: #6f6e6e;
        color:#fff;
        text-align: center;
    }
</style>
<body>
  

    <!-- Popup Modal -->
    <div id="popModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close h3" data-dismiss="modal" float="right">&times;</button>
            
          </div>
          <div class="modal-body">
                <h4 class="modal-title" class="font-weight-bold text-uppercase mb-4">Subscribe to our newsletter</h4><br>
                <p>Want to be notified when our article is published? Enter your email address and name below to be the first to know.</p>
               <div class="col-xs-12 col-md-12" class="text" style="border:2px solid #4a05a2; background:#4a05a2;padding-top: 50px;"><input type="email" name="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail"></div>
               <div class="col-xs-12 col-md-12 col-lg-12 mt-2"><button class="btn btn-block
                btn-danger waves-effect">SIGN UP</button></div>
               
          </div>
          </div>
        </div>
     
      </div>
    </div>

    <!-- If you have access to hmtl create a link with a class name -->
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-hand-o-up" aria-hidden="true"></i></button>
    

    <div>
    	<nav class="navbar navbar-dark indigo darken-2">
    			<a href="#" class="navbar-brand"><strong>Navbar</strong></a>
    			   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="#navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="animated-icon4">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
    			   	<!-- <span class="navbar-toggler-icon"></span> -->
    			   </button>
    			   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    			   	<ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a href="#" class="nav-link">Home<span class="sr-only">(current)</span></a>
                        </li>
    			   		<li class="nav-item">
    			   			<a href="#" class="nav-link">About</a>
    			   		</li>
    			   		<li class="nav-item">
    			   			<a href="#" class="nav-link">AptiQuiz</a>
    			   		</li>
    			   		<li class="nav-item">
    			   			<a href="#" class="nav-link">Career</a>
    			   		</li>
    			   		<li class="nav-item">
    			   			<a href="#" class="nav-link">Code Player</a>
    			   		</li>
    			   		<li class="nav-item">
    			   			<a href="#" class="nav-link">Contact Us</a>
    			   		</li>
    			   		<li class="nav-item">
    			   			<a href="#" class="nav-link">Contribute</a>
    			   		</li>
    			   		<li class="nav-item">
    			   			<a href="#" class="nav-link">Exams</a>
    			   		</li>
    			   		<li class="nav-item">
    			   			<a href="#" class="nav-link">Interviews</a>
    			   		</li>
    			   		<li class="nav-item">
    			   			<a href="#" class="nav-link">Registration</a>
    			   		</li>
    			   		<li class="nav-item">
    			   			<a href="#" class="nav-link">Shop</a>
    			   		</li>
    			   		<li class="nav-item">
    			   			<a href="#" class="nav-link">Stories</a>
    			   		</li>
    			   		<li class="nav-item">
    			   			<a href="#" class="nav-link">Team</a>
    			   		</li>
    			   		<li class="nav-item">
    			   			<a href="#" class="nav-link">Vedic Maths</a>
    			   		</li>
    			   		
    			   	</ul>
    			   	
    			   </div>
    	</nav>
    </div>

    <section>
    	<div class="container">
            <p class="text-center text-weight-bold h1" style="font-family: 'Montserrat Alternates', sans-serif;color: #fff;">Aptitude Quiz</p>
    		<div class="col-xs-12">
                <div class="quiz">A man can do a job in 15 days.His father takes 20 days and his son finishes it in 25 days.How long will they take to complete the job if they all work together?</div><br>
                <div class="quiz"><label class="container">Less than 6 days
                  <input type="checkbox" id="opt1" name="opt1" >
                  <span class="checkmark"></span>
                </label></div><br>
                <div class="quiz"><label class="container">Exactly 6 days.
                  <input type="checkbox" id="opt1" name="opt1" >
                  <span class="checkmark"></span>
                </label></div><br>
                <div class="quiz"><label class="container">Approximately 6.4 days.
                  <input type="checkbox" id="opt1" name="opt1" >
                  <span class="checkmark"></span>
                </label></div><br>
                <div class="quiz"><label class="container">More than 10 days.
                  <input type="checkbox" id="opt1" name="opt1" >
                  <span class="checkmark"></span>
                </label></div><br>
            </div>
    	</div>
    </section>
    <div>
        <!-- Footer -->
    	<footer class="page-footer font-small indigo pt-3">
            <!-- Footer links -->
            <div class="container text-center text-md-left">
                <!-- Grid row -->
                <div class="row">
                    <!-- grid column -->
                    <div class="col-md-4 col-lg-4 mr-auto my-md-4 my-0 mt-4 mb-1">
                        <!-- content -->
                        <h5 class="font-weight-bold text-uppercase mb-4">Subscribe to our newsletter</h5>
                        <p>Want to be notified when our article is published? Enter your email address and name below to be the first to know.</p>
                        <p><div class="text" style="border:2px solid #6f6e6e; background:#6f6e6e;padding-top: 10px;"><input type="email" name="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="megha123@gmail.com"></p>
                        <p><input type="email" name="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="Megha Priya"></p>
                        <p><button class="btn btn-block btn-danger waves-effect pt-3" name="signup">SIGN UP</button></p></div>
                    </div>

                    <div class="col-md-5 col-lg-5 mx-auto my-md-4 mt-4 mb-1">
                        <!-- links -->
                        <h5 class="font-weight-bold text-uppercase mb-4">Pages</h5>
                        <p><a href="#">About</a></p>
                        <p><a href="#">AptiQuiz</a></p>
                        <p><a href="#">IITJEE Practice Paper</a></p>
                        <p><a href="#">Career</a></p>
                        <p><a href="#">Code Player</a></p>
                        <p><a href="#">Contact Us</a></p>
                        <p><a href="#">Contribute</a></p>
                        <p><a href="#">Exams</a></p>
                        <p><a href="#">CLAT</a></p>
                        <p><a href="#">Engineering</a></p>
                        <p><a href="#">Coaching Institutes</a></p>
                        <p><a href="#">INDIAN INSTITUTE OF TECHNOLOGY</a></p>
                        <p><a href="#">Management</a></p>
                        <p><a href="#">Medical</a></p>
                        <p><a href="#">Interviews</a></p>
                        <p><a href="#">Accenture:Interview Questions And Tips</a></p>
                        <p><a href="#">Aricent: Interview Questions and Tips</a></p>
                        <p><a href="#">Cybage Software: Interview Questions and Tips</a></p>
                        <p><a href="#">Deloitte-Interview Questions and Tips</a></p>
                        <p><a href="#">High Radius: Interview Questions and Tips</a></p>
                        <p><a href="#">Infosys : Interview Questions And Tips</a></p>
                        <p><a href="#">Microsoft: Interview Questions and Tips</a></p>
                        <p><a href="#">Mphasis Interview Questions and Tips</a></p>
                        <p><a href="#">Robert Bosch: Interview Questions and Tips</a></p>
                        <p><a href="#">Shapoorji Pallonji – Interview Questions and Tips</a></p>
                        <p><a href="#">Wipro : Interview Tips And Questions</a></p>
                        <p><a href="#">Zentron Labs: Interview Questions and Tips</a></p>
                        <p><a href="#"Registration</a></p>
                        <p><a href="#">Shop</a></p>
                        <p><a href="#">Stories</a></p>
                        <p><a href="#">Team</a></p>
                        <p><a href="#">Vedic Maths</a></p>

                    </div>

                    <div class="col-md-3 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">
                        <h5 class="font-weight-bold text-uppercase mb-4">Product categories</h5>
                        <p><a href="#">Uncategorized</a></p>
                    </div>
                </div>
            </div>
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">
               <a href="#">EduFlick @ Copyright 2018 All Rights Reserved</a>
            </div>
            <!-- Copyright -->
            
        </footer>
    </div>


    <script>
    $(function() {  $("#popModal").modal('show'); });
    </script>

    <script>
        window.onscroll = function() {scrollFunction()};

        function scrollFunction(){
            if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            }
            else{
                document.getElementById("myBtn").style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>


    <script src="js/test.js"></script>
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