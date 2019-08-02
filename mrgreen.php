<!DOCTYPE html>
<html lang="en">
<head>
 <title>MR Green</title>
  
<!--   Auto Refresh -->
  <meta http-equiv="refresh" content="600">

<!--   It is for carousel next button, or that kind of font or button like search, home, etc. -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
 


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link href="css.css" rel="stylesheet">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <style>
  body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
    position: relative; 
  }

  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
    background-color: #1abc9c; /* Green */
    color: #ffffff;
  }
  .bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
  }
  .bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
  }
  .bg-4 { 
    background-color: #2f2f2f; /* Black Gray */
    color: #fff;
  }
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
  }
  .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 16px bold;
    letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }
  
  </style>
</head>
<body  data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- Navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="mrgreen.php">Me</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#who">WHO</a></li>
        <li><a href="#what">WHAT</a></li>
        <li><a href="#where">WHERE</a></li>
        <li><a href="activity.php">ACTIVITY</a></li>
        <li><a href="cv.php">ABOUT ME</a></li>
      </ul>
    </div>
  </div>
</nav>


<!-- First Container -->
<div id="who" class="container-fluid bg-1 text-center">
  <h3 class="margin">Who Am I?</h3>
 <!--  Carousel -->

<div class="container" >  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="Pic-1.jpg" alt="Green is my Love" style="width:100%; height: 300px;">
      </div>

      <div class="item">
        <img src="nature-cover.jpg" alt="Green is my strength" style="width:100%; height: 300px;">
      </div>
    
      <div class="item">
        <img src="Green.jpg" alt="Green is all I need" style="width:100%; height: 300px;">
      </div>
      <div class="item">
        <img src="Green-Nature-Trees-l.jpg" alt="Green is all I need" style="width:100%; height: 300px;">
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
  <h3>I'm an adventurer. Love to see the world. Love to see people culture. Love to test different type of foods. Green is my LOVE. </h3>
</div>

<!-- Second Container -->
<div id="what" class="container-fluid bg-2 text-center">
  <h3 class="margin">What Am I?</h3>
  <p> I'm a lover, who loves all of the green nature. Fan of GOD, who created all of these things visible in front of me.<br>
      I also love to listen Music of Nature. Like, Waterfall, Waterflow, Wind blowing in Forest, Rain drops, etc.<br>
      I love to Read books. Mostly informative or comedy or thriller type books.<br>
  </p>
  <a href="#" class="btn btn-default btn-lg">
    <span class="glyphicon glyphicon-search"></span> Search
  </a>
</div>

<!-- Third Container (Grid) -->
<div id="where" class="container-fluid bg-3 text-center">    
  <h3 class="margin">Where To Find Me?</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <p></p>
      <img src="birds1.jpg" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p> This is a personal blog of <a href="https://www.facebook.com/shr0207" target="_blank">Shahadat Hossain</a></p> 
</footer>

</body>
</html>
