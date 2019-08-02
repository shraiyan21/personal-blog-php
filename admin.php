
<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
  
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
<h1 align="center">ADMIN PANEL</h1>

    <h4>

        <a href="admin.php#activitycontrol">Activity Control</a><br>

        <a href="homeadmin.php">Home Page Control</a> <br><br><br>        
    
    </h4>

<div class="row" style="margin-left:180px; margin-right:130px;" id="activitycontrol">
<div class="col-lg-6">
  <h2 align="center"><b>Activity Control:</h2>
<h3><u>Activity Page Image Upload: </u></h3>
<form action="file.php" method="post" enctype="multipart/form-data">

   <b> Select image to upload: <br><br> </b> <input type="file" name="fileToUpload" id="fileToUpload"><br>
    Image Title: <input type="text" name="imgname"><br> <br>
    Image Details: <textarea name="imagedetails" rows="3" cols="50" placeholder="Write your Image Details."></textarea><br> <br>
    <input type="submit" value="Upload Image" name="submit"><br><br>
</form>



  <h3><u>Activity Page Image Delete:</u></h3>
<form action="delete.php" method="post">

   <b> Image Title to Delete: <br><br> </b> <input type="text" name="imgtitle" placeholder="Write Exect title of Image"><br><br>
   <b> Image ID to Delete: <br><br> </b> <input type="number" name="imgid" placeholder="Write the Image ID"><br><br>
    
    
    <input type="submit" value="Delete Image" name="delete"><br><br>
</form>

</div>

<div class="col-lg-6">
<?php

      $DBconnect = mysqli_connect("localhost","root","","blog");
      /* if($DBconnect)
         {echo "<h1>DB CONNECTED</h1><br>";}*/
      echo "<h2> Images ID and Title List </h2>";
        $sql = "SELECT * FROM image";
 
        $result = $DBconnect->query($sql);

        

        if ($result->num_rows > 0) {
          // output data of each row
        while($row = $result->fetch_assoc()) {
     
        $id = $row["id"];
        $title = $row["imgname"];

        echo $id." <br> ".$title."<br><br>";

        }
      }
?>
</div>
</div>

<div class="row" style="margin-left:180px; margin-right:130px;">

  <div class="col-lg-6">
  <h2 align="center"><b>Home Page Control:</h2>
<h3><u>Home Profile Image Upload: </u></h3>
<form action="homeimage.php" method="post" enctype="multipart/form-data">

   <b> Select image to upload: <br><br> </b> <input type="file" name="homefile"><br>
    Image Title: <input type="text" name="imgname" placeholder="Short Title"><br> <br>
    Image Details: <textarea name="imagedetails" rows="3" cols="50" placeholder="Write your Image Details."></textarea><br> <br>
    <input type="submit" value="Upload Image" name="submit"><br><br>
</form>

  
</div>
<div class="col-lg-6">
  
</div>
</div>

</body>
</html>