
<html lang="en">
<head>
  

  <?php
  /// Auto Restart Page after every 10 Sec
   $url=$_SERVER['REQUEST_URI'];
   header("Refresh: 600; URL=$url");
  ?>
  
  <title>My Activity</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
 
<style>

    .navbar-nav  li a:hover {
    color: #1abc9c !important;
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

.container {
  padding: 2px 16px;
}
</style>

</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
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
        <li><a href="mrgreen.php#who">WHO</a></li>
        <li><a href="mrgreen.php#what">WHAT</a></li>
        <li><a href="mrgreen.php#where">WHERE</a></li>
        <li><a href="activity.php">ACTIVITY</a></li>
        <li><a href="cv.php">ABOUT ME</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="row" style="margin-left:80px; margin-right:30px";>

	<?php

if(isset($_GET['id']))
{
	$DBconnect = mysqli_connect("localhost","root","","blog");

	//getting value from url and store it to a variable
	
	$ID = mysqli_real_escape_string($DBconnect, $_GET['id']);	

	// getting data according to that id
	  
	  $sql = "SELECT * FROM image WHERE id='$ID'";

	  	$result = $DBconnect->query($sql);

			if ($result->num_rows > 0) {
          // output data of each row
        while($row = $result->fetch_assoc()) {

        	$img = $row["img"];
        	$title = $row["imgname"];
        	$imagedetails = $row["imagedetails"];


        //	echo $img;

        	}
        }

}
else
{
	header('Location: activity.php');
}


?>
	

	<p><h1 align="center"><?php echo $title ; ?></h1></p>

	<div class="card" >
		<p align="center"><?php echo "<br><br><img src='$img' alt='$title' class='gallery' height='550px' width='520px' > <br>"; ?>
		</p>
	
		  <?php echo " <br><p> $imagedetails </p><br><br>"; ?>
	</div>



</div>
</body>
</html>