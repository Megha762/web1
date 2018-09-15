<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
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


    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat+Alternates">

  </head>
  <body>
      <!--Main Navigation-->
    <header>
    
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
              <a class="navbar-brand" href="#"><strong>Navbar</strong></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav mr-auto navbar-right">
                            <a class="nav-link" href="#">Become A Host <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Help</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="signin.php">Sign </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
                <div class="view">
                    <div class="container">
                      <div class="row">
                      <div class="col-md-7 col-sm-7 col-lg-7 pt-5">
                          <div class="white-text wow fadeInUp text-bottom">
                              <h3>Host a class/session on EduFlick</h3>
                          </div>
                          <!-- Default button -->
                          <button type="button" class="btn btn-default">Get Started</button>

                          <!--Blue-grey-->
                          <button type="button" class="btn btn-blue-grey">Learn More</button>
                      </div>

                      <div class="col-md-5 col-sm-5 col-lg-5">
                        <!-- Default form contact -->
                          <form class="border border-light p-2">

                              <p class="h4 mb-3 text-center">Search</p>


                              <!-- Where -->
                              <label>Where</label>
                              <select class="browser-default custom-select mb-2">
                                  <option value="" disabled>Feedback</option>
                                  <option value="1" selected>Anywhere</option>
                                  <option value="2">Report a bug</option>
                                  <option value="3">Feature request</option>
                                  <option value="4">Feature request</option>
                              </select>

                              <!-- Course -->
                              <label>Course</label>
                              <select class="browser-default custom-select mb-2">
                                  <option value="" disabled>Feedback</option>
                                  <option value="1" selected>IIT-JEE</option>
                                  <option value="2">Report a bug</option>
                                  <option value="3">Feature request</option>
                                  <option value="4">Feature request</option>
                              </select>

                              <!-- Where -->
                              <label>Batch</label>
                              <select class="browser-default custom-select mb-3">
                                  <option value="" disabled>Feedback</option>
                                  <option value="1" selected>2018-2019</option>
                                  <option value="2">Report a bug</option>
                                  <option value="3">Feature request</option>
                                  <option value="4">Feature request</option>
                              </select>


                              <!-- Search button -->
                              <button class="btn btn-info btn-block" type="submit">Search</button>

                          </form>
                          <!-- Default form contact -->
                      </div>
                      </div>
                    </div>
                </div>
            
    
    </header>
    <!--Main Navigation-->
    
    <!--Main Layout-->
    <main class="text-center py-5 mt-3">

        <div class="container">
            <div class="row">
                <div class="col-md-12 py-5">
                    <p class="text-center text-weight-bold h1" style="font-family: 'Montserrat Alternates', sans-serif;">What are EduFlick classes?</p>
                    <br>
                    <p align="justify" class="text-center">EduFlick classes are designed and led by local teachers of native/city.It's an opportunity for students to learn new things at an affordable rate and also in remote places.</p>

                </div>
            </div>
        </div>

        <hr>

        <div class="container">
            <div class="row my-5">
                <div class="col-md-6 col-sm-6 my-5">

                    <p align="justify text-center">Share your knowledge with the students.<br>
                      Introduce teachers and student to your classes.<br>
                      Implement and requirement with woay of teaching.</p>
                </div>

                <div class="col-md-6 col-sm-6">
                    <!--Carousel Wrapper-->
                    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->
                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="view">
                                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg" alt="First slide"
                                    height="350px" width="350px">
                                    <div class="mask rgba-black-light"></div>
                                </div>
                                <div class="carousel-caption">
                                    <h3 class="h3-responsive">Light mask</h3>
                                    <p>First text</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <!--Mask color-->
                                <div class="view">
                                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg" alt="Second slide" height="350px" width="350px">
                                    <div class="mask rgba-black-strong"></div>
                                </div>
                                <div class="carousel-caption">
                                    <h3 class="h3-responsive">Strong mask</h3>
                                    <p>Secondary text</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <!--Mask color-->
                                <div class="view">
                                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg" alt="Third slide" height="350px" width="350px">
                                    <div class="mask rgba-black-slight"></div>
                                </div>
                                <div class="carousel-caption">
                                    <h3 class="h3-responsive">Slight mask</h3>
                                    <p>Third text</p>
                                </div>
                            </div>
                        </div>
                        <!--/.Slides-->
                        <!--Controls-->
                        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <!--/.Controls-->
                    </div>
                    <!--/.Carousel Wrapper-->

                </div>
            </div>
        </div>
    


        <hr>


        <div class="container  py-4">
          <p class="text-center text-weight-bold h1" style="font-family: 'Montserrat Alternates', sans-serif;">Host on your terms</p>
            <div class="row py-5">
                
                <div class="col-md-6 col-sm-6">
                
                    <p align="justify">Set a schedule.</p>
                    <p align="justify">Pick your price.</p>
                    <p align="justify">Manage all the details.</p>
                </div>

                <div class="col-md-6 col-sm-6">
                    <img src="img/pexels-photo-207697.jpeg" class="img-fluid" alt="Responsive image" height="200px" width="350px" class="img-thumbnail">

                </div>
            </div>
        </div>
  
      <section id="start">
        <div class="container  py-4"> 
          <p class="text-center text-weight-bold h1" style="font-family: 'Montserrat Alternates', sans-serif;">How to get started?</p>
          <div class="row"> 
            
            <div class="col-md-4 col-sm-4   py-5"> 
              <div><i class="em em-one"></i> </div>
              <div>Learn what we're looking for</div>
            </div>

            <div class="col-md-4 col-sm-4  py-5"> 
              <div><i class="em em-two"></i> </div>
              <div>Create your experience page</div>
            </div>

            <div class="col-md-4 col-sm-4  py-5"> 
              <div><i class="em em-three"></i> </div>
              <div>Submit to Eduflick</div>
            </div>
          </div>
        </div>
      </section>



    </main>
    <!--Main Layout-->
    
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
