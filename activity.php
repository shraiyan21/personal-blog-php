<html lang="en">
<head>
  

  <?php
  /// Auto Restart Page after every 10 Sec
   $url=$_SERVER['REQUEST_URI'];
   header("Refresh: 600; URL=$url");
  ?>
  
  <title>My Activity</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>

<style>
img {
    max-width: 100%;
    height: auto;
}

#size{
  font-size: 18px;
  color: #00000;
  max-width: 33%;
  height: 500px;
}

  body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: #10000;
  }

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

#rcorners4 {
  border-radius: 15px;
  background: #73AD21;
  padding: 20px; 
  width: 200px;
  height: 150px; 
}

.div1 {
  background: white;
  width: 33%;
  height: 400px;
  border-top: 11px solid white ;
  border-left: 11px solid white;
  border-bottom: 11px solid white;
  border-right: 11px solid white;
  mousehover
}

a:link {
  color: black;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
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

<div style="margin-left:80px; margin-right:30px; ">

<div class="jumbotron">
  <div class="container text-center">
    <h1>My Portfolio</h1>      
    <p>Some Pictures that represent "Me"...</p>
  </div>
</div>

<!--  Image is showing here with Details -->

<div class="row well">
<?php
      $DBconnect = mysqli_connect("localhost","root","","blog");
      // if($DBconnect)
      //   {echo "<h1>DB CONNECTED</h1><br>";}
      
      // Images are collecting from DB

        $sql = "SELECT * FROM image";

      // Images details are inserting in result 
 
        $result = $DBconnect->query($sql);



if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo "id: " . $row["id"]. " img name: " . $row["imgname"]. " img address: " . $row["img"]. "<br>";
        $id = $row["id"];
        $title = $row["imgname"];
        $img = $row["img"];
        $imagedetails1 = $row["imagedetails"];

        
?>
            <!--           Now it will show the images with a dynamic url link  -->
                     <a href='activity2.php?id=<?php echo $id; ?>' target="_blank">                
                    <div class="card col-lg-4 div1">

                     <?php echo "<p align='center' border='1px'><img src='$img' alt='$title' width='50%'></p><br>"; 
                     ?>
                    
                      <?php 
                      echo "<h3 align='center'>$title</h3><br>"; 
                      ?>

                   
                    </div>
               </a>
      <?php      
        
        } 
      }
        else {
            echo "0 results";
        }


?>
</div>
 

<!-- Footer -->
<div class="row">
<footer class="container-fluid bg-4 text-center well">
  <p> This is a personal blog of <a href="https://www.facebook.com/shr0207" target="_blank">Shahadat Hossain</a></p> 
</footer>  
</div>

</body>
</html>